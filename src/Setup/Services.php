<?php
namespace Grupo10\MerkaTodo\Setup;

use DI\Container;
use Grupo10\MerkaTodo\Infrastructure\InMemory\ProductsRepository;
use Psr\Container\ContainerInterface;

use Grupo10\MerkaTodo\Models\Products\IProductsRepository;

class Services extends Container {

    public function setup(): Container {
        $this->set(
            IProductsRepository::class,
            fn(ContainerInterface $container) => new ProductsRepository()
        );
        return $this;
    }
}