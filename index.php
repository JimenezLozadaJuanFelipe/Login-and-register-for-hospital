<?php

session_start();

if(isset($_SESSION ['usuario'])){
    header("location: backEnd/php./dashboard.php");

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="FronEnd/css/estilos.css" />
</head>

<body>
    <main>
        <div class="contenedor_de_todo">
            <div class="caja_trasera">
                <div class="caja_trasera_Login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion para entrar en la pagina</p>
                    <button id="btn_iniciar_sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_trasera_Register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registrar_usuario">Registrarse</button>
                </div>
            </div>

            <!--Formulario login  y Registro-->

            <!--Login-->
            <div class="contedenor_login_register">
                <form action="BackEnd/php/login_usuario.php" class="formulario_login" method="POST" >
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" id="" />
                    <input type="password" placeholder="Contraseña" name="contrasena" id="" />
                    <button>Entrar</button>
                </form>

                <!--Registro-->
                <form action="BackEnd/php/registro_usuario.php" method="POST" class="formulario_register" >
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" id="">
                    <input type="email" placeholder="Correo Electronico" name="correo" id="">
                    <input type="text" placeholder="Usuario" name="usuario" id="">
                    <input type="password" placeholder="Contraseña" name="contrasena" id="">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="FronEnd/js/script.js"></script>

        
    </script>

</body>

</html>