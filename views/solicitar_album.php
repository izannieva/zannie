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

<h2>Solicitar Álbum Impreso</h2>


<div class="contenedor-columnas">
    <div class="columna tabla-precios">
        <h3>Tabla de Precios</h3>
        <table border="1">
            <tr>
                <th>Número de páginas</th>
                <th>Número de fotos</th>
                <th>Blanco y negro (150-300 dpi)</th>
                <th>Blanco y negro (450-900 dpi)</th>
                <th>Color (150-300 dpi)</th>
                <th>Color (450-900 dpi)</th>
            </tr>
            <?php
            $tabla_precios = [
                [1, 3, 12.0, 12.6, 13.5, 14.1],
                [2, 6, 14.0, 15.2, 17.0, 18.2],
                [3, 9, 16.0, 17.8, 20.5, 22.3],
                [4, 12, 18.0, 20.4, 24.0, 26.4],
                [5, 15, 19.8, 22.8, 27.3, 30.3],
                [6, 18, 21.6, 25.2, 30.6, 34.2],
                [7, 21, 23.4, 27.6, 33.9, 38.1],
                [8, 24, 25.2, 30.0, 37.2, 42.0],
                [9, 27, 27.0, 32.4, 40.5, 46.0],
                [10, 30, 28.8, 34.8, 43.8, 49.9],
                [11, 33, 30.4, 37.0, 46.9, 53.0],
                [12, 36, 32.0, 39.2, 50.6, 57.2],
                [13, 39, 33.6, 41.4, 53.1, 61.6],
                [14, 42, 35.2, 43.6, 56.2, 64.8],
                [15, 45, 36.8, 45.8, 59.3, 68.3]
            ];

            foreach ($tabla_precios as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>" . htmlspecialchars($valor) . " €</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<div class="columna formulario">
    <h3>Formulario para Solicitar Álbum</h3>
   
    <form id="albumForm" action="confirmacion_album.php" method="get">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="titulo">Título del álbum:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="copias">Número de copias:</label>
        <input type="number" id="copias" name="copias" min="1" required>

        <label for="paginas">Número de páginas (1-15):</label>
        <input type="number" id="paginas" name="paginas" min="1" max="15" required>

        <label for="resolucion">Resolución de las fotos (DPI):</label>
        <input type="number" id="resolucion" name="resolucion" min="150" max="900" required>

        <label for="impresion">Impresión:</label>
        <select id="impresion" name="impresion">
            <option value="color">Color</option>
            <option value="blanco_negro">Blanco y negro</option>
        </select>

        <button type="submit">Solicitar Álbum</button>
    </form>
</div>

<?php include '../views/footer.php'; ?>
</body>
</html>
