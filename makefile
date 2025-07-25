.PHONY: setup

APP_CONTAINER 	= kreative_monolito_app

setup:
	docker-compose up -d --build && \
	docker exec -ti $(APP_CONTAINER) sh -c "composer install && \
		chown -R www-data:www-data storage bootstrap/cache && \
		chmod -R 775 storage bootstrap/cache && \
		cp .env.example .env && \
		php artisan key:generate && \
		php artisan migrate" && \
	docker-compose restart $(APP_CONTAINER) kreative_monolito_db