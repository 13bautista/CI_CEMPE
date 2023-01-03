<?php
$this->load->view('templates/header');
$this->load->view('templates/sidebar');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="table-responsive">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Base de Datos COVID19
                </h6>
            </div>
            <div class="row">
                <div class="col-lg-12"><span id="success-msg"></div>
            </div>
            <div class="col-lg-12">
                <a class="float-right btn btn-primary btn-sm" href="javascript:void(0);" data-toggle="modal" data-target="#agregar" style="margin: 4px;">
                    <i class="fa fa-plus"></i> Agregar Insumo
                </a>
            </div>
            <div class="card-body">
                <table id="dataTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr id="filters">
                            <th>ID</th>
                            <th>COMPENDIO</th>
                            <th>CONCEPTO</th>
                            <th>PROVEEDOR</th>
                            <th>MARCA</th>
                            <th>MODELO</th>
                            <th>SERIE</th>
                            <th>REGISTRO CARTERA</th>
                            <th>OFICIO ADJUDICACION</th>
                            <th>ORDEN SUMINISTRO</th>
                            <th>OPCIONES</th>
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

<?php
$this->load->view('templates/footer');
?>

<!-- PopUp-->
<?php
$this->load->view('popup/agregar');
$this->load->view('popup/mostrar');
$this->load->view('popup/editar');
$this->load->view('popup/eliminar');
?>