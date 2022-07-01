<?php
    require_once('backend/model/Usuario.php');
    // Conectarme a la Base de Datos
    $usuario = new Usuario();


    if(  !isset( $_POST['email'] ) && !isset($_POST['password']) ) {
        echo "Datos ivalido";
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $respuesta = $usuario->loguear($email, $password);

    if( count($respuesta) > 0 ){
        // llamar a una funcion para el login
        session_start();
        $_SESSION['email'] = $respuesta[0]['email'];
        $_SESSION['persona_id'] = $respuesta[0]['persona_id'];
        $_SESSION['id_usuario'] = $respuesta[0]['id_usuario'];

        header('location: Paginas/home-dependencias/home.php');
    } else {
        echo "<div class='alert alert-warning mt-4' role='alert'>
                Usuario o Contraseña incorrectos
            </div>";
    }


?>