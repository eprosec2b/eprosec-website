<?php
session_start();

session_destroy();

header("Location: index.php");
?>
<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
    header("Location: index.html");
}
?>
<?php

include 'verifica_login.php';

echo "Bem-vindo, " . $_SESSION['username'] . ". Esta é a página inicial do administrador.";
?>
<?php
?>


