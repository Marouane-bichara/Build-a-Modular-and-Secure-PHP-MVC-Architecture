<?php

namespace App\core;

use App\core\Http\Router;

require_once dirname(__DIR__). '/route/web.php';


class App
{


  public static function run()
  {
    
    
    $requestURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


    $requestmethod = $_SERVER['REQUEST_METHOD'];


    
    Router::matcheRoutes($requestURI, $requestmethod);

    
  }

}