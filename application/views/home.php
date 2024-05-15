<?php
$this->load->view('templates/header');
$this->load->view('templates/sidebar');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Tarjeta Registro en Cartera -->
        <div class="col-xl-3  col-md-6 mb-4">
            <div class="card_1 border-left-primary shadow h-80 py-2">
                <div class="card-body">
                    <a href="<?= site_url('registrocartera'); ?>" class="stretched-link"></a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                REGISTROS EN CARTERA
                            </div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $cardRC ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="icon-wallet fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: <?= $cardRC ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Oficio de Adjudicacion -->
        <div class="col-xl-3  col-md-6 mb-4">
            <div class="card_1 border-left-success shadow h-80 py-2">
                <div class="card-body">
                    <a href="<?= site_url('oficioadjudicacion'); ?>" class="stretched-link"></a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                OFICIOS DE ADJUDICACIÓN
                            </div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $cardOA ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="icon-notebook fa-3x text-success"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?= $cardOA ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Contratos -->
        <div class="col-xl-3  col-md-6 mb-4">
            <div class="card_1 border-left-info shadow h-80 py-2">
                <div class="card-body">
                    <a href="<?= site_url('contrato'); ?>" class="stretched-link"></a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                CONTRATOS
                            </div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $cardNC ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="icon-book-open fa-3x text-info"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?= $cardNC ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Ordenes de Suministro -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card_1 border-left-warning shadow h-80 py-2">
                <div class="card-body">
                    <a href="<?= site_url('ordensuministro'); ?>" class="stretched-link"></a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                ORDENES DE SUMINISTRO
                            </div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $cardOS ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="icon-handbag fa-3x text-warning"></i>
                        </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 10px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: <?= $cardOS ?>%" aria-valuemin="0" aria-valuemax="100"></div>
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tipo de Adquisiciones</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ordenes de Suministro</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Registros en Cartera</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart3"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Google Charts -->
    <!--div class="row">
        <!-- Map Card -->
    <!--div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4" style="height: 55rem;">
                <!-- Card Header - Dropdown -->
    <!--div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mapa de Ordenes de Suministro</h6>
                </div>
                <!-- Card Body -->
    <!--div class="card-body d-flex justify-content-center" style="background-color: #C5E3FF;"-->
    <!--div class="card-body row h-100 justify-content-center align-items-center">
                    <div class="row h-100 justify-content-center align-items-center" id="regions_div" style="height: 30rem"></div>
                    <!--div id="regions_div"></div-->
    <!--/div>
            </div>
        </div>
    </div>


    <!-- Google Charts -->
    <div class="row">
        <!-- Map Card -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mapa de Ordenes de Suministro</h6>
                </div>
                <div id="map" class="container h-100 d-flex justify-content-center"></div>
                <!--div id="map" class="w-50 ml-0 mr-0 mx-auto text-center"></div-->
                <!-- Card Body -->
                <!--div class="card-body d-flex justify-content-center">
                    <div id="map"></div>
                </div-->
            </div>
        </div>
    </div>



    <div class="row">
        <!-- Conceptos Line Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Conceptos</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body row">
                    <!--div class="col-xl-4 table-sm" id="tabla"></div-->
                    <div class="chart-area col-xl-12">
                        <canvas id="myAreaChart"></canvas>
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
                    <?php $bg_color = array(
                        'bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-dark',
                        'bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info',
                        'bg-gradient-dark'
                    );
                    $i = 0;
                    foreach (json_decode($proveedores) as $data) {; ?>
                        <h4 class="small font-weight-bold"><?= $data->proveedor ?><span class="float-right"><?= $data->percent ?>%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar <?= $bg_color[$i] ?>" role="progressbar" style="width:<?= $data->percent ?>%" aria-valuenow="<?= $data->total ?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    <?php $i++;
                    } ?>
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
                    <?php $bg_color = array(
                        'bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info', 'bg-dark',
                        'bg-gradient-primary', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-danger', 'bg-gradient-warning', 'bg-gradient-info',
                        'bg-gradient-dark'
                    );
                    $i = 0;
                    foreach (json_decode($marcas) as $data) {; ?>
                        <h4 class="small font-weight-bold"><?= $data->marca ?><span class="float-right"><?= $data->percent ?>%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar <?= $bg_color[$i] ?>" role="progressbar" style="width:<?= $data->percent ?>%" aria-valuenow="<?= $data->total ?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    <?php $i++;
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
$this->load->view('templates/footer');
?>

<!-- Google Charts -->
<script type="text/javascript">
    var dataOSEdos = JSON.parse('<?php echo $OSEdos; ?>');
</script>
<script src="<?= site_url('public/js/mapdata.js'); ?>"></script>
<script src="<?= site_url('public/js/countrymap.js'); ?>"></script>
<script src="<?= site_url('public/js/loader.js'); ?>"></script>
<script src="<?= site_url('public/js/googleChats.js'); ?>"></script>

<!-- Chrat Area -->
<script type="text/javascript">
    var dataConceptos = JSON.parse('<?php echo $conceptos; ?>');
</script>
<script src="<?= site_url('public/js/demo/chart-area-demo.js'); ?>"></script>

<!-- Chrat Donuts -->
<script type="text/javascript">
    var dataTipoAdq = JSON.parse('<?php echo $tipoAdq; ?>');
</script>
<script src="<?= site_url('public/js/demo/chart-pie1-demo.js'); ?>"></script>

<script type="text/javascript">
    var dataFaltantesOS = JSON.parse('<?php echo $faltanteOS; ?>');
</script>
<script src="<?= site_url('public/js/demo/chart-pie2-demo.js'); ?>"></script>

<script type="text/javascript">
    var dataRegCartera = JSON.parse('<?php echo $regCartera; ?>');
</script>
<script src="<?= site_url('public/js/demo/chart-pie3-demo.js'); ?>"></script>