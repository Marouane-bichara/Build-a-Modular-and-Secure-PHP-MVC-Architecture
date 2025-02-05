<?php
namespace App\controllers;
class RedirecetUser{

    public function homePage(){
        include dirname(__DIR__). '/views/home.php';
        exit;

    }

    public function aboutPage()
    {
        include dirname(__DIR__). '/views/about.php';
        exit;   
    }
}

?>