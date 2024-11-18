<?php
include '../views/header2.php'; 
session_start();


if (isset($_SESSION['usuario'])) {
    header("Location: home_registrado.php");
    exit();
}


$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';


if (isset($_SESSION['flashdata']['error'])) {
    echo "<p style='color:red; text-align:center;'>" . $_SESSION['flashdata']['error'] . "</p>";
    unset($_SESSION['flashdata']['error']);
}
?>

<section>
    <h2>Iniciar sesión</h2>
    <form action="control_acceso.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
        
        <div class="recordarme-container">
            <input type="checkbox" id="recordarme" name="recordarme" value="yes" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
            <label for="recordarme">Recordarme en este equipo</label>
        </div>
        
        <button type="submit">Entrar</button>
    </form>
</section>


<section>
    <h2>Últimas fotos</h2>
    <div class="cards-container">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="card">
                <?php if (!isset($_SESSION['usuario'])): ?>
                    
                    <a href="login.php">
                        <img src="img/foto<?php echo $i; ?>.jpg" alt="Foto <?php echo $i; ?>">
                    </a>
                <?php else: ?>
                    
                    <a href="detalle_foto.php?id=<?php echo $i; ?>">
                        <img src="img/foto<?php echo $i; ?>.jpg" alt="Foto <?php echo $i; ?>">
                    </a>
                <?php endif; ?>
                <h3>Título: Foto <?php echo $i; ?></h3>
                <p>Fecha: 2024-09-0<?php echo $i; ?></p>
            </div>
        <?php endfor; ?>
    </div>
</section>

<?php include '../views/footer.php'; ?>
