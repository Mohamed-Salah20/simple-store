environment setup
----------
#first make sure that php 7.3^ & mysql are installed

php -v
mysql --version

#if not then install xampp https://www.apachefriends.org/

#then make sure that composer is installed

composer -v

#if not then download it https://getcomposer.org/


#create a new database named 'laravel' in mysql through localhost/phpmyadmin




run the following commands in terminal in the projects root directory:
------------------------------

cp .env.example .env

composer install

npm install

npm run dev

php artisan storage:link

php artisan migrate --seed

php artisan serve


to access dashboard:
------------

url/login

email:admin@admin.com

password:1234

