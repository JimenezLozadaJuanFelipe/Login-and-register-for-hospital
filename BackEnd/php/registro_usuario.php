<?php

include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = md5($_POST['contrasena']);
//Encriptamiento de contraseña md5


$query = "INSERT INTO usuarios(nombre_completo , correo, usuario, contrasena) 
                VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena' ) ";

//Encriptamiento de contraseña

//Verificacion para que el correo no se repita en la base de datos

 $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

 if (mysqli_num_rows($verificar_correo) > 0 ){
     echo '

     <script>
     alert("Este correo ya esta registrado, intenta con otro diferente");
     window.location ="../../index.php";
     </script>

     ';
     exit();
 }

 //Verificacion para que el nombre de usuario no se repita en la base de datos

 $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

 if (mysqli_num_rows($verificar_usuario) > 0 ){
     echo '

     <script>
     alert("Este usuario ya esta registrado, intenta con otro diferente");
     window.location ="../../index.php";
     </script>

     ';
     exit();
 }


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
             <script>
                     alert("Usuario almacenado exitosamente");
                     window.location ="../../index.php";
            </script>
    ';
}else{
    echo '
    <script>
            alert("Intentelo de nuevo usuario no almacenado");
            window.location ="../../index.php";
   </script>
';
}
mysqli_close($conexion);
?>