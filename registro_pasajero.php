<?php
  require_once('backend/model/Usuario.php');
  $usuario = new Usuario();
  if(!isset( $_POST['email'] ) && !isset( $_POST['dni'])
    && !isset( $_POST['nombre']) && !isset($_POST['contraseña'])) {
      echo "<div >
              Debe completar todos los campos
          </div>";
          return;
  }

  $nombre = $_POST['nombre'];
  $identificacion = $_POST['dni'];
  $email = $_POST['email'];
  $password = $_POST['contraseña'];

  $usuario->nombre = $nombre;
  $usuario->identificacion = $identificacion;
  $usuario->email = $email;
  $usuario->password = $password; 

  
  $result = $usuario->RegistrarPasajero();
  if($result === true) {
    echo "<script>alert('usuario registrado') </script>";
    header('location: /Paginas/index-dependencias/usuario-inicio-sesion.html');   
  } else {
    echo "<script>alert('error al registrar usuario') </script>";
    header('location: /Paginas/index-dependencias/registro_pasajero.html'); 
  }
?>