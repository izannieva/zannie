<?php
include '../views/header.php'; 
?>

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