#!/bin/bash

# Script to update PHP upload limits
# Run this script with: bash update_php_limits.sh

PHP_INI="/usr/local/etc/php/8.2/php.ini"

if [ ! -f "$PHP_INI" ]; then
    echo "Error: PHP ini file not found at $PHP_INI"
    echo "Please find your php.ini file using: php --ini"
    exit 1
fi

echo "Updating PHP configuration in $PHP_INI..."

# Backup the original file
sudo cp "$PHP_INI" "$PHP_INI.backup"
echo "✓ Backup created at $PHP_INI.backup"

# Update the values
sudo sed -i '' 's/^post_max_size = 8M/post_max_size = 25M/' "$PHP_INI"
sudo sed -i '' 's/^upload_max_filesize = 2M/upload_max_filesize = 20M/' "$PHP_INI"
sudo sed -i '' 's/^memory_limit = 128M/memory_limit = 256M/' "$PHP_INI"

echo "✓ Updated post_max_size to 25M"
echo "✓ Updated upload_max_filesize to 20M"
echo "✓ Updated memory_limit to 256M"

echo ""
echo "Please restart your PHP/web server:"
echo "  - For PHP-FPM: brew services restart php"
echo "  - For Laravel Valet: valet restart"
echo "  - For Apache: sudo apachectl restart"
echo "  - For Nginx: sudo nginx -s reload"

echo ""
echo "Verify the changes with: php -i | grep -E 'post_max_size|upload_max_filesize|memory_limit'"

