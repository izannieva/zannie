<?php
    include '../views/header.php'; 
?>
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
    <?php
    include '../views/footer.php'; 
    ?>
     <!---->