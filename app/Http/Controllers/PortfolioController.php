<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ganti semua data di bawah ini dengan data asli Anda.
        $profile = [
                'nama' => 'Aditya Putra Arruham',
                'inisial' => 'APA',
                'badge' => 'Mahasiswa Politeknik Negeri Jember',
                'subjudul' => 'Mendaki • Biliard • Hadroh • Touring',
                'kampus' => 'Politeknik Negeri Jember',
            'cerita' => [
                'Halo, perkenalkan, saya Aditya Putra Arruham, mahasiswa Politeknik Negeri Jember yang memiliki ketertarikan dalam bidang teknologi, pengembangan diri, serta pengalaman baru.

Saya merupakan pribadi yang senang mempelajari hal-hal baru, mengembangkan kemampuan, dan memperluas wawasan melalui pengalaman akademik maupun kegiatan di luar perkuliahan. Bagi saya, proses belajar tidak hanya berlangsung di dalam kelas, tetapi juga melalui interaksi, organisasi, dan berbagai aktivitas dalam kehidupan sehari-hari.

Di luar kegiatan akademik, saya memiliki beberapa hobi, seperti mendaki gunung, memodifikasi sepeda, bermain biliar, dan mengikuti kegiatan hadroh. Kegiatan tersebut menjadi sarana bagi saya untuk menjaga keseimbangan antara aktivitas akademik, kreativitas, dan kehidupan sosial.

Saya percaya bahwa setiap pengalaman merupakan kesempatan untuk berkembang, membangun karakter, serta meningkatkan kemampuan diri. Ke depannya, saya berharap dapat terus belajar, mengembangkan potensi, dan memberikan kontribusi positif melalui pengetahuan serta keterampilan yang saya miliki.

Terima kasih telah mengunjungi portofolio pribadi saya.!',
            ],
            'hobi' => ['⛰️ Mendaki', '🎱 Biliard', '🥁 Hadroh', '🏍️ Touring'],
                'telepon' => '+62 858 4208 5693',
                'wa' => '6285842085693',
                'email' => 'adityaputraarruham277@gmail.com',
                'alamat' => 'Kota, Provinsi',
                'sosmed' => '@adtyptra.aa',
            'ig' => 'adtyptra.aa',
            ];
        $chips = [
                'Komunikasi',
                'Kerja Tim',
                'Kreativitas',
            ];
        $pengalaman = [
            [
                'waktu' => 'PKL / Magang',
                'judul' => 'Praktik Kerja Lapangan',
                'tempat' => 'IT SMART Jember',
                'poin' => [
                    'Menata dan mendisplay barang di area toko.',
                    'Merakit PC langsung bersama tim.',
                    'Belajar bekerja sama dengan teman dan pembimbing selama PKL.',
                ],
                'foto' => [
                    ['file' => 'images/pkl/pkl-1.jpg', 'judul' => 'Pertemuan', 'cap' => 'Bersama tim dan pembimbing di area display toko IT SMART Jember.', 'pos' => '60% 50%'],
                    ['file' => 'images/pkl/pkl-2.jpg', 'judul' => 'Display barang', 'cap' => 'Merapikan dan mengemas barang sebelum didisplay.', 'pos' => '50% 60%'],
                    ['file' => 'images/pkl/pkl-3.jpg', 'judul' => 'Rakit PC', 'cap' => 'Merakit PC bersama teman-teman PKL.', 'pos' => '50% 60%'],
                    ['file' => 'images/pkl/pkl-4.jpg', 'judul' => 'Istirahat', 'cap' => 'Istirahat sejenak setelah seharian bekerja.', 'pos' => '40% 55%'],
                ],
            ],
          
        ];
        $pendidikan = [
                [
                    'jenjang' => 'SMK',
                    'sekolah' => 'SMK Negeri 6 Jember',
                    'ket' => 'Pendidikan menengah kejuruan di Jember.',
                    'tag' => ['SMK', 'Jember', 'Kejuruan'],
                    'gambar' => 'images/pendidikan/smk.jpg',
                    'video' => 'videos/kenangan-smk.mp4',
                ],
                [
                    'jenjang' => 'MTs',
                    'sekolah' => 'MTsN 8 Jember',
                    'ket' => 'Pendidikan menengah pertama berbasis madrasah di Jember.',
                    'tag' => ['MTs', 'Jember', 'Madrasah'],
                    'gambar' => 'images/pendidikan/mts.jpg',
                ],
            ];
        $hobi = [
            ['nama' => 'Hadroh', 'kat' => 'Seni & Musik', 'ket' => 'Memainkan rebana dan melantunkan shalawat bersama teman-teman, dari panggung ke panggung.', 'tag' => ['Hadroh', 'Rebana', 'Shalawat'], 'gambar' => 'images/hobi/hadroh.jpg', 'pos' => '50% 65%', 'video' => 'videos/hadroh.mp4'],
            ['nama' => 'Modifikasi Sepeda Motor', 'kat' => 'Otomotif', 'ket' => 'Merakit dan memodifikasi sepeda motor klasik agar tampil unik dan nyaman dipakai.', 'tag' => ['Modifikasi', 'Otomotif', 'Klasik'], 'gambar' => 'images/hobi/modif.jpg', 'pos' => '50% 62%', 'video' => 'videos/modif-sepeda.mp4'],
            ['nama' => 'Mendaki', 'kat' => 'Alam & Petualangan', 'ket' => 'Dari kaki gunung sampai puncak: capeknya sebentar, pemandangannya terbawa seumur hidup.', 'tag' => ['Mendaki', 'Gunung', 'Petualangan'], 'gambar' => 'images/kenangan/mendaki-2.jpg', 'pos' => '55% 82%', 'galeri' => 'mendaki'],
            ['nama' => 'Biliard', 'kat' => 'Olahraga & Hiburan', 'ket' => 'Satu pukulan, satu strategi. Biliard melatih fokus dan kesabaran.', 'tag' => ['Biliard', 'Fokus', 'Strategi'], 'gambar' => 'images/kenangan/biliard-2.jpg', 'pos' => '50% 49%', 'galeri' => 'biliard'],
        ];
        $galeri = [
            ['gambar' => 'images/galeri/mendaki.jpg', 'judul' => 'Mendaki', 'cap' => 'Capeknya sebentar, pemandangannya terbawa selamanya.', 'x' => 3, 'y' => 1, 'w' => 48, 'rot' => -5, 'z' => 2, 'pos' => '50% 85%'],
            ['gambar' => 'images/galeri/biliard.jpg', 'judul' => 'Biliard', 'cap' => 'Satu pukulan, satu strategi.', 'x' => 50, 'y' => 5, 'w' => 46, 'rot' => 4, 'z' => 3, 'pos' => '50% 50%'],
            ['gambar' => 'images/galeri/kenangan.jpg', 'judul' => 'Kenangan', 'cap' => 'Masa seragam yang masih terasa hangat.', 'x' => 1, 'y' => 47, 'w' => 38, 'rot' => 3, 'z' => 1, 'pos' => '50% 55%'],
            ['gambar' => 'images/galeri/santai.jpg', 'judul' => 'Santai', 'cap' => 'Rebahan juga bagian dari rencana.', 'x' => 33, 'y' => 40, 'w' => 36, 'rot' => -3, 'z' => 4, 'pos' => '50% 45%'],
            ['gambar' => 'images/galeri/gaya-bebas.jpg', 'judul' => 'Gaya Bebas', 'cap' => 'Kalau lagi iseng, filter pun jadi teman.', 'x' => 62, 'y' => 52, 'w' => 36, 'rot' => 6, 'z' => 2, 'pos' => '50% 30%'],
        ];
        $kenangan = [
            'mendaki' => [
                'ikon' => '⛰️',
                'nama' => 'Mendaki',
                'judul' => 'Kenangan Mendaki',
                'ket' => 'Dari kaki gunung sampai puncak, semuanya layak dikenang.',
                'items' => [
                    [
                        'tipe' => 'video',
                        'file' => 'videos/mendaki-sunrise.mp4',
                        'poster' => 'images/kenangan/poster-mendaki-sunrise.jpg',
                        'cap' => 'Menikmati matahari terbit dari ketinggian.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/mendaki-1.jpg',
                        'cap' => 'Mt. Gul Culan, 1.406 mdpl: senja di puncak.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/mendaki-2.jpg',
                        'cap' => 'Mt. Lemongan, 1.676 mdpl: di atas lautan awan.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/mendaki-3.jpg',
                        'cap' => 'Kabut tipis, pemandangan luas, semangat penuh.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/mendaki-4.jpg',
                        'cap' => 'Istirahat sejenak di tengah hutan.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/galeri/mendaki.jpg',
                        'cap' => 'Lereng gunung yang bikin betah.',
                    ],
                ],
            ],
            'biliard' => [
                'ikon' => '🎱',
                'nama' => 'Biliard',
                'judul' => 'Kenangan Biliard',
                'ket' => 'Satu meja, satu stik, banyak cerita seru.',
                'items' => [
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/biliard-1.jpg',
                        'cap' => 'Malam seru di Basecamp Billiard & Cafe.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/biliard-2.jpg',
                        'cap' => 'Satu bidikan, satu strategi.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/biliard-3.jpg',
                        'cap' => 'Fokus penuh sebelum menyodok bola.',
                    ],
                ],
            ],
            'hadroh' => [
                'ikon' => '🥁',
                'nama' => 'Hadroh',
                'judul' => 'Kenangan Hadroh',
                'ket' => 'Dari latihan sampai festival, bareng teman-teman seperjuangan.',
                'items' => [
                    [
                        'tipe' => 'video',
                        'file' => 'videos/hadroh.mp4',
                        'poster' => 'images/kenangan/poster-hadroh.jpg',
                        'cap' => 'Rebana menggema di atas panggung.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-1.jpg',
                        'cap' => 'Bersama tim di Festival Banjari Manggisan 2026 se-Jawa Timur.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-2.jpg',
                        'cap' => 'Santai sebelum tampil di Festival Banjari Manggisan.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-3.jpg',
                        'cap' => 'Festival Hadrah Al Habsy Jilid II.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-4.jpg',
                        'cap' => 'Istirahat bareng tim sambil menunggu giliran.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-5.jpg',
                        'cap' => 'Satu frame lagi, senyum tetap lebar.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-6.jpg',
                        'cap' => 'Tiga sahabat, satu gaya.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/hadroh-7.jpg',
                        'cap' => 'Gaya dulu sebelum tampil.',
                    ],
                ],
            ],
            'touring' => [
                'ikon' => '🏍️',
                'nama' => 'Touring',
                'judul' => 'Kenangan Touring',
                'ket' => 'Gas pelan, jalan terus, pulang membawa cerita.',
                'items' => [
                    [
                        'tipe' => 'video',
                        'file' => 'videos/touring-cb.mp4',
                        'poster' => 'images/kenangan/poster-touring-cb.jpg',
                        'cap' => 'Gas pelan, jalan terus.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/touring-1.jpg',
                        'cap' => 'Si biru klasik, siap menemani perjalanan.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/touring-2.jpg',
                        'cap' => 'CB 125 SE yang selalu siap jalan.',
                    ],
                    [
                        'tipe' => 'foto',
                        'file' => 'images/kenangan/touring-3.jpg',
                        'cap' => 'Singgah di gazebo dengan pemandangan perbukitan.',
                    ],
                    [
                        'tipe' => 'video',
                        'file' => 'videos/modif-sepeda.mp4',
                        'poster' => 'images/kenangan/poster-modif-sepeda.jpg',
                        'cap' => 'Isi bensin dulu sebelum lanjut jalan.',
                    ],
                ],
            ],
        ];
        $kenangan = array_map(function ($g) {
            $g['items'] = array_map(function ($it) {
                $it['src'] = asset($it['file']);
                if (!empty($it['poster'])) {
                    $it['poster'] = asset($it['poster']);
                }
                unset($it['file']);
                return $it;
            }, $g['items']);
            return $g;
        }, $kenangan);
