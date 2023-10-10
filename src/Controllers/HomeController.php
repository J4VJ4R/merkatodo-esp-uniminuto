<?php
namespace Grupo10\MerkaTodo\Controllers;
use Grupo10\MerkaTodo\Views\Home\IndexView;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController {

    public function index(Request $request, Response $response): Response {
        $response->getBody()->write(IndexView::show());
        return $response;
    }
}