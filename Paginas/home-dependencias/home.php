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
  <!--barra de Navegacion-->
  <?php    
    require_once('../../Componentes/nav-home.html');
  ?>
 
  <!--Main-->
  <div class="pantalla-principal-home">
    
    <!--Panel para iniciar viaje-->
    <div class="panel-viaje">
      <div class="panel-viaje-capa1">
          <div data-baseweb="block" class="contenido-panel-viaje contenido-panel-viaje-decoracion">
            <!--Titulo Panel-->
            <div class="caja-titulo-panel-viaje">
              <div class="titulo-panel-viaje">¿Cuál es el punto de partida?</div>
            </div>
            
            <div class="separador"></div>
            
            <!--Campos de texto: Punto Partida, Punto Destino-->
            <div data-baseweb="block" class="campos-de-texto">
              <div class="campos-de-texto-interior">
                <div data-baseweb="input" class="campo-punto-partida-destino">
                  <div data-baseweb="input" class="punto-partida-destino-interior">
                    <input type="text" class="campo-punto-partida-destino-decoration form-control" id="exampleFormControlInput1" placeholder="Agrega un punto de partida">
                  </div>
                </div>
              </div>
              
              <div class="separador"></div>
              
              <div>
                <div data-baseweb="input" class="campo-punto-partida-destino">
                  <div data-baseweb="input" class="punto-partida-destino-interior">
                    <input type="text" class="campo-punto-partida-destino-decoration form-control" id="exampleFormControlInput1" placeholder="Ingresa el destino">
                  </div>
                </div>
              </div>
            </div>
            <!--Boton Listo-->
            <div data-baseweb="block" class="caja-button-listo">
              <button data-baseweb="button" class="button-listo">
                <div class="texto-button-listo">
                  Listo
                </div>
              </button>
            </div>
          </div>
      </div>
    </div>
    
    <!--Mapa fondo-->
    <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13135.533934228486!2d-58.38932363112062!3d-34.60710773451439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1652251704201!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <?php 
require_once('../../Componentes/footer-index.html')
?>