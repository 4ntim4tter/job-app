#!/usr/bin/env bash
echo "Running composer"
composer global require laravel/installer
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache
php artisan optimize
php artisan storage:link

echo "Running migrations..."
php artisan migrate
