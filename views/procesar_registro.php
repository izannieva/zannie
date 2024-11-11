<?php
session_start();
$errors = [];


if (empty($_POST['username']) || strlen($_POST['username']) < 5) {
    $errors['usernameError'] = "El nombre de usuario debe tener al menos 5 caracteres.";
}


if (empty($_POST['password']) || strlen($_POST['password']) < 8) {
    $errors['passwordError'] = "La contraseña debe tener al menos 8 caracteres.";
}


if ($_POST['password'] !== $_POST['confirm_password']) {
    $errors['confirmPasswordError'] = "Las contraseñas no coinciden.";
}


if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['emailError'] = "Introduce un correo electrónico válido.";
}


if (empty($_POST['sexo'])) {
    $errors['genderError'] = "Selecciona un género.";
}


if (empty($_POST['birthdate'])) {
    $errors['birthdateError'] = "Introduce tu fecha de nacimiento.";
}


if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($_FILES['photo']['type'], $allowedTypes)) {
        $errors['photoError'] = "Solo se permiten archivos de imagen (JPG, PNG, GIF).";
    }
}


if (!empty($errors)) {
   
    $errorQuery = http_build_query($errors);
    header("Location: registro.php?$errorQuery");
    exit;
} else {
   
    $_SESSION['username'] = $_POST['username'];
  
    header("Location: respuesta_registro.php");
    exit;
}
?>
