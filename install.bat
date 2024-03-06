@echo off

rem Install things.
call composer install
call npm install

rem Fix database.
php artisan migrate

echo Ejecutando servidor de NPM.
npm run dev