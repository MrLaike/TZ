<?php

include 'autoload.php';

Autoloader::register();


$router = new \Kernel\Router();


//$router->get();
$client = new \App\Controllers\ClientController();


$client->index();
//$class = new \ReflectionClass('OrderController');

echo 'HellWorld';

