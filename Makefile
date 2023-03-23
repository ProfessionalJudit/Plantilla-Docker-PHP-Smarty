create-devel-image:
	docker compose build --no-cache
start-devel:
	docker compose build --no-cache
	docker compose up -d
stop-devel:
	docker compose down