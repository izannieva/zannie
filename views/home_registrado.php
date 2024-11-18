<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: home.php");
    exit();
}


$usuario = $_SESSION['usuario'];
$hora_acceso = isset($_SESSION['hora_acceso']) ? $_SESSION['hora_acceso'] : date('d-m-Y H:i:s');
$estilo = isset($_SESSION['estilo']) ? $_SESSION['estilo'] : 'estilo_predeterminado.css';
$extra_css = isset($_SESSION['extra_css']) ? $_SESSION['extra_css'] : '';


$nombre_estilo = pathinfo($estilo, PATHINFO_FILENAME);

include '../views/header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../styles/<?php echo htmlspecialchars($estilo); ?>">
    <style>
      
        .info-usuario {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f4f4; 
            padding: 15px 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #333;
        }
        .info-usuario p {
            margin: 0;
            font-size: 1.1em;
        }
        .info-usuario strong {
            font-weight: bold;
        }
        .info-usuario .bienvenido,
        .info-usuario .ultimo-acceso,
        .info-usuario .estilo-vinculado {
            color: #333; 
        }
        .info-usuario .bienvenido {
            flex: 1;
            text-align: left;
        }
        .info-usuario .ultimo-acceso {
            flex: 1;
            text-align: center;
        }
        .info-usuario .estilo-vinculado {
            flex: 1;
            text-align: right;
        }
    </style>
</head>
<body class="<?php echo $extra_css; ?>">

<div class="info-usuario">
    <p class="bienvenido"><strong>Bienvenido, <?php echo htmlspecialchars($usuario); ?></strong></p>
    <p class="ultimo-acceso">Último acceso: <?php echo $hora_acceso; ?></p>
    <p class="estilo-vinculado">Estilo: <strong><?php echo ucfirst($nombre_estilo); ?></strong></p>
</div>


<section>
    <h2 style="text-align: center; color: #333;">Últimas fotos</h2>
    <div class="cards-container">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="card">
                <a href="detalle_foto.php?id=<?php echo $i; ?>">
                    <img src="img/foto<?php echo $i; ?>.jpg" alt="Foto <?php echo $i; ?>">
                </a>
                <h3>Título: Foto <?php echo $i; ?></h3>
                <p>Fecha: 2024-09-0<?php echo $i; ?></p>
            </div>
        <?php endfor; ?>
    </div>
</section>

<?php include '../views/footer.php'; ?>
</body>
</html>
