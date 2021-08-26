<!doctype html>
<html lang="es">
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
        //include_once ("inclusiones/mision.php");
        ?>
<div id="myDIV"> 
        <!-------barra de navegacion------->

        <!-------seccion de mision----->
          <section id="inicio" style="background-color: #F2F2F2;"><br><br><br><br>
            <div class="container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">
                  <?php
                  include_once ("inclusiones/mision.php");
                  ?>
                </div>
              </div>
            </div>
          </section>
          <!-------seccion de mision----->

          <!-------seccion de actividades----->
          <section id="actividades" ><br><br><br>
            <div class="container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">

                  <hr class="featurette-divider">
                  
                  <h2 class="section-title">Actividades</h2>

                </div>
              </div>
            </div>
            <div class="container about-container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">
                  
                </div>
              </div>
            </div>
          </section>
          <!-------seccion de actividades----->
          
          <!-------seccion de plantel docente---------> 
           <section id="plantel" style="background-color: #F2F2F2;"><br><br><br>
            <div class="container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">

                  <hr class="featurette-divider">
                  
                  <h2>Plantel Docente</h2>

                </div>
              </div>
            </div>
            <div class="container about-container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">
                  <?php 
                      include_once ("inclusiones/plantel.php");
                    ?>
                </div>
              </div>
            </div>
          </section>
          <!-------seccion de plantel docente--------->  

          <!-------seccion de galeria---------> 
           <section id="galeria"><br><br><br>
            <div class="container wow fadeInUp">
              <div class="row" >
                <div class="col-md-12">

                  <hr class="featurette-divider">
                  
                  <h2>Galeria de Imágines</h2>

                </div>
              </div>
            </div>
            <div class="container about-container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">
                  <?php  
                      include_once ("inclusiones/galeria.php");  
                    ?>
                </div>
              </div>
            </div>
          </section>
          <!-------seccion de galeria---------> 

          <!-------seccion de infraestructura---------> 
           <section id="infraestructura" style="background-color:#F2F2F2;"><br><br><br>
            <div class="container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">

                  <hr class="featurette-divider">
                  
                  <h2 id="historia">Infraestructura</h2>

                </div>
              </div>
            </div>
            <div class="container about-container wow fadeInUp">
              <div class="row">
                <div class="col-md-12">
                  <?php  
                        
                    ?>
                </div>
              </div>
            </div>
            </div>
          </section>
          <!-------seccion de infraestructura---------> 
         
        <!-------barra de navegacion------->
</div>
        <?php
        include_once ("inclusiones/footer.php");
    ?>
    <script src="views/js/jquery.min1.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/bootstrap.bundle.min1.js"></script>
    <script src="views/js/prism1.js"></script>
    <script src="views/js/custom1.js"></script>
    <script src="views/js/busqueda.js"></script>
  </body>
</html>