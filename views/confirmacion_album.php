<?php
include '../views/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre = $_GET['nombre'];
    $titulo = $_GET['titulo'];
    $copias = (int)$_GET['copias'];
    $paginas = (int)$_GET['paginas'];
    $resolucion = (int)$_GET['resolucion'];
    $impresion = $_GET['impresion'];

    
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

 
    function calcularCosto($paginas, $resolucion, $impresion) {
        global $tabla_precios;

        if ($impresion === 'blanco_negro') {
            $columna = ($resolucion <= 300) ? 2 : 3;
        } else {
            $columna = ($resolucion <= 300) ? 4 : 5;
        }

        return $tabla_precios[$paginas - 1][$columna];
    }

  
    $costo_unitario = calcularCosto($paginas, $resolucion, $impresion);
    $costo_envio = 10;
    $costo_total = ($costo_unitario + $costo_envio) * $copias;
}
?>

<body>
<header>
    <h1>¡Solicitud de Álbum Registrada!</h1>
</header>

<table>
    <tr><td>Nombre:</td><td><?php echo htmlspecialchars($nombre); ?></td></tr>
    <tr><td>Título del álbum:</td><td><?php echo htmlspecialchars($titulo); ?></td></tr>
    <tr><td>Copias:</td><td><?php echo $copias; ?></td></tr>
    <tr><td>Número de páginas:</td><td><?php echo $paginas; ?></td></tr>
    <tr><td>Resolución:</td><td><?php echo $resolucion; ?> dpi</td></tr>
    <tr><td>Impresión:</td><td><?php echo $impresion; ?></td></tr>
    <tr><td><strong>Costo total:</strong></td><td><?php echo number_format($costo_total, 2); ?> €</td></tr>
</table>

<p>Nos pondremos en contacto contigo para confirmar tu pedido.</p>

<?php include '../views/footer.php'; ?>
</body>
</html>
