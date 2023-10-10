<?php
namespace Grupo10\MerkaTodo\Infrastructure\InMemory;

use Grupo10\MerkaTodo\Models\Products\IProductsRepository;
use Grupo10\MerkaTodo\Models\Products\Product;

class ProductsRepository implements IProductsRepository {
    /**
     * @return Product[]
     */
    public function listProducts() {
        return [
            new Product(id: 1, name: "Jabón Líquido Fab", description: "Un Jabón líquido."),
            new Product(id: 2, name: "Jabón Fab en Barra", description: "Una Barra de Jabón."),
            new Product(id: 3, name: "Shampoo Johnson", description: "Shampoo para el cabello seco."),
            new Product(id: 4, name: "Detergente Ariel", description: "Detergente en polvo."),
            new Product(id: 5, name: "Suavisante Vel Rosita", description: "No, no estás estrenando, es Vel Rosita."),
        ];
    }
}