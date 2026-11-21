
#!/usr/bin/env bash
set -e

PORT="${PORT:-10000}"

# Configure Apache for Render
sed -i "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/000-default.conf

cd /var/www/html

# Prepare Laravel permissions
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache
mkdir -p database
mkdir -p public/uploads/eatery

chown -R www-data:www-data storage bootstrap/cache database public/uploads
chmod -R 775 storage bootstrap/cache database public/uploads

# Create SQLite database if it doesn't exist
touch database/database.sqlite
chown www-data:www-data database/database.sqlite
chmod 664 database/database.sqlite

# Create public storage link
php artisan storage:link --force

# Clear old cached configuration
php artisan config:clear

# Run database migrations
php artisan migrate --force

#Run db:seeder
php artisan db:seed --force

# Cache Laravel configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache
exec apache2-foreground
