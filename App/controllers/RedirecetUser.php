<?php
namespace App\controllers;
use App\core\path\Path;

class RedirecetUser extends Path {

    public function __construct() {
        parent::__construct(); // Calls Path's constructor to initialize Twig
    }

    public function homePage() {
        $data = [
            'name' => 'John Doe'
        ];
        echo $this->twig->render('home.twig', $data); 
        exit;
    }

    public function authPage() {
        $data = [
            'name' => 'John Doe'
        ];
        echo $this->twig->render('auth/auth.twig', $data); 
        exit;
    }
}



?>