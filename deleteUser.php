<?php
    require_once('backend/model/Usuario.php');
    // Conectarme a la Base de Datos
    $usuario = new Usuario();
    session_start();
  if(!isset( $_SESSION['id_usuario'])) {
    echo "<div >
            Error al eliminar usuario
        </div>";
        return;
  }

    unset($_SESSION['user']);
    unset($_SESSION['email']);
    unset( $_SESSION['persona_id']); 
  
  $id_user =  $_SESSION['id_usuario'];
  
  $result = $usuario->deleteUser($id_user);
  if($result === true) {
    echo "<script>alert('actualizacion de usuario') </script>";
    header('location: index.php');
    unset( $_SESSION['id_usuario']);    
  } else {
    echo "<script>alert('error al actualizar usuario ') </script>";
    header('location: /Paginas/home-dependencias/home.php'); 
  }
    



?>