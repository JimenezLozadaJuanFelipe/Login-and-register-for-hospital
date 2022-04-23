<?php

session_start();
include "conexion.php";
 
    $correo = $_POST['correo'];
    $contrasena = md5($_POST ['contrasena']);

    //contraseña encriptada


    $validar_login = mysqli_query($conexion, "SELECT  *  FROM usuarios   WHERE correo='$correo'
    and contrasena='$contrasena'  ");

    if (mysqli_num_rows($validar_login) >0 ) {

        $_SESSION['usuario']= $correo;
        
        header("location: dashboard.php");
        exit();
    
    }else{
        echo '
        <script>
         alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location ="../../index.php";
         </script>
     ';
     exit();
}

?>