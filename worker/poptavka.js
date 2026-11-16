// Cloudflare Worker "nabytek-poptavka" – route nabytek.kutilhonza.cz/api/*
// Receives the inquiry form from docs/index.html and forwards it to Telegram.
// Secret BOT_TOKEN (Telegram bot token) is set in the Cloudflare dashboard, CHAT_ID is a plain variable.

const json = (body, status = 200) =>
    new Response(JSON.stringify(body), { status, headers: { "Content-Type": "application/json" } });

const clean = (v, max) => String(v ?? "").trim().slice(0, max);

export default {
    async fetch(request, env) {
        const url = new URL(request.url);
        if (url.pathname !== "/api/poptavka") return json({ error: "not found" }, 404);
        if (request.method !== "POST") return json({ error: "method not allowed" }, 405);

        let d;
        try { d = await request.json(); } catch { return json({ error: "bad json" }, 400); }
        if (d.web) return json({ ok: true }); // honeypot – pretend success to bots

        const contact = clean(d.contact, 200);
        const message = clean(d.message, 3000);
        if (!contact || !message) return json({ error: "missing fields" }, 400);

        const text =
            `Poptávka (${clean(d.lead_type, 50) || "?"}) – nabytek.kutilhonza.cz\n` +
            `Jméno: ${clean(d.name, 200) || "-"}\n` +
            `Kontakt: ${contact}\n` +
            `Zpráva: ${message}`;

        const r = await fetch(`https://api.telegram.org/bot${env.BOT_TOKEN}/sendMessage`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ chat_id: env.CHAT_ID, text }),
        });
        if (!r.ok) {
            const t = await r.json().catch(() => ({}));
            console.log("telegram error", r.status, t.description);
            return json({ error: "telegram", status: r.status }, 502);
        }
        return json({ ok: true });
    },
};
