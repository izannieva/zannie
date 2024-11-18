<?php
session_start();


if (!isset($_COOKIE['username']) || !isset($_COOKIE['password'])) {
    setcookie('username', '', time() - 3600, "/");
    setcookie('password', '', time() - 3600, "/");
    setcookie('estilo', '', time() - 3600, "/");
    setcookie('last_visit', '', time() - 3600, "/");
}

$_SESSION = [];
session_destroy();


header("Location: home.php");
exit();
?>
