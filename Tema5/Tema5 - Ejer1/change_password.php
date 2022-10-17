<?php
include './login.php';
session_start();
if (!empty($_SESSION["emailCliente"])) {

    header('Location: dashboard2.php');
    die();
} else {
    header('Location: index.php?type=2');
    die();
}
