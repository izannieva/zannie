<?php
include '../views/header.php'; 
session_start(); 

if (isset($_SESSION['estilo'])) {
    $estilo = $_SESSION['estilo'];
} elseif (isset($_COOKIE['estilo'])) {
    $estilo = $_COOKIE['estilo'];
} else {
    $estilo = 'styles.css'; 
}


if (isset($_SESSION['flashdata']['error'])) {
    echo "<p style='color:red; text-align: center;'>" . $_SESSION['flashdata']['error'] . "</p>";
    unset($_SESSION['flashdata']['error']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../styles/<?php echo $estilo; ?>">
</head>
<body>
    <section class="content-container">
        <h2>Iniciar sesión</h2>
        <form id="formulario_login" action="control_acceso.php" method="post">
            
            <label for="login_usuario">Usuario:</label>
            <input type="text" id="login_usuario" name="username" value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" required>
            
            <label for="login_contraseña">Contraseña:</label>
            <input type="password" id="login_contraseña" name="password" value="<?php echo isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : ''; ?>" required>
            
            <div class="recordarme-container">
                <input type="checkbox" id="recordarme" name="recordarme" value="yes" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                <label for="recordarme">Recordarme en este equipo</label>
            </div>
            
            <button type="submit">Entrar</button>
        </form>
    </section>
    <section class="registro-boton">
        <a href="registro.php" class="btn-registrarse">Regístrate con nosotros</a>
    </section>
</body>
<?php include '../views/footer.php'; ?>
