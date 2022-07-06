<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['email']);
    unset( $_SESSION['persona_id']); 
    unset($_SESSION['id_usuario']); 

    header('location: /index.php');
?>