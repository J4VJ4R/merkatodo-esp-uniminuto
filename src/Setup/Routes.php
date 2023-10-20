<?php
namespace Grupo10\MerkaTodo\Setup;

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

use Grupo10\MerkaTodo\Controllers\Api\ProductsController;
use Grupo10\MerkaTodo\Controllers\HomeController;

class Routes {
    public function __construct(
        private App $app
    ) {}

    public function setup() {
        $this->app->group('/api', function (RouteCollectorProxy $group){
            $group->get('/products', ProductsController::class . ':listProducts');
        });
        
        $this->app->get('/', HomeController::class . ':index');
    }
}