<?php
session_start();
if (!empty($_SESSION["emailCliente"])) {
    $color = $_GET["color"];
    setcookie("color", $color, time() + 60 * 60 * 24 * 365);
    header('Location: dashboard2.php');
    die();
} else {
    header('Location: index.php?type=2');
    die();
}
