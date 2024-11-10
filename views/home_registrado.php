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
                <a href="detalle.php">
                    <img src="img/foto1.jpg" alt="Foto 1">
                </a>
                <h3>Título: Foto 1</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="detalle.php">
                    <img src="img/foto1.jpg" alt="Foto 2">
                </a>
                <h3>Título: Foto 2</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="detalle.php">
                    <img src="img/foto1.jpg" alt="Foto 3">
                </a>
                <h3>Título: Foto 3</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="detalle.php">
                    <img src="img/foto1.jpg" alt="Foto 4">
                </a>
                <h3>Título: Foto 4</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="detalle.php">
                    <img src="img/foto1.jpg" alt="Foto 5">
                </a>
                <h3>Título: Foto 5</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
        </div>
    </section>

    <?php
    include '../views/footer.php'; 
    ?>
     <!---->