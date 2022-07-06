<?php
require_once('../../Componentes/header-home.html');
session_start();
?>
<body>
  <!--COMPONENTE barra de Navegacion-->
  <?php    
  require_once('../../Componentes/nav-home.html');
  require_once('../../backend/model/Usuario.php');
  $a=1;
  $b=1;
    $usuario = new Usuario();
    $idUser = $_SESSION['id_usuario'];
    $result = $usuario->getInfoUser($idUser);
    // echo $result[0]['email'];
   
?>

<?php if ( $a==$b ) { ?>
<div class="container_init">
<div class="container_picture">
<div class="container_avatar">
    <img class="container_img img-fluid" src="../../img/avatar.png" alt="eliiiii">
    <div class="container_name-avatar">
        <span><?php echo $result[0]['nombre'];?></span>
    </div>
</div>
<div class="container_info" style=" margin-top: 4vh !important;">
  <div class="container_item">
    <span>Telefono:</span>
    <span><?php echo $result[0]['telefono'];?></span>
  </div>
  <div class="container_item">
      <span>Correo Electronico:</span>
      <span><?php echo $result[0]['email'];?></span>
    </div>
    <div class="container_item">
      <span>Viajes Realizados: </span>
      <span>56</span>
    </div>
    <div class="container_item">
      <span>Calificacion: </span>
      <span>5 estrellitas</span>
    </div>
</div>
</div>
</div>

<?php } ?>
  

  <?php 
  require_once('../../Componentes/footer-index.html')
  ?>