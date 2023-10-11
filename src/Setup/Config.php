<?php
namespace Grupo10\MerkaTodo\Setup;

use Dotenv\Dotenv;

class Config
{
    private static array $requiredEnv = [
        'DB_HOST',
        'DB_USER',
        'DB_PASSWORD',
        'DB_DATABASE',
    ];

    public function __construct(
        private $envDir
    ){}

    public function setup(): self
    {
        $dotEnv = Dotenv::createImmutable($this->envDir);
        $dotEnv->load();
        $dotEnv->required(self::$requiredEnv);

        return $this;
    }
}