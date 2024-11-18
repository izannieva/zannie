<?php
include '../views/header.php'; 
session_start();


$estilo = isset($_SESSION['estilo']) ? $_SESSION['estilo'] : (isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : 'styles.css');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Búsqueda</title>
    <link rel="stylesheet" href="../styles/<?php echo htmlspecialchars($estilo); ?>">
</head>
<body>



<h2>Formulario de Búsqueda</h2>
<form action="resultados_registrado.php" method="get">
    <label for="title">Título:</label>
    <input type="text" id="title" name="title"><br><br>

    <label for="date">Fecha:</label>
    <input type="date" id="date" name="date"><br><br>

    <label for="country">País:</label>
    <input type="text" id="country" name="country"><br><br>

    <button type="submit">Buscar</button>
</form>

<div class="content-container">
    <h3>Actualizar Estilo</h3>
    <form method="post" action="busqueda_registrado.php">
        <label for="estilo">Selecciona tu estilo:</label>
        <select name="estilo" id="estilo">
            <option value="alto_contraste.css" <?php if ($estilo == 'alto_contraste.css') echo 'selected'; ?>>Alto contraste</option>
            <option value="estilo_Letra_grande.css" <?php if ($estilo == 'estilo_Letra_grande.css') echo 'selected'; ?>>Letra grande</option>
            <option value="modo_noche.css" <?php if ($estilo == 'modo_noche.css') echo 'selected'; ?>>Modo noche</option>
            <option value="Lamine.css" <?php if ($estilo == 'Lamine.css') echo 'selected'; ?>>Sorpresa</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['estilo'])) {
    $nuevo_estilo = $_POST['estilo'];
    $_SESSION['estilo'] = $nuevo_estilo;
    setcookie('estilo', $nuevo_estilo, time() + (90 * 24 * 60 * 60), "/");
    header("Location: busqueda_registrado.php");
    exit();
}
?>

<?php include '../views/footer.php'; ?>
</body>
</html>
