cd ../
git init
git status
git remote add origin https://github.com/AndreyPadalka/laravelsite.git
git remote

git add .
git commit -m "07.02.2022"
git push -u origin master

git clone

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

php composer.phar global require laravel/installer
php composer.phar create-project --prefer-dist laravel/laravel laravelsite

npm i
npm run dev
npm run watch
php artisan key:generate
php artisan make:controller ContactControler
php artisan make:request ContactRequest
php artisan make:model Contact -m
php artisan migrate
php artisan migrate:rollback --step=3
php artisan migrate:reset

php artisan config:cache //Configuration cache cleared!
php artisan make:model Contact -m
php artisan migrate