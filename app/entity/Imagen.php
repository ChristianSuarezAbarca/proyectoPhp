<?php
namespace proyecto\app\entity;
use proyecto\core\database\QueryBuilder;
use proyecto\core\database\IEntity;

class Imagen extends QueryBuilder implements IEntity
{
    const RUTA_IMAGENES_SUBIDAS = '/public/images/upload/';

    private $id;
    private $nombre;
    private $descripcion;
    private $titulo;
    private $numLikes;

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'titulo' => $this->getTitulo(),
            'nombre' => $this->getNombre(),
            'descripcion' => $this->getDescripcion(),
            'numLikes' => $this->getNumLikes()
        ];
    }
    public function __construct($nombre = "", $descripcion = "", $titulo = "", $numLikes = 0)
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->titulo = $titulo;
        $this->numLikes = $numLikes;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }

    public function setNombre(string $nombre): Imagen
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setDescripcion(string $descripcion): Imagen
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setTitulo(string $titulo): Imagen
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function setNumLikes(int $numLikes): Imagen
    {
        $this->numLikes = $numLikes;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getNumLikes()
    {
        return $this->numLikes;
    }

    public function getUrlImagenes(): string
    {
        return self::RUTA_IMAGENES_SUBIDAS . $this->getNombre();
    }
}
