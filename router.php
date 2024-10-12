<?php

$routes = require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
} else {
   abort();
}