<?php

use App\Helpers\Router;

$router = Router::getInstance();

$router->post('/', 'simpleRequestHandler');
$router->post('/simpleRequest.php', 'simpleRequestHandler');
