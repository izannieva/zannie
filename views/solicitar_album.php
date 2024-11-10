<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Álbum Impreso</title>
    <link rel="stylesheet" href="styles/styles.css" title="estilos por defecto">
    <link rel="alternate stylesheet" href="styles/modo_noche.css" title="Modo Noche">
    <link rel="alternate stylesheet" href="styles/alto_contraste.css" title="Alto contraste">
    <link rel="alternate stylesheet" href="styles/mejorar_accesibilidad.css" title="Mejorar accesibilidad" media="print">
    <link rel="alternate stylesheet" href="styles/modo_impresion.css" title="Modo impresión">
    <link rel="alternate stylesheet" href="styles/letra_grande.css" title="Letra grande">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
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

    <h2>Solicitar Álbum Impreso</h2>

    <div class="contenedor-columnas">
        <div class="columna tabla-precios">
            <h3>TABLA DE PRECIOS</h3>
            <table>
                <tr><th>Concepto</th><th>Tarifa</th></tr>
                <tr><td>Coste procesamiento y envío</td><td>10 €</td></tr>
                <tr><td>&lt; 5 páginas</td><td>2 € por pág.</td></tr>
                <tr><td>entre 5 y 10 páginas</td><td>1.8 € por pág.</td></tr>
                <tr><td>&gt; 10 páginas</td><td>1.6 € por pág.</td></tr>
                <tr><td>Blanco y negro</td><td>0 €</td></tr>
                <tr><td>Color</td><td>0.5 € por foto</td></tr>
                <tr><td>Resolución &le; 300 dpi</td><td>0 € por foto</td></tr>
                <tr><td>Resolución &gt; 300 dpi</td><td>0.2 € por foto</td></tr>
            </table>
            <button id="btnMostrarTabla">Mostrar/ocultar tabla de costos</button>
            <div id="tablaCostos" class="oculto"></div>
        </div>

        <div class="columna formulario">
            <h3>FORMULARIO</h3>
            <form id="albumForm" action="confirmacion_album.php" method="get">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre">
                <span class="error-message" id="nombreError"></span>

                <label for="titulo">Título del álbum:</label>
                <input type="text" id="titulo" name="titulo">
                <span class="error-message" id="tituloError"></span>

                <label for="email">Correo electrónico:</label>
                <input type="text" id="email" name="email">
                <span class="error-message" id="emailError"></span>

                <fieldset>
                    <legend>Dirección de envío</legend>
                    <label for="calle">Calle:</label>
                    <input type="text" id="calle" name="calle">
                    <span class="error-message" id="calleError"></span>

                    <label for="numero">Número:</label>
                    <input type="number" id="numero" name="numero" min="0">
                    <span class="error-message" id="numeroError"></span>

                    <label for="codigo_postal">Código postal:</label>
                    <input type="number" id="codigo_postal" name="codigo_postal" min="0">
                    <span class="error-message" id="codigo_postalError"></span>

                    <label for="localidad">Localidad:</label>
                    <input type="text" id="localidad" name="localidad">
                    <span class="error-message" id="localidadError"></span>

                    <label for="provincia">Provincia:</label>
                    <input type="text" id="provincia" name="provincia">
                    <span class="error-message" id="provinciaError"></span>

                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais">
                    <span class="error-message" id="paisError"></span>
                </fieldset>

                <label for="copias">Número de copias:</label>
                <input type="number" id="copias" name="copias" min="1">
                <span class="error-message" id="copiasError"></span>

                <label for="resolucion">Resolución de las fotos (DPI):</label>
                <input type="number" id="resolucion" name="resolucion" min="1">
                <span class="error-message" id="resolucionError"></span>

                <label for="album">Álbum seleccionado:</label>
                <select id="album" name="album">
                    <option value="verano2024">Verano 2024</option>
                    <option value="cumpleaños2023">Cumpleaños 2023</option>
                    <option value="navidad2023">Navidad 2023</option>
                </select>
                <span class="error-message" id="albumError"></span>

                <label for="impresion">Impresión:</label>
                <select id="impresion" name="impresion">
                    <option value="color">Color</option>
                    <option value="blanco_negro">Blanco y negro</option>
                </select>
                <span class="error-message" id="impresionError"></span>

                <p><strong>Precio estándar del álbum: 50,00 €</strong></p>
                <button type="submit">Solicitar Álbum</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 PI - Pictures & Images</p>
    </footer>

    
    <script src="validacion.js"></script>
    <script src="tablacostos.js"></script>
</body>
</html>