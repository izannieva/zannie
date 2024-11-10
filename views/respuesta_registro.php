<?php
include '../views/header.php';
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';


?>
<body>
    <header>
        <h1><a href="home.php">PI - Pictures & Images</a></h1>
    </header>

    <h2>¡Registro Exitoso!</h2>
    <p>Gracias por registrarte, <strong><?php echo $username; ?></strong>. Ahora puedes iniciar sesión.</p>
    <a href="login.php">Ir a la página de inicio de sesión</a>

    <?php include '../views/footer.php'; ?>
</body>
</html>
