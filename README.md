# nabytek.kutilhonza.cz

Static one-page site (vestavěné skříně na míru) served by **GitHub Pages** from `docs/`
(custom domain in `docs/CNAME`, proxied through Cloudflare).

The inquiry form posts to `/api/poptavka`, handled by the Cloudflare Worker
**nabytek-poptavka** (source in `worker/poptavka.js`, route `nabytek.kutilhonza.cz/api/*`),
which forwards it to Telegram. The bot token is a Worker secret (`BOT_TOKEN`), never in the page.

Deploy: push to `main` – Pages rebuilds automatically.
Local preview: `python3 -m http.server -d docs 8078` (the form needs the Worker, so it only works live).
