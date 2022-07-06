<?php
require_once('../../Componentes/header-home.html')
?>
<body>
  <!--COMPONENTE barra de Navegacion-->
  <?php    
  require_once('../../Componentes/nav-home.html');
?>

  <div class="container_init">
  <div class="container_picture">
    <div class="container_avatar">
        <img class="container_img img-fluid" src="../../img/avatar.png" alt="eliiiii">
        <div class="container_name-avatar">
            <span>Elizabeth</span>
        </div>
    </div>
    <div class="container_info">
      <div class="container_item">
        <span>Telefono:</span>
        <span>1154897565</span>
      </div>
      <div class="container_item">
          <span>Correo Electronico:</span>
          <span>elidiva@gmail.com</span>
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

  <?php 
  require_once('../../Componentes/footer-index.html')
  ?>