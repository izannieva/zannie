<?php
include '../views/header.php';


$titulo = isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : '';
$descripcion = isset($_POST['descripcion']) ? htmlspecialchars($_POST['descripcion']) : '';

?>
<body>
    <h2>Álbum Creado</h2>
    <p>Tu álbum ha sido creado exitosamente con los siguientes detalles:</p>
    <table border="1">
        <tr>
            <td><strong>Título:</strong></td>
            <td><?php echo $titulo; ?></td>
        </tr>
        <tr>
            <td><strong>Descripción:</strong></td>
            <td><?php echo nl2br($descripcion); ?></td>
        </tr>
    </table>

    <a href="crear_album.php">Volver</a>
    <?php include '../views/footer.php'; ?>
</body>
</html>
