<?php

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
    if (!isset($_SESSION["emailCliente"])) {
        session_start();
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
}

function cambiarPassword($passwordCliente, $emailCliente)
{
    try {
        $conexion = conectarBaseDatos();
        $consulta = "UPDATE `usuarios` SET `password`='$passwordCliente' WHERE email = '$emailCliente'";
        #Seleccion tabla
        mysqli_select_db($conexion, "medac");
        #Ejecutamos la sentencia
        $datos = mysqli_query($conexion, $consulta);
        return true;
    } catch (\Throwable $th) {
        return 0;
    }
}

if (!isset($_SESSION["emailCliente"])) {
    existeUsuario($_POST["user_email"], $_POST["user_password"]);
}
