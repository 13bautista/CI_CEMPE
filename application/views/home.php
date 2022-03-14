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
<<<<<<< HEAD
                Navegación
=======
                Navegaación
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
=======

>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <ul class="navbar-nav ml-auto">
<<<<<<< HEAD
                        <!--div class="d-flex justify-content-center align-items-center text-primary font-weight-bold">
                            Coordinación de Equipamiento Médico y Proyectos Especiales
                        </div-->
=======
                        <div class="d-flex justify-content-center align-items-center text-primary font-weight-bold">
                            Coordinación de Equipamiento Médico y Proyectos Especiales
                        </div>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
=======
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=site_url('logout');?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
<<<<<<< HEAD
                                    Salir
=======
                                    Logout
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                    <!-- div class="alert alert-info alert-dismissible fade show" role="alert">
=======
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                        Hola, <?=($user['username'] ?? 'Guest');?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
<<<<<<< HEAD
                    </div -->
=======
                    </div>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                    <?php endif;?>
                </div>
                <!-- /.container-fluid -->


<<<<<<< HEAD
=======







>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                REGISTROS EN CARTERA
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardRC?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-briefcase fa-3x text-primary"></i>
=======
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                REGISTROS EN CARTERA
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=1?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                                OFICIOS DE ADJUDICACIÓN
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardOA?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-alt fa-3x text-success"></i>
=======
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                OFICIOS DE ADJUDICACION
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=2?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-success"></i>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                CONTRATOS
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardNC?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-contract fa-3x text-info"></i>
=======
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                CONTRATOS
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=3?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-info"></i>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
                                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                ORDENES DE SUMINISTRO
                                            </div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?=$cardOS?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-parachute-box fa-3x text-warning"></i>
=======
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                ORDEBNES DE SUMINISTRO
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=4?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-warning"></i>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<<<<<<< HEAD
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

=======

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Conceptos</h6>
                                </div>
                                <!-- Card Body -->
<<<<<<< HEAD
                                <div class="card-body row">
                                    <div class="col-xl-4 table-sm" id="tabla"></div>
                                    <div class="chart-area col-xl-8">
=======
                                <div class="card-body">
                                    <div class="chart-area">
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>



                    <!-- Charts Donut Sections -->
                    <div class="row">
                        <!-- Donut Chart -->
=======

                        <!-- Pie Chart -->
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<<<<<<< HEAD
                                    <h6 class="m-0 font-weight-bold text-primary">Tipo de Adquisiciones</h6>
=======
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
<<<<<<< HEAD
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
=======
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



<<<<<<< HEAD



=======
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
<<<<<<< HEAD
=======

>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                            <!-- Proveedores -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Proveedores</h6>
                                </div>
                                <div class="card-body">
<<<<<<< HEAD
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
=======
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD

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

=======
                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?=site_url('public/img/solucionesapp.svg');?>">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw →</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>











>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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

<<<<<<< HEAD


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
=======
    <!-- Page level custom scripts -->
    <script src="<?=site_url('public/js/demo/chart-area-demo.js');?>"></script>
    <script src="<?=site_url('public/js/demo/chart-pie-demo.js');?>"></script>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181

</body>

</html>