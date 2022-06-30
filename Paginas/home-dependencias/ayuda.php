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
    require_once('../../Componentes/nav-home.html')
    ?>
    <!--COMPONENTE barra de Navegacion-->
  

  <form action="">
    <div class="contenedor-de-formulario">
      <div class="mb-3">
        <label for="ayuda_email" class="form-label">
          <p class="leyendas">
            Email
          </p> 
        </label>
        <input type="email" class="form-control" id="ayuda_email" placeholder="puber@example.com">
      </div>
      <div class="mb-3">
        <label for="ayuda_text" class="form-label">
          <p class="leyendas">
            Descripcion del problema
          </p>
        </label>
        <textarea class="form-control" id="ayuda_text" rows="3"></textarea>
      </div>
        <div class="boton btn">
            <button>
                Enviar
            </button>
        </div>
    </div>
  </form>

  <?php 
require_once('../../Componentes/footer-index.html')
?>