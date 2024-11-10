<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // Elimina cualquier parámetro en la URL

var_dump($request);
echo "pasando por el router de los cojones";

switch ($request) {
    case '/daw/':
        include 'views/home.php';
        break;

    case '/daw/home':
        include 'views/home.php';
        break;

    case '/daw/index':
        include 'views/home.php';
        break;

    case '/daw/login':
        include 'views/login.php';
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
