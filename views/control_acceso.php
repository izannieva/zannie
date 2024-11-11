<?php

$usuarios_permitidos = [
    'ADMIN' => '1234',
    'izan' => '12345',
    'Lamine' => 'Yamal',
    'usuario4' => 'password4'
];


$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$contraseña = isset($_POST['contraseña']) ? trim($_POST['contraseña']) : '';

if (array_key_exists($usuario, $usuarios_permitidos) && $usuarios_permitidos[$usuario] === $contraseña) {
    
    header("Location: home_registrado.php");
    exit();
} else {
   
    header("Location: login.php?error=1");
    exit();
}
?>
