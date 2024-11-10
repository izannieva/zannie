<?php

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$email = trim($_POST['email']);


$errors = [];

if (empty($username)) {
    $errors['usernameError'] = "El nombre de usuario es obligatorio.";
}


if (empty($password)) {
    $errors['passwordError'] = "La contraseña es obligatoria.";
} elseif ($password !== $confirm_password) {
    $errors['confirmPasswordError'] = "Las contraseñas no coinciden.";
}


if (empty($email)) {
    $errors['emailError'] = "El correo electrónico es obligatorio.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['emailError'] = "El correo electrónico no es válido.";
}

if (!empty($errors)) {
    $query = http_build_query($errors) . "&username=" . urlencode($username) . "&email=" . urlencode($email);
    header("Location: registro.php?$query");
    exit();
}


header("Location: respuesta_registro.php?username=" . urlencode($username));
exit();
