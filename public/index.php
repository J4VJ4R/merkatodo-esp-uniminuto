<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Routing\RouteCollectorProxy;
use DI\Bridge\Slim\Bridge;

use Grupo10\MerkaTodo\Controllers\Api\ProductsController;
use Grupo10\MerkaTodo\Controllers\HomeController;
use Grupo10\MerkaTodo\Setup\Services;

$app = Bridge::create((new Services())->setup());

$app->group('/api', function (RouteCollectorProxy $group){
    $group->get('/products', ProductsController::class . ':get');
});

$app->get('/', HomeController::class . ':index');

$app->run();