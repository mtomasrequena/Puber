<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/style-general.css">
    <script src="https://kit.fontawesome.com/dd947ab136.js" crossorigin="anonymous"></script>
    </head>
<body>
  <!--COMPONENTE barra de Navegacion-->
  <?php    
  require_once('../../Componentes/nav-home.html');
?>

  <div class="container_init">
  <div class="container_picture">
    <div class="container_avatar">
        <img class="container_img img-fluid" src="../../img/avatar-usuario.jpg" alt="eliiiii">
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