<?php
include '../views/header.php'; 
?>
<body>
<header>
    <h1><a href="home_registrado.php">PI - Pictures & Images</a></h1>
    <nav>
        <ul>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="busqueda.php">Buscar fotos</a></li>
            <li><a href="registro.php">Registro</a></li>
        </ul>
    </nav>
</header>

<section class="content-container">
    <h2>Iniciar sesión</h2>
    <?php
  
    if (isset($_GET['error']) && $_GET['error'] == '1') {
        echo "<p style='color:red; text-align: center;'>Usuario o contraseña incorrectos. Inténtalo de nuevo.</p>";
    }
    ?>
    <form id="formulario_login" action="control_acceso.php" method="post">
        <label for="login_usuario">Usuario:</label>
        <input type="text" id="login_usuario" name="usuario" required>
        <span class="error-message" id="usernameError"></span>
        
        <label for="login_contraseña">Contraseña:</label>
        <input type="password" id="login_contraseña" name="contraseña" required>
        <span class="error-message" id="passwordError"></span>
        
        <button type="submit">Entrar</button>
    </form>
</section>


<section class="registro-boton">
    <a href="registro.php" class="btn-registrarse">Regístrate con nosotros</a>
</section>

<script src="validacion.js"></script>
</body>
<?php
include '../views/footer.php'; 
?>
