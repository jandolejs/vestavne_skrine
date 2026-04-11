<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis a opravy vestavěných skříní Plzeň – Kutil Honza</title>
    <meta name="description" content="Rychlý servis a opravy vestavěných skříní v Plzni. Seřízení dveří, výměna pojezdových koleček, čištění kolejnic. Termíny do druhého dne.">
    <meta name="keywords" content="servis vestavěných skříní, oprava skříní, výměna koleček, seřízení dveří, Plzeň, čištění pojezdů, oprava posuvných dveří">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Servis a opravy vestavěných skříní Plzeň">
    <meta property="og:description" content="Nefungují vám posuvné dveře? Opravíme je. Servis vestavěných skříní v Plzni s termínem do druhého dne.">
    <meta property="og:type" content="website">
    <link rel="icon" href="icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                    colors: {
                        accent: '#D97706'
                    }
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        .hero-bg {
            background: linear-gradient(to bottom, rgba(10,10,10,.8) 0%, rgba(10,10,10,.5) 50%, rgba(10,10,10,.85) 100%);
        }
        .svc-row { border-bottom: 1px solid rgba(255,255,255,.08); transition: all .2s ease; }
        .svc-row:hover { background: rgba(255,255,255,.04); }
        .reveal { opacity: 0; transform: translateY(20px); transition: all .6s ease-out; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .amber-line::after { content: ''; display: block; width: 3rem; height: 3px; background: #D97706; margin-top: .75rem; }
    </style>
</head>

<body class="font-sans antialiased bg-white text-stone-900">

<header class="fixed top-0 inset-x-0 z-50 bg-black/20 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="#" class="flex items-center gap-3">
            <span class="font-bold text-lg text-white tracking-tight">Servis Skříní Plzeň</span>
        </a>
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-white/90">
            <a href="#sluzby" class="hover:text-amber-400 transition">Co opravujeme</a>
            <a href="#zkusenosti" class="hover:text-amber-400 transition">Proč my</a>
            <a href="#galerie" class="hover:text-amber-400 transition">Ukázky</a>
            <a href="#poptavka" class="bg-amber-500 px-4 py-2 rounded-lg font-bold hover:bg-amber-400 transition">Rychlá oprava</a>
        </nav>
    </div>
</header>

<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <img src="hero.png" alt="Oprava vestavěné skříně" class="absolute inset-0 w-full h-full object-cover">
    <div class="hero-bg absolute inset-0"></div>

    <div class="relative z-10 text-center px-6 max-w-4xl">
        <div class="inline-flex items-center gap-2 bg-amber-500 text-white text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full mb-8">
            <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
            Termíny do druhého dne
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-6">
            Nefunguje skříň?<br><span class="text-amber-400">Opravíme ji.</span>
        </h1>
        <p class="text-xl text-white/80 mb-10 max-w-2xl mx-auto">
            Nekupujte novou skříň. Provádíme kompletní servis, seřízení a opravy vestavěných skříní v Plzni a okolí.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#poptavka" class="bg-amber-500 hover:bg-amber-400 text-white font-bold px-8 py-4 rounded-xl transition shadow-xl">
                Objednat servis
            </a>
            <a href="#sluzby" class="bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl backdrop-blur-md border border-white/20 transition">
                Co všechno děláme?
            </a>
        </div>
    </div>
</section>

<section id="sluzby" class="bg-stone-950 py-24 text-white">
    <div class="max-w-5xl mx-auto px-6">
        <div class="mb-16">
            <p class="text-amber-500 text-xs font-bold uppercase tracking-widest mb-4">Servisní úkony</p>
            <h2 class="text-4xl font-black amber-line">Vrátíme vaší skříni lehký chod</h2>
        </div>

        <div class="grid gap-2">
            <div class="svc-row p-6 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-xl font-bold text-amber-400">Oprava pojezdů a koleček</h3>
                    <p class="text-stone-400">Výměna prasklých, opotřebovaných nebo zaseknutých koleček za nová.</p>
                </div>
                <span class="text-stone-600 font-black text-2xl">01</span>
            </div>
            <div class="svc-row p-6 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-xl font-bold text-amber-400">Čištění a broušení kolejnic</h3>
                    <p class="text-stone-400">Odstranění nečistot a nánosů, které brání plynulému pohybu dveří.</p>
                </div>
                <span class="text-stone-600 font-black text-2xl">02</span>
            </div>
            <div class="svc-row p-6 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-xl font-bold text-amber-400">Seřízení dveří a dorazů</h3>
                    <p class="text-stone-400">Vyrovnání křídel dveří, aby dovíraly těsně k bočnicím a neuskakovaly.</p>
                </div>
                <span class="text-stone-600 font-black text-2xl">03</span>
            </div>
            <div class="svc-row p-6 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h3 class="text-xl font-bold text-amber-400">Výměna těsnění a kartáčků</h3>
                    <p class="text-stone-400">Nalepení nových protiprachových lišt a tlumících prvků.</p>
                </div>
                <span class="text-stone-600 font-black text-2xl">04</span>
            </div>
        </div>

        <p class="mt-10 text-stone-500 italic text-center text-sm">
            Děláme prakticky vše, co se na skříni může pokazit. Stačí poslat fotku závady.
        </p>
    </div>
</section>

<section id="zkusenosti" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-4xl font-black mb-6 amber-line">Víme, jak byly postaveny.<br>Proto je umíme opravit.</h2>
            <p class="text-stone-600 mb-6 leading-relaxed">
                Dříve jsme vestavěné skříně sami vyráběli a montovali. Dnes se plně soustředíme na jejich <strong>profesionální servis a údržbu</strong>.
            </p>
            <p class="text-stone-600 mb-8 leading-relaxed">
                Díky letité praxi z výroby známe konstrukci všech typů pojezdových systémů na trhu. Dokážeme najít řešení i tam, kde ostatní doporučují skříň vyhodit.
            </p>
            <ul class="space-y-4">
                <li class="flex items-center gap-3 font-bold text-stone-800">
                    <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    Expresní termíny (často už druhý den)
                </li>
                <li class="flex items-center gap-3 font-bold text-stone-800">
                    <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    Vlastní zásoba náhradních dílů
                </li>
                <li class="flex items-center gap-3 font-bold text-stone-800">
                    <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                    Férové ceny bez skrytých poplatků
                </li>
            </ul>
        </div>
        <div class="bg-stone-100 p-8 rounded-3xl border border-stone-200">
            <h3 class="text-xl font-bold mb-4">Kolik stojí oprava?</h3>
            <p class="text-sm text-stone-500 mb-6">Ceny jsou orientační a závisí na rozsahu poškození a ceně dílů.</p>
            <div class="space-y-3">
                <div class="flex justify-between border-b border-stone-200 pb-2 italic"><span>Servis koleček</span><span class="font-bold">od 4 000 Kč</span></div>
                <div class="flex justify-between border-b border-stone-200 pb-2 italic"><span>Výměna kolejnice</span><span class="font-bold">od 4 000 Kč</span></div>
                <div class="flex justify-between border-b border-stone-200 pb-2 italic"><span>Čištění a seřízení</span><span class="font-bold">od 2 500 Kč</span></div>
                <div class="flex justify-between border-b border-stone-200 pb-2 italic"><span>Přilepení těsnění</span><span class="font-bold">od 2 000 Kč</span></div>
            </div>
        </div>
    </div>
</section>
<section id="galerie" class="py-24 bg-stone-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16 text-center">
            <p class="text-amber-600 text-xs font-bold uppercase tracking-widest mb-4">Ukázky mé práce</p>
            <h2 class="text-4xl font-black text-stone-900 amber-line-center">Co všechno opravujeme</h2>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/s1.webp" alt="Servis koleček" class="w-full object-cover">
                <p class="p-4 text-sm italic">Servis koleček<br><strong>Cena: 4 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/kolejnice1.webp" alt="Výměna kolejnice" class="w-full object-cover">
                <p class="p-4 text-sm italic">Výměna kolejnice<br><strong>Cena: 4 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/pojezdy1.webp" alt="Výměna pojezdů" class="w-full object-cover">
                <p class="p-4 text-sm italic">Zbroušení kolejnice a výměna pojezdů<br><strong>Cena: 3 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/s2.webp" alt="Servis kolejnic" class="w-full object-cover">
                <p class="p-4 text-sm italic">Servis kolejnic<br><strong>Cena: 5 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/s3.webp" alt="Servis lišty" class="w-full object-cover">
                <p class="p-4 text-sm italic">Servis horní lišty<br><strong>Cena: 7 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/s4.webp" alt="Servis těsnění" class="w-full object-cover">
                <p class="p-4 text-sm italic">Přilepení těsnění<br><strong>Cena: 2 000 Kč</strong></p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/roh3.webp" alt="Rohová skříň" class="w-full object-cover">
                <p class="p-4 text-sm italic">Kompletní montáž rohové skříně</p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/seda2.webp" alt="Šedá skříň" class="w-full object-cover">
                <p class="p-4 text-sm italic">Tmavě šedá skříň s postelí</p>
            </div>

            <div class="gallery-item bg-white shadow-sm border border-stone-200 rounded-xl">
                <img src="/fotografie/hornilista.webp" alt="Oprava horní lišty" class="w-full object-cover">
                <p class="p-4 text-sm italic">Ukotvení uvolněné horní lišty<br><strong>Cena: 4 000 Kč</strong></p>
            </div>
        </div>
    </div>
</section>

<style>
    /* Přidání gridu pro galerii, pokud v CSS chyběl */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
    }
    .gallery-item img {
        height: 250px;
        display: block;
        transition: transform 0.3s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.03);
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
<section id="poptavka" class="py-24 bg-stone-50">
    <div class="max-w-2xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-black mb-4">Potřebujete opravu?</h2>
            <p class="text-stone-500">Popište nám závadu, ozveme se s termínem do 24 hodin.</p>
        </div>
        <form id="contact-form" class="space-y-5 bg-white p-8 rounded-2xl shadow-sm border border-stone-200">
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-700">Kontakt - ideálně telefon na vás *</label>
                <input type="text" name="contact" required placeholder="Kde vás zastihneme?" class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:border-amber-500">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-2 text-stone-700">Popis závady *</label>
                <textarea name="message" required rows="4" placeholder="Např. prasklá kolečka, drhnoucí dveře, vypadlá kolejnice..." class="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:border-amber-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-amber-500 text-white font-bold py-4 rounded-xl hover:bg-amber-400 transition shadow-lg">
                Odeslat žádost o servis
            </button>
        </form>
    </div>
</section>

<footer class="bg-stone-900 py-12 text-center text-white/50 text-sm">
    <p>&copy; 2026 Kutil Honza Plzeň | Specialista na servis vestavěných skříní</p>
</footer>

<script>
    // Jednoduchý skript pro animaci při scrollování
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

</body>
</html>
