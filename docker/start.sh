
#!/usr/bin/env bash
set -e

PORT="${PORT:-10000}"

# Configure Apache to use Render's assigned port
sed -i "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/000-default.conf

cd /var/www/html

# Create Laravel public storage link
php artisan storage:link --force

# Prepare production caches
php artisan config:clear
php artisan config:cache
php artisan view:cache

# Start Apache
exec apache2-foreground
