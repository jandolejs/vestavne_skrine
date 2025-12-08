<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skříně na míru Plzeň | K+H Interiéry</title>
    <meta name="description" content="Profesionální montáž vestavěných skříní a nábytku na míru v Plzni a okolí. Využijte každý centimetr vašeho prostoru.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- ZÁKLADNÍ NASTAVENÍ A BARVY --- */
        :root {
            --color-background: #222222; /* Tmavě šedá / Antracit */
            --color-surface: #333333;   /* Mírně světlejší povrch */
            --color-primary: #c5a47e;   /* Akcent - béžová/zlatavá */
            --color-text: #f0f0f0;      /* Světlý text */
            --color-text-dark: #333333; /* Tmavý text pro světlé prvky */
        }

        html {
            scroll-behavior: smooth; /* Plynulé rolování */
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1, h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        h2 {
            font-size: 2.2rem;
            padding-top: 40px; /* Odsazení pro kotvy */
        }
        
        /* --- HERO SEKCE (ÚVOD) --- */
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/hero.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
        }
        .hero p {
            max-width: 783px;
            margin: 1rem auto 2rem auto;
            font-size: 1.1rem;
        }
        
        .motto {
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--color-primary);
        }

        .cta-button {
            display: inline-block;
            background-color: var(--color-primary);
            color: var(--color-text-dark);
            padding: 15px 30px;
            text-decoration: none;
            font-weight: 700;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #d9b894;
            transform: translateY(-2px);
        }

        /* --- BANNER BENEFITŮ --- */
        .benefits-banner {
            background-color: var(--color-surface);
        }

        .benefits-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
        }

        .benefit {
            flex: 1;
            width: 200px;
            padding: 25px;
        }

        .benefit svg {
            width: 50px;
            height: 50px;
            stroke: var(--color-primary); /* Barva ikonky */
        }

        .benefit h3 {
            margin-bottom: 1px;
            font-size: 1.2rem;
        }

        .benefit p {
            margin-top: 10px;
            margin-bottom: 0;
        }

        /* --- SEKCE POPIS SLUŽBY --- */
        .service-description {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .service-item {
            background-color: var(--color-surface);
            padding: 30px;
            border-radius: 5px;
        }
        .service-item h3 {
            color: var(--color-primary);
        }

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

        /* --- KONTAKTNÍ SEKCE --- */
        .contact-section {
            background-color: var(--color-surface);
            border-radius: 5px;
            padding: 40px;
        }
        
        .contact-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
        
        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-info a {
            color: var(--color-primary);
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px;
            background-color: var(--color-background);
            border: 1px solid #555;
            border-radius: 5px;
            color: var(--color-text);
            box-sizing: border-box; /* Důležité pro správné zobrazení */
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* --- PATIČKA --- */
        .footer {
            text-align: center;
            padding: 30px 20px;
            margin-top: 40px;
            border-top: 1px solid var(--color-surface);
        }

        /* --- RESPONZIVITA --- */
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 1.8rem; }
            .hero { padding: 80px 20px; }
        }

        /* Default: show text, hide link */
        .call-link { display: none; }
        .call-text { display: inline-block; }

        /* On small screens (mobile) show link, hide text */
        @media (max-width: 768px) {
          .call-link { display: inline-block }
          .call-text { display: none; }
        }

    </style>
    
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
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1530646648175296&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
    
