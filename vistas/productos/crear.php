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
		<title>Inicio </title>
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
		<!-- End Header/Navigation -->
        <div class="card-body">
                          <form action="../../controladores/controladorProducto.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="" name="productoNombre">
                                <label for="floatingInput">Nombre del producto</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="" name="stockProducto">
                                <label for="floatingInput">Stock producto</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="" name="precioVenta">
                                <label for="floatingInput">Precio del producto</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="productoDescripcion">
                                  <option selected>Seleccione</option>
                                  <option value="Mueble">Mueble</option>
                                  <option value="Silla">Silla</option>
                                  <option value="Mesa">Mesa</option>
                                  <option value="Sofá">Sofá</option>
                                </select>
                                <label for="floatingSelect">Categoria</label>
                              </div>
                              
                              <div class="mt-5">
                                <input type="submit" class="btn btn-outline-black" value="Guardar Producto">
                              </div>
                          </form>
                        </div>
                        <div class="card-footer text-body-secondary">
                          <a href="listar.php">Ver Productos</a>
                        </div>
                      </div>
   
</body>
</html>

   