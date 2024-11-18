<?php
include '../views/header.php'; 


session_start();


if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    
    header('Location: login.php');
    exit();
}


if (isset($_COOKIE['usuario']) && !isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$fotos = [
    1 => [
        'titulo' => 'Vacaciones en la Playa',
        'fecha' => '2023-07-10',
        'pais' => 'España',
        'album' => 'Verano 2024',
        'usuario' => 'Juan Pérez',
        'imagen' => 'img/foto1.jpg'
    ],
    2 => [
        'titulo' => 'Aventura en la Montaña',
        'fecha' => '2024-08-15',
        'pais' => 'Chile',
        'album' => 'Vacaciones 2024',
        'usuario' => 'María García',
        'imagen' => 'img/foto2.jpg'
    ],
    3 => [
        'titulo' => 'Paseo por la Ciudad',
        'fecha' => '2023-06-22',
        'pais' => 'Francia',
        'album' => 'Viajes 2023',
        'usuario' => 'Carlos López',
        'imagen' => 'img/foto3.jpg'
    ]
];

if ($id === 4) {
    $foto = [
        'titulo' => isset($_GET['title']) ? $_GET['title'] : 'Título no disponible',
        'fecha' => isset($_GET['date']) ? $_GET['date'] : 'Fecha no disponible',
        'pais' => isset($_GET['country']) ? $_GET['country'] : 'País no disponible',
        'album' => 'Álbum Personalizado',
        'usuario' => 'Usuario Actual',
        'imagen' => 'img/default.jpg'
    ];
} else {
    $foto = isset($fotos[$id]) ? $fotos[$id] : null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Foto</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php if ($foto): ?>
        <div class="content-container">
            <img src="<?php echo htmlspecialchars($foto['imagen']); ?>" alt="<?php echo htmlspecialchars($foto['titulo']); ?>" style="max-width:100%; margin-bottom: 20px;">
            <p><strong>Título:</strong> <?php echo htmlspecialchars($foto['titulo']); ?></p>
            <p><strong>Fecha:</strong> <?php echo htmlspecialchars($foto['fecha']); ?></p>
            <p><strong>País:</strong> <?php echo htmlspecialchars($foto['pais']); ?></p>
            <p><strong>Álbum:</strong> <?php echo htmlspecialchars($foto['album']); ?></p>
            <p><strong>Usuario:</strong> <?php echo htmlspecialchars($foto['usuario']); ?></p>
        </div>
    <?php else: ?>
        <div class="content-container">
            <p>No se encontró la foto solicitada.</p>
        </div>
    <?php endif; ?>

    <?php include '../views/footer.php'; ?>
</body>
</html>
