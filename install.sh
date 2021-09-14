cp .env.example .env
./vendor/bin/sail build
./vendor/bin/sail up -d
sleep 5
./vendor/bin/sail composer install && ./vendor/bin/sail down && ./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate:fresh --seed
echo "Copy and paste key below to APP_KEY= in the .env file:"
./vendor/bin/sail artisan key:generate --show
