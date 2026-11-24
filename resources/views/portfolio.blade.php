<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $profile['nama'] }} - Portofolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<script>try{if(localStorage.getItem('tema')==='terang')document.documentElement.dataset.theme='light'}catch(e){}document.documentElement.classList.add('js')</script>
<style>
:root{--bg:#080a15;--tx:#f1f3fb;--mu:#9aa1b8;--card:rgba(255,255,255,.045);--bd:rgba(255,255,255,.09);--nav:rgba(14,17,32,.72);--g1:#1d3a9a;--g2:#6a1bb8;--cy:#38bdf8;--bl:#6366f1;--pk:#ec4899;--ease:cubic-bezier(.2,.7,.2,1);--h:'Space Grotesk',system-ui,sans-serif;--b:'Inter',system-ui,sans-serif}
[data-theme=light]{--bg:#f3f4fb;--tx:#151832;--mu:#5b6280;--card:#fff;--bd:rgba(30,40,100,.12);--nav:rgba(255,255,255,.8);--g1:#a9c0ff;--g2:#e0b8ff;--cy:#0284c7}
*{box-sizing:border-box;margin:0}
html{scroll-behavior:smooth;scroll-padding-top:100px}
body{font-family:var(--b);background:var(--bg);color:var(--tx);line-height:1.7;overflow-x:hidden;transition:background .5s,color .5s}
body::before,body::after{content:"";position:fixed;z-index:-1;border-radius:50%;pointer-events:none;will-change:transform;animation:drift 24s ease-in-out infinite alternate}
body::before{width:900px;height:900px;left:-450px;top:0;background:radial-gradient(closest-side,var(--g1),transparent)}
body::after{width:860px;height:860px;right:-430px;bottom:-200px;background:radial-gradient(closest-side,var(--g2),transparent);animation-delay:-10s}
@keyframes drift{to{transform:translate3d(70px,-50px,0)}}
a{color:inherit}
:focus-visible{outline:2px solid var(--cy);outline-offset:3px}
h1,h2,h3{font-family:var(--h);line-height:1.15}
.grad{background:linear-gradient(90deg,var(--cy),#a78bfa 55%,var(--pk));-webkit-background-clip:text;background-clip:text;color:transparent}
nav{position:fixed;z-index:30;top:20px;left:50%;transform:translateX(-50%);width:min(1140px,calc(100% - 32px));display:flex;align-items:center;justify-content:space-between;gap:16px;padding:14px 28px;background:var(--nav);backdrop-filter:blur(16px);border:1px solid var(--bd);border-radius:30px}
nav.sc{box-shadow:0 14px 40px -18px rgba(0,0,0,.6)}
nav b{font-family:var(--h);font-size:1.15rem;letter-spacing:.02em}
nav ul{list-style:none;padding:0;display:flex;align-items:center;gap:4px;overflow-x:auto;scrollbar-width:none}
nav ul a{position:relative;display:block;padding:4px 12px;text-decoration:none;font-size:.92rem;color:var(--mu);white-space:nowrap;transition:color .3s}
nav ul a::after{content:"";position:absolute;left:50%;bottom:-6px;width:5px;height:5px;margin-left:-2.5px;border-radius:50%;background:var(--pk);transform:scale(0);transition:transform .4s var(--ease)}
nav ul a:hover,nav ul a.on{color:var(--tx)}
nav ul a.on::after{transform:scale(1)}
#tema{flex:none;width:34px;height:34px;display:grid;place-items:center;border:0;border-radius:50%;background:transparent;color:var(--tx);cursor:pointer;transition:transform .5s var(--ease)}
#tema:hover{transform:rotate(25deg) scale(1.1)}
.wrap{max-width:1080px;margin:auto;padding:0 24px}
.up{opacity:0;transform:translateY(24px);animation:up .9s var(--ease) forwards;animation-delay:var(--d,0s)}
@keyframes up{to{opacity:1;transform:none}}
#home .wrap{display:grid;grid-template-columns:1.15fr 1fr;gap:56px;align-items:center;min-height:100vh;padding-top:110px;padding-bottom:50px}
.badge{display:inline-block;padding:8px 20px;border-radius:14px;background:rgba(56,189,248,.12);color:var(--cy);font-family:var(--h);font-weight:600;font-size:1.15rem}
#home h1{margin:22px 0 14px;font-size:clamp(2.4rem,5.6vw,4.3rem);font-weight:700}
#home h1 span{display:block}
.sub{color:var(--mu);letter-spacing:.04em;font-size:1.05rem}
.btns{display:flex;gap:14px;flex-wrap:wrap;margin:34px 0 30px}
.btn{display:inline-flex;align-items:center;gap:10px;padding:14px 28px;border-radius:99px;font-family:var(--h);font-weight:600;text-decoration:none;transition:transform .4s var(--ease),box-shadow .4s}
.btn:hover{transform:translateY(-3px)}
.pri{background:linear-gradient(90deg,#4f46e5,#7c3aed);color:#fff;box-shadow:0 12px 30px -10px #6d4aff}
.pri svg{transition:transform .4s var(--ease)}.pri:hover svg{transform:translateX(5px)}
.out{border:1.5px solid var(--bl);color:var(--tx)}
.out:hover{background:rgba(99,102,241,.15)}
.chips{display:flex;gap:12px;flex-wrap:wrap}
.chip{display:inline-flex;align-items:center;gap:9px;padding:12px 20px;border-radius:14px;background:var(--card);border:1px solid var(--bd);font-family:var(--h);font-weight:500;font-size:.95rem}
.chip i{width:8px;height:8px;border-radius:50%;background:var(--pk)}
.photo{position:relative;justify-self:center;width:min(100%,360px);perspective:900px}
.photo::before{content:"";position:absolute;inset:-30px;background:radial-gradient(closest-side,rgba(236,72,153,.35),transparent);z-index:-1}
.mv{will-change:transform}
.tilt{position:relative;transform:rotate(3deg);animation:float 7s ease-in-out infinite;will-change:transform}
@keyframes float{50%{transform:rotate(3deg) translate3d(0,-14px,0)}}
.tilt img{display:block;width:100%;aspect-ratio:3/4;object-fit:cover;object-position:top;border-radius:30px;border:1px solid var(--bd);box-shadow:0 30px 60px -20px rgba(0,0,0,.6)}
.tilt .ghost{position:absolute;inset:0;transform:translate(-36px,16px) scale(.96);opacity:.22;z-index:-1;animation:ghost 6s ease-in-out infinite alternate}
@keyframes ghost{to{transform:translate3d(-18px,8px,0) scale(.97)}}
section{padding:100px 0}
.title{text-align:center;margin-bottom:56px}
.title h2{font-size:clamp(2rem,4.5vw,3rem);font-weight:700}
.title p{color:var(--mu);margin-top:8px}
.js .rv{opacity:0;transform:translateY(32px);transition:opacity .8s var(--ease),transform .8s var(--ease);transition-delay:calc(var(--i,0)*.1s)}
.js .rv.in{opacity:1;transform:none}
.js .rv.done{transition:transform .5s var(--ease),border-color .4s;transition-delay:0s}
.card{background:var(--card);border:1px solid var(--bd);border-radius:22px;padding:28px;transition:transform .5s var(--ease),border-color .4s}
.card:hover,.js .rv.done.card:hover{transform:translate3d(0,-6px,0);border-color:rgba(124,92,255,.5)}
.about{max-width:780px;margin:auto;display:grid;gap:18px}
.about>p{font-size:1.15rem}
.facts{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.facts .card{padding:20px}
.facts small{color:var(--mu);display:block}
.facts b{font-family:var(--h);font-size:1.05rem}
.tl{position:relative;max-width:760px;margin:auto;padding-left:44px;display:grid;gap:34px}
.tl::before{content:"";position:absolute;left:6px;top:10px;bottom:10px;width:2px;background:linear-gradient(var(--bl),#a21caf);transform:scaleY(0);transform-origin:top;transition:transform 1.6s var(--ease)}
.tl.in::before{transform:scaleY(1)}
.tl .item{position:relative}
.tl .item::before{content:"";position:absolute;left:-46px;top:30px;width:14px;height:14px;border-radius:50%;background:#9ca3af;transform:scale(0);transition:transform .6s var(--ease);transition-delay:calc(.3s + var(--i,0)*.25s)}
.tl .item:first-child::before{background:var(--pk);box-shadow:0 0 14px var(--pk)}
.tl.in .item::before{transform:scale(1)}
.tl small{color:var(--cy);font-weight:600}
.tl h3{font-size:1.15rem;margin:6px 0 2px;text-transform:uppercase;letter-spacing:.01em}
.tl .sb{color:#818cf8;margin-bottom:12px}
.tl ul{padding-left:20px;color:var(--mu)}
.skills{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;max-width:880px;margin:auto}
.skills h3{font-size:1.35rem;margin-bottom:6px;background:linear-gradient(90deg,var(--tx),var(--cy));-webkit-background-clip:text;background-clip:text;color:transparent}
.skills p{color:var(--mu)}
.certs{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:18px;max-width:720px;margin:auto}
.certs h3{font-size:1.15rem;margin:10px 0 4px}
.certs p{color:var(--mu)}
.cert{display:block;width:100%;text-align:left;font:inherit;color:inherit;cursor:pointer}
.cert .lihat{display:inline-block;margin-top:14px;color:var(--cy);font-family:var(--h);font-weight:600;font-size:.9rem}
.cert .lihat::after{content:" \2192";display:inline-block;transition:transform .4s var(--ease)}
.cert:hover .lihat::after{transform:translateX(5px)}
.modal{position:fixed;inset:0;z-index:50;display:grid;place-items:center;padding:20px;background:rgba(5,6,14,.8);opacity:0;visibility:hidden;transition:opacity .35s var(--ease),visibility 0s .35s}
.modal.open{opacity:1;visibility:visible;transition:opacity .35s var(--ease)}
.mbox{position:relative;width:min(900px,100%);max-height:calc(100vh - 40px);overflow:auto;display:grid;grid-template-columns:1.1fr 1fr;background:var(--bg);border:1px solid var(--bd);border-radius:26px;transform:translate3d(0,30px,0) scale(.96);transition:transform .5s var(--ease)}
.modal.open .mbox{transform:none}
.mc{padding:20px}
.mc{display:grid;place-items:center}
.mc video{display:block;height:min(72vh,720px);width:auto;max-width:100%;aspect-ratio:9/16;object-fit:contain;background:#000;border-radius:18px}
.mi{padding:40px 28px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;gap:8px}
.mi .ic{width:64px;height:64px;font-size:1.8rem;margin-bottom:6px}
.mi h3{font-size:1.6rem}
.mi p{color:var(--mu)}
.x{position:absolute;top:12px;right:12px;width:38px;height:38px;border:0;border-radius:50%;background:var(--card);color:var(--tx);font-size:1.3rem;cursor:pointer;z-index:2}
.edu{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;max-width:860px;margin:auto}
.ecard{padding:14px;display:flex;flex-direction:column}
.pic{overflow:hidden;border-radius:16px}
.pic img{display:block;width:100%;height:210px;object-fit:cover;transition:transform .8s var(--ease)}
.ecard:hover .pic img{transform:scale(1.06)}
.eb{padding:22px 12px 12px;display:flex;flex-direction:column;flex:1}
.kat{color:var(--pk);font-size:.78rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase}
.eb h3{font-size:1.45rem;margin:8px 0 10px}
.eb p{color:var(--mu)}
.tags{display:flex;flex-wrap:wrap;gap:10px;margin:18px 0 22px}
.tags span{padding:7px 16px;border-radius:99px;background:rgba(99,102,241,.16);font-size:.85rem;font-weight:500}
.det,.detg{margin-top:auto;padding:13px;border:1.5px solid var(--bl);border-radius:99px;background:transparent;color:var(--tx);font-family:var(--h);font-weight:600;font-size:1rem;cursor:pointer;transition:background .3s,transform .4s var(--ease)}
.det:hover,.detg:hover{background:rgba(99,102,241,.18);transform:translateY(-2px)}
.mc img{display:block;width:100%;max-height:72vh;aspect-ratio:4/3;object-fit:cover;border-radius:18px}
.mi .tags{justify-content:center;margin:10px 0}
.mc img[hidden],.mc video[hidden]{display:none}
#dvid{height:auto;width:100%;max-width:100%;aspect-ratio:4/3;max-height:72vh;object-fit:contain;background:#000;border-radius:18px}
#dvid.v{width:auto;height:min(72vh,720px);aspect-ratio:9/16}
.tg{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;max-width:1040px;margin:auto}
.gl{position:relative;width:100%;aspect-ratio:1/1.15}
.gl .g{position:absolute;padding:0;border:1px solid var(--bd);border-radius:20px;overflow:hidden;background:var(--card);cursor:zoom-in;opacity:0;transform:translate3d(0,50px,0) rotate(0) scale(.9);transition:transform 1s var(--ease),opacity .8s var(--ease);transition-delay:calc(var(--i)*.13s);box-shadow:0 24px 50px -24px rgba(0,0,0,.7);will-change:transform}
.gl .g img{display:block;width:100%;aspect-ratio:4/5;object-fit:cover}
.gl.in .g{opacity:1;transform:rotate(var(--r))}
.gl.done .g{transition:transform .5s var(--ease);transition-delay:0s}
.gl.done .g:hover,.gl.done .g:focus-visible{transform:rotate(0) scale(1.07);z-index:20!important}
.gcap{position:absolute;inset:auto 0 0;padding:26px 12px 10px;background:linear-gradient(transparent,rgba(5,6,14,.85));color:#fff;font-family:var(--h);font-weight:600;font-size:.9rem;text-align:left;opacity:0;transform:translateY(8px);transition:opacity .4s,transform .5s var(--ease)}
.g:hover .gcap,.g:focus-visible .gcap{opacity:1;transform:none}
.eyebrow{color:var(--cy);font-family:var(--h);font-weight:600;letter-spacing:.04em}
.ab h3{font-size:clamp(1.8rem,3.6vw,2.6rem);margin:10px 0 18px;font-weight:700}
.ab p{color:var(--mu);margin-bottom:14px;font-size:1.04rem}
.hb{display:flex;flex-wrap:wrap;gap:10px;margin:22px 0}
.hb span{padding:9px 18px;border-radius:99px;background:var(--card);border:1px solid var(--bd);font-family:var(--h);font-weight:500;opacity:0;transform:scale(.8);transition:opacity .6s var(--ease),transform .7s var(--ease);transition-delay:calc(.5s + var(--i)*.1s)}
.ab.in .hb span{opacity:1;transform:none}
.f2{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:6px}
.f2 .card{padding:18px}.f2 small{color:var(--mu);display:block}.f2 b{font-family:var(--h)}
.lb{position:relative;width:min(560px,100%);background:var(--bg);border:1px solid var(--bd);border-radius:24px;padding:14px;transform:translate3d(0,30px,0) scale(.96);transition:transform .5s var(--ease)}
.modal.open .lb{transform:none}
.lb img{display:block;width:100%;max-height:74vh;object-fit:contain;border-radius:14px}
.lb .lc{padding:14px 8px 4px;text-align:center}
.lb .lc b{font-family:var(--h);font-size:1.25rem;display:block}
.lb .lc span{color:var(--mu)}
#petir{position:fixed;inset:0;width:100%;height:100%;z-index:-1;pointer-events:none}
.rig{position:relative;isolation:isolate;justify-self:center;align-self:start;width:340px;height:690px;margin-top:-110px;--sl:150px;cursor:grab;touch-action:pan-y;user-select:none;-webkit-user-select:none;animation:fi 1s .2s both}
@keyframes fi{from{opacity:0}to{opacity:1}}
.rig:active{cursor:grabbing}
.rig::before{content:"";position:absolute;left:50%;top:58%;width:380px;height:380px;margin:-190px;background:radial-gradient(closest-side,rgba(236,72,153,.26),transparent);z-index:-1;pointer-events:none}
#s1{position:absolute;left:50%;top:0;width:0;height:0;transform-origin:50% 0;will-change:transform}
.strap{position:absolute;left:-15px;top:-6px;width:30px;height:calc(var(--sl) + 6px);background:linear-gradient(90deg,#3730a3,#6d28d9 50%,#3730a3);box-shadow:inset 0 0 0 1px rgba(255,255,255,.14),0 8px 18px -8px rgba(0,0,0,.7);overflow:hidden;display:grid;place-items:center}
.strap::before,.strap::after{content:"";position:absolute;top:0;bottom:0;width:2px;background:rgba(255,255,255,.2)}
.strap::before{left:3px}.strap::after{right:3px}
.strap span{writing-mode:vertical-rl;transform:rotate(180deg);font:600 9px var(--h);letter-spacing:.26em;color:rgba(255,255,255,.55);white-space:nowrap}
#s2{position:absolute;left:0;top:var(--sl);width:0;height:0;transform-origin:50% 0;will-change:transform}
.hook{position:absolute;z-index:3;left:-12px;top:-8px;width:24px;height:60px;border-radius:8px 8px 5px 5px;background:linear-gradient(100deg,#f3f4f6,#9ca3af 40%,#e5e7eb 62%,#6b7280);box-shadow:0 5px 10px rgba(0,0,0,.55)}
.hook::after{content:"";position:absolute;left:7px;top:9px;width:10px;height:10px;border-radius:50%;background:#14162a;box-shadow:inset 0 1px 2px #000}
.idcard{position:absolute;z-index:1;left:-150px;top:24px;width:300px;padding:14px 14px 18px;border-radius:24px;overflow:hidden;background:linear-gradient(160deg,#1e2240,#0c0e1e);border:1px solid rgba(255,255,255,.15);box-shadow:0 44px 60px -28px rgba(0,0,0,.9),inset 0 1px 0 rgba(255,255,255,.14);transform:perspective(900px)}
.slot{width:64px;height:9px;margin:8px auto 12px;border-radius:99px;background:#05060e;box-shadow:inset 0 1px 3px #000,0 1px 0 rgba(255,255,255,.14)}
.idh{display:flex;justify-content:space-between;padding:0 4px 10px;font:600 .64rem var(--h);letter-spacing:.2em;text-transform:uppercase;color:#38bdf8}
.idp img{display:block;width:100%;aspect-ratio:4/4.2;object-fit:cover;object-position:top;border-radius:16px;pointer-events:none}
.idn{padding:14px 4px 0}
.idn b{display:block;font:700 1.35rem/1.15 var(--h);color:#fff}
.idn span{display:block;margin-top:4px;color:#a8aec9;font-size:.85rem}
.idf{display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding:0 4px}
.bar{display:block;height:22px;flex:1;margin-right:14px;border-radius:2px;opacity:.75;background:repeating-linear-gradient(90deg,#e8eaff 0 2px,transparent 2px 4px,#e8eaff 4px 5px,transparent 5px 8px,#e8eaff 8px 11px,transparent 11px 13px)}
.idf em{font:700 .95rem var(--h);font-style:normal;background:linear-gradient(90deg,#38bdf8,#ec4899);-webkit-background-clip:text;background-clip:text;color:transparent}
.holo{position:absolute;inset:0;pointer-events:none;mix-blend-mode:screen;background:linear-gradient(115deg,transparent 30%,rgba(255,255,255,.15) 45%,rgba(167,139,250,.22) 52%,transparent 66%);background-size:260% 100%;background-position:var(--hp,50%) 0}
.hint{color:var(--mu);font-size:.9rem;margin:-6px 0 18px}
.hb button{display:inline-flex;align-items:center;gap:8px;padding:10px 18px;border-radius:99px;background:var(--card);border:1px solid var(--bd);color:var(--tx);font:500 1rem var(--h);cursor:pointer;opacity:0;transform:scale(.8);transition:opacity .6s var(--ease),transform .7s var(--ease),border-color .3s,background .3s;transition-delay:calc(.5s + var(--i)*.1s)}
.ab.in .hb button{opacity:1;transform:none}
.ab.done .hb button{transition:transform .4s var(--ease),border-color .3s,background .3s;transition-delay:0s}
.ab.in .hb button:hover{transform:translateY(-3px);border-color:var(--cy);background:rgba(56,189,248,.1)}
.hb button i{font-style:normal;color:var(--cy);transition:transform .4s var(--ease)}
.hb button:hover i{transform:translateX(4px)}
.kbox{position:relative;width:min(980px,100%);max-height:calc(100vh - 32px);overflow:auto;background:var(--bg);border:1px solid var(--bd);border-radius:26px;padding:22px 22px 18px;transform:translate3d(0,30px,0) scale(.96);transition:transform .5s var(--ease)}
.modal.open .kbox{transform:none}
.kh{display:flex;align-items:center;gap:14px;margin:0 46px 16px 4px}
.kic{width:52px;height:52px;flex:none;border-radius:16px;display:grid;place-items:center;font-size:1.6rem;background:linear-gradient(135deg,#4f46e5,#9333ea)}
.kh h3{font-size:1.5rem}.kh p{color:var(--mu);font-size:.92rem;line-height:1.4}
.kst{position:relative;display:grid;place-items:center;height:min(60vh,560px);border-radius:20px;overflow:hidden;background:radial-gradient(circle at 50% 40%,rgba(99,102,241,.18),rgba(0,0,0,.6))}
.kmedia{width:100%;height:100%;display:grid;place-items:center}
.kmedia img,.kmedia video{max-width:100%;max-height:min(60vh,560px);object-fit:contain;animation:kin .6s var(--ease)}
@keyframes kin{from{opacity:0;transform:scale(.97)}to{opacity:1;transform:none}}
.kn{position:absolute;top:50%;margin-top:-22px;width:44px;height:44px;border:0;border-radius:50%;background:rgba(8,10,21,.62);color:#fff;font-size:1.7rem;line-height:1;cursor:pointer;z-index:2;transition:background .3s,transform .4s var(--ease)}
.kn:hover{background:rgba(99,102,241,.85);transform:scale(1.08)}
.kn.p{left:12px}.kn.q{right:12px}
.kcap{text-align:center;margin-top:12px;min-height:1.7em;font-weight:500}
.kth{display:flex;gap:10px;overflow-x:auto;padding:14px 2px 4px;scrollbar-width:thin}
.kth button{position:relative;flex:none;width:74px;height:74px;padding:0;border:2px solid transparent;border-radius:14px;overflow:hidden;cursor:pointer;opacity:.55;background:#000;transition:opacity .3s,transform .4s var(--ease),border-color .3s}
.kth button img{display:block;width:100%;height:100%;object-fit:cover}
.kth button.on{opacity:1;border-color:var(--cy);transform:translateY(-3px)}
.kth button:hover{opacity:1}
.kth .pl{position:absolute;inset:0;display:grid;place-items:center;color:#fff;font-size:1.1rem;background:rgba(0,0,0,.38)}
.pkl-h{margin-top:22px;color:var(--cy);font:600 .78rem var(--h);letter-spacing:.12em;text-transform:uppercase}
.pkl{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-top:12px;align-items:start}
.pf{display:block;padding:0;background:none;border:0;text-align:left;color:inherit;font:inherit;cursor:pointer}
.pf .pi{display:block;overflow:hidden;border-radius:14px;border:1px solid var(--bd)}
.pf img{display:block;width:100%;aspect-ratio:4/5;object-fit:cover;transition:transform .7s var(--ease)}
.pf:hover img{transform:scale(1.07)}
.pf b{display:block;margin-top:8px;font:600 .9rem var(--h);color:var(--tx)}
.tl .pf small{display:block;margin-top:2px;color:var(--mu);font-size:.78rem;font-weight:400;line-height:1.4}
.kp{margin:0 auto 56px;width:min(100%,290px)}
.kp .tilt{transform:rotate(-3deg);animation-name:floatk}
.kp .tilt img{aspect-ratio:4/5;object-position:center 60%}
.kp .tilt .ghost{transform:translate(34px,16px) scale(.96);animation-name:ghostk}
@keyframes floatk{50%{transform:rotate(-3deg) translate3d(0,-12px,0)}}
@keyframes ghostk{to{transform:translate3d(18px,8px,0) scale(.97)}}
.ic{flex:none;width:48px;height:48px;border-radius:50%;display:grid;place-items:center;background:linear-gradient(135deg,#4f46e5,#9333ea);color:#fff;font-weight:700}
.contact{display:grid;grid-template-columns:1fr 1fr;gap:36px;max-width:1000px;margin:auto}
.contact>div>p{margin-bottom:22px;font-weight:500}
.ci{display:flex;align-items:center;gap:18px;margin-bottom:16px;padding:20px;text-decoration:none}
.ci b{font-family:var(--h);display:block}
.ci span{color:var(--mu)}
form.card{display:grid;gap:8px;padding:30px}
label{font-family:var(--h);font-weight:600;margin-top:8px}
input,textarea{width:100%;padding:14px 16px;border-radius:12px;border:1px solid var(--bd);background:rgba(127,127,160,.1);color:var(--tx);font:inherit;transition:border-color .3s,box-shadow .3s}
input:focus,textarea:focus{outline:0;border-color:var(--bl);box-shadow:0 0 0 3px rgba(99,102,241,.25)}
textarea{min-height:110px;resize:vertical}
form button{margin-top:16px;padding:14px;border:0;border-radius:99px;cursor:pointer;color:#fff;font-family:var(--h);font-weight:600;background:linear-gradient(90deg,#4f46e5,#7e22ce);box-shadow:0 12px 30px -12px #7c3aed;transition:transform .4s var(--ease)}
form button:hover{transform:translateY(-3px)}
footer{text-align:center;padding:30px;color:var(--mu);font-size:.9rem}
@media(max-width:820px){.rig{order:-1;margin-top:-120px;height:560px;transform:scale(.86);transform-origin:50% 0;margin-bottom:-80px}.mbox{grid-template-columns:1fr}.mc video{height:55vh}.edu{grid-template-columns:1fr}#dvid.v{height:55vh}.tg{grid-template-columns:1fr;gap:40px}.gl{max-width:430px;margin:auto}.kbox{padding:14px}.pkl{grid-template-columns:repeat(2,1fr)}.kst{height:54vh}.kmedia img,.kmedia video{max-height:54vh}#home .wrap{grid-template-columns:1fr;gap:30px;padding-top:120px}.photo{order:-1;width:230px}.skills,.contact,.facts{grid-template-columns:1fr}nav{padding:12px 18px}nav b{display:none}section{padding:70px 0}}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:.01ms!important;animation-delay:0s!important;animation-iteration-count:1!important;transition-duration:.01ms!important;transition-delay:0s!important}html{scroll-behavior:auto}}
</style>
</head>
<body>
<canvas id="petir" aria-hidden="true"></canvas>
<nav id="nav"><b>{{ $profile['inisial'] }}</b>
<ul id="menu">
<li><a href="#home">Home</a></li><li><a href="#tentang">Tentang</a></li><li><a href="#pengalaman">Pengalaman</a></li><li><a href="#keahlian">Keahlian</a></li><li><a href="#pendidikan">Pendidikan</a></li><li><a href="#hobi">Hobi</a></li><li><a href="#kontak">Kontak</a></li>
</ul>
<button id="tema" aria-label="Ganti tema"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg></button></nav>

<header id="home"><div class="wrap">
<div>
<span class="badge up" style="--d:.1s">{{ $profile['badge'] }}</span>
<h1 class="up" style="--d:.25s"><span>Halo, saya</span><span class="grad">{{ $profile['nama'] }}</span></h1>
<p class="sub up" style="--d:.4s">{{ $profile['subjudul'] }}</p>
<div class="btns up" style="--d:.55s"><a class="btn pri" href="#pengalaman">Lihat Pengalaman <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn out" href="#kontak">Hubungi Saya</a></div>
<div class="chips up" style="--d:.7s">
@foreach($chips as $c)
<span class="chip"><i></i>{{ $c }}</span>
@endforeach
</div></div>
<div class="rig" id="rig" aria-label="Kartu ID {{ $profile['nama'] }}">
<div id="s1"><div class="strap"><span>{{ strtoupper($profile['nama']) }} &bull; {{ strtoupper($profile['kampus']) }} &bull; {{ strtoupper($profile['nama']) }} &bull; {{ strtoupper($profile['kampus']) }} &bull; {{ strtoupper($profile['nama']) }} &bull; {{ strtoupper($profile['kampus']) }}</span></div>
<div id="s2"><div class="hook"></div>
<div class="idcard" id="idcard"><div class="slot"></div>
<div class="idh"><span>ID Card</span><span>Mahasiswa</span></div>
<div class="idp"><img src="{{ asset('images/foto.jpg') }}" alt="Foto {{ $profile['nama'] }}" draggable="false"></div>
<div class="idn"><b>{{ $profile['nama'] }}</b><span>{{ $profile['kampus'] }}</span></div>
<div class="idf"><i class="bar"></i><em>{{ $profile['inisial'] }}</em></div>
<div class="holo"></div></div></div></div></div>
</div></header>

<section id="tentang"><div class="wrap">
<div class="title rv"><h2>Tentang Saya</h2><p>Sedikit cerita tentang saya</p></div>
<div class="tg">
<div class="gl rv" id="gl">
@foreach($galeri as $g)
<button type="button" class="g" style="--i:{{ $loop->index }};--r:{{ $g['rot'] }}deg;left:{{ $g['x'] }}%;top:{{ $g['y'] }}%;width:{{ $g['w'] }}%;z-index:{{ $g['z'] }}" data-cap="{{ $g['cap'] }}"><img src="{{ asset($g['gambar']) }}" alt="{{ $g['judul'] }}" style="object-position:{{ $g['pos'] }}" loading="lazy"><span class="gcap">{{ $g['judul'] }}</span></button>
@endforeach
</div>
<div class="ab rv" style="--i:1">
<span class="eyebrow">Kenalan dulu, yuk &#128075;</span>
<h3>Mahasiswa yang memiliki hobi <span class="grad">Mendaki</span>, <span class="grad">Modif sepeda</span>, dan  <span class="grad">Hadroh</span>.</h3>
@foreach($profile['cerita'] as $p)
<p>{{ $p }}</p>
@endforeach
<div class="hb">
@foreach($kenangan as $k => $g)
<button type="button" style="--i:{{ $loop->index }}" data-g="{{ $k }}">{{ $g['ikon'] }} {{ $g['nama'] }} <i>&#8250;</i></button>
@endforeach
</div>
<p class="hint">Tekan salah satu hobi untuk melihat foto dan video kenangan saya.</p>
<div class="f2"><div class="card"><small>Nama</small><b>{{ $profile['nama'] }}</b></div><div class="card"><small>Kampus</small><b>{{ $profile['kampus'] }}</b></div></div>
</div></div></div></section>

<section id="pengalaman"><div class="wrap">
<div class="title rv"><h2>Pengalaman</h2><p>Perjalanan dan kontribusi saya</p></div>
<div class="tl rv">
@foreach($pengalaman as $p)
<div class="item card" style="--i:{{ $loop->index }}"><small>{{ $p['waktu'] }}</small><h3>{{ $p['judul'] }}</h3><div class="sb">{{ $p['tempat'] }}</div><ul>
@foreach($p['poin'] as $b)
<li>{{ $b }}</li>
@endforeach
</ul>
@if(!empty($p['foto']))
<div class="pkl-h">Momen PKL, tekan untuk melihat</div>
<div class="pkl">
@foreach($p['foto'] as $f)
<button type="button" class="pf" data-g="pkl" data-i="{{ $loop->index }}"><span class="pi"><img src="{{ asset($f['file']) }}" alt="{{ $f['judul'] }}" style="object-position:{{ $f['pos'] }}" loading="lazy"></span><b>{{ $f['judul'] }}</b><small>{{ $f['cap'] }}</small></button>
@endforeach
</div>
@endif
</div>
@endforeach
</div></div></section>

<section id="keahlian"><div class="wrap">
<div class="title rv"><h2>Keahlian</h2><p>Hal-hal yang saya kuasai</p></div>
<div class="skills">
@foreach($keahlian as $k)
<div class="card rv" style="--i:{{ $loop->index }}"><h3>{{ $k['nama'] }}</h3><p>{{ $k['ket'] }}</p></div>
@endforeach
</div></div></section>

<section id="pendidikan"><div class="wrap">
<div class="title rv"><h2>Pendidikan</h2><p>Riwayat belajar saya</p></div>
<div class="edu">
@foreach($pendidikan as $e)
<article class="card ecard rv" style="--i:{{ $loop->index }}">
<div class="pic"><img src="{{ asset($e['gambar']) }}" alt="{{ $e['sekolah'] }}" loading="lazy"></div>
<div class="eb"><span class="kat">{{ $e['jenjang'] }}</span><h3>{{ $e['sekolah'] }}</h3><p>{{ $e['ket'] }}</p>
<div class="tags">
@foreach($e['tag'] as $t)
<span>{{ $t }}</span>
@endforeach
</div>
<button type="button" class="det"@if(!empty($e['video'])) data-video="{{ asset($e['video']) }}"@endif>Lihat Detail</button></div>
</article>
@endforeach
</div></div></section>

<section id="hobi"><div class="wrap">
<div class="title rv"><h2>Hobi</h2><p>Hal-hal yang saya sukai di waktu luang</p></div>
<div class="edu">
@foreach($hobi as $h)
<article class="card ecard rv" style="--i:{{ $loop->index }}">
<div class="pic"><img src="{{ asset($h['gambar']) }}" alt="{{ $h['nama'] }}" style="object-position:{{ $h['pos'] }}" loading="lazy"></div>
<div class="eb"><span class="kat">{{ $h['kat'] }}</span><h3>{{ $h['nama'] }}</h3><p>{{ $h['ket'] }}</p>
<div class="tags">
@foreach($h['tag'] as $t)
<span>{{ $t }}</span>
@endforeach
</div>
@if(!empty($h['galeri']))
<button type="button" class="detg" data-g="{{ $h['galeri'] }}">Lihat Foto &amp; Video</button>
@else
<button type="button" class="det" data-port="1" data-video="{{ asset($h['video']) }}">Lihat Detail</button>
@endif</div>
</article>
@endforeach
</div></div></section>

<section id="kontak"><div class="wrap">
<div class="title rv"><h2>Hubungi Saya</h2><p>Mari berkolaborasi</p></div>
<div class="photo kp rv"><div class="tilt"><img class="ghost" src="{{ asset('images/kontak.jpg') }}" alt="" aria-hidden="true"><img src="{{ asset('images/kontak.jpg') }}" alt="Foto bersama" loading="lazy"></div></div>
<div class="contact">
<div class="rv" style="--i:1">
<p>Untuk kolaborasi atau kebutuhan lain, Anda dapat menghubungi saya lewat formulir atau kontak di bawah ini.</p>
<a class="ci card" href="mailto:{{ $profile['email'] }}"><div class="ic">@</div><div><b>Email</b><span>{{ $profile['email'] }}</span></div></a>
<a class="ci card" href="https://wa.me/{{ $profile['wa'] }}" target="_blank" rel="noopener"><div class="ic">W</div><div><b>WhatsApp</b><span>{{ $profile['telepon'] }}</span></div></a>
<a class="ci card" href="https://instagram.com/{{ $profile['ig'] }}" target="_blank" rel="noopener"><div class="ic">IG</div><div><b>Instagram</b><span>{{ $profile['sosmed'] }}</span></div></a>
</div>
<form class="card rv" style="--i:2" id="form">
<label for="n">Nama Lengkap</label><input id="n" required placeholder="Nama Anda">
<label for="e">Email</label><input id="e" type="email" placeholder="nama@email.com">
<label for="p">Pesan</label><textarea id="p" required placeholder="Tulis pesan Anda..."></textarea>
<button type="submit">Kirim Pesan</button>
</form>
</div></div></section>

<div class="modal" id="modal" role="dialog" aria-modal="true" aria-labelledby="mj" aria-hidden="true"><div class="mbox"><button class="x" id="mx" aria-label="Tutup">&times;</button>
<div class="mc"><video id="mvid" controls playsinline preload="metadata"></video></div>
<div class="mi"><div class="ic" id="mik"></div><h3 id="mj"></h3><p id="mp"></p><p><b>{{ $profile['nama'] }}</b></p></div></div></div>

<div class="modal" id="modal2" role="dialog" aria-modal="true" aria-labelledby="dj" aria-hidden="true"><div class="mbox"><button class="x" id="dx" aria-label="Tutup">&times;</button>
<div class="mc"><img id="dimg" alt=""><video id="dvid" controls playsinline preload="metadata" hidden></video></div>
<div class="mi"><span class="kat" id="dk"></span><h3 id="dj"></h3><p id="dp"></p><div class="tags" id="dt"></div><p><b>{{ $profile['nama'] }}</b></p></div></div></div>

<div class="modal" id="modal3" role="dialog" aria-modal="true" aria-labelledby="lt" aria-hidden="true"><div class="lb"><button class="x" id="lx" aria-label="Tutup">&times;</button><img id="limg" alt=""><div class="lc"><b id="lt"></b><span id="lcp"></span></div></div></div>

<div class="modal" id="kmodal" role="dialog" aria-modal="true" aria-labelledby="kt" aria-hidden="true"><div class="kbox"><button class="x" id="kx" aria-label="Tutup">&times;</button>
<div class="kh"><div class="kic" id="kic"></div><div><h3 id="kt"></h3><p id="kj"></p></div></div>
<div class="kst" id="kst"><button class="kn p" id="kp" aria-label="Sebelumnya">&#8249;</button><div class="kmedia" id="km"></div><button class="kn q" id="kq" aria-label="Berikutnya">&#8250;</button></div>
<div class="kcap" id="kc"></div>
<div class="kth" id="kth"></div></div></div>

<footer>&copy; {{ date('Y') }} {{ $profile['nama'] }}</footer>

<script>
const nav=document.getElementById('nav');
let sc=false;const onS=()=>{const s=scrollY>40;if(s!==sc){sc=s;nav.classList.toggle('sc',s)}};onS();addEventListener('scroll',onS,{passive:true});
// muncul saat di-scroll
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){const el=e.target;el.classList.add('in');io.unobserve(el);setTimeout(()=>el.classList.add('done'),1800)}}),{threshold:.15});
document.querySelectorAll('.rv').forEach(el=>io.observe(el));
// menu aktif
const links=[...document.querySelectorAll('#menu a')];
const so=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting)links.forEach(l=>l.classList.toggle('on',l.getAttribute('href')==='#'+e.target.id))}),{rootMargin:'-45% 0px -50% 0px'});
document.querySelectorAll('header[id],section[id]').forEach(s=>so.observe(s));
// ganti tema
document.getElementById('tema').onclick=()=>{const l=document.documentElement.dataset.theme!=='light';document.documentElement.dataset.theme=l?'light':'';try{localStorage.setItem('tema',l?'terang':'gelap')}catch(e){}};
// kirim pesan lewat WhatsApp
document.getElementById('form').addEventListener('submit',e=>{e.preventDefault();
const m=`Halo, saya ${n.value} (${document.getElementById('e').value}).\n${p.value}`;
window.open('https://wa.me/{{ $profile['wa'] }}?text='+encodeURIComponent(m),'_blank')});
// buka video hobi
const md=document.getElementById('modal'),vid=document.getElementById('mvid');let last=null;
function tutup(){vid.pause();md.classList.remove('open');md.setAttribute('aria-hidden','true');document.body.style.overflow='';if(last)last.focus()}
document.querySelectorAll('.cert').forEach(c=>c.addEventListener('click',()=>{last=c;
document.getElementById('mj').textContent=c.dataset.nama;document.getElementById('mp').textContent=c.dataset.ket;document.getElementById('mik').textContent=c.dataset.ikon;
vid.src=c.dataset.video;vid.play().catch(()=>{});
md.classList.add('open');md.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';document.getElementById('mx').focus()}));
document.getElementById('mx').onclick=tutup;md.addEventListener('click',e=>{if(e.target===md)tutup()});
addEventListener('keydown',e=>{if(e.key==='Escape'&&md.classList.contains('open'))tutup()});
// detail pendidikan
const m2=document.getElementById('modal2');let last2=null;
function tutup2(){document.getElementById('dvid').pause();m2.classList.remove('open');m2.setAttribute('aria-hidden','true');document.body.style.overflow='';if(last2)last2.focus()}
document.querySelectorAll('.det').forEach(b=>b.addEventListener('click',()=>{last2=b;const c=b.closest('.ecard'),im=document.getElementById('dimg'),dv=document.getElementById('dvid');
im.src=c.querySelector('img').src;im.alt=c.querySelector('h3').textContent;
if(b.dataset.video){dv.classList.toggle('v',!!b.dataset.port);im.hidden=true;dv.hidden=false;dv.src=b.dataset.video;dv.currentTime=0;dv.play().catch(()=>{})}else{dv.hidden=true;im.hidden=false}
document.getElementById('dk').textContent=c.querySelector('.kat').textContent;document.getElementById('dj').textContent=c.querySelector('h3').textContent;
document.getElementById('dp').textContent=c.querySelector('.eb p').textContent;document.getElementById('dt').innerHTML=c.querySelector('.tags').innerHTML;
m2.classList.add('open');m2.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';document.getElementById('dx').focus()}));
document.getElementById('dx').onclick=tutup2;m2.addEventListener('click',e=>{if(e.target===m2)tutup2()});
addEventListener('keydown',e=>{if(e.key==='Escape'&&m2.classList.contains('open'))tutup2()});
// galeri foto
const m3=document.getElementById('modal3');let last3=null;
function tutup3(){m3.classList.remove('open');m3.setAttribute('aria-hidden','true');document.body.style.overflow='';if(last3)last3.focus()}
document.querySelectorAll('.gl .g').forEach(g=>g.addEventListener('click',()=>{last3=g;const im=g.querySelector('img');
document.getElementById('limg').src=im.src;document.getElementById('limg').alt=im.alt;document.getElementById('lt').textContent=im.alt;document.getElementById('lcp').textContent=g.dataset.cap;
m3.classList.add('open');m3.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';document.getElementById('lx').focus()}));
document.getElementById('lx').onclick=tutup3;m3.addEventListener('click',e=>{if(e.target===m3)tutup3()});
addEventListener('keydown',e=>{if(e.key==='Escape'&&m3.classList.contains('open'))tutup3()});
// petir di latar saat menu ditekan
const cv=document.getElementById('petir'),kc=cv.getContext('2d');let W=0,H=0,raf=0;
function ukur(){const d=Math.min(devicePixelRatio||1,2);W=innerWidth;H=innerHeight;cv.width=W*d;cv.height=H*d;kc.setTransform(d,0,0,d,0,0)}
ukur();addEventListener('resize',ukur);
const WARNA={home:'56,189,248',tentang:'167,139,250',pengalaman:'236,72,153',keahlian:'45,212,191',pendidikan:'129,140,248',hobi:'217,70,239',kontak:'56,189,248'};
function retak(x1,y1,x2,y2,d,o){if(d<3){o.push([x2,y2]);return}const mx=(x1+x2)/2+(Math.random()-.5)*d,my=(y1+y2)/2+(Math.random()-.5)*d*.3;retak(x1,y1,mx,my,d/2,o);retak(mx,my,x2,y2,d/2,o)}
function petir(x,y,len,a,dp){const x2=x+Math.sin(a)*len,y2=y+Math.cos(a)*len,pts=[[x,y]];retak(x,y,x2,y2,len*.26,pts);const br=[];
if(dp<2)for(let i=4;i<pts.length-2;i+=3+Math.floor(Math.random()*6)){if(Math.random()<.55)br.push({at:i,b:petir(pts[i][0],pts[i][1],len*(.22+Math.random()*.25),a+(Math.random()<.5?-1:1)*(.45+Math.random()*.7),dp+1)})}
return{pts,br,dp}}
function gambar(b,p,al,rgb,terang){const n=Math.floor(p*b.pts.length);if(n<2)return;const s=Math.pow(.55,b.dp);
[[18*s,.05],[8*s,.12],[3.2*s,.3],[1.3*s,1]].forEach(([w,k],i)=>{kc.beginPath();kc.moveTo(b.pts[0][0],b.pts[0][1]);for(let j=1;j<n;j++)kc.lineTo(b.pts[j][0],b.pts[j][1]);
kc.lineWidth=Math.max(w,.5);kc.strokeStyle=i===3?(terang?`rgba(79,70,229,${al})`:`rgba(255,255,255,${al})`):`rgba(${rgb},${al*k})`;kc.stroke()});
b.br.forEach(o=>{if(n>o.at)gambar(o.b,Math.min((n-o.at)/(b.pts.length*.35),1),al*.8,rgb,terang)})}
function kilat(id){if(matchMedia('(prefers-reduced-motion:reduce)').matches)return;
const rgb=WARNA[id]||WARNA.home,terang=document.documentElement.dataset.theme==='light';cancelAnimationFrame(raf);
const x0=W*(.22+Math.random()*.56),x1=Math.min(Math.max(x0+(Math.random()<.5?-1:1)*W*(.2+Math.random()*.15),W*.05),W*.95);
const bolts=[{b:petir(x0,-10,H*(.7+Math.random()*.2),(Math.random()-.5)*.35,0),k:1},{b:petir(x1,-10,H*(.4+Math.random()*.2),(Math.random()-.5)*.4,0),k:.55}];
const t0=performance.now();
(function f(now){const t=now-t0;kc.clearRect(0,0,W,H);if(t>1600)return;
const p=1-Math.pow(1-Math.min(t/340,1),3);
const it=t<340?1:t<430?.3:t<540?1:t<620?.45:Math.max(0,1-(t-620)/980);
kc.globalCompositeOperation=terang?'source-over':'lighter';
const g=kc.createRadialGradient(x0,0,0,x0,0,H*.9);g.addColorStop(0,`rgba(${rgb},${.16*it})`);g.addColorStop(1,`rgba(${rgb},0)`);kc.fillStyle=g;kc.fillRect(0,0,W,H);
bolts.forEach(o=>gambar(o.b,p,it*o.k,rgb,terang));
kc.globalCompositeOperation='source-over';raf=requestAnimationFrame(f)})(t0)}
document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',()=>{const id=a.getAttribute('href').slice(1);if(WARNA[id])kilat(id)}));
// kartu ID: ayunan fisik
(function(){
const rig=document.getElementById('rig'),s1=document.getElementById('s1'),s2=document.getElementById('s2'),card=document.getElementById('idcard');
const reduce=matchMedia('(prefers-reduced-motion:reduce)').matches;
let a=reduce?0:.55,v=0,r=0,vr=0,ta=0,drag=false,run=false,last=0,px=null,pt=0;
const K1=22,C1=.9,K2=38,C2=1.5,MAX=1.05;
function tick(now){const dt=Math.min((now-last)/1000,.033)||.016;last=now;
const acc=drag?(ta-a)*120-v*14:-K1*a-C1*v;
v+=acc*dt;a+=v*dt;if(a>MAX){a=MAX;v*=-.3}if(a<-MAX){a=-MAX;v*=-.3}
vr+=(-K2*r-C2*vr-.55*acc)*dt;r+=vr*dt;
s1.style.transform=`rotate(${a}rad)`;s2.style.transform=`rotate(${r}rad)`;
card.style.transform=`perspective(900px) rotateY(${Math.max(-25,Math.min(25,v*9))}deg)`;
card.style.setProperty('--hp',(50+(a+r)*90)+'%');
if(drag||Math.abs(a)>.0008||Math.abs(v)>.002||Math.abs(r)>.0008||Math.abs(vr)>.002)requestAnimationFrame(tick);else run=false}
function go(){if(!run){run=true;last=performance.now();requestAnimationFrame(tick)}}
addEventListener('pointermove',e=>{if(reduce)return;const now=performance.now();
if(drag){const b=s1.getBoundingClientRect();ta=Math.max(-MAX,Math.min(MAX,Math.atan2(e.clientX-b.left,e.clientY-b.top)));go();return}
if(px!==null){const c=card.getBoundingClientRect();if(c.bottom>0&&c.top<innerHeight){const dx=e.clientX-px,d=Math.hypot(e.clientX-(c.left+c.width/2),e.clientY-(c.top+c.height/2)),w=Math.exp(-(d*d)/(2*240*240));
v+=Math.max(-1.5,Math.min(1.5,dx*.014*w));go()}}
px=e.clientX;pt=now},{passive:true});
rig.addEventListener('pointerdown',e=>{if(reduce)return;drag=true;ta=a;rig.setPointerCapture(e.pointerId);go()});
['pointerup','pointercancel'].forEach(n=>rig.addEventListener(n,()=>{drag=false;go()}));
if(!reduce)setTimeout(go,300);
})();
// galeri kenangan hobi
(function(){
const GAL=Object.assign(@json($kenangan),{pkl:@json($pklGal)});
const m=document.getElementById('kmodal'),km=document.getElementById('km'),kth=document.getElementById('kth');
let cur=null,i=0,from=null;
function pilih(n){if(!cur)return;const len=cur.items.length;i=(n+len)%len;const it=cur.items[i];
const old=km.querySelector('video');if(old)old.pause();km.innerHTML='';let el;
if(it.tipe==='video'){el=document.createElement('video');el.controls=true;el.playsInline=true;el.autoplay=true;el.preload='metadata';el.src=it.src}
else{el=new Image();el.alt=it.cap;el.src=it.src}
km.appendChild(el);document.getElementById('kc').textContent=it.cap+'  ('+(i+1)+'/'+len+')';
[...kth.children].forEach((b,j)=>b.classList.toggle('on',j===i));
const a=kth.children[i];if(a)kth.scrollTo({left:a.offsetLeft-kth.clientWidth/2+a.clientWidth/2,behavior:'smooth'})}
function buka(id,btn,st){cur=GAL[id];if(!cur)return;from=btn;
document.getElementById('kic').textContent=cur.ikon;document.getElementById('kt').textContent=cur.judul;document.getElementById('kj').textContent=cur.ket;
kth.innerHTML='';cur.items.forEach((it,j)=>{const b=document.createElement('button');b.type='button';b.setAttribute('aria-label','Buka '+(j+1));
const im=new Image();im.src=it.tipe==='video'?it.poster:it.src;im.alt='';b.appendChild(im);
if(it.tipe==='video'){const p=document.createElement('span');p.className='pl';p.textContent='\u25B6';b.appendChild(p)}
b.onclick=()=>pilih(j);kth.appendChild(b)});
m.classList.add('open');m.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';pilih(st||0);document.getElementById('kx').focus()}
function tutup(){const v=km.querySelector('video');if(v)v.pause();km.innerHTML='';m.classList.remove('open');m.setAttribute('aria-hidden','true');document.body.style.overflow='';if(from)from.focus()}
document.querySelectorAll('.hb button,.pf,.detg').forEach(b=>b.addEventListener('click',()=>buka(b.dataset.g,b,+b.dataset.i||0)));
document.getElementById('kx').onclick=tutup;m.addEventListener('click',e=>{if(e.target===m)tutup()});
document.getElementById('kp').onclick=()=>pilih(i-1);document.getElementById('kq').onclick=()=>pilih(i+1);
addEventListener('keydown',e=>{if(!m.classList.contains('open'))return;if(e.key==='Escape')tutup();else if(e.key==='ArrowLeft')pilih(i-1);else if(e.key==='ArrowRight')pilih(i+1)});
let sx=null;const st=document.getElementById('kst');
st.addEventListener('touchstart',e=>{sx=e.touches[0].clientX},{passive:true});
st.addEventListener('touchend',e=>{if(sx===null)return;const dx=e.changedTouches[0].clientX-sx;sx=null;if(Math.abs(dx)>60)pilih(i+(dx<0?1:-1))});
})();
</script>
</body>
</html>