$keahlian = [
    [
        'nama' => 'Web Development',
        'persen' => 75,
        'ket' => 'Mampu membuat dan mengembangkan website serta memahami dasar-dasar coding.',
    ],
    [
        'nama' => 'Desain Foto',
        'persen' => 80,
        'ket' => 'Mampu mengedit dan mendesain foto agar terlihat menarik dan kreatif.',
    ],
    [
        'nama' => 'Editing Video',
        'persen' => 75,
        'ket' => 'Mampu mengedit video untuk kebutuhan dokumentasi dan konten kreatif.',
    ],
    [
        'nama' => 'Microsoft Word',
        'persen' => 85,
        'ket' => 'Memahami pengolahan dokumen, pengetikan, dan pengaturan format dokumen.',
    ],
    [
        'nama' => 'Microsoft Excel',
        'persen' => 75,
        'ket' => 'Memahami pengolahan data, tabel, dan rumus dasar Excel.',
    ],
];
        $pklGal = [
            'ikon' => '💼',
            'nama' => 'PKL',
            'judul' => 'PKL di IT SMART Jember',
            'ket' => 'Momen-momen selama praktik kerja lapangan.',
            'items' => array_map(fn ($f) => ['tipe' => 'foto', 'src' => asset($f['file']), 'cap' => $f['judul'] . ': ' . $f['cap']], $pengalaman[0]['foto']),
        ];
        return view('portfolio', compact('profile', 'galeri', 'kenangan', 'pklGal', 'chips', 'pengalaman', 'keahlian', 'pendidikan', 'hobi'));
    }
}
