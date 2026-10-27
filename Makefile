IMAGE = ghcr.io/jandolejs/vestavne_skrine:latest

build:
	docker build --platform linux/amd64 -t $(IMAGE) .

up:
	docker compose up -d

down:
	docker compose down

rm:
	docker compose rm -f

push:
	docker push $(IMAGE)
