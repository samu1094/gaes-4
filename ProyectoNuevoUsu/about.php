<?php
session_start(); 

if($_SESSION["usuario"] == null || $_SESSION["usuario"]== ""){
	session_destroy(); 
	header("location: ../index.html");
}
elseif($_SESSION["usuario"] == "Administrador"){
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

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Sobre nosotros</title>
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
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Inicio</a>
						</li>
						<li><a class="nav-link" href="shop.php">Tienda</a></li>
						<li class="active"><a class="nav-link" href="about.php">Nosotros</a></li>
					
						<li><a class="nav-link" href="contact.php">Contactanos</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						
						<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Sobre nostros</h1>
								<p class="mb-4">Somos una empresa creada hace 8 años con el fin de ofrecer muebles de calidad, en nuestra empresa existe una pasión por el diseño y la artesania de hacer muebles eso es lo que nos llega a caracterizar de otras empresas. Ademas estamos comprometidos a proporcionar a nuestros clientes muebles de alta calidad que combinen estilo, durabilidad y funcionalidad</p>
								<p><a href="shop.html" class="btn btn-secondary me-2">Tienda</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">¿Y tú que vas a comprar hoy?</h2>
						<p>En nuestra empresa tenemos algunos privilegios que te gustaran.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Entrega ¡Gratis y rapida!</h3>
									<p>En nuestra empresa contamos con los mejores envios, ya que nosotros mismos llevamos los productos a tú puerta, para garantizar la calidad del producto.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Compra facil!</h3>
									<p>En nuestra empresa tambien contamos con la compra facil, lo que quiere decir es que tenemos varios metodos de pagos que te facilitarán.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Atención al cliente las 24 horas.</h3>
									<p>En nuestra empresa contamos con la atención al cliente las 24 horas, mediante nuestros canales virtuales, como lo son facebook, whatsapp o instagram.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Devolución o garantia.</h3>
									<p>También contamos con una garantía, la cual puede asegurar la calidad de nuestros productos. En caso de que haya un problema en el mueble, silla, cama, etc., se podrá hacer el cambio.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/sofa8.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->
		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Aqui podras contactarnos.</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Escribe tú nombre">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Escribe tú correo">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<ul class="list-unstyled custom-social">
							<li><a href="https://www.facebook.com/mycmueblesydisenos"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="https://www.instagram.com/muebles_myc/"><span class="fa fa-brands fa-instagram"></span></a></li>
						</ul>
					</div>




		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
