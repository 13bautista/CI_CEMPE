<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= ($page['title'] ?? 'Undefined'); ?></title>
    <!-- Bootstrap CSS-->
    <link href="<?= site_url('public/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= site_url('public/vendor/datepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="<?= site_url('public/vendor/fontawesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= site_url('public/vendor/fontawesome/css/font-awesome-animation.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= site_url('public/vendor/simplelineicons-free/css/simple-line-icons.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= site_url('public/css/sb-admin-2-v1.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= site_url('public/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">