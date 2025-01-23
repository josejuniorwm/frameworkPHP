<?php


require_once  '../vendor/autoload.php';
//require_once '../App/route.php';

$route = new App\Route;

echo '<pre>';
print_r($route->getUrl());
echo '</pre>';

echo '<hr>';

print_r($route->getRoutes());



?>