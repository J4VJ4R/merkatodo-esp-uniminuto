<?php
namespace Grupo10\MerkaTodo\Views\Api;

abstract class ApiView implements \JsonSerializable {
    protected abstract function toArrayRepresentation(): array;

    public static function show($data): string {
        return (new static($data))->__toString();
    }

    public function __construct(protected $data) {}

    public function jsonSerialize(): mixed {
        return $this->toArrayRepresentation();
    }

    public function __toString() {
        return json_encode($this, JSON_THROW_ON_ERROR);
    }
}