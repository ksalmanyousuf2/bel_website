# PHP Upload Limits Configuration

## Current Issue
The application is experiencing "POST data is too large" errors due to PHP's default upload limits being too low.

## Solutions

### Option 1: Use the Update Script (Easiest - Recommended)

Run the provided script to automatically update your PHP configuration:
```bash
bash update_php_limits.sh
```

This script will:
- Backup your current php.ini file
- Update `post_max_size` to 25M
- Update `upload_max_filesize` to 20M
- Update `memory_limit` to 256M
- Provide instructions for restarting your server

**Note:** You'll need to enter your password when prompted for sudo access.

### Option 2: Manual php.ini Update

1. Find your php.ini file location:
   ```bash
   php --ini
   ```

2. Edit the php.ini file and update these values:
   ```ini
   upload_max_filesize = 20M
   post_max_size = 25M
   max_execution_time = 300
   max_input_time = 300
   memory_limit = 256M
   ```

3. Restart your web server/PHP-FPM:
   ```bash
   # For PHP-FPM
   brew services restart php
   
   # For Laravel Valet
   valet restart
   
   # Or restart your web server (Apache/Nginx)
   ```

### Option 2: .htaccess (Already Configured)
The `.htaccess` file in the `public` directory has been updated with PHP limits. This works if:
- You're using Apache with mod_php enabled
- Your server allows .htaccess overrides

### Option 3: Nginx Configuration
If using Nginx, add to your server block:
```nginx
client_max_body_size 25M;
```

### Option 4: PHP-FPM Configuration
If using PHP-FPM, update `/etc/php/8.x/fpm/php.ini`:
```ini
upload_max_filesize = 20M
post_max_size = 25M
```

## Verification
After making changes, verify the new limits:
```bash
php -i | grep -E "post_max_size|upload_max_filesize|memory_limit"
```

## Current Limits (Updated)
- Upload max file size: 20MB (increased from 2MB)
- POST max size: 25MB (increased from 8MB)
- Memory limit: 256MB (increased from 128MB)
- Validation max: 10MB per file (increased from 2MB)

