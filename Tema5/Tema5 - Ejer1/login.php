<?php
session_start();
$emailCliente = $_POST["user_email"];
$emailPassword = $_POST["user_password"];

function conectarBaseDatos()
{
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $database = "medac";
    $conexion = mysqli_connect($servidor, $usuario, $password, $database);
    if (!$conexion) {
        die('Conexión fallida: ' . mysqli_connect_error());
    } else {
        $conexionconfirm = "CONEXIÓN REALIZADA CON EXITO" . "<br>";
    }
    return $conexion;
}

function existeUsuario($emailCliente, $passwordCliente)
{
    $conexion = conectarBaseDatos();
    $consulta = "SELECT `email`, `nombre`, `password` FROM `usuarios` WHERE email = '$emailCliente' && password = '$passwordCliente'";
    #Seleccion tabla
    mysqli_select_db($conexion, "medac");
    #Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    if (!empty($row = mysqli_fetch_array($datos))) {
        $_SESSION["emailCliente"] = $emailCliente;
        $_SESSION["nombreCliente"] = $row["nombre"];
        header('Location: dashboard.php');
        die();
    } else if (empty(mysqli_fetch_array($datos))) {
        header('Location: index.php?type=1');
        die();
    }
    header('Location: index.php?type=1');
    die();
}

function cambiarPassword($passwordCliente)
{
    $conexion = conectarBaseDatos();
    $consulta = "UPDATE `usuarios` SET `password`='$passwordCliente'WHERE email = 'javier.ruiz@medac.es'";
    #Seleccion tabla
    mysqli_select_db($conexion, "medac");
    #Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    if (!empty($row = mysqli_fetch_array($datos))) {
        $_SESSION["emailCliente"] = $emailCliente;
        $_SESSION["nombreCliente"] = $row["nombre"];
        header('Location: dashboard.php');
        die();
    } else if (empty(mysqli_fetch_array($datos))) {
        header('Location: index.php?type=1');
        die();
    }
    header('Location: index.php?type=1');
    die();
}

existeUsuario($emailCliente, $emailPassword);
