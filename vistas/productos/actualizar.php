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

$codigoP = $_GET["codigoP"]; 
$tablaProductos = consultarXcodigo($codigoP);
$filas = count($tablaProductos); 
if($filas == 0){
    header("location: listar.php"); 
}
else{
    foreach ($tablaProductos as $producto) {
        $codigoP = $producto->prod_codigo; 
        $nombreP = $producto->prod_nombre; 
        $cantidadP = $producto->prod_cantidadStock; 
        $precioP = $producto->prod_precioVenta; 
        $prod_descripcion = $producto->prod_descripcion; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<a class="navbar-brand" href="index.html">Muebles MYC<span></span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						
                    <li><a class="nav-link" href="../../ProyectoNuevoAdmin/index.html">Inicio</a></li>
						
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/shop.html">Tienda</a></li>
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/about.html">Nosotros</a></li>
						
						<li><a class="nav-link" href="../../ProyectoNuevoAdmin/contact.html">Contactanos</a></li>
                        <li class="nav-item active">
						<a class="nav-link" href="listar.php">Listar</a>
                        </li>
					</ul>

					
				</div>
			</div>
				
		</nav>

      <section class="mt-4" style="text-align: center;">
        <h2>Actualización de productos</h2>
        
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<div class="container">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <div>
                       
                        <div class="card-body">
                          <form action="../../controladores/controladorProducto.php" method="POST">
                          <div class="form-floating mb-3">
                                <input readonly type="text" class="form-control" id="floatingInput" placeholder="" name="codigoProductoA" value="<?php echo($codigoP);  ?>">
                                <label for="floatingInput">Codigo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="" name="nombreProductoA" value="<?php echo($nombreP);  ?>">
                                <label for="floatingInput">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="" name="precioProductoA" value="<?php echo($precioP);  ?>">
                                <label for="floatingInput">Precio</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="" name="cantidadProductoA" value="<?php echo($cantidadP);  ?>">
                                <label for="floatingInput">Cantidad</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="categoriaProductoA" >
                                  <option selected><?php echo($prod_descripcion);  ?></option>
                                  <option value="Mueble">Mueble</option>
                                  <option value="Silla">Silla</option>
                                  <option value="Mesa">Mesa</option>
                                  <option value="Sofá">Sofá</option>
                                </select>
                                <label for="floatingSelect">Categoria</label>
                              </div>
                              <div class="mt-5">
                                <input type="submit" class="btn btn-dark" value="Actualizar Producto">
                              </div>
                          </form>
                        </div>
                        <div class="card-footer text-body-secondary">
                          <a href="listar.php">Ver Productos</a>
                        </div>
                      </div>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>