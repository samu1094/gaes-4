<?php

function regresarConexion(){

    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "calendario_web";

$conexion = mysqli_connect($server, $usuario, $clave, $base) or die ("No conectado!");
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}
?>

