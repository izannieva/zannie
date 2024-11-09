<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - PI</title>
    <link rel="stylesheet" href="styles/styles.css" title = "estilos por defecto">
    <link rel="alternate stylesheet" href="styles/modo_noche.css" title="Modo Noche">
    <link rel="alternate stylesheet" href="styles/alto_contraste.css" title="Alto contraste">
    <link rel="alternate stylesheet" href="styles/mejorar_accesibilidad.css" title="Mejorar accesibilidad" media = "print">
    <link rel="alternate stylesheet" href="styles/modo_impresion.css" title="Modo impresión">
    <link rel="alternate stylesheet" href="styles/letra_grande.css" title="Letra grande">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <h1><a href="index.php">PI - Pictures & Images</a></h1>
        <nav>
            <ul>
                <li><a href="busqueda.php">Buscar fotos</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </header>

    <form id="formulario_registro" action="index_registrado.php" method="get" enctype="multipart/form-data">
        
        <label for="registro_usuario">Nombre de usuario:</label>
        <input type="text" id="registro_usuario" name="username">
        <span class="error-message" id="usernameError"></span>

        <label for="registro_contraseña">Contraseña:</label>
        <input type="password" id="registro_contraseña" name="password">
        <span class="error-message" id="passwordError"></span>

        <label for="registro_repetir_contraseña">Repetir contraseña:</label>
        <input type="password" id="registro_repetir_contraseña" name="confirm_password">
        <span class="error-message" id="repeatPasswordError"></span>

        <label for="registro_email">Correo electrónico:</label>
        <input type="text" id="registro_email" name="email">
        <span class="error-message" id="emailError"></span>

        
        <label for="registro_genero">Género:</label>
        <select id="registro_genero" name="sexo">
            <option value="">Selecciona tu género</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        <span class="error-message" id="genderError"></span>

        
        <label for="registro_fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="registro_fecha_nacimiento" name="birthdate">
        <span class="error-message" id="birthdateError"></span>

        <label for="registro_ciudad">Ciudad:</label>
        <input type="text" id="registro_ciudad" name="city">

        <label for="registro_pais">País:</label>
        <input type="text" id="registro_pais" name="country">

        <label for="photo">Subir foto:</label>
        <input type="file" id="photo" name="photo" accept="image/*">

        <button type="submit">Registrarse</button>
    </form>

    <footer>
        <p>&copy; 2024 PI - Pictures & Images</p>
    </footer>
    <script src="validacion.js"></script>
</body>
</html>





