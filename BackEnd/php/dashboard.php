<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
             <script>
                alert("Por favor debes iniciar sesion");
                window.location ="../../index.php";
             </script>
    ';
    session_destroy();
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
            <i class='bx bx-chevron-left'></i>
            </span>
            <img src="../../FronEnd/Imagenes/ICONO-HELP2-1.png"  class="logo" alt="">
            <h3>Help Biomagnetic</h3>
        </div>
    </nav>
    <main></main>
</body>
</html>