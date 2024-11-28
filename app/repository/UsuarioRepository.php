<?php

namespace proyecto\app\repository;
use proyecto\core\database\QueryBuilder;
use proyecto\app\entity\Usuario;

class UsuarioRepository extends QueryBuilder
{
    public function __construct(string $table = 'usuario', string $classEntity = Usuario::class)
    {
        parent::__construct($table, $classEntity);
    }
}