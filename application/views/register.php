<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<<<<<<< HEAD
    <title><?=($page['title'] ?? 'Undefined');?></title>

    <!-- Custom fonts for this template -->
    <link href="<?=site_url('public/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?=site_url('public/css/body.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?=site_url('public/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(0, 0, 0, 0.7);">
=======
    <title><?= ($page['title'] ?? 'Undefined'); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= site_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/body.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= site_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<header>
<div class="d-flex justify-content-center">
        <img alt="gob.mx" src="https://framework-gb.cdn.gob.mx/landing/img/LogoRojo.svg" width="350">
    </div>
</header>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
<<<<<<< HEAD
                                    <div class="text-center mb-5">
                                        <img alt="gob.mx" src="<?=site_url('public/img/insabi.svg');?>" class="img-fluid" alt="Responsive image">
                                    </div>

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
                                    <?php endif;?>

                                    <?=form_open('register', ['class' => 'user']);?>
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?=(form_error('username') ? 'is-invalid' : '');?>"
					    style="background-color: rgba(0, 0, 0, 0);" name="username" 
					    placeholder="Usuario" value="<?=set_value('username');?>">
                                        <?=form_error('username', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password"
                                                class="form-control form-control-user <?=(form_error('password1') ? 'is-invalid' : '');?>"
						style="background-color: rgba(0, 0, 0, 0);" name="password1" 
						placeholder="Contraseña">
                                            <?=form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password"
                                                class="form-control form-control-user <?=(form_error('password2') ? 'is-invalid' : '');?>"
						style="background-color: rgba(0, 0, 0, 0);" name="password2" 
						placeholder="Confirmar Contraseña">
                                            <?=form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-user btn-block">Registrarse</button>
                                    <?=form_close();?>

                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="<?=site_url('login');?>">Ya tienes una cuenta?
                                            Ingresar</a>
=======
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Crear una cuenta</h1>
                                    </div>

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
                                    <?php endif; ?>

                                    <?= form_open('register', ['class' => 'user']); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= (form_error('username') ? 'is-invalid' : ''); ?>" name="username" placeholder="Usuario" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user <?= (form_error('password1') ? 'is-invalid' : ''); ?>" name="password1" placeholder="Contraseña">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user <?= (form_error('password2') ? 'is-invalid' : ''); ?>" name="password2" placeholder="Confirmar Contraseña">
                                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Registrarse</button>
                                    <?= form_close(); ?>

                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="<?= site_url('login'); ?>">Ya tienes una cuenta? Ingresar</a>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
<<<<<<< HEAD
    <script src="<?=site_url('public/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=site_url('public/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=site_url('public/js/sb-admin-2.min.js');?>"></script>
=======
    <script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>
>>>>>>> a83247bca92426a321f315a3a7db53731a151181

</body>

</html>