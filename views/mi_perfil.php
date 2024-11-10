<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="styles/styles.css" title = "estilos por defecto">
    <link rel="alternate stylesheet" href="styles/modo_noche.css" title="Modo Noche">
    <link rel="alternate stylesheet" href="styles/alto_contraste.css" title="Alto contraste">
    <link rel="alternate stylesheet" href="styles/mejorar_accesibilidad.css" title="Mejorar accesibilidad" media = "print">
    <link rel="alternate stylesheet" href="styles/modo_impresion.css" title="Modo impresión">
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

    <h2>Mi Perfil</h2>

    <div class="content-container">
        <h3>Información Personal</h3>
        <p><strong>Nombre:</strong> [Nombre del usuario]</p>
        <p><strong>Correo electrónico:</strong> [Correo electrónico del usuario]</p>
        <p><strong>Teléfono:</strong> [Teléfono del usuario]</p>
    </div>

    <div class="content-container">
        <h3>Álbumes solicitados</h3>
        <p>No has solicitado ningún álbum aún.</p>
    </div>

    <footer>
        <p>&copy; 2024 PI - Pictures & Images</p>
    </footer>
</body>
</html>
<!---->