<?php
$emailCliente = $_POST["email"];
$emailPassword = $_POST["password"];
function exiteUsuario($emailCliente, $passwordCliente)
{
    $conexion = conectarBaseDatos();
    $consulta = "SELECT * FROM usuarios";
    #Seleccion tabla
    mysqli_select_db($conexion, "medac");
    #Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    while ($row = mysqli_fetch_array($datos)) {
        $email = $row["email"];
        $password = $row["password"];

        if ($email == $emailCliente && $password == $passwordCliente) {
            return True;
        } else {
            return False;
        }
    }
}
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
if (exiteUsuario($emailCliente, $emailPassword)) {
    echo "Si se ha encontrado este usuario";
} else {
    echo "No se ha encontrado este usuario";
}
