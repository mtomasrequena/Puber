<?php
    require_once('backend/model/Usuario.php');
    // Conectarme a la Base de Datos
    $usuario = new Usuario();

  if(!isset( $_POST['email'] ) && !isset( $_POST['dni'])
  && !isset( $_POST['nombre']) && !isset($_POST['contraseña']) && !isset($_POST['telefono'])) {
    echo "<div >
            Debe completar todos los campos
        </div>";
        return;
  }
  session_start();

  $nombre = $_POST['nombre'];
  $identificacion = $_POST['dni'];
  $email = $_POST['email'];
  $password = $_POST['contraseña'];
  $telefono = $_POST['telefono'];

  $usuario->nombre = $nombre;
  $usuario->identificacion = $identificacion;
  $usuario->email = $email;
  $usuario->password = $password;
  $usuario->telefono = $telefono;
  $id_user =  $_SESSION['id_usuario'];
  
  $result = $usuario->actualizarUser($id_user);
  if($result === true) {
    echo "<script>alert('actualizacion de usuario') </script>";
    header('location: /Paginas/home-dependencias/home.php');   
  } else {
    echo "<script>alert('error al actualizar usuario ') </script>";
    header('location: /Paginas/index-dependencias/update-user.html'); 
  }
    



?>