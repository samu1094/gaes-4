
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:
            background-size: cover;
            margin: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
            text-align: center;
            margin: 100px auto;
        }

        .login-container h2 {
            color: #333;
        }

        .form-group {
            margin: 20px 0;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .password-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .password-toggle input {
            flex: 1;
        }

        .password-toggle button {
            border: none;
            background: transparent;
            cursor: pointer;
        }

        .login-button {
            background: linear-gradient(45deg, #0074d9, #00a99d);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s;
        }

        .login-button:hover {
            background: linear-gradient(45deg, #0056b3, #00987b);
        }

        .forgot-password {
            margin-top: 10px;
            text-align: center;
        }

        .signup-link {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form class="login" action="../../controladores/controladorIniciodeSesion.php" method="POST">
            <div class="form-group">
                <label for="username">Nombre de usuario (máximo 20 caracteres, minimo 7 caracteres):</label>
                <input type="text"  placeholder="Nombre de usuario" autofocus name="usuario" minlength="7" maxlength="20" >
            </div>

            <div class="form-group">
                <label for="password">Contraseña (máximo 15 caracteres, minimo 6 caracteres):</label>
                <div class="password-toggle">
                    <input type="password" placeholder="Contraseña" name="pass"  minlength=6 maxlength="15">
                    <button type="button" id="showPassword">Mostrar</button>
                </div>
            </div>

            <button class="login-button" name="Ingresar" type="submit">Iniciar Sesión</button>
        </form>

        <div class="forgot-password">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>

        <div class="signup-link">
            ¿No tienes una cuenta? <a href="#">Regístrate aquí</a>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordButton = document.getElementById("showPassword");

        showPasswordButton.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordButton.textContent = "Ocultar";
            } else {
                passwordInput.type = "password";
                showPasswordButton.textContent = "Mostrar";
            }
        });
    </script>
</body>
</html>






