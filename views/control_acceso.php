<?php
session_start();


$usuarios_permitidos = [
    'ADMIN' => '1234',
    'izan' => '12345',
    'Lamine' => 'Yamal',
    'Duki' => 'Duko'
];


$estilos_usuario = [
    'ADMIN' => 'alto_contraste.css',  
    'izan' => 'modo_noche.css',       
    'Lamine' => 'Lamine.css',         
    'Duki' => 'styles.css'
];


$usuario = isset($_POST['username']) ? trim($_POST['username']) : '';
$contraseña = isset($_POST['password']) ? trim($_POST['password']) : '';
$recordarme = isset($_POST['recordarme']) ? true : false;


if (array_key_exists($usuario, $usuarios_permitidos) && $usuarios_permitidos[$usuario] === $contraseña) {
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['hora_acceso'] = date('d-m-Y H:i:s');
    $_SESSION['estilo'] = $estilos_usuario[$usuario];

    
    if ($usuario === 'izan') {
        $_SESSION['extra_css'] = 'font-weight-bold';
    } else {
        $_SESSION['extra_css'] = '';
    }

   
    if ($recordarme) {
        setcookie('username', $usuario, time() + (90 * 24 * 60 * 60), "/");
        setcookie('password', $contraseña, time() + (90 * 24 * 60 * 60), "/");
        setcookie('estilo', $_SESSION['estilo'], time() + (90 * 24 * 60 * 60), "/");
        setcookie('last_visit', $_SESSION['hora_acceso'], time() + (90 * 24 * 60 * 60), "/");
    } else {
        
        setcookie('username', '', time() - 3600, "/");
        setcookie('password', '', time() - 3600, "/");
        setcookie('estilo', '', time() - 3600, "/");
        setcookie('last_visit', '', time() - 3600, "/");
    }

    
    header("Location: home_registrado.php");
    exit();
} else {
    
    $_SESSION['flashdata']['error'] = 'Usuario o contraseña incorrectos.';
    header("Location: login.php");
    exit();
}
?>
