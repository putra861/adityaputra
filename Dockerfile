
# Tahap 1: Build frontend Laravel
FROM node:20-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# Tahap 2: Jalankan Laravel menggunakan PHP dan Apache
FROM php:8.2-apache

WORKDIR /var/www/html

# Instal ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libicu-dev \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl opcache \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*

# Salin Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Salin seluruh project Laravel
COPY . .

# Siapkan folder dan instal dependency Laravel
RUN mkdir -p storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R ug+rwx storage bootstrap/cache

# Salin hasil build frontend
COPY --from=frontend /app/public/build ./public/build

# Atur Apache agar menggunakan folder public Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" \
    /etc/apache2/sites-available/000-default.conf \
    && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
    && sed -ri 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf \
    && sed -ri 's/<VirtualHost \*:80>/<VirtualHost *:10000>/' \
    /etc/apache2/sites-available/000-default.conf

EXPOSE 10000

CMD ["apache2-foreground"]
