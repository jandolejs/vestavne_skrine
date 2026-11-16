# Lokální vývoj (src/ je namapovaný do kontejneru). Produkce: ./deploy.sh na serveru.
up:
	docker compose -f docker-devel.yml up -d --build

down:
	docker compose -f docker-devel.yml down
