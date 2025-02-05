<?php
namespace App\core\path;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Path {
    protected $twig;

    public function __construct() {
        // Correct path to views folder
        $loader = new FilesystemLoader(dirname(__DIR__, 2) . '/views');
        $this->twig = new Environment($loader, [
            'cache' => false, // Disable cache for development
        ]);
    }
}


?>