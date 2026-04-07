<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Montáž a servis vestavěných skříní – Kutil Honza Plzeň</title>
  <meta name="description" content="Montáž, opravy a pozáruční servis vestavěných skříní v Plzni. Výroba na míru, seřízení dveří, výměna kolejnic a pojezdů. Individuální přístup ke každé zakázce.">
  <meta name="keywords" content="montáž vestavěných skříní, servis vestavěných skříní, vestavěné skříně na míru, Plzeň, opravy skříní, seřízení dveří">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Montáž a servis vestavěných skříní – Kutil Honza Plzeň">
  <meta property="og:description" content="Montáž, opravy a pozáruční servis vestavěných skříní v Plzni. Individuální přístup ke každé zakázce.">
  <meta property="og:type" content="website">
  <link rel="icon" href="icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Umami Analytics -->
  <script defer src="https://umami.jandolejs.cz/script.js" data-website-id="2666c3d1-482f-4a61-ad59-52b153a5bffe"></script>

  <!-- Hotjar Tracking Code for https://nabytek.kutilhonza.cz/ -->
  <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:6538784,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11529391298"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-11529391298');
  </script>

  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1530646648175296');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1530646648175296&ev=PageView&noscript=1"/>
  </noscript>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
          colors: {
            accent: '#D97706' /* amber-600 */
          }
        }
      }
    }
  </script>

  <style>
    html { scroll-behavior: smooth; }

    .container {
        max-width: 1100px !important;
    }
    /* ── Reveal on scroll ─────────────────────── */
    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity .75s cubic-bezier(.16,1,.3,1), transform .75s cubic-bezier(.16,1,.3,1);
    }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal-delay-1 { transition-delay: .1s; }
    .reveal-delay-2 { transition-delay: .2s; }
    .reveal-delay-3 { transition-delay: .3s; }
    .reveal-delay-4 { transition-delay: .4s; }

    /* ── Hero ────────────────────────────────── */
    .hero-bg {
      background: linear-gradient(to bottom,
        rgba(10,10,10,.75) 0%,
        rgba(10,10,10,.45) 40%,
        rgba(10,10,10,.8)  100%);
    }

    /* ── Service rows ────────────────────────── */
    .svc-row {
      border-bottom: 1px solid rgba(255,255,255,.08);
      transition: background .2s ease;
    }
    .svc-row:hover { background: rgba(255,255,255,.04); }
    .svc-desc {
      max-height: 0;
      overflow: hidden;
      transition: max-height .35s ease, opacity .3s ease;
      opacity: 0;
    }
    .svc-row:hover .svc-desc { max-height: 3rem; opacity: 1; }
    .svc-arrow {
      transition: transform .3s ease, color .3s ease;
    }
    .svc-row:hover .svc-arrow { transform: translateX(6px); }
    /* --- GALERIE PRACÍ --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            background-color: var(--color-surface);
            border-radius: 5px;
            overflow: hidden;
            text-align: center;
            margin: auto;
        }

        .gallery-item img {
            /*width: 100%;*/
            height: 250px;
            margin: auto;
            /*object-fit: cover;*/
            display: block;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-item p {
            padding: 15px;
            margin: 0;
            font-style: italic;
        }
    /* --- LIGHTBOX / GALLERY PREVIEW --- */
        .lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.2s ease, visibility 0.2s;
        }
        .lightbox-overlay.open {
            visibility: visible;
            opacity: 1;
        }
        .lightbox-content {
            position: relative;
            max-width: 95%;
            max-height: 95%;
            text-align: center;
        }
        .lightbox-img {
            max-width: 100%;
            max-height: 85vh;
            display: block;
            margin: 0 auto;
            border-radius: 6px;
        }
        .lightbox-caption {
            color: var(--color-text);
            margin-top: 10px;
            font-style: italic;
        }
        .lightbox-close {
            position: absolute;
            top: -12px;
            right: -12px;
            background: var(--color-primary);
            color: var(--color-text-dark);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-size: 20px;
            line-height: 1;
        }
        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: var(--color-text);
            font-size: 32px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 8px 12px;
            opacity: 0.9;
        }
        .lightbox-prev { left: 8px; }
        .lightbox-next { right: 8px; }

    /* ── Form inputs ─────────────────────────── */
    .form-input {
      background: #f8f8f8;
      border: 1.5px solid transparent;
      transition: border-color .2s, background .2s;
    }
    .form-input:focus {
      background: #fff;
      border-color: #D97706;
      outline: none;
    }

    /* ── Scrollbar ───────────────────────────── */
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #111; }
    ::-webkit-scrollbar-thumb { background: #D97706; border-radius: 3px; }

    /* ── Amber underline decoration ─────────── */
    .amber-line::after {
      content: '';
      display: block;
      width: 3rem;
      height: 3px;
      background: #D97706;
      margin-top: .75rem;
    }
    .amber-line-center::after {
      content: '';
      display: block;
      width: 3rem;
      height: 3px;
      background: #D97706;
      margin: .75rem auto 0;
    }
  </style>
</head>

<body class="font-sans antialiased bg-white text-stone-900">

  <!-- ══════════════════════════════════════════════
       NAV
  ══════════════════════════════════════════════ -->
  <header id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
      <a href="#" class="flex items-center gap-3 group">
        <img src="icon.png" alt="" class="h-9 w-9 rounded-full object-cover ring-2 ring-white/20"
             onerror="this.style.display='none'">
        <span id="nav-brand" class="font-bold text-lg text-white tracking-tight drop-shadow">Skříně na míru</span>
      </a>

      <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
        <a href="#sluzby"      id="nl1" class="text-white/80 hover:text-white transition">Služby</a>
        <a href="#pristup"     id="nl2" class="text-white/80 hover:text-white transition">O mně</a>
        <a href="#galerie"     id="nl3" class="text-white/80 hover:text-white transition">Galerie</a>
        <a href="#kontakt-info" id="nl4" class="text-white/80 hover:text-white transition">Kontakt</a>
      </nav>

      <a href="#poptavka"
         class="bg-amber-500 hover:bg-amber-400 text-white text-sm font-bold px-5 py-2.5 rounded-lg
                transition shadow-lg shadow-amber-500/30 hover:shadow-amber-400/40"
         data-umami-event="show-form-button"
       >
        Poptávka zdarma
      </a>
    </div>
  </header>

  <!-- ══════════════════════════════════════════════
       HERO
  ══════════════════════════════════════════════ -->
  <section id="hero" class="relative min-h-screen flex flex-col">
    <img src="hero.png" alt="Vestavěné skříně na míru Plzeň"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="hero-bg absolute inset-0"></div>

    <!-- Obsah -->
    <div class="relative z-10 flex-1 flex flex-col items-center justify-center text-center px-6 pt-28 pb-36">
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20
                  text-white/90 text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full mb-8">
        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
        Plzeň a okolí &nbsp;·&nbsp; Přijímám zakázky
      </div>

      <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black text-white leading-none tracking-tight mb-6">
        Vestavěné skříně<br>
        <span class="text-amber-400">na míru</span><br>
        v Plzni
      </h1>

      <p class="text-lg sm:text-xl text-white/70 max-w-xl mx-auto leading-relaxed mb-10">
        Montáž, opravy a pozáruční servis.<br>Individuální přístup ke každé zakázce.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="#poptavka"
           class="inline-flex items-center justify-center gap-2.5 bg-amber-500 hover:bg-amber-400
                  text-white font-bold text-base px-8 py-4 rounded-xl transition
                  shadow-2xl shadow-amber-500/40 hover:shadow-amber-400/50 hover:-translate-y-0.5 transform"
           data-umami-event="show-form-button"
        >
          Nezávazná poptávka
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </a>
        <a href="#galerie"
           class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20
                  backdrop-blur-sm text-white font-semibold text-base px-8 py-4
                  rounded-xl border border-white/25 transition">
          Galerie realizací
        </a>
      </div>
    </div>

    <!-- Stats strip -->
    <div class="relative z-10 border-t border-white/10 bg-black/50 backdrop-blur-sm">
      <div class="max-w-4xl mx-auto grid grid-cols-3 divide-x divide-white/10">
        <div class="py-6 text-center">
          <div class="text-3xl sm:text-4xl font-black text-white tabular-nums">5+</div>
          <div class="text-xs text-white/50 uppercase tracking-widest mt-1">let praxe</div>
        </div>
        <div class="py-6 text-center">
          <div class="text-3xl sm:text-4xl font-black text-amber-400 tabular-nums">50+</div>
          <div class="text-xs text-white/50 uppercase tracking-widest mt-1">zakázek</div>
        </div>
        <div class="py-6 text-center">
          <div class="text-3xl sm:text-4xl font-black text-white tabular-nums">100%</div>
          <div class="text-xs text-white/50 uppercase tracking-widest mt-1">na míru</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       SLUŽBY  (tmavá sekce)
  ══════════════════════════════════════════════ -->
  <section id="sluzby" class="bg-stone-950 py-24">
    <div class="max-w-5xl mx-auto px-6">

      <div class="mb-16 reveal">
        <p class="text-amber-500 text-xs font-bold uppercase tracking-widest mb-4">Co dělám</p>
        <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight amber-line">
          Moje služby
        </h2>
      </div>

      <!-- Numbered list -->
      <div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">01</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Výroba vestavěných skříní na míru</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Návrh a výroba skříní přesně do vašeho prostoru – jakékoli rozměry, dispozice i stropy.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-1">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">02</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Montáž vestavěných skříní</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Profesionální montáž nových skříní včetně ukotvení, seřízení a finálních úprav.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-2">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">03</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Servis vestavěných skříní</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Pravidelný servis a preventivní údržba pro bezchybný a tichý chod.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-3">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">04</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Pozáruční opravy</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Opravy po skončení záruky – rychle, spolehlivě, bez zbytečného čekání.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">05</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Seřízení dveří</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Přesné seřízení posuvných i otočných dveří, eliminace vrzání a zasekávání.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-1">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">06</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Výměna kolejnic</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Výměna opotřebovaných nebo poškozených kolejnic za nové originální díly.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-2">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">07</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Výměna pojezdů</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Náhrada opotřebených pojezdových koleček pro hladký a tichý chod dveří.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

        <div class="svc-row group px-2 py-6 rounded-lg -mx-2 cursor-default reveal reveal-delay-3" style="border-bottom:none">
          <div class="flex items-start gap-5 sm:gap-8">
            <span class="text-4xl font-black text-amber-500/30 tabular-nums leading-none w-14 shrink-0 group-hover:text-amber-500 transition-colors duration-300">08</span>
            <div class="flex-1 min-w-0">
              <h3 class="text-lg sm:text-xl font-bold text-white group-hover:text-amber-400 transition-colors duration-200">Úpravy starších skříní</h3>
              <p class="svc-desc text-stone-400 text-sm mt-1">Modernizace a přizpůsobení starších skříní novým potřebám nebo prostoru.</p>
            </div>
            <svg class="svc-arrow w-5 h-5 text-stone-600 group-hover:text-amber-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </div>
        </div>

      </div>

      <!-- Note + CTA -->
      <div class="mt-14 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 reveal">
        <p class="text-stone-500 text-sm">Individuální kalkulace podle konkrétní zakázky.</p>
        <a href="#poptavka"
           class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-white
                  font-bold text-sm px-6 py-3.5 rounded-xl transition shadow-lg shadow-amber-500/25 whitespace-nowrap"
           data-umami-event="show-form-button"
        >
          Nezávazná poptávka
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </a>
      </div>

    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       INDIVIDUÁLNÍ PŘÍSTUP
  ══════════════════════════════════════════════ -->
  <section id="pristup" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">

        <!-- Quote / dark card -->
        <div class="reveal">
          <div class="bg-stone-950 rounded-3xl p-10 relative overflow-hidden">
            <!-- Dekorativní velký apostrof -->
            <div class="absolute -top-4 -right-2 text-[12rem] leading-none font-black text-white/[0.03] select-none pointer-events-none">&ldquo;</div>

            <svg class="w-8 h-8 text-amber-500 mb-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>

            <blockquote class="text-xl sm:text-2xl font-semibold text-white leading-snug mb-8">
              "Nedělám montáže od stolu. Vždy přijedu, podívám se na situaci na místě a navrhnu řešení, které opravdu funguje."
            </blockquote>

            <div class="flex items-center gap-4 pt-6 border-t border-white/10">
              <img src="icon.png" alt="Kutil Honza" class="w-11 h-11 rounded-full object-cover ring-2 ring-amber-500/40"
                   onerror="this.style.display='none'">
              <div>
                <div class="font-bold text-white">Kutil Honza</div>
                <div class="text-sm text-stone-500">Montér vestavěných skříní · Plzeň</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Feature points -->
        <div>
          <p class="text-amber-600 text-xs font-bold uppercase tracking-widest mb-4 reveal">Proč vybrat mě</p>
          <h2 class="text-4xl sm:text-5xl font-black text-stone-900 leading-tight mb-10 amber-line reveal reveal-delay-1">
            Individuální<br>přístup ke<br>každé zakázce
          </h2>

          <div class="space-y-8">

            <div class="flex gap-5 items-start reveal reveal-delay-1">
              <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <div>
                <h3 class="font-bold text-stone-900 text-lg mb-1">Každá skříň je jiná</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                  Nestandardní rozměry, šikmé stropy, složité dispozice – se vším si poradím. Žádná zakázka není příliš složitá.
                </p>
              </div>
            </div>

            <div class="flex gap-5 items-start reveal reveal-delay-2">
              <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <div>
                <h3 class="font-bold text-stone-900 text-lg mb-1">Řešení šité na míru prostoru</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                  Nejprve přijdu, prohlédnu prostor a teprve pak navrhneme nejlepší řešení. Kalkulace vždy podle konkrétní zakázky.
                </p>
              </div>
            </div>

            <div class="flex gap-5 items-start reveal reveal-delay-3">
              <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <div>
                <h3 class="font-bold text-stone-900 text-lg mb-1">Osobní přístup</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                  Komunikujete přímo se mnou od první zprávy až po předání hotové práce. Žádní prostředníci, žádné nedorozumění.
                </p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       GALERIE
  ══════════════════════════════════════════════ -->
  <section id="galerie" class=" py-24 bg-stone-50" style="display: flex;justify-content: center;align-items: center;">
    <div class="container gallery-grid">
      <div class="gallery-item"><img src="/fotografie/roh1.jpg" alt="Rohová skříň 1."> <p>Rohová skříň - Příprava</p></div>
      <div class="gallery-item"><img src="/fotografie/roh2.jpg" alt="Rohová skříň 2."> <p>Rohová skříň - Montáž</p></div>
      <div class="gallery-item"><img src="/fotografie/roh3.jpg" alt="Rohová skříň 3."> <p>Rohová skříň - Výsledek</p></div>

      <div class="gallery-item"><img src="/fotografie/kolejnice1.jpg" alt="Výěmna kolejnice"> <p>Výměna kolejnice<br>Cena: 4tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/e3.jpg" alt="Ukázka práce 3"> <p>Ukázka výsledku montáže<br>Cena: 55tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/s1.jpg" alt="Servis koleček"> <p>Servis koleček<br>Cena: 4tis Kč</p></div>

      <div class="gallery-item"><img src="/fotografie/e1.jpg" alt="Ukázka práce 1"> <p>Skříň na míru do ložnice<br>Cena: 45tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/e2.jpg" alt="Ukázka práce 2"> <p>Skříň do chodby<br>Cena: 40tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/pojezdy1.jpg" alt="Výměna pojezdů"> <p>Zbroušení kolejnice a výměna pojezdů<br>Cena: 3tis Kč</p></div>

      <div class="gallery-item"><img src="/fotografie/seda1.jpg" alt="šedá skříň"> <p>Úzká skříň do pokoje<br>Cena komplet: 45 tisíc</p></div>
      <div class="gallery-item"><img src="/fotografie/s3.jpg" alt="Servis lišty"> <p>Servis horní lišty<br>Cena: 7tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/s4.jpg" alt="Servis těsnění"> <p>Přilepení těsnění<br>Cena: 2tis Kč</p></div>

      <div class="gallery-item"><img src="/fotografie/e5.jpg" alt="Ukázka práce 4"> <p>Skříň přesně do obýváku<br>Cena: 40tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/postel.jpg" alt="Postel"> <p>Složení postele<br>Cena: 6tis Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/s2.jpg" alt="Servis kolejnic"> <p>Servis kolejnic<br>Cena: 5tis Kč</p></div>

      <div class="gallery-item"><img src="/fotografie/seda2.jpg" alt="šedá dva"> <p>Tmavě šedá skříň s postelí<br>celkem 43 000 Kč</p></div>
      <div class="gallery-item"><img src="/fotografie/svetla1.jpg" alt="Béžová skříň"> <p>Béžová skříň do ložnice<br>Cena s montáží 82 tisíc Kč</p></div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       FORMULÁŘ
  ══════════════════════════════════════════════ -->
  <section id="poptavka" class="py-24 bg-white">
    <div class="max-w-2xl mx-auto px-6">

      <div class="text-center mb-12 reveal">
        <p class="text-amber-600 text-xs font-bold uppercase tracking-widest mb-4">Kontakt</p>
        <h2 class="text-4xl sm:text-5xl font-black text-stone-900 leading-tight mb-4">
          Napište mi
        </h2>
        <p class="text-stone-500">Nezávazná poptávka. Ozvu se do 24 hodin.</p>
      </div>

      <form id="contact-form" class="reveal reveal-delay-1">

        <div class="mb-5">
          <label class="block text-sm font-semibold text-stone-700 mb-2">
            Jméno <span class="font-normal text-stone-400">(nepovinné)</span>
          </label>
          <input type="text" id="name" name="name" placeholder="Vaše jméno"
                 class="form-input w-full px-4 py-4 rounded-xl text-stone-900 placeholder:text-stone-400 text-sm">
        </div>

        <div class="mb-5">
          <label class="block text-sm font-semibold text-stone-700 mb-2">
            Kontakt <span class="text-red-500">*</span>
            <span class="font-normal text-stone-400">(telefon nebo email)</span>
          </label>
          <input type="text" id="contact" name="contact" required
                 placeholder="Telefon nebo email kde vás mohu kontaktovat"
                 class="form-input w-full px-4 py-4 rounded-xl text-stone-900 placeholder:text-stone-400 text-sm">
        </div>

        <div class="mb-8">
          <label class="block text-sm font-semibold text-stone-700 mb-2">
            Zpráva <span class="text-red-500">*</span>
          </label>
          <textarea id="message" name="message" required rows="5"
                    placeholder="Popište, co potřebujete – typ skříně, problém, nebo napište že chcete zavolat..."
                    class="form-input w-full px-4 py-4 rounded-xl text-stone-900 placeholder:text-stone-400 text-sm resize-none"></textarea>
        </div>

        <div id="form-error"   class="hidden mb-5 px-4 py-3.5 bg-red-50 border border-red-200 rounded-xl text-red-700 text-sm"></div>
        <div id="form-success" class="hidden mb-5 px-4 py-3.5 bg-emerald-50 border border-emerald-200 rounded-xl text-emerald-700 text-sm text-center font-medium"></div>

        <button type="submit" id="submit-btn"
                class="w-full bg-stone-950 hover:bg-stone-800 text-white font-bold text-base
                       py-4.5 py-[1.1rem] rounded-xl transition flex items-center justify-center gap-2.5
                       shadow-xl shadow-stone-900/20">
          <span id="submit-text">Odeslat poptávku</span>
          <svg id="submit-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
          <svg id="submit-spinner" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
          </svg>
        </button>

        <p class="text-xs text-stone-400 text-center mt-4">
          Odesláním souhlasíte se zpracováním osobních údajů za účelem odpovědi na vaši poptávku.
        </p>
      </form>

    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       KONTAKT
  ══════════════════════════════════════════════ -->
  <section id="kontakt-info" class="bg-stone-950 py-20">
    <div class="max-w-5xl mx-auto px-6">

      <div class="text-center mb-14 reveal">
        <h2 class="text-4xl sm:text-5xl font-black text-white mb-3">Montáž a servis vestavěných skříní</h2>
        <p class="text-stone-500">Najdete nás v Plzni</p>
      </div>

      <div class="grid sm:grid-cols-3 gap-4 max-w-3xl mx-auto">

        <a href="tel:+420603381044" class="group reveal">
          <div class="flex flex-col items-center gap-4 border border-stone-800 hover:border-amber-500/50
                      bg-stone-900 hover:bg-stone-800/80 rounded-2xl p-7 transition-all duration-300">
            <div class="w-12 h-12 rounded-xl bg-stone-800 group-hover:bg-amber-500/20 flex items-center justify-center transition-colors duration-300">
              <svg class="w-5 h-5 text-stone-400 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div class="text-center">
              <div class="text-xs text-stone-600 uppercase tracking-widest mb-1.5">Telefon</div>
              <div class="font-bold text-white text-sm">+420 603 381 044</div>
            </div>
          </div>
        </a>

        <a href="mailto:nabytek@kutilhonza.cz" class="group reveal reveal-delay-1">
          <div class="flex flex-col items-center gap-4 border border-stone-800 hover:border-amber-500/50
                      bg-stone-900 hover:bg-stone-800/80 rounded-2xl p-7 transition-all duration-300">
            <div class="w-12 h-12 rounded-xl bg-stone-800 group-hover:bg-amber-500/20 flex items-center justify-center transition-colors duration-300">
              <svg class="w-5 h-5 text-stone-400 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div class="text-center">
              <div class="text-xs text-stone-600 uppercase tracking-widest mb-1.5">Email</div>
              <div class="font-bold text-white text-sm break-all">nabytek@kutilhonza.cz</div>
            </div>
          </div>
        </a>

        <a href="https://www.instagram.com/nabytek_plzen" target="_blank" rel="noopener" class="group reveal reveal-delay-2">
          <div class="flex flex-col items-center gap-4 border border-stone-800 hover:border-amber-500/50
                      bg-stone-900 hover:bg-stone-800/80 rounded-2xl p-7 transition-all duration-300">
            <div class="w-12 h-12 rounded-xl bg-stone-800 group-hover:bg-amber-500/20 flex items-center justify-center transition-colors duration-300">
              <svg class="w-5 h-5 text-stone-400 group-hover:text-amber-500 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </div>
            <div class="text-center">
              <div class="text-xs text-stone-600 uppercase tracking-widest mb-1.5">Instagram</div>
              <div class="font-bold text-white text-sm">nabytek_plzen</div>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════
       FOOTER
  ══════════════════════════════════════════════ -->
  <footer class="bg-black py-6 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-stone-600">
      <span>&copy; 2025 Kutil Honza &mdash; Montáž a servis vestavěných skříní Plzeň</span>
      <span class="text-stone-700">Montáž a servis vestavěných skříní</span>
    </div>
  </footer>

  <!-- ══════════════════════════════════════════════
       LIGHTBOX
  ══════════════════════════════════════════════ -->
  <div id="lightbox" class="lightbox-overlay" role="dialog" aria-hidden="true">
      <div class="lightbox-content">
          <button class="lightbox-close" id="lightboxClose" aria-label="Zavřít">×</button>
          <img id="lightboxImg" class="lightbox-img" src="" alt="">
          <div id="lightboxCaption" class="lightbox-caption"></div>
          <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Předchozí">‹</button>
          <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Další">›</button>
      </div>
  </div>

  <!-- ══════════════════════════════════════════════
       JS
  ══════════════════════════════════════════════ -->
  <script>
    // ── Navbar scroll effect ────────────────────────────────────────────
    const navbar   = document.getElementById('navbar');
    const navBrand = document.getElementById('nav-brand');
    const navLinks = ['nl1','nl2','nl3','nl4'].map(id => document.getElementById(id));

    function updateNav() {
      const scrolled = window.scrollY > 70;
      navbar.style.background    = scrolled ? 'rgba(255,255,255,0.97)' : 'transparent';
      navbar.style.backdropFilter = scrolled ? 'blur(12px)' : 'none';
      navbar.style.boxShadow     = scrolled ? '0 1px 20px rgba(0,0,0,.08)' : 'none';
      navBrand.style.color       = scrolled ? '#1c1917' : '#fff';
      navLinks.forEach(a => { if (a) a.style.color = scrolled ? '#57534e' : 'rgba(255,255,255,.8)'; });
    }
    window.addEventListener('scroll', updateNav, { passive: true });
    updateNav();

    // ── Scroll reveal ───────────────────────────────────────────────────
    const revealEls = document.querySelectorAll('.reveal');
    const revealObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(el => revealObs.observe(el));

    // ── Lightbox ────────────────────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', function() {
        const items = Array.from(document.querySelectorAll('.gallery-item'));
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const closeBtn = document.getElementById('lightboxClose');
        const prevBtn = document.getElementById('lightboxPrev');
        const nextBtn = document.getElementById('lightboxNext');
        let current = -1;

        items.forEach((item, idx) => {
            const image = item.querySelector('img');
            item.style.cursor = 'zoom-in';
            item.addEventListener('click', () => {
                current = idx;
                openLightbox(image.src, item.querySelector('p')?.innerText || image.alt || '');
            });
        });

        function openLightbox(src, text) {
            lightboxImg.src = src;
            lightboxImg.alt = text || '';
            lightboxCaption.textContent = text || '';
            lightbox.classList.add('open');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            lightboxImg.src = '';
            current = -1;
        }

        function showByIndex(idx) {
            if (items.length === 0) return;
            if (idx < 0) idx = items.length - 1;
            if (idx >= items.length) idx = 0;
            current = idx;
            const imgEl = items[current].querySelector('img');
            openLightbox(imgEl.src, items[current].querySelector('p')?.innerText || imgEl.alt || '');
        }

        closeBtn.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
        prevBtn.addEventListener('click', (e) => { e.stopPropagation(); showByIndex(current - 1); });
        nextBtn.addEventListener('click', (e) => { e.stopPropagation(); showByIndex(current + 1); });

        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showByIndex(current - 1);
            if (e.key === 'ArrowRight') showByIndex(current + 1);
        });
    });


    // ── Formulář → Telegram ─────────────────────────────────────────────
    (function () {
      const BOT_TOKEN = "5683006293:AAHIoRepm_uhfKfAYW9piJCKYAyDEM_FfAM";
      const CHAT_ID   = "358369613";

      const form       = document.getElementById('contact-form');
      const btnText    = document.getElementById('submit-text');
      const btnIcon    = document.getElementById('submit-icon');
      const spinner    = document.getElementById('submit-spinner');
      const btn        = document.getElementById('submit-btn');
      const errBox     = document.getElementById('form-error');
      const okBox      = document.getElementById('form-success');

      function setLoading(on) {
        btn.disabled = on;
        btnText.textContent = on ? 'Odesílám...' : 'Odeslat poptávku';
        btnIcon.classList.toggle('hidden', on);
        spinner.classList.toggle('hidden', !on);
      }

      form.addEventListener('submit', async e => {
        e.preventDefault();
        errBox.classList.add('hidden');
        okBox.classList.add('hidden');

        const name    = document.getElementById('name').value.trim();
        const contact = document.getElementById('contact').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!contact) { errBox.textContent = 'Vyplňte prosím kontaktní údaj.'; errBox.classList.remove('hidden'); return; }
        if (!message)  { errBox.textContent = 'Vyplňte prosím zprávu.';        errBox.classList.remove('hidden'); return; }

        const text = ['Nová poptávka z webu', '',
          'Jméno: ' + (name || '(neuvedeno)'),
          'Kontakt: ' + contact,
          'Zpráva:', message].join('\n');

        setLoading(true);
        try {
          const r = await fetch('https://api.telegram.org/bot' + BOT_TOKEN + '/sendMessage', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ chat_id: CHAT_ID, text })
          });
          if (!r.ok) { const d = await r.json().catch(()=>({})); throw new Error(d.description||r.status); }
          okBox.textContent = '✓ Zpráva odeslána! Ozvu se co nejdříve.';
          okBox.classList.remove('hidden');
          form.reset();
          if (typeof gtag  !== 'undefined') gtag('event','conversion',{'send_to':'AW-11529391298'});
          if (typeof fbq   !== 'undefined') fbq('track','Lead');
        } catch (err) {
          errBox.textContent = 'Nepodařilo se odeslat zprávu. Kontaktujte mě přímo na telefonu nebo emailu.';
          errBox.classList.remove('hidden');
          console.error(err);
        } finally { setLoading(false); }

        umami.track('Form-submit', {
          name: name,
          contact: contact,
          message: message,
        });
      });

    })();
  </script>

</body>
</html>
