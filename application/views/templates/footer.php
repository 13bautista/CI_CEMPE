</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; CEMPE by SABS (13bautista@gmail.com) </span>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?= site_url('logout'); ?>">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/datepicker/js/bootstrap-datepicker.es.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/chart/Chart.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= site_url('public/vendor/inputmask/jquery.inputmask.bundle.js'); ?>"></script>
<!-- Page level custom scripts -->
<script>
    var baseurl = "<?php echo site_url(); ?>";
</script>
<!-- Custom scripts for all pages -->
<script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>
<script src="<?= site_url('public/js/demo/datatables-demo.js'); ?>"></script>
<script src="<?= site_url('public/js/custom.js'); ?>"></script>

</body>

</html>