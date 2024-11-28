<?php

namespace proyecto\app\controllers;

use proyecto\app\exceptions\AppException;
use proyecto\app\exceptions\QueryException;
use proyecto\app\repository\ImagenesRepository;
use proyecto\core\App;
use proyecto\app\utils\File;
use proyecto\app\entity\Imagen;
use proyecto\app\exceptions\FileException;
use proyecto\app\exceptions\CategoriaException;
use proyecto\core\Response;
use proyecto\core\helpers\FlashMessage;

class GaleriaController
{
    public function index()
    {
        $errores = [];
        $descripcion = '';
        $mensaje = '';
        $titulo = '';
        try {
            $imagenesRepository = App::getRepository(ImagenesRepository::class);
            $imagenes = $imagenesRepository->findAll();
            $fileException = new FileException();
        } catch (QueryException $queryException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        } catch (AppException $appException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        }

        $errores = FlashMessage::get('errores', []);
        $mensaje = FlashMessage::get('mensaje');
        $descripcion = FlashMessage::get('descripcion');

        Response::renderView(
            'galeria',
            'layout',
            compact("imagenes", "imagenesRepository", "errores", "mensaje", "titulo", "descripcion")
        );
    }

    public function nueva()
    {
        $errores = [];
        $titulo = "";
        $descripcion = "";
        $mensaje = "";
        try {
            $titulo = trim(htmlspecialchars($_POST['titulo']));
            $descripcion = trim(htmlspecialchars($_POST['descripcion']));
            FlashMessage::set('descripcion', $descripcion);
            $tiposAceptados = ['image/jpeg', 'image/gif', 'image/png'];
            $imagen = new File('imagen', $tiposAceptados); // El nombre 'imagen' es el que se ha puesto en el formulario de galeria.view.php
            $imagen->saveUploadFile(Imagen::RUTA_IMAGENES_SUBIDAS);
            $imagenGaleria = new Imagen($imagen->getFileName(), $descripcion, $titulo);
            $imagenesRepository = App::getRepository(ImagenesRepository::class);
            $imagenesRepository->guarda($imagenGaleria);
            $mensaje = "Se ha guardado una imagen: " . $imagenGaleria->getNombre();
            App::get('logger')->add($mensaje);
            $_SESSION['mensaje'] = $mensaje;
            $fileException = new FileException();
        } catch (FileException $fileException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        } catch (QueryException $queryException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        } catch (AppException $appException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        } catch (CategoriaException) {
            FlashMessage::set('errores' , [$fileException->getMessage()]);
        }

        FlashMessage::unset('descripcion');
        App::get('router')->redirect('galeria');
    }

    public function show($id)
    {
        $imagenesRepository = App::getRepository(ImagenesRepository::class);
        $imagen = $imagenesRepository->find($id);
        Response::renderView(
            'imagen-show',
            'layout',
            compact('imagen', 'imagenesRepository')
        );
    }
}
