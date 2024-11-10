<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // Elimina cualquier parámetro en la URL

switch ($request) {
    case '/daw/':
        include 'views/home.php';
    case '/daw/home':
    case '/daw/index':
    case '/':
    case '/home':
        // Configura el título de la página si es necesario
        $page_title = "Inicio - Mi Proyecto";
        include 'views/home.php';
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
