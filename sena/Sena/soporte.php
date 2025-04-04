<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="ProyectoNuevo/Logo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

<!--Bootstrap CSS-->
		<link href="css1/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css1/tiny-slider.css" rel="stylesheet">
		<link href="css1/style.css" rel="stylesheet">
		<title>Inicio </title>
        <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: none;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }

        form {
            max-width: 600px; /* Define el ancho máximo del formulario */
            margin: 0 auto;   /* Centra el formulario horizontalmente */
            padding: 20px;    /* Espacio interno */
            background-color: #fff; /* Fondo blanco */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para diseño elegante */
        }
    </style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">R. A. S.<span></span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link" href="index.html">Inicio</a>
						</li>
						<li><a class="nav-link" href="calendario.php">Reservar</a></li>
						<li ><a class="nav-link" href="comentarios.php">Reseñas eventos</a></li>
						<li class="nav-item active"><a class="nav-link" href="soporte.php">Soporte</a></li>
                        <li><a class="nav-link" href="login/Login.html">Cerrar sesion</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						
						<li><img style="height: 80px;" src="imagenes/logo.png" alt="logo"></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
        <h1>Formulario de Contacto</h1>
        <form id="contactForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="Tu correo electrónico" required>

            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" placeholder="Motivo del contacto" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>

            <button type="button" id="enviar">Enviar</button>
        </form>
    </div>

    <script>
        const enviarBtn = document.getElementById('enviar');
        const form = document.getElementById('contactForm');

        enviarBtn.addEventListener('click', function () {
            if (form.checkValidity()) {
                alert('Tu mensaje ha sido enviado. Nos pondremos en contacto contigo pronto.');
                form.reset();
            } else {
                alert('Por favor, completa todos los campos requeridos.');
            }
        });
    </script>




		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
