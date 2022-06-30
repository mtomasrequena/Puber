<?php
    session_start();
    if( isset( $_SESSION['user'])){
        echo "Panel de admin " . $_SESSION['user'];
        echo "<a href='logout.php'> Salir </a>";
    
    } else {
        echo "No autenticado;";
        echo "<a href='index.html'>Volver</a>";
    }
?>