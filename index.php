<?php

use proyecto\core\Request;
use proyecto\core\App;
use proyecto\app\exceptions\AppException;

try {
    require_once 'core/bootstrap.php';
    App::get('router')->direct(Request::uri(), Request::method());
} catch (AppException $appException) {
    $appException->handleError();
} catch (Exception $exception) {
    die($exception->getMessage());
}