Laravel

Terminal

cd .. -c/users
cd .. -c 
cd xampp/htdocs
composer create-project laravel/laravel lsapp

clear

C:\xampp\apache\conf\extra

httpd-vhosts.conf

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost 
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/lsapp/public"
    ServerName lsapp.dev
</VirtualHost> 

Notpad - > Run as Admin

open

C:\Windows\System32\drivers\etc

hosts

127.0.0.1 localhost
127.0.0.1 lsapp.dev

route -> web.php	

Route::get('/about', function () {
    return view('pages.about');
});

$ php artisan make:controller PagesController
Controller created successfully.


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return 'INDEX';       
    }
}

Route::get('/','PagesController@index');

.env

APP_NAME=LSAPP


//Laravel Layout part

install blade vc

ext instal laravel-blade

Back to Bash
.....compile......
npm install
npm run dev
npm run watch

variables.scss
$body-bg change

new file custom.scss

getbootstrap.com
https://getbootstrap.com/docs/4.3/examples/starter-template/

php artisan make:controller PostsController
php artisan make:model Post -m
$ php artisan migrate

$ php artisan tinker

APP\Post::count()

>>> $post = new App\Post();
=> App\Post {#2873}
>>> $post->title='Article One'
=> "Article One"
>>> $post->body='This is the first Article';
=> "This is the first Article"
>>> $post->save();
=> true

delete postscontroller

$ php artisan make:controller PostsController --resource
Controller created successfully.

$ php artisan route:list
 
laravel collective

https://laravelcollective.com/docs/6.0/html

$ composer require "laravelcollective/html":"^5.4.0"


CKEditor Package
Note
This is NOT the official CKEDITOR package.

CKEDITOR officially has its own composer package since 2014. Instead of using this package, we recommend you follow the official CKEditor installation instructions with package managers

Installation

Set up package

composer require unisharp/laravel-ckeditor

Add ServiceProvider

Edit config/app.php, add the following file to Application Service Providers section.

Unisharp\Ckeditor\ServiceProvider::class,

