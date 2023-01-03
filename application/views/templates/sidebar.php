<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url(); ?>">
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
            <a class="nav-link pb-0" href="<?= site_url(); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tablero</span>
            </a>
        </li>

        <!-- Nav Item - Homepages -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('opc1'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Base de Datos</span>
            </a>
        </li>

        <!-- Nav Item - Homepages -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('opc2'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Opcion 2</span>
            </a>
        </li>

        <!-- Nav Item - Homepages -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('opc3'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Opcion 3</span>
            </a>
        </li>

        <!-- Nav Item - Homepages -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('opc4'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Opcion 4</span>
            </a>
        </li>

        <!-- Nav Item - Homepages -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('opc5'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Opcion 5</span>
            </a>
        </li>

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
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
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Sidebar Toggle (Topbar) -->
                <ul class="navbar-nav ml-auto d-none d-sm-block">
                    <div class="d-flex justify-content-center align-items-center text-primary font-weight-bold">
                        Coordinación de Equipamiento Médico y Proyectos Especiales
                    </div>
                </ul>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ($user['username'] ?? 'Guest'); ?></span>
                            <img class="img-profile rounded-circle" src="<?= site_url('public/img/perfilf2.svg'); ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <!--
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuración
                            </a>
                            <div class="dropdown-divider"></div>
                            -->
                            <a class="dropdown-item" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
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
                <!--h1 class="h3 mb-4 text-gray-800"><?= ($page['title'] ?? 'Undefined'); ?></h1-->

                <?php if ($this->session->flashdata('success_message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success_message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php elseif ($this->session->flashdata('error_message')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('error_message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php else : ?>
                    <!-- div class="alert alert-info alert-dismissible fade show" role="alert">
    Hola, <?= ($user['username'] ?? 'Guest'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div -->
                <?php endif; ?>
            </div>
            <!-- /.container-fluid -->