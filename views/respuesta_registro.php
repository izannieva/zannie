<?php
session_start();
include '../views/header.php';


$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : '';


if (empty($username)) {
    header("Location: registro.php");
    exit;
}


unset($_SESSION['username']);
?>
<body>
    <header>
        <h1><a href="home_registrado.php">PI - Pictures & Images</a></h1>
    </header>

    <h2>¡Registro Exitoso!</h2>
    <p>Gracias por registrarte, <strong><?php echo $username; ?></strong>. Ahora puedes iniciar sesión.</p>
    <a href="login.php">Ir a la página de inicio de sesión</a>

    <?php include '../views/footer.php'; ?>
</body>
</html>
