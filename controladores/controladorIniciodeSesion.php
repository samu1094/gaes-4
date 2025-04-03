<?php
include("../modelos/modeloUsuario.php"); 

if(isset($_POST["usuario"]) && !empty($_POST["usuario"])){
    
    $usuarioIn = $_POST["usuario"]; 
    $passwordIn = $_POST["pass"]; 

    try {
        
        $objUsuario = new modeloUsuario(NULL, $usuarioIn, NULL, NULL); 
        $consulta = $objUsuario->consultaLogin(); 

        $correoBD = $consulta->Usua_nombre; 
        $passwordBD = $consulta->Usua_clave; 
        $rolBD = $consulta->Usua_rol; 

        if($usuarioIn == $correoBD){
            if($passwordIn == $passwordBD){
                session_start(); 
                $_SESSION["usuario"] = $rolBD; 

                if($rolBD == "Usuario"){
                    echo(
                        "<script type='text/javascript'>
                            alert('Bienvenido Usuario');
                            window.location.href='../ProyectoNuevoUsu/index.php';
                        </script>"
                    ); 
                }
                elseif($rolBD == "Administrador"){
                    echo(
                        "<script type='text/javascript'>
                            alert('Bienvenido Administrador!');
                            window.location.href='../ProyectoNuevoAdmin/index.php';
                        </script>"
                    ); 
                }
                
            }
            else{
                echo(
                    "<script type='text/javascript'>
                        alert('Datos incorrectos');
                        window.location.href='../Vistas/login/login.php';
                    </script>"
                ); 
            }
        }
        else{
            echo(
                "<script type='text/javascript'>
                    alert('Datos incorrectos.');
                    window.location.href='../Vistas/login/login.php';
                </script>"
            ); 
        }

    } catch (\Throwable $error) {
        echo("Error en el controlador: " . $error); 
        die(); 
    }
}

?>