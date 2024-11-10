<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // Elimina cualquier parámetro en la URL

var_dump($request);

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

    case '/':
        include 'views/home.php';
        break;

    case '/home':
        $page_title = "Inicio - Mi Proyecto";
        include 'views/home.php';
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
