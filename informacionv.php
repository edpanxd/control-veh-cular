<!DOCTYPE html>
<html lang="es">

<head>
  <title>Control Vehícular</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style2.css">

  <link rel="stylesheet" href="css/hover.css">

  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: #6e80cf;">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-26"><a href="index.php">BIOIN</a></div>

          <a href="cartas.php" class="btn btn-secondary bt">Volver a Vehiculos</a>


        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">


      <div class="slide-1" style="background-image: url('images/carretera.jpg');" data-stellar-background-ratio="0.5">
        <div class="container ">

          <div class="row  align-items-center site-section ">

          <div class="cajapadre">
             <div>
             <?php
              include 'php/conn.php';
              $id = $_GET['id'];
              $vehiculo = "SELECT * FROM vehiculos WHERE id_vehiculo='$id'";
              $ejecutarro = mysqli_query($cone, $vehiculo);
              while ($mostrar = mysqli_fetch_array($ejecutarro)) { ?>
               
                <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']); ?>" class="zoom fotito ta" alt="...">
                <h1 class="display-4"><?php echo $mostrar['marca'] ?></h1>
                <div class="row">
               <div class="col-md-3">
               <p> Submarca: <?php echo $mostrar['submarca'] ?>.</p>
                <p> Tipo: <?php echo $mostrar['tipo'] ?>.</p>
               </div>
               <div class="col-md-3">
               <p> Modelo: <?php echo $mostrar['modelo'] ?>.</p>
                <p> Placas: <?php echo $mostrar['placas'] ?>.</p>
               </div>
               <div class="col-md-3">
               <p> Serie: <?php echo $mostrar['serie'] ?>.</p>
                <p> Color: <?php echo $mostrar['color'] ?>.</p>
               </div>
               <div class="col-md-3">
                <p> Numero: <?php echo $mostrar['numero_motor'] ?>.</p>
               </div>
                </div>
              <?php } ?>
              </div>
            
              <h1>Placas</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table" id="mytable">
                  <thead >
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Fecha de vencimiento</th>
                      <th>Estatus</th>
                      <th>Nombre</th>
                      <th>Archico</th>

                    </tr>
                  </thead >
                  <tbody>

                    <?php
                    $suma = 0;
                    $numero = 1;
                    $placas2 = "SELECT * FROM placas INNER JOIN vehiculos on 
                      placas.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $placasresultado = mysqli_query($cone, $placas2);
                    while ($mostrar = mysqli_fetch_array($placasresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['vencimiento'] ?></td>
                        <td ><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/placas/pdfplacas.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>

                      </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Poliza</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table" id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Poliza</th>
                      <th>Seguro</th>
                      <th>Vigencia</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                     
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $suma = 0;
                    $numero = 1;
                    $poliza = "SELECT * FROM poliza INNER JOIN vehiculos on 
                    poliza.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $polizaresultado = mysqli_query($cone, $poliza);
                    while ($mostrar = mysqli_fetch_array($polizaresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['poliza'] ?></td>
                        <td><?php echo $mostrar['seguro'] ?></td>
                        <td><?php echo $mostrar['vigencia'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/poliza/pdfpoliza.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                       </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Tenencia</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table  " id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Tenencia</th>
                      <th>Pago</th>
                      <th>Estatus</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $suma = 0;
                    $numero = 1;
                    $tenencia = "SELECT *FROM tenencia INNER JOIN vehiculos on 
                    tenencia.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $tenenciaresultado = mysqli_query($cone, $tenencia);
                    while ($mostrar = mysqli_fetch_array($tenenciaresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['tenencia'] ?></td>
                        <td>$ <?php echo $mostrar['pago'] ?></td>
                        <td><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/tenencia/pdftenencia.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                        </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Verificacion A</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table  " id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Fecha</th>
                      <th>Estatus</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                   
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $suma = 0;
                    $numero = 1;
                    $verificacion_a = "SELECT * FROM verificacion_a INNER JOIN vehiculos on 
                    verificacion_a.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $verificacion_aresultado = mysqli_query($cone, $verificacion_a);
                    while ($mostrar = mysqli_fetch_array($verificacion_aresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/verificacion_a/pdfverificacian_a.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                       </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Verificacion B</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table" id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Fecha</th>
                      <th>Estatus</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $suma = 0;
                    $numero = 1;
                    $verificacion_b = "SELECT * FROM verificacion_b INNER JOIN vehiculos on 
                      verificacion_b.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $verificacion_bresultado = mysqli_query($cone, $verificacion_b);
                    while ($mostrar = mysqli_fetch_array($verificacion_bresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/verificacion_b/pdfverificacion_b.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                       </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Verificacion Federal</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table " id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Fecha</th>
                      <th>Estatus</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $suma = 0;
                    $numero = 1;
                    $verificacion_federal = "SELECT * FROM verificacion_federal INNER JOIN vehiculos on 
                    verificacion_federal.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $verificacion_Fresultado = mysqli_query($cone, $verificacion_federal);
                    while ($mostrar = mysqli_fetch_array($verificacion_Fresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['estatus'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary" href="php/verificacion_federal/pdfverificacion_federal.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                        </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <h1>Fisico Mecanico</h1>
              <div class="table-responsive my-custom-scrollbar ">
                <table class="table  " id="mytable">
                  <thead>
                    <tr class="table-info">
                      <th>#</th>
                      <th>Vehiculo</th>
                      <th>Placas</th>
                      <th>Fisico Mecanico</th>
                      <th>Fecha</th>
                      <th>Nombre</th>
                      <th>Archivo</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $suma = 0;
                    $numero = 1;
                    $verificacion_mecanico = "SELECT * FROM fisico_mecanico INNER JOIN vehiculos on 
                    fisico_mecanico.vehiculo_id=vehiculos.id_vehiculo WHERE vehiculo_id='$id'";
                    $verificacion_Mresultado = mysqli_query($cone, $verificacion_mecanico);
                    while ($mostrar = mysqli_fetch_array($verificacion_Mresultado)) {

                      $suma = $numero + $suma;

                    ?>
                      <tr class="table-light">
                        <td><?php echo $suma ?></td>
                        <td><?php echo $mostrar['marca'] ?></td>
                        <td><?php echo $mostrar['placas'] ?></td>
                        <td><?php echo $mostrar['mecanico'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><a class="btn btn-primary"  href="php/fisico_mecanico/pdffisico_mecanico.php?id=<?php echo $mostrar['id'] ?>" target="_blank"><i class="icon-file"></i>
                          </a></td>
                        </tr>

                    <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>


  <script src="js/main.js"></script>

  <script>
    $(document).ready(function() {
      $("#search").keyup(function() {
        _this = this;

        $.each($("#mytable div "), function() {
          if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
          else
            $(this).show();
        });
      });

    });
  </script>

  <script>
    (function($) {
      $(window).on("load", function() {
        $(".cajapadre").mCustomScrollbar();
      });
    })(jQuery);
  </script>


</body>

</html>