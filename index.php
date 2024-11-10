<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inicia la sesión si es necesario
//session_start();

// Incluye el enrutador
echo "Pasando por index.php";
require_once 'router.php';
