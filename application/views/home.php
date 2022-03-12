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
    <!-- link href="<?=site_url('public/css/sb-admin-2.min.css');?>" rel="stylesheet"-->
    <link href="<?=site_url('public/css/sbadmin2.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!--ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" -->
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
                Navegación
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

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <ul class="navbar-nav ml-auto">
                        <!--div class="d-flex justify-content-center align-items-center text-primary font-weight-bold">
                            Coordinación de Equipamiento Médico y Proyectos Especiales
                        </div-->
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-4 text-gray-800"><?=($page['title'] ?? 'Undefined');?></h1-->

                    <?php if ($this->session->flashdata('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?=$this->session->flashdata('success_message');?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php elseif ($this->session->flashdata('error_message')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?=$this->session->flashdata('error_message');?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php else: ?>
                    <!-- div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hola, <?=($user['username'] ?? 'Guest');?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div -->
                    <?php endif;?>
                </div>
                <!-- /.container-fluid -->


                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Tarjeta Registro en Cartera -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                REGISTROS EN CARTERA
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardRC?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-briefcase fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta Oficio de Adjudicacion -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                                OFICIOS DE ADJUDICACIÓN
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardOA?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-alt fa-3x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta Contratos -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                CONTRATOS
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardNC?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-contract fa-3x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tarjeta Ordenes de Suministro -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                ORDENES DE SUMINISTRO
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardOS?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-parachute-box fa-3x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Charts -->
                    <div class="row">
                        <!-- Map Card -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4" style="height: 36rem;">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Mapa de Ordenes de Suministro</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row h-100 justify-content-center align-items-center" id="regions_div"
                                        style="height: 30rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <!-- Conceptos Line Chart -->
                        <div class="col-xl-12 col-lg-12">

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Conceptos</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body row">
                                    <div class="col-xl-4 table-sm" id="tabla"></div>
                                    <div class="chart-area col-xl-8">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Charts Donut Sections -->
                    <div class="row">
                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tipo de Adquisiciones</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart1"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Ordenes de Suministro</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart2"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Registros en Cartera</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart3"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Proveedores -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Proveedores</h6>
                                </div>
                                <div class="card-body">
                                    <?php $bg_color = array('bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-dark',
    'bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info',
    'bg-gradient-dark');
$i = 0;
foreach (json_decode($proveedores) as $data) {;?>
                                    <h4 class="small font-weight-bold"><?=$data->proveedor?><span
                                            class="float-right"><?=$data->percent?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar <?=$bg_color[$i]?>" role="progressbar"
                                            style="width:<?=$data->percent?>%" aria-valuenow="<?=$data->total?>"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <?php $i++;}?>
                                </div>
                            </div>
                        </div>


                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Proveedores -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Marcas</h6>
                                </div>
                                <div class="card-body">
                                    <?php $bg_color = array('bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-dark',
    'bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info',
    'bg-gradient-dark');
$i = 0;
foreach (json_decode($marcas) as $data) {;?>
                                    <h4 class="small font-weight-bold"><?=$data->marca?><span
                                            class="float-right"><?=$data->percent?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar <?=$bg_color[$i]?>" role="progressbar"
                                            style="width:<?=$data->percent?>%" aria-valuenow="<?=$data->total?>"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <?php $i++;}?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

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
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar Sesión" si está listo para finalizar su sesión.</div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-secondary text-center" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?=site_url('logout');?>">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=site_url('public/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=site_url('public/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?=site_url('public/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?=site_url('public/vendor/chart.js/Chart.min.js');?>"></script>



    <!-- Google Charts -->
    <script type="text/javascript">
    var dataOSEdos = JSON.parse('<?php echo $OSEdos; ?>');
    </script>
    <script src="<?=site_url('public/js/loader.js');?>"></script>
    <script src="<?=site_url('public/js/googleChats.js');?>"></script>

    <!-- Chrat Area -->
    <script type="text/javascript">
    var dataConceptos = JSON.parse('<?php echo $conceptos; ?>');
    </script>
    <script src="<?=site_url('public/js/demo/chart-area-demo.js');?>"></script>

    <!-- Chrat Donuts -->
    <script type="text/javascript">
    var dataTipoAdq = JSON.parse('<?php echo $tipoAdq; ?>');
    </script>
    <script src="<?=site_url('public/js/demo/chart-pie1-demo.js');?>"></script>

    <script type="text/javascript">
    var dataFaltantesOS = JSON.parse('<?php echo $faltanteOS; ?>');
    </script>
    <script src="<?=site_url('public/js/demo/chart-pie2-demo.js');?>"></script>

    <script type="text/javascript">
    var dataRegCartera = JSON.parse('<?php echo $regCartera; ?>');
    </script>
    <script src="<?=site_url('public/js/demo/chart-pie3-demo.js');?>"></script>

</body>

</html>