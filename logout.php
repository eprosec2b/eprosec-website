<?php
session_start();

session_destroy();

header("Location: index.php");
?>
<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
    header("Location: index.php");
}
?>
