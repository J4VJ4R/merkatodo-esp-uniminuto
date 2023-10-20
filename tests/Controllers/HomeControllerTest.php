<?php
namespace Grupo10\MerkaTodo\Tests\Controllers;

use Grupo10\MerkaTodo\Controllers\HomeController;
use Grupo10\MerkaTodo\Views\Home\IndexView;
use Grupo10\MerkaTodo\Views\PageView;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;

#[CoversClass(HomeController::class)]
#[UsesClass(PageView::class)]
#[UsesClass(IndexView::class)]
class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        // Arrange
        $request = $this->createMock(ServerRequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);
        $body = $this->createMock(StreamInterface::class);

        $homeController = new HomeController();

        // Assert
        $response->expects($this->once())
            ->method('getBody')
            ->willReturn($body);

        $body->expects($this->once())
            ->method('write')
            ->with(IndexView::show());

        // Act
        $homeController->index($request, $response);
    }
}