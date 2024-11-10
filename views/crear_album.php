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
                <li><a href="solicitar_album.php">Solicitar Álbum</a></li>
                <li><a href="home.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Crear un Nuevo Álbum</h2>
        <form action="procesar_crear_album.php" method="post">
            <label for="titulo">Título del Álbum:</label><br>
            <input type="text" id="titulo" name="titulo" required><br><br>

            <label for="descripcion">Descripción del Álbum:</label><br>
            <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

            <button type="submit">Crear Álbum</button>
        </form>
    </section>

    <?php include '../views/footer.php'; ?>
</body>
</html>
 <!---->