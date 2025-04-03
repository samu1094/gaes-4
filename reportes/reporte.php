<?php
include ("../controladores/controladorProducto.php");

session_start();

if($_SESSION['usuario']==NULL || $_SESSION['usuario']=='')
{
    session_destroy();
    header('location: ../index.html');
}
else
{
    $listaReporte = reporte();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <td><img src="../ProyectoNuevo/Logo.png" alt="" with=200px; height=150px></td>
                <td><h1>Reporte del listado de productos</h1></td>
            </tr>
        </table>
    </center>
    <center><table border=1px>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaReporte as $reporte): ?>
        <tr>
            <td><?php echo $reporte->prod_codigo; ?></td>
            <td><?php echo $reporte->prod_nombre; ?></td>
            <td><?php echo $reporte->prod_precioVenta; ?></td>
            <td><?php echo $reporte->prod_cantidadStock; ?></td>
            <td><?php echo $reporte->prod_descripcion; ?></td>
        <?php endforeach; ?>    
        </tr></center>
        <!-- Puedes agregar más filas según sea necesario -->
    </tbody>
</table>
</body>
</html>