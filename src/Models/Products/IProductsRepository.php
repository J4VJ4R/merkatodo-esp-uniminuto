<?php
namespace Grupo10\MerkaTodo\Models\Products;

interface IProductsRepository {
    /**
     * @return Product[]
     */
    public function listProducts();
}