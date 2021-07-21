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

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="dist/css/select2.css">

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
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-xl-12 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Vigencia Placas</h1>
                  <div class="mb-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarplacas">Agregar placas</button>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar placas...">
                  </div>
                  <div class="table-responsive my-custom-scrollbar ">
                    <table class="table table-dark " id="mytable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Vehiculo</th>
                          <th>Placas</th>
                          <th>Fecha de vencimiento</th>
                          <th>Estatus</th>
                          <th>Eliminar</th>
                          <th>Modificar</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                        include 'php/consulta.php';

                        $suma = 0;
                        $numero = 1;

                        while ($mostrar = mysqli_fetch_array($placasresultado)) {

                          $suma = $numero + $suma;

                        ?>
                          <tr>
                            <td><?php echo $suma ?></td>
                            <td><?php echo $mostrar['marca'] ?></td>
                            <td><?php echo $mostrar['placas'] ?></td>
                            <td><?php echo $mostrar['vencimiento'] ?></td>
                            <td><?php echo $mostrar['estatus'] ?></td>

                            <td><a class="btn btn-danger eliminar" href="php/placas/eliminar_placas.php?id=<?php echo $mostrar['id']; ?>&url=<?php echo $mostrar['archivo']; ?>"><i class="icon-trash"></i>
                              </a></td>
                            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarPlacas" data-id="<?php echo $mostrar['id'] ?>" data-vehiculo="<?php echo $mostrar['id_vehiculo'] ?>" data-vencimiento="<?php echo $mostrar['vencimiento'] ?>"><i class="icon-edit"></i></button></td>
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

  </div>



  <!--Modal agregar placas -->
  <div class="modal fade" id="agregarplacas" tabindex="-1" role="dialog" aria-labelledby="usuario" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usuario">Agregar nuevas Placas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/placas/registro_placas.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-md-12">

                  <select class="form-control" id="pe" name="vehiculo">
                    <option disabled selected>Selecciona el vehiculo</option>
                    <?php include 'php/Vehiculo/consultaV.php'; ?>
                    <?php foreach ($vehiculos as $opcionesv) :   ?>

                      <option value="<?php echo $opcionesv["id_vehiculo"] ?>">
                        <?php echo $opcionesv["marca"] ?>, con placas: <?php echo $opcionesv["placas"] ?>
                      </option>

                    <?php endforeach ?>
                  </select>
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Fecha</label>
                  <input type="date" name="fecha" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Placas vigentes</label>
                  <div class="form-group ">
                    <input type="radio" class="btn-check" name="estatus" id="success-outlined" value="vigentes" autocomplete="off">
                    <label class="btn btn-outline-success" for="success-outlined">Vigentes</label>

                    <input type="radio" class="btn-check" name="estatus" value="vencidas" id="danger-outlined" autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outlined">vencidas</label>
                  </div>
                </div>
                <div class="custom-file mb-3">
                  <label for="" class="custom-file-label" data-browse="Archivo PDF">Archivo</label>
                  <input type="file" name="archivo" class="custom-file-input" required>
                  <div class="invalid-feedback">No selecciono el documento</div>
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

  <div class="modal fade" id="editarPlacas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/placas/actualizar_placas.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="" class="col-form-label">ID</label>
                  <input type="text" name="id" id="id" class="form-control" readonly="readonly">
                </div>

                <div class="form-group col-md-12">

                  <select class="form-control" name="vehiculo" id="vehiculo">
                    <option></option>
                    <?php include 'php/Vehiculo/consultaV.php'; ?>
                    <?php foreach ($vehiculos as $opcionesv) :   ?>

                      <option value="<?php echo $opcionesv["id_vehiculo"] ?>">
                        <?php echo $opcionesv["marca"] ?>, con placas: <?php echo $opcionesv["placas"] ?>
                      </option>

                    <?php endforeach ?>
                  </select>
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Fecha</label>
                  <input type="date" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Placas vigentes</label>


                  <div class="form-group ">
                    <input type="radio" class="btn-check" name="estatus" id="success-outline" value="vigentes" autocomplete="off">
                    <label class="btn btn-outline-success" for="success-outline">Vigentes</label>

                    <input type="radio" class="btn-check" name="estatus" value="vencidas" id="danger-outline" autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outline">vencidas</label>
                  </div>






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
  <script src="dist/js/select2.js"></script>

  <script src="js/main.js"></script>
  <script src="dist/js/jspdf.plugin.autotable.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    var exampleModal = document.getElementById('editarPlacas')
    exampleModal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var id = button.getAttribute('data-id')
      var vehiculo = button.getAttribute('data-vehiculo')
      var vencimiento = button.getAttribute('data-vencimiento')

      //  
      //
      //
      //
      var modalTitle = exampleModal.querySelector('.modal-title')
      var modalBodyid = exampleModal.querySelector('#id')
      var modalBodyvehiculo = exampleModal.querySelector('#vehiculo')
      var modalBodyvencimiento = exampleModal.querySelector('#fecha')

      //
      //
      //
      //
      modalTitle.textContent = 'Editar Placas'
      modalBodyid.value = id
      modalBodyvehiculo.value = vehiculo
      modalBodyvencimiento.value = vencimiento


    })
  </script>
  <!-- Alerta -->
  <script type="text/javascript">
    $('.eliminar').on('click', function(e) {
      e.preventDefault();
      const href = $(this).attr('href')

      swal.fire({
        title: 'Desea eliminar el registro?',
        type: 'warning',
        icon: 'warning',
        showCancelButton: true,
        CancelButtonColor: '#2E2E2E',
        confirmButtonColor: '#B40404',
        confirmButtonText: 'Eliminar',

      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })

    })
  </script>
  <!-- seleccion-->
  <script>
    $('#pe').select2({
      width: '100%',
      dropdownParent: $('#agregarplacas')
    });
  </script>
</body>

</html>