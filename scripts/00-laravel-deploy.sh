#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer dump-autoload
composer install --no-dev --no-scripts --working-dir=/var/www/html
composer update

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force