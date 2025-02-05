<?php


use App\core\Http\Router;



Router::get('home', 'RedirecetUser@homePage');
Router::get('', 'RedirecetUser@homePage');

Router::get('about', 'RedirecetUser@aboutPage');


Router::post('home', 'HomeController@sendData');


