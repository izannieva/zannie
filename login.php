<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - PI</title>
    <link rel="stylesheet" href="styles/styles.css" title="estilos por defecto">
    <link rel="alternate stylesheet" href="styles/modo_noche.css" title="Modo Noche">
    <link rel="alternate stylesheet" href="styles/alto_contraste.css" title="Alto contraste">
    <link rel="alternate stylesheet" href="styles/mejorar_accesibilidad.css" title="Mejorar accesibilidad" media="print">
    <link rel="alternate stylesheet" href="styles/modo_impresion.css" title="Modo impresión">
    <link rel="alternate stylesheet" href="styles/letra_grande.css" title="Letra grande">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <h1><a href="index_registrado.php">PI - Pictures & Images</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="busqueda.php">Buscar fotos</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Iniciar sesión</h2>
        <form id="formulario_login" action="index_registrado.php" method="get">
            <label for="login_usuario">Usuario:</label>
            <input type="text" id="login_usuario" name="login_usuario">
            <span class="error-message" id="usernameError"></span>
            
            <label for="login_contraseña">Contraseña:</label>
            <input type="password" id="login_contraseña" name="login_contraseña">
            <span class="error-message" id="passwordError"></span>
            
            <button type="submit">Entrar</button>
        </form>
    </section>
    
    
    <section class="registro-boton">
        <a href="registro.php" class="btn-registrarse">Regístrate con nosotros</a>
    </section>

  
    <script src="validacion.js"></script>
</body>
</html>