</head>
<body>

    <header class="hero">
        <div style="background-color: rgba(0, 0, 0, 0.6); padding: 50px 10px">
            <h1>Skříně na míru v Plzni a okolí</h1>
            <p class="motto">Váš prostor, vaše pravidla, vaše skříň.</p>
            <p>
                Už vás nebaví kompromisy s nábytkem z obchodních řetězců? Vytvořím pro vás úložné prostory, které perfektně zapadnou do vašeho interiéru a využijí každý centimetr místa. Precizní montáž, osobní přístup a řešení přesně podle vašich představ.
            </p>
            <div>
                <a style="margin-top: 10px;" class="cta-button" href="tel:+420603381044">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/></svg>
                    603 381 044
                </a>

                <a style="margin-top: 10px;" class="cta-button call-link" href="mailto:nabytek@kutilhonza.cz">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg>
                    Napsat
                </a>
                <span style="margin-top: 10px;" class="cta-button call-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/></svg>
                    nabytek@kutilhonza.cz
                </span>
                <a style="margin-top: 10px;" href="#kontakt" class="cta-button" style="margin-bottom: 50px">Nezávazná poptávka ✅</a>
            </div>
        </div>
    </header>

    <section class="benefits-banner">
        <div class="benefits-grid">
            <div class="benefit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <h3>Kvalita řemesla</h3>
                <p>Důraz na detail a poctivé zpracování pro maximální životnost.</p>
            </div>
            <div class="benefit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" /></svg>
                <h3>Využití každého centimetru</h3>
                <p>Optimální využití celého místa</p>
            </div>
            <div class="benefit">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.472-2.472a3.375 3.375 0 00-4.773-4.773L6.75 10.5M11.42 15.17L6.75 10.5m4.67 4.67L6.75 10.5" /></svg>
                <h3>Kompletní služba</h3>
                <p>Od návrhu a zaměření, přes montáž až po finální úklid.</p>
            </div>
            <div class="benefit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.483a.75.75 0 001.06-1.06A7.5 7.5 0 013.75 12c0-3.866 3.582-7 8.25-7s8.25 3.134 8.25 7-3.582 7-8.25 7A7.5 7.5 0 016.273 6.517.75.75 0 005.214 7.58a9 9 0 006.786 12.67z" /></svg>
                <h3>Osobní přístup</h3>
                <p>Naslouchám vašim potřebám a přizpůsobím řešení na míru.</p>
            </div>
        </div>
    </section>

    <main>
        <section id="sluzby" class="container">
            <h2>Od nápadu k dokonalé skříni</h2>
            <div class="service-description">
                <div class="service-item">
                    <h3>Osobní konzultace a zaměření</h3>
                    <p>Přijedu přímo k vám, probereme vaše představy, požadavky na vnitřní uspořádání a doporučím nejvhodnější materiály a kování. Vše si pečlivě zaměřím, abychom využili prostor na maximum.</p>
                </div>
                <div class="service-item">
                    <h3>Profesionální montáž</h3>
                    <p>Samotnou montáž provádím s maximální precizností. Ať už se jedná o vestavěné skříně, šatny nebo atypické úložné prostory, můžete se spolehnout na profesionálně odvedenou práci.</p>
                </div>
                <div class="service-item">
                    <h3>Kvalita a spolehlivost</h3>
                    <p>Pracuji s kvalitními materiály od ověřených dodavatelů, aby vám nová skříň sloužila spolehlivě dlouhá léta. Mým cílem je vaše naprostá spokojenost s výsledkem.</p>
                </div>
                <div class="service-item">
                    <h3>Čistota a finální předání</h3>
                    <p>Po dokončení montáže po sobě zanechám perfektně uklizený prostor. Novou skříň vám předám plně funkční a připravenou k okamžitému používání.</p>
                </div>
                <div class="service-item">
                    <h3>Individuální návrh řešení</h3>
                    <p>Každý interiér je jiný, proto vytvářím řešení na míru. Připravím pro vás návrh, který bude ladit s vaším stylem a zároveň prakticky využije dostupný prostor.</p>
                </div>
                <div class="service-item">
                    <h3>Rychlá realizace</h3>
                    <p>Dbám na efektivní postup práce, abyste novou skříň mohli začít používat co nejdříve, aniž by trpěla kvalita montáže.</p>
                </div>

            </div>
        </section>
        
        <section id="galerie" class="container">
            <h2>Ukázky mé práce</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="/e1.jpg" alt="Ukázka práce 1"> <p>Skříň na míru do ložnice<br>Cena: cca 45tis Kč</p></div>
                <div class="gallery-item"><img src="/e2.jpg" alt="Ukázka práce 2"> <p>Skříň do chodby<br>Cena: cca 40tis Kč</p></div>
                <div class="gallery-item"><img src="/e3.jpg" alt="Ukázka práce 3"> <p>Ukázka výsledku montáže<br>Cena: cca 55tis Kč</p></div>
                <div class="gallery-item"><img src="/e5.jpg" alt="Ukázka práce 4"> <p>Skříň přesně do obýváku<br>Cena: cca 40tis Kč</p></div>
            </div>
        </section>

        <section id="kontakt" class="container">
            <h2>Napište si o nezávaznou konzultaci</h2>
            <div class="contact-section">
                <div class="contact-flex">
                    <div class="contact-info">
                        <h3>Kontaktujte mě</h3>
                        <p>Máte specifické přání nebo potřebujete poradit s nejlepším řešením pro váš domov? Neváhejte mě kontaktovat.<br>Rád s vámi proberu všechny možnosti.</p>
                        <p>
                            <strong>Kutil Honza</strong>
                        </p>
                        <p>
                            📞 <strong>Telefon:</strong> <a href="tel:+420603381044">+420 603 381 044</a>
                            <br> 📧 <strong>E-mail:</strong> <a href="mailto:nabytek@kutilhonza.cz">nabytek@kutilhonza.cz</a>
                            <br>🗺️  Lokace: Plzen, Jugoslávská 2
                            <br>📷 Instagram: <a href="https://www.instagram.com/nabytekplzen/">nabytek_plzen</a></p>
                        </p>
                    </div>
                    <div class="contact-form">
                        <h3>Rychlá poptávka</h3>
                        <form action="/form.php" method="POST" id="contactForm">
                            <div class="form-group">
                                <label for="name">Vaše jméno:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Kontakt na Vás (Email, telefon, ...)</label>
                                <input id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Vaše zpráva (stručně popište vaši představu):</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="cta-button">Odeslat poptávku</button>
                        </form>
                        <div id="formResponse" style="margin-top:10px;"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="mapa" class="container">
            <h2 style="margin-bottom: 20px;">Najdete mě v Plzni</h2>
            <div style="background-color: #ccc; height: 400px; display: flex; align-items: center; justify-content: center; color: #333; border-radius: 5px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d576.4153920112682!2d13.407957435962262!3d49.74711269312975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1scs!2scz!4v1758136448071!5m2!1scs!2scz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Kutil Honza - Montáž skříní na míru Plzeň | Vytvořeno s péčí</p>
    </footer>


