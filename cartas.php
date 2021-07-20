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

          <div class="mx-auto text-center">
            <nav class=" navbar site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="vehiculos.php" class="nav-link">Registro Vehículos</a></li>
                <li><a href="cartas.php" class="nav-link">Informacion Vehículos</a></li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Modulos de vehiculo
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="placas.php">Placas</a>
                    <a class="dropdown-item" href="poliza.php">Poliza</a>
                    <a class="dropdown-item" href="tenencia.php">Tenencia</a>
                    <a class="dropdown-item" href="verificacion_a.php">verificacion A</a>
                    <a class="dropdown-item" href="verificacion_b.php">verificacion B</a>
                    <a class="dropdown-item" href="verificacion_federal.php">Verificacion federal</a>
                    <a class="dropdown-item" href="fisico_mecanico.php">fisico mecanico</a>

                  </div>
                </li>
                <li><a href="proveedor.php" class="nav-link">Proveedores</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto w-26">
            <a href="" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>

    <div class="intro-section" id="home-section">
      <div class="slide-1" style="background-image: url('images/carretera.jpg');" data-stellar-background-ratio="0.5">
        <div class="container ">

          <div class="row  align-items-center site-section ">

            <div class="form-group">
              <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar vehiculo...">
            </div>

            <div class="cajapadre">
              <?php include 'php/consulta.php';
              while ($mostrar = mysqli_fetch_array($ejecutarrol)) { ?>

                <div class="caja" id="mytable">
                  <div class="card dis">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']); ?>" class="card-img-top foto" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $mostrar['marca'] ?></h5>
                      <h6 class="card-text font-weight-normal"><?php echo $mostrar['submarca'] ?>   <?php echo $mostrar['placas'] ?></h6>
                      <a class="btn btn-primary" href="informacionv.php?id=<?php echo $mostrar['id_vehiculo'] ?>">
                        ver datos
                      </a>
                      </button>
                    </div>
                  </div>
                </div>

              <?php } ?>
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