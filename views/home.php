<?php
    include '../views/header.php'; 
?>
<body>
    <header>
        <h1><a href="home.php">PI - Pictures & Images</a></h1>
        <nav>
            <ul>
                <li><a href="busqueda.php">Buscar fotos</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Iniciar sesión</h2>
        <form action="/daw/login" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </section>

    <section>
        <h2>Últimas fotos</h2>
        <div class="cards-container">
            <div class="card">
                <a href="login.php">
                    <img src="img/foto1.jpg" alt="Foto 1">
                </a>
                <h3>Título: Foto 1</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="login.php">
                    <img src="img/foto1.jpg" alt="Foto 2">
                </a>
                <h3>Título: Foto 2</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="login.php">
                    <img src="img/foto1.jpg" alt="Foto 3">
                </a>
                <h3>Título: Foto 3</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="login.php">
                    <img src="img/foto1.jpg" alt="Foto 4">
                </a>
                <h3>Título: Foto 4</h3>
                <p>Fecha: 2024-09-01</p>
            </div>
            <div class="card">
                <a href="login.php">
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