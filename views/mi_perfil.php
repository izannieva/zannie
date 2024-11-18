<?php
include '../views/header.php'; 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}


$usuario = $_SESSION['usuario'];
$estilo = isset($_SESSION['estilo']) ? $_SESSION['estilo'] : 'estilo_predeterminado.css';
$ultima_visita = isset($_SESSION['hora_acceso']) ? $_SESSION['hora_acceso'] : 'Primera vez';

setcookie('last_visit', date('d-m-Y H:i:s'), time() + (90 * 24 * 60 * 60), "/");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="../styles/<?php echo htmlspecialchars($estilo); ?>">
</head>
<body>
    <h2>Mi Perfil</h2>
    
 
    <div class="content-container">
        <h3>Información Personal</h3>
        <p><strong>Nombre de usuario:</strong> <?php echo htmlspecialchars($usuario); ?></p>
        <p><strong>Último inicio de sesión:</strong> <?php echo $ultima_visita; ?></p>
    </div>


    <div class="content-container">
        <h3>Actualizar Estilo</h3>
        <form method="post" action="mi_perfil.php">
            <label for="estilo">Selecciona tu estilo:</label>
            <select name="estilo" id="estilo">
                <option value="alto_contraste.css" <?php if ($estilo == 'alto_contraste.css') echo 'selected'; ?>>Alto contraste</option>
                <option value="estilo_Letra_grande.css" <?php if ($estilo == 'letra_grande.css') echo 'selected'; ?>>Letra grande</option>
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
        header("Location: mi_perfil.php");
        exit();
    }
    ?>

  
    <div class="content-container">
        <a href="logout.php" class="btn-salir">Cerrar sesión</a>
    </div>

    <?php include '../views/footer.php'; ?>
</body>
</html>
