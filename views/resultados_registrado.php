<?php
include '../views/header.php'; 
?>
    <h2>Resultados de la Búsqueda</h2>

    
    <h3>Resultados Estáticos:</h3>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Fecha</th>
            <th>País</th>
            <th>Detalles</th>
        </tr>
        <tr>
            <td>Vacaciones en la Playa</td>
            <td>2023-07-10</td>
            <td>España</td>
            <td><a href="detalle_foto.php?id=1">Ver Detalle</a></td>
        </tr>
        <tr>
            <td>Aventura en la Montaña</td>
            <td>2023-08-15</td>
            <td>Chile</td>
            <td><a href="detalle_foto.php?id=2">Ver Detalle</a></td>
        </tr>
        <tr>
            <td>Paseo por la Ciudad</td>
            <td>2023-06-22</td>
            <td>Francia</td>
            <td><a href="detalle_foto.php?id=3">Ver Detalle</a></td>
        </tr>
    </table>

    <br>

    
    <h3>Resultados de tu Búsqueda:</h3>
    <?php
    $title = isset($_GET['title']) ? $_GET['title'] : '';
    $date = isset($_GET['date']) ? $_GET['date'] : '';
    $country = isset($_GET['country']) ? $_GET['country'] : '';

    if ($title || $date || $country) {
        echo "<table border='1'>";
        echo "<tr><th>Título</th><th>Fecha</th><th>País</th><th>Detalles</th></tr>";
        echo "<tr>";
        echo "<td>" . htmlspecialchars($title) . "</td>";
        echo "<td>" . htmlspecialchars($date) . "</td>";
        echo "<td>" . htmlspecialchars($country) . "</td>";
        
        echo "<td><a href='detalle_foto.php?id=4&title=" . urlencode($title) . "&date=" . urlencode($date) . "&country=" . urlencode($country) . "'>Ver Detalle</a></td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<p>No se han introducido datos en la búsqueda.</p>";
    }
    ?>

    <?php include '../views/footer.php'; ?>
</body>
</html>
