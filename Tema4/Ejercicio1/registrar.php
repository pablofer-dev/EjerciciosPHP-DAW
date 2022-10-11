<?php
$emailCliente = $_POST["email"];
$emailPassword = $_POST["password"];
/**
 * Devuelve verdadero si el usuario existe, falso si no existe.
 * 
 * @param emailCliente El correo electrónico del usuario
 * @param passwordCliente La contraseña del usuario
 * 
 * @return un valor booleano.
 */
function exiteUsuario($emailCliente, $passwordCliente)
{
    $conexion = conectarBaseDatos();
    $consulta = "SELECT `email`, `password` FROM `usuarios` WHERE email = '$emailCliente' && password = '$passwordCliente'";
    #Seleccion tabla
    mysqli_select_db($conexion, "medac");
    #Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    if (!empty(mysqli_fetch_array($datos))) {
        return true;
    } else if (empty(mysqli_fetch_array($datos))) {
        return false;
    }
    return false;
}


/* conecta a la base de datos.
@return conexión a la base de datos. */

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
/* Comprobando si el usuario existe. */
if (exiteUsuario($emailCliente, $emailPassword)) {
    echo "Este usuario si existe";
} elseif (exiteUsuario($emailCliente, $emailPassword) == false) {
    echo "Este usuario no existe";
} else {
    echo "error";
}
