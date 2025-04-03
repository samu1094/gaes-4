<?php
session_start(); 

if($_SESSION["usuario"] == null || $_SESSION["usuario"]== ""){
	session_destroy(); 
	header("location: ../index.html");
}
elseif($_SESSION["usuario"] == "Usuario"){
	session_destroy(); 
	header("location: ../index.html");
}

?>
<?php
include("../../controladores/controladorProducto.php"); 

$tabla = listar(); 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="Logo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

<!--Bootstrap CSS-->
		<link href="../../ProyectoNuevoAdmin/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="../../ProyectoNuevoAdmin/css/tiny-slider.css" rel="stylesheet">
		<link href="../../ProyectoNuevoAdmin/css/style.css" rel="stylesheet">
		<title>Listar </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Muebles MYC<span></span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						
                    <li><a class="nav-link" href="../../ProyectoNuevoAdmin/index.php">Inicio</a></li>
						
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/shop.php">Tienda</a></li>
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/about.php">Nosotros</a></li>
						
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/contact.php">Contactanos</a></li>
                        <li class="nav-item active">
						<a class="nav-link" href="listar.php">Listar</a>
                        </li>
					</ul>

					
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

    <div class="containero" style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
    <h2>Listado de productos</h2>
</div>
<div class="containero">
    <table>
    <div class="containero">
    <style>
    table {
        border-collapse: collapse; 
        width: 100%; 
    }
    
    th, td {
        border: 3px solid #000; 
        padding: 8px; 
    }
</style>

<table>
<table>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Stock</th>
				<th>Precio</th>
				<th>Descripción </th>
                <th>Acciones</th>
			</tr>
		</thead>
		<tbody>
        <tbody>
                     <?php foreach($tabla as $fila):  ?>
                        <tr>
                            <td><?php echo($fila->prod_codigo); ?></td>
                            <td><?php echo($fila->prod_nombre); ?></td>
                            <td><?php echo($fila->prod_precioVenta); ?></td>
                            <td><?php echo($fila->prod_cantidadStock); ?></td>
                            <td><?php echo($fila->prod_descripcion); ?></td>
                            <td>
                            <script type="text/javascript">
                    function confirmar(){
                        var respuesta = confirm("¿Desea eliminar este producto?");
                        if (respuesta==true) {
                            return true;
                        } else {
                            return false;
                        }
                    }
            </script>
                                        <button 
                                          class=""
                                          onclick="location.href='actualizar.php?codigoP=<?php echo($fila->prod_codigo); ?>'"
                                          >Actualizar</button>
                                        <a href="../../controladores/controladorProducto.php?codigoPEliminar=<?php echo($fila->prod_codigo);?>">
                                          <button class="btn btn-danger" onclick="return confirmar()">Eliminar</button>
                                        </a>
                                        
                                    </td>
                                </tr>
                                
                               <?php endforeach; ?>
		</tbody>
	</table>
    <style>
        /* Estilos para el botón */
        .boton-crear {
            background-color: black;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            position: ;
        }
        .pato {
            text-align: right;
        }
    </style>
</head>
<style>
        .boton-crear {
            background-color: black;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .pato {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="pato">
        <a href="crear.php"><button class="boton-crear" type="button">Crear Producto</button></a>
        
    </div>
</body>
</html>

