<?php
namespace Grupo10\MerkaTodo\Views\Api\Products;

use Grupo10\MerkaTodo\Views\Api\ApiView;

final class ListProductsView extends ApiView implements \Stringable
{
    /**
     * @var \Grupo10\MerkaTodo\Models\Products\Product[]
     */
    protected $data;

    protected function toArrayRepresentation(): array
    {
        $results = [];
        foreach($this->data as $product) {
            $results[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'description' => $product->getDescription(),
            ];
        }

        return $results;
    }
}