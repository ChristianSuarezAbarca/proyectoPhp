<?php

namespace proyecto\app\repository;
use proyecto\app\entity\Imagen;
use proyecto\app\entity\Categoria;
use proyecto\core\database\QueryBuilder;
use proyecto\core\App;

class ImagenesRepository extends QueryBuilder
{
    /**
     * @param string $table
     * @param string $classEntity
     */

     public function __construct(string $table = 'imagen', string $classEntity = Imagen::class)
    {
        parent::__construct($table, $classEntity);
    }

    /**
     * @param ImagenGaleria $imagenGaleria
     * @return Categoria
     * @throws NotFoundException
     * @throws QueryException
     */

    public function guarda(Imagen $imagenGaleria)
    {
        $fnGuardaImagen = function () use ($imagenGaleria) { // Creamos una función anónima que se llama como callable
            $this->save($imagenGaleria);
        };
        $this->executeTransaction($fnGuardaImagen); // Se pasa un callable
    }
}
