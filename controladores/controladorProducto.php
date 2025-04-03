<?php

include($_SERVER["DOCUMENT_ROOT"]."/proyectonuevo/modelos/modeloProducto.php");
 
//Insertar
if(isset($_POST["productoNombre"]) && !empty($_POST["productoNombre"])){
   
    try {
        $nombre = $_POST["productoNombre"]; 
        $stock = $_POST["stockProducto"]; 
        $precio = $_POST["precioVenta"]; 
        $descripcion = $_POST["productoDescripcion"]; 

        $objProducto = new modeloProducto(NULL, $nombre, $stock, $precio, $descripcion); 

        $objProducto->crearProducto(); 

        echo(
            "<script type='text/javascript'>
                alert('PRODUCTO REGISTRADO CORRECTAMENTE!');
                window.location.href='../vistas/productos/crear.php';
            </script>"
        ); 
    } catch (\Throwable $error) {
        echo("Error en el controlador: ".$error->getMessage());
        die(); 
    }
}
//actualizar
if(isset($_POST["codigoProductoA"]) && !empty($_POST["codigoProductoA"])){


    try {
        $productoCodigo = $_POST["codigoProductoA"]; 
        $productoNombre = $_POST["nombreProductoA"]; 
        $stockProducto = $_POST["cantidadProductoA"]; 
        $precioVenta = $_POST["precioProductoA"]; 
        $productoDescripcion = $_POST["categoriaProductoA"]; 

        $objProducto = new modeloProducto($productoCodigo, $productoNombre, $precioVenta , $stockProducto , $productoDescripcion); 

        $objProducto->actualizarProducto(); 

        echo(
            "<script type='text/javascript'>
                alert('PRODUCTO ACTUALIZADO CORRECTAMENTE!');
                window.location.href='../Vistas/productos/listar.php';
            </script>"
        ); 

    } catch (\Throwable $error) {
        echo("Error en el controlador: " . $error); 
        die(); 
    }
    


}

//Listar
function listar(){
    $objProducto = new modeloProducto(NULL, NULL, NULL, NULL, NULL); 
    $tablaProductos = $objProducto->listarProducto(); 
    return $tablaProductos; 
}
//funcion consultar
function consultarXcodigo($codigoP){
    $objProducto = new modeloProducto($codigoP, NULL, NULL, NULL, NULL); 
    $tablaProductos = $objProducto->consultarProducto(); 
    return $tablaProductos; 
}

//Funcion para eliminar 
if(isset($_GET["codigoPEliminar"]) && !empty($_GET["codigoPEliminar"])){
    $productoCodigo = $_GET["codigoPEliminar"]; 
    $objProducto = new modeloProducto($productoCodigo, NULL, NULL, NULL, NULL); 

    $objProducto->eliminarProducto(); 

    echo(
        "<script type='text/javascript'>
            alert('PRODUCTO ELIMINADO CORRECTAMENTE!');
            window.location.href='../vistas/productos/listar.php';
        </script>"
    );
}
//Consultar el reporte
function reporte(){
    $objProductos = new modeloProducto(NULL, NULL, NULL, NULL, NULL);
    $reporte = $objProductos->reporteProductos();
    return $reporte;
}
?>