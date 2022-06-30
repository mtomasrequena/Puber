<?php
require_once('../../Componentes/header-home.html')
?>
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