<?php
include '../views/header.php';

// Obtener el ID de la foto desde la URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Datos ficticios para cada foto
$fotos = [
    1 => [
        'titulo' => 'Foto 1',
        'fecha' => '2024-09-01',
        'descripcion' => 'Esta es la descripción de la Foto 1.',
        'imagen' => 'img/foto1.jpg'
    ],
    2 => [
        'titulo' => 'Foto 2',
        'fecha' => '2024-09-02',
        'descripcion' => 'Esta es la descripción de la Foto 2.',
        'imagen' => 'img/foto2.jpg'
    ],
    3 => [
        'titulo' => 'Foto 3',
        'fecha' => '2024-09-03',
        'descripcion' => 'Esta es la descripción de la Foto 3.',
        'imagen' => 'img/foto3.jpg'
    ],
    4 => [
        'titulo' => 'Foto 4',
        'fecha' => '2024-09-04',
        'descripcion' => 'Esta es la descripción de la Foto 4.',
        'imagen' => 'img/foto4.jpg'
    ],
    5 => [
        'titulo' => 'Foto 5',
        'fecha' => '2024-09-05',
        'descripcion' => 'Esta es la descripción de la Foto 5.',
        'imagen' => 'img/foto5.jpg'
    ]
];

// Verificar si el ID es válido
$foto = isset($fotos[$id]) ? $fotos[$id] : null;
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

<section class="detalle-foto">
    <?php if ($foto): ?>
        <h2><?php echo htmlspecialchars($foto['titulo']); ?></h2>
        <img src="<?php echo htmlspecialchars($foto['imagen']); ?>" alt="<?php echo htmlspecialchars($foto['titulo']); ?>" style="max-width: 100%;">
        <p><strong>Fecha:</strong> <?php echo htmlspecialchars($foto['fecha']); ?></p>
        <p><strong>Descripción:</strong> <?php echo htmlspecialchars($foto['descripcion']); ?></p>
    <?php else: ?>
        <p>No se encontró la foto.</p>
    <?php endif; ?>
</section>

<?php include '../views/footer.php'; ?>
</body>
</html>
