<?php

namespace proyecto\app\controllers;

use proyecto\core\helpers\FlashMessage;
use proyecto\core\Response;
use proyecto\app\exceptions\ValidationException;
use proyecto\app\repository\UsuarioRepository;
use proyecto\core\App;
use proyecto\app\entity\Usuario;
use proyecto\core\Security;

class AuthController
{
    public function login()
    {
        if (isset($_SESSION['loguedUser'])) {
            App::get('router')->redirect('');
        }

        $errores = FlashMessage::get('login-error', []);
        $username = FlashMessage::get('username');
        Response::renderView('login', 'layout', compact('errores', 'username'));
    }

    public function checkLogin()
    {
        try {
            if (!isset($_POST['username']) || empty($_POST['username']))
                throw new ValidationException('Debes introducir el usuario y el password');
            FlashMessage::set('username', $_POST['username']);

            if (!isset($_POST['password']) || empty($_POST['password']))
                throw new ValidationException('Debes introducir el usuario y el password');

            $usuario = App::getRepository(UsuarioRepository::class)->findOneBy([
                'username' => $_POST['username']
            ]);

            if (!is_null($usuario) && Security::checkPassword($_POST['password'], $usuario->getPassword())) {
                $_SESSION['loguedUser'] = $usuario->getId();
                FlashMessage::unset('username');
                App::get('router')->redirect('');
            }
            throw new ValidationException('El usuario y el password introducidos no existen');
        } catch (ValidationException $validationException) {
            FlashMessage::set('login-error', [$validationException->getMessage()]);
            App::get('router')->redirect('login');
        }
    }

    public function logout()
    {
        if (isset($_SESSION['loguedUser'])) {
            $_SESSION['loguedUser'] = null;
            unset($_SESSION['loguedUser']);
        }
        App::get('router')->redirect('login');
    }

    public function registro()
    {
        $errores = FlashMessage::get('registro-error', []);
        $mensaje = FlashMessage::get('mensaje');
        $username = FlashMessage::get('username');
        Response::renderView('registro', 'layout', compact('errores', 'username'));
    }

    public function checkRegistro()
    {
        try {
            $usuarioComprobacion = App::getRepository(UsuarioRepository::class)->findOneBy([
                'username' => $_POST['username']
            ]);

            if (!is_null($usuarioComprobacion)) {
                throw new ValidationException('Este nombre de usuario ya existe');
            } else {
                if (!isset($_POST['username']) || empty($_POST['username']))
                    throw new ValidationException('El nombre de usuario no puede estar vacío');

                FlashMessage::set('username', $_POST['username']);

                if (!isset($_POST['password']) || empty($_POST['password']))
                    throw new ValidationException('El password de usuario no puede estar vacío');

                if (!isset($_POST['re-password']) || empty($_POST['re-password']) || $_POST['password'] !== $_POST['re-password'])
                    throw new ValidationException('Los dos password deben ser iguales');

                $password = Security::encrypt($_POST['password']);
                $usuario = new Usuario();
                $usuario->setUsername($_POST['username']);
                $usuario->setRole('ROLE_USER');
                $usuario->setPassword($password);

                App::getRepository(UsuarioRepository::class)->save($usuario);
                FlashMessage::unset('username');
                $mensaje = "Se ha creado el usuario: " . $usuario->getUsername();
                App::get('logger')->add($mensaje);
                FlashMessage::set('mensaje', $mensaje);
                App::get('router')->redirect('login');
            }
        } catch (ValidationException $validationException) {
            FlashMessage::set('registro-error', [$validationException->getMessage()]);
            App::get('router')->redirect('registro');
        }
    }
}
