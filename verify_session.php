<?php 
 session_start();
 
 if(!isset($_SESSION['email']) && !isset( $_SESSION['persona_id']) && !isset($_SESSION['id_usuario']) ) {
    header('location: Paginas/index-dependencias/usuario-inicio-sesion.html');
 }else{
    header('location: Paginas/home-dependencias/home.php');
 }



?>