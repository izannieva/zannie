

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda - PI</title>
    <link rel="stylesheet" href="styles/styles.css" title = "estilos por defecto">
    <link rel="alternate stylesheet" href="styles/modo_noche.css" title="Modo Noche">
    <link rel="alternate stylesheet" href="styles/alto_contraste.css" title="Alto contraste">
    <link rel="alternate stylesheet" href="styles/mejorar_accesibilidad.css" title="Mejorar accesibilidad" media = "print">
    <link rel="alternate stylesheet" href="styles/modo_impresion.css" title="Modo impresion">
    <link rel="alternate stylesheet" href="styles/letra_grande.css" title="Letra grande">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <h1><a href="home_registrado.php">PI - Pictures & Images</a></h1>
        <nav>
            <ul>
                <li><a href="home_registrado.php">Inicio</a></li>
                <li><a href="busqueda_registrado.php">Buscar fotos</a></li>
                <li><a href="mi_perfil.php">Mi Perfil</a></li>
                <li><a href="solicitar_album.php">Solicitar album</a></li>
                <li><a href="home.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <form action="resultados_registrado.php" method="get">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title">

        <label for="date">Fecha:</label>
        <input type="date" id="date" name="date">

        <label for="country">País:</label>
        <input type="text" id="country" name="country">

        <button type="submit">Buscar</button>
    </form>

    <footer>
        <p>&copy; 2024 PI - Pictures & Images</p>
    </footer>
</body>
</html>
<!---->