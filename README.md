##Cara Install
1. pastikan sudah menginstall composer
2. pull project nya
```sh
git init
git remote add origin https://github.com/KP-Digitiket/ukt-API.git
git branch -m 'main'
git pull origin main
```
3. lakukan installasi package 
```sh
composer update
```
4. buat database baru bernama "ukt-api"
5. edit .env
```sh
...
DB_DATABASE=ukt-api
...
```
6. jalankan aplikasi
```sh
php artisan serve
```
