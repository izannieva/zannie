
<?php include '../views/header.php'; ?>


    <form id="formulario_registro" action="procesar_registro.php" method="post" enctype="multipart/form-data">
        <label for="registro_usuario">Nombre de usuario:</label>
        <input type="text" id="registro_usuario" name="username">
        <span class="error-message">
            <?php if (isset($_GET['usernameError'])) echo $_GET['usernameError']; ?>
        </span>

        <label for="registro_contraseña">Contraseña:</label>
        <input type="password" id="registro_contraseña" name="password">
        <span class="error-message">
            <?php if (isset($_GET['passwordError'])) echo $_GET['passwordError']; ?>
        </span>

        <label for="registro_repetir_contraseña">Repetir contraseña:</label>
        <input type="password" id="registro_repetir_contraseña" name="confirm_password">
        <span class="error-message">
            <?php if (isset($_GET['confirmPasswordError'])) echo $_GET['confirmPasswordError']; ?>
        </span>

        <label for="registro_email">Correo electrónico:</label>
        <input type="text" id="registro_email" name="email">
        <span class="error-message">
            <?php if (isset($_GET['emailError'])) echo $_GET['emailError']; ?>
        </span>

        <label for="registro_genero">Género:</label>
        <select id="registro_genero" name="sexo">
            <option value="">Selecciona tu género</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
        <span class="error-message">
            <?php if (isset($_GET['genderError'])) echo $_GET['genderError']; ?>
        </span>

        <label for="registro_fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="registro_fecha_nacimiento" name="birthdate">
        <span class="error-message">
            <?php if (isset($_GET['birthdateError'])) echo $_GET['birthdateError']; ?>
        </span>

        <label for="registro_ciudad">Ciudad:</label>
        <input type="text" id="registro_ciudad" name="city">

        <label for="registro_pais">País:</label>
        <input type="text" id="registro_pais" name="country">

        <label for="photo">Subir foto:</label>
        <input type="file" id="photo" name="photo" accept="image/*">

        <button type="submit">Registrarse</button>
    </form>

    <?php include '../views/footer.php'; ?>
</body>



