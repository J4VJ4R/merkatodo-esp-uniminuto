<?php
require __DIR__ . '/../vendor/autoload.php';

use DI\Bridge\Slim\Bridge;

use Grupo10\MerkaTodo\Setup\Config;
use Grupo10\MerkaTodo\Setup\Services;
use Grupo10\MerkaTodo\Setup\Routes;

(new Config(dirname(__DIR__)))->setup();

$app = Bridge::create((new Services())->setup());

(new Routes($app))->setup();

$app->run();