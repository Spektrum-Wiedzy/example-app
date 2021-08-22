cp .env.example .env
./vendor/bin/sail up -d
sleep 5
./vendor/bin/sail composer install && ./vendor/bin/sail down && ./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate:fresh --seed
./vendor/bin/sail artisan key:generate --show
