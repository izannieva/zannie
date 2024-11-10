<?php
include '../views/header.php'; 
?>
<body>
    <header>
        <h1><a href="home_registrado.php">PI - Pictures & Images</a></h1>
        <nav>
            <ul>
                <li><a href="busqueda.php">Buscar fotos</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </header>

    <h2>Formulario de Búsqueda</h2>
    <form action="resultados.php" method="get">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title"><br><br>

        <label for="date">Fecha:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="country">País:</label>
        <input type="text" id="country" name="country"><br><br>

        <button type="submit">Buscar</button>
    </form>

    <?php include '../views/footer.php'; ?>
</body>
</html>
 <!---->