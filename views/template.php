<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8"/>
    <link href="views/img/col.ico" rel='shortcut icon' type='image/ico'/>
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <title>U.E. SOCAVON</title>
  </head>
  <body>

    <?php 
        include_once ("inclusiones/header.php");
        include_once ("inclusiones/inicio.php");
        ?>
        <div class="container">
          <div class="row">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <h4 id="actividades">Actividades</h4>
                
                <h4 id="plantelDocente">Plantel docente</h4>
                
                <h4 id="galeria">Galeria de Imágines</h4>
                  <?php  include_once ("inclusiones/galeria.php");  ?>
                <h4 id="historia">historia</h4>
            </div>
          </div>
        </div>
        <?php
        include_once ("inclusiones/footer.php");
    ?>
    <script src="views/js/jquery.min1.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/bootstrap.bundle.min1.js"></script>
    <script src="views/js/prism1.js"></script>
    <script src="views/js/custom1.js"></script>
  </body>
</html>