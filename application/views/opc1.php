<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=($page['title'] ?? 'Undefined');?></title>

    <!-- Custom fonts for this template-->
    <link href="<?=site_url('public/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?=site_url('public/vendor/fontawesome-free/css/font-awesome-animation.min.css');?>" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=site_url('public/css/sbadmin2.css');?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url();?>">
                <div class="sidebar-brand-icon rotate-n-15 ">
                    <i class="fa fa-ambulance faa-wrench animated-hover " aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CEMPE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Navegaación
            </div>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url();?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Principal</span>
                </a>
            </li>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('opc1');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Opcion 1</span>
                </a>
            </li>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('opc2');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Opcion 2</span>
                </a>
            </li>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('opc3');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Opcion 3</span>
                </a>
            </li>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('opc4');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Opcion 4</span>
                </a>
            </li>

            <!-- Nav Item - Homepages -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('opc5');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Opcion 5</span>
                </a>
            </li>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?=site_url('logout');?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Salir</span>
                </a>
            </li>

            <br>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <ul class="navbar-nav ml-auto">
                    <div class="d-flex justify-content-center align-items-center text-primary font-weight-bold">
                        Coordinación de Equipamiento Médico y Proyectos Especiales
                    </div>
                </ul>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small"><?=($user['username'] ?? 'Guest');?></span>
                            <img class="img-profile rounded-circle" src="<?=site_url('public/img/perfilf2.svg');?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuración
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=site_url('logout');?>" data-toggle="modal"
                                data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Salir
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="200%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CLAVE_COMPENDIO</th>
                                            <th>CONCEPTO</th>
                                            <th>DESCRIPCION_OS</th>
                                            <th>PROVEEDOR</th>
                                            <th>PROVEEDOR_OS</th>
                                            <th>PROVEEDOR_CORREGIDO</th>
                                            <th>MARCA</th>
                                            <th>MARCA_OS</th>
                                            <th>MARCA_CORREGIDO</th>
                                            <th>MODELO</th>
                                            <th>MODELO_OS</th>
                                            <th>MODELO_CORREGIDO</th>
                                            <th>SERIE</th>
                                            <th>SERIE_OS</th>
                                            <th>SERIE_CORREGIDO</th>
                                            <th>CANTIDAD</th>
                                            <th>CLAVE_CUCOP</th>
                                            <th>CLAVE_CABM</th>
                                            <th>PARTIDA_PRESUPUESTAL</th>
                                            <th>TIPO_ADQUISICION</th>
                                            <th>NUM_REGISTRO_CARTERA</th>
                                            <th>FECHA_REGISTRO_CARTERA</th>
                                            <th>OFICIO_ADJUDICACION</th>
                                            <th>FECHA_OFICIO_ADJUDICACION</th>
                                            <th>NUM_CONTRATO</th>
                                            <th>PRECIO_UNITARIO_SIN_IVA</th>
                                            <th>OFICIO_SOLICITUD</th>
                                            <th>FECHA_SOLICITUD</th>
                                            <th>CLUES</th>
                                            <th>ESTATUS_OPERACION</th>
                                            <th>UNIDAD</th>
                                            <th>ENTIDAD_FEDERATIVA</th>
                                            <th>NOMBRE_MUNICIPIO</th>
                                            <th>NOMBRE_JURISDICCION</th>
                                            <th>BAJO_RESGUARDO</th>
                                            <th>NOMBRE_INSTITUCION</th>
                                            <th>CONTACTO_ESTATAL_UNIDAD</th>
                                            <th>DIRECCION</th>
                                            <th>TELEFONO</th>
                                            <th>ORDEN_SUMINISTRO</th>
                                            <th>OS_PDF</th>
                                            <th>OS_CORREGIDA</th>
                                            <th>ESTATUS</th>
                                            <th>DISPONIBLE_ALMACEN</th>
                                            <th>FECHA_ORDEN_SUMINISTRO</th>
                                            <th>FECHA_EXPEDICION_OS</th>
                                            <th>FECHA_INSTALACION</th>
                                            <th>ACTA_ENTREGA_RECEPCION</th>
                                            <th>ORDEN_SERVICIO_INST</th>
                                            <th>CAPACITACION</th>
                                            <th>ACCESORIOS</th>
                                            <th>CONSUMIBLES</th>
                                            <th>OBSERVACIONES</th>
                                            <th>GARANTIA_MESES</th>
                                            <th>FECHA_MP1</th>
                                            <th>ORDEN_SERVICIO_MP1</th>
                                            <th>DIAS_MP1</th>
                                            <th>ALERTA_MP1</th>
                                            <th>OBSERVACIONES_MP1</th>
                                            <th>FECHA_MP2</th>
                                            <th>ORDEN_SERVICIO_MP2</th>
                                            <th>DIAS_MP2</th>
                                            <th>ALERTA_MP2</th>
                                            <th>OBSERVACIONES_MP2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CEMPE</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=site_url('logout');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal show" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center" style="background:none;border:none">
                <img class="rounded mx-auto d-block" src="<?=site_url('public/img/gif/loading6.gif');?>">
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=site_url('public/vendor/jquery/jquery.min.js');?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
    </script>
    <script src="<?=site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=site_url('public/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?=site_url('public/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="public/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="public/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript">
    var dt = <?php echo $tabla; ?>;
    </script>
    <script src="public/js/demo/datatables-demo.js"></script>
    <script src="public/js/demo/fixedColumns.js"></script>

</body>

</html>