<?php
    $nombre=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $fechanac=$_POST['fechanac'];
    $dni=$_POST['dni'];
    $modeloauto=$_POST['modeloauto'];
    $matricula=$_POST['matricula'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];

    header('location: home.php');
?>