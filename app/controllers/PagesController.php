<?php

namespace proyecto\app\controllers;

use proyecto\core\App;
use proyecto\core\Response;
use proyecto\app\repository\ImagenesRepository;

class PagesController
{
    public function index()
    {
        Response::renderView(
            'index',
            'layout-home'
        );
    }

    public function about()
    {
        Response::renderView(
            'about',
            'layout'
        );
    }

    public function blog()
    {
        Response::renderView(
            'blog',
            'layout'
        );
    }

    public function contact()
    {
        Response::renderView(
            'contact',
            'layout'
        );
    }

    public function coffees()
    {
        $imagenes = App::getRepository(ImagenesRepository::class)->findAll();
        Response::renderView(
            'coffees',
            'layout',
            compact('imagenes')
        );
    }

    public function profile()
    {
        Response::renderView(
            'profile',
            'layout'
        );
    }

    public function users()
    {
        Response::renderView(
            'users',
            'layout',
        );
    }
}
