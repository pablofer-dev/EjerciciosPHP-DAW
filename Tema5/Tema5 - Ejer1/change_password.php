<?php
session_start();
include 'login.php';
if (!empty($_SESSION["emailCliente"])) {
    header('Location: dashboard2.php?confirm=' . cambiarPassword($_POST["passwordUser"], $_SESSION["emailCliente"]));
    die();
    actividadUsuario(60);
} else {
    header('Location: index.php?type=2');
    die();
}
