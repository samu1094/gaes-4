<?php

header('Content-Type: application/json');

require("conexion.php");

    $conexion = regresarConexion();

switch ($_GET['accion']) {

case 'listar':
    $datos = mysqli_query($conexion,"select id, 
            titulo as title, 
            descripcion, 
            inicio as start, 
            fin as end,
            color_texto as textColor,
            color_fondo as backgroundColor
            from eventos");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);

    break;

case 'agregar':

    $respuesta = mysqli_query($conexion,"insert into eventos (titulo, descripcion, inicio, fin, color_texto, color_fondo) values 
                            ('$_POST[titulo]','$_POST[descripcion]','$_POST[inicio]','$_POST[fin]','$_POST[color_texto]','$_POST[color_fondo]',)");

    echo json_encode($respuesta);
                            
    break;

case 'modificar':
       
    /*    "update eventos set titulo = '$_POST[titulo]',
                        descripcion = '$_POST[descripcion]',
                        inicio = '$_POST[inicio]',
                        fin = '$_POST[fin]',
                        color_texto = '$_POST[color_texto]',
                        color_fondo = '$_POST[color_fondo]'
                        where id = $_POST[id]" */

    break;

case 'eliminar':
    
    /*
    "delete from eventos where id = $_POST[id]"
    */

    break;
}


?>