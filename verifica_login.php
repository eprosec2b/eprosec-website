<?php
// Iniciar sessão
session_start();

// Verificar se a sessão "logged_in" está ativa
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirecionar para a página de login
    header("Location: dashboard.php");
    exit;
}
?>