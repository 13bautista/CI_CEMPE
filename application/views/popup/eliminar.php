<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 24%;" role="document">
        <form id="eliminar-base-form" method="post">
            <div class="modal-content panel panel-primary">
                <div class="modal-header panel-heading">
                    <h4 class="modal-title -remove-title">Confirmación de Eliminación</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body panel-body">
                    <div class="row">
                        <div class="col-sm-12" style="min-height:50px;">
                            <span>¿Estás segur@ de que quieres eliminar esto?</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer panel-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" name="base_id" id="base_id">
                            <button type="button" class="btn rkmd-btn btn-success" id="eliminar-base">Si</button>
                            <button type="button" class="btn rkmd-btn btn-danger" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>