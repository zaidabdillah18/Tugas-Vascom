#!/bin/sh

# Script entry point untuk melakukan tindakan sebelum menjalankan aplikasi

# Contoh: migrasi database jika ada perubahan pada schema
php artisan migrate


# Contoh: menjalankan perintah lain sebelum menjalankan server web
# npm install atau yarn install, jika Anda menggunakan frontend build tools

# Menjalankan server web
php-fpm