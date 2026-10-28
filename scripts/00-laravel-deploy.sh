
#!/usr/bin/env bash
set -e

cd /var/www/html

composer install --no-dev --optimize-autoloader

php artisan config:clear
php artisan config:cache
php artisan view:cache

