<?php
http_response_code(404); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>

<style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #ffffff;
            text-align: center;
            padding: 50px;
            display: flex;
            color: #000000;
        }
        h1 {
            font-size: 100px;
            color: #721c24;
        }
        p {
            font-size: 24px;
        }
        a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            background-color: #746b6b;
            border: 0;
            padding: 10px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
            text-align: center;
        }
        a:hover {
            text-decoration: none;
            background: #721c24;
        }
    </style>
</head>
<body>

    <div>
        <h1>500</h1>
    <p>¡Vaya! Algo salió mal en nuestro servidor.</p>
    <p>Estamos trabajando para resolver el problema. Por favor, vuelve a intentarlo más tarde.</p>
    <p><a href="/inicio.html">Regresar al inicio</a></p>
    </div>
    <img src="robot-error.png" alt="">
    </body>