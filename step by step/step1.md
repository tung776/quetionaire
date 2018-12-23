1. cài đặt laravel installer golble
composer global require laravel/installer
cài đặt dự án bằng cách chạy câu lệnh sau trong cmd
==========================
laravel new questionaires
==========================
2. cài đặt bộ khung authentication
==========================
php artisan make:auth
==========================
3. Tạo cơ sở dũ liệu bằng phpmyadmin questionaire và sửa lại .env
==========================
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=questionaire
DB_USERNAME=root
DB_PASSWORD=tung1221982
==========================
4. chạy lệnh sau trong cmd
==========================
php artisan migrate
trong trường hợp bị lỗi thì chạy lại bằng lệnh
php artisan migrate:fresh
==========================