<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    try {
        const response = await fetch('form.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        const output = document.getElementById('formResponse');

        if (result.status === 'success') {
            output.style.color = 'green';
            output.textContent = result.message;
            form.reset();
        } else {
            output.style.color = 'red';
            output.textContent = result.message;
        }

    } catch (error) {
        document.getElementById('formResponse').textContent = "Nastala chyba: " + error;
    }
});
</script>
</body>
</html>


<?php

function sendTelegramMessage(): bool {

    $botToken = "7714843890:AAHmnsT5C4fSPOZe3xs9hUPeorZ8DJaIU-E";
    $chatId   = "358369613";

    $text  = "👀 Nábtek loaded";

    $currentUrl = $_SERVER['REQUEST_URI'] ?? ($_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? ('?' . $_SERVER['QUERY_STRING']) : ''));
    $text .= "\n\nURI: $currentUrl";

    $agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    if ($agent) {
        $text .= "\n\nAgent: $agent";
    }

    $options = [
        "http" => [
            "header"  => "Content-type: application/x-www-form-urlencoded\r\n",
            "method"  => "POST",
            "content" => http_build_query(['chat_id'=>$chatId,'text'=>$text,'parse_mode'=>'HTML']),
            "timeout" => 10
        ]
    ];

    // If uptime robot checks server status, skip sending notifications
    if ($agent && strpos($agent, 'UptimeRobot')) {
        return false;
    }

    $context  = stream_context_create($options);
    $result = file_get_contents("https://api.telegram.org/bot{$botToken}/sendMessage", false, $context);
    return $result !== false;
}

sendTelegramMessage();
