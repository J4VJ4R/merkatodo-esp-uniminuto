<?php
namespace Grupo10\MerkaTodo\Controllers\Api;

use Grupo10\MerkaTodo\Models\Products\IProductsRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProductsController
{

    public function __construct(
        private IProductsRepository $productsRepository
    ) {
    }

    public function get(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $products = $this->productsRepository->listProducts();

        $response->getBody()->write(json_encode($products));
        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}