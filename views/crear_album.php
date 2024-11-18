<?php
include '../views/header.php';
?>


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