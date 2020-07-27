<?php

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get("/", [\App\Controller\BlogController::class, 'index']);

$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
$respons = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

print_r($respons);