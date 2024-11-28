<?php
$router->get ("", 'PagesController@index');
$router->get ('about', 'PagesController@about');
$router->get ('blog', 'PagesController@blog');
$router->get ('contact', 'PagesController@contact');
$router->get ('coffees', 'PagesController@coffees');
$router->get ('profile', 'PagesController@profile');
$router->get ('users', 'PagesController@users');
$router->get ('galeria', 'GaleriaController@index', 'ROLE_USER');
$router->post('galeria/nueva', 'GaleriaController@nueva', 'ROLE_USER');
$router->get ('galeria/:id', 'GaleriaController@show', 'ROLE_USER');
$router->get ('login', 'AuthController@login');
$router->post('check-login', 'AuthController@checkLogin');
$router->get ('logout', 'AuthController@logout');
$router->get ('registro', 'AuthController@registro');
$router->post('check-registro', 'AuthController@checkRegistro');
