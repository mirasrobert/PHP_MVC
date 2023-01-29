<?php

// autoload
require_once __DIR__.'/../vendor/autoload.php';

use app\Router;

use app\controllers\PostController;

$router = new Router();

// Define your routes here

$router->get('/', [PostController::class, 'index']);
$router->get('/show', [PostController::class, 'show']);

$router->resolve();