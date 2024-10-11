<?php 

require('functions.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$routes = [
    '/admin' => 'controllers/admin/index.php',
    '/admin/calendar' => 'controllers/admin/calendar.php',
    '/admin/patients' => 'controllers/admin/patients.php',
];

if (array_key_exists($uri, $routes)){
    echo "Route found: " . $routes[$uri] . "<br>"; // Debugging line
    require $routes[$uri];
} else {
   abort();
}