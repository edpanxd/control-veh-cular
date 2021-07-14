<!DOCTYPE html>
<html lang="en">

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

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

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
          <div class="site-logo mr-auto w-26"><a href="index.html">BIOIN</a></div>

          <div class="mx-auto text-center">
            <nav class=" navbar site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="vehiculos.php" class="nav-link">Vehículos</a></li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Modulos
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="placas.php">Placas</a>
                    <a class="dropdown-item" href="poliza.php">Poliza</a>
                    <a class="dropdown-item" href="tenencia.php">Tenencia</a>
                  </div>
                </li>



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
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">

                <div class="col-xl-12 mb-4 ">
                  <h1 data-aos="fade-up" data-aos-delay="100">vehiculos</h1>
                  <div class="mb-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarusuario">Agregar Vehículo</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#importar">Importar excel de Vehículo</button>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar vehiculo...">
                  </div>
                  <div class="table-responsive  my-custom-scrollbar ">
                    <table class="table table-dark " id="mytable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Marca</th>
                          <th>Submarca</th>
                          <th>Tipo</th>
                          <th>Modelo</th>
                          <th>Color</th>
                          <th>placas</th>
                          <th>Serie</th>
                          <th>Numero de motor</th>
                          <th>Eliminar</th>
                          <th>Modificar</th>



                        </tr>
                      </thead>
                      <tbody>

                        <?php include 'php/consulta.php';
                        $suma = 0;
                        $numero = 1;
                        while ($mostrar = mysqli_fetch_array($ejecutarrol)) {

                          $suma = $numero + $suma;

                        ?>
                          <tr>
                            <td><?php echo $suma ?></td>
                            <td><?php echo $mostrar['marca'] ?></td>
                            <td><?php echo $mostrar['submarca'] ?></td>
                            <td><?php echo $mostrar['tipo'] ?></td>
                            <td><?php echo $mostrar['modelo'] ?></td>
                            <td><?php echo $mostrar['color'] ?></td>
                            <td><?php echo $mostrar['placas'] ?></td>
                            <td><?php echo $mostrar['serie'] ?></td>
                            <td><?php echo $mostrar['numero_motor'] ?></td>
                            <td><a class="btn btn-danger" href="php/Vehiculo/eliminar_vehiculo.php?id=<?php echo $mostrar['id_vehiculo'] ?>"><i class="icon-trash"></i>
                              </a></td>
                            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar" data-id="<?php echo $mostrar['id_vehiculo'] ?>" data-marca="<?php echo $mostrar['marca'] ?>" data-submarca="<?php echo $mostrar['submarca'] ?>" data-tipo="<?php echo $mostrar['tipo'] ?>" data-modelo="<?php echo $mostrar['modelo'] ?>" data-color="<?php echo $mostrar['color'] ?>" data-placas="<?php echo $mostrar['placas'] ?>" data-serie="<?php echo $mostrar['serie'] ?>" data-numero="<?php echo $mostrar['numero_motor'] ?>"><i class="icon-edit"></i></button></td>
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
    </div>

  </div>




  <!--modal vehiculo-->
  <div class="modal fade" id="agregarusuario" tabindex="-1" role="dialog" aria-labelledby="usuario" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usuario">Agregar nuevo Vehiculo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/Vehiculo/registro_vehiculo.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Marca</label>
                  <input type="text" name="marca" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Submarca</label>
                  <input type="text" name="submarca" class="form-control">
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Tipo</label>
                  <input type="text" name="tipo" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Modelo</label>
                  <input type="text" name="modelo" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">color</label>
                  <input type="text" name="color" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">placas</label>
                  <input type="text" name="placas" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Serie</label>
                  <input type="text" name="serie" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Numero de Motor</label>
                  <input type="text" name="numero_motor" class="form-control">
                </div>
              </div>

            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
          </Form>
        </div>
        <div class="modal-footer">


        </div>
      </div>
    </div>
  </div>

  <!-- Modal para editar-->

  <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/Vehiculo/actualizar_vehiculo.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-12">
                  <div class="form-group col-md-3">
                    <label for="" class="col-form-label">ID</label>
                    <input type="text" id="id" name="id" class="form-control" readonly="readonly">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Marca</label>
                  <input type="text" id="marca" name="marca" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Submarca</label>
                  <input type="text" id="submarca" name="submarca" class="form-control">
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Tipo</label>
                  <input type="text" id="tipo" name="tipo" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Modelo</label>
                  <input type="text" id="modelo" name="modelo" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">color</label>
                  <input type="text" id="color" name="color" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">placas</label>
                  <input type="text" id="placas" name="placas" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Serie</label>
                  <input type="text" id="serie" name="serie" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Numero de Motor</label>
                  <input type="text" id="numero" name="numero_motor" class="form-control">
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>

          </Form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

  <!-- Importar -->
  <div class="modal fade" id="importar" tabindex="-1" role="dialog" aria-labelledby="usuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usuario">Agregar nuevo Vehiculo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/Vehiculo/registro_vehiculo.php" method="POST" enctype="multipart/form-data">

          

              
                <div class=" mb-3">
                  <input type="file" class="form-control" aria-label="Vehiculos" required>
                  <div class="invalid-feedback">No selecciono el documento</div>
                </div>

              



           

            <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
            </div>
            
          </Form>
        </div>
        <div class="modal-footer">


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
  <script src="js/modificar.js"></script>

  <script src="js/main.js"></script>
  <script src="dist/js/jspdf.plugin.autotable.min.js"></script>

  <!--Buscador -->
  <script>
    $(document).ready(function() {
      $("#search").keyup(function() {
        _this = this;

        $.each($("#mytable tbody tr"), function() {
          if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
          else
            $(this).show();
        });
      });

    });
  </script>
  <!--Para recibir datos a modal -->
  <script type="text/javascript">
    var exampleModal = document.getElementById('editar')
    exampleModal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var id = button.getAttribute('data-id')
      var marca = button.getAttribute('data-marca')
      var submarca = button.getAttribute('data-submarca')
      var tipo = button.getAttribute('data-tipo')
      var modelo = button.getAttribute('data-modelo')
      var color = button.getAttribute('data-color')
      var placas = button.getAttribute('data-placas')
      var serie = button.getAttribute('data-serie')
      var numero = button.getAttribute('data-numero')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitle = exampleModal.querySelector('.modal-title')
      var modalBodyid = exampleModal.querySelector('#id')
      var modalBodymarca = exampleModal.querySelector('#marca')
      var modalBodysubmarca = exampleModal.querySelector('#submarca')
      var modalBodytipo = exampleModal.querySelector('#tipo')
      var modalBodymodelo = exampleModal.querySelector('#modelo')
      var modalBodycolor = exampleModal.querySelector('#color')
      var modalBodyplacas = exampleModal.querySelector('#placas')
      var modalBodyserie = exampleModal.querySelector('#serie')
      var modalBodynumero = exampleModal.querySelector('#numero')

      modalTitle.textContent = 'Editar vehiculo'
      modalBodyid.value = id
      modalBodymarca.value = marca
      modalBodysubmarca.value = submarca
      modalBodytipo.value = tipo
      modalBodymodelo.value = modelo
      modalBodycolor.value = color
      modalBodyplacas.value = placas
      modalBodyserie.value = serie
      modalBodynumero.value = numero
    })
  </script>

</body>

</html>