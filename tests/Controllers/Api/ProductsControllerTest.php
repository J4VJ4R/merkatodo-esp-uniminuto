<?php
namespace Grupo10\MerkaTodo\Tests\Controllers\Api;

use Grupo10\MerkaTodo\Controllers\Api\ProductsController;
use Grupo10\MerkaTodo\Models\Products\IProductsRepository;
use Grupo10\MerkaTodo\Models\Products\Product;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;

class ProductsControllerTest extends TestCase
{
    public function testListProducts()
    {
        // Arrange
        $productsRepository = $this->createMock(IProductsRepository::class);
        $request = $this->createMock(ServerRequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);
        $body = $this->createMock(StreamInterface::class);

        // Assert
        $productsRepository
            ->expects($this->once())
            ->method('listProducts')
            ->willReturn([
                new Product(id: 1, name: "A", description: "A"),
                new Product(id: 2, name: "B", description: "B"),
                new Product(id: 3, name: "C", description: "C"),
            ]);

        $response->expects($this->once())
            ->method('getBody')
            ->willReturn($body);

        $response->expects($this->once())
            ->method('withHeader')
            ->with('Content-Type', 'application/json')
            ->willReturn($response);

        $body->expects($this->once())
            ->method('write')
            ->with('[{"id":1,"name":"A","description":"A"},{"id":2,"name":"B","description":"B"},{"id":3,"name":"C","description":"C"}]');

        $productsController = new ProductsController($productsRepository);

        // Act
        $productsController->listProducts($request, $response);
    }
}