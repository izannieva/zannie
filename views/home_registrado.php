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
                <li><a href="solicitar_album.php">Solicitar álbum</a></li>
                <li><a href="home.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        <h2>Últimas fotos</h2>
        <div class="cards-container">
            <div class="card">
                <a href="detalle.php?id=1">
                    <img src="img/foto1.jpg" alt="Foto 1">
                </a>
                <h3>Título: Foto 1</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="detalle.php?id=2">
                    <img src="img/foto2.jpg" alt="Foto 2">
                </a>
                <h3>Título: Foto 2</h3>
                <p>Fecha: 2024-09-02</p>
            </div>
            <div class="card">
                <a href="detalle.php?id=3">
                    <img src="img/foto3.jpg" alt="Foto 3">
                </a>
                <h3>Título: Foto 3</h3>
                <p>Fecha: 2024-09-03</p>
            </div>
            <div class="card">
                <a href="detalle.php?id=4">
                    <img src="img/foto4.jpg" alt="Foto 4">
                </a>
                <h3>Título: Foto 4</h3>
                <p>Fecha: 2024-09-04</p>
            </div>
            <div class="card">
                <a href="detalle.php?id=5">
                    <img src="img/foto5.jpg" alt="Foto 5">
                </a>
                <h3>Título: Foto 5</h3>
                <p>Fecha: 2024-09-05</p>
            </div>
        </div>
    </section>

    <?php
    include '../views/footer.php'; 
    ?>
</body>
</html>
