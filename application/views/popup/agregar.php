<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <form id="agregar-base-form" method="post">
            <div class="modal-content panel panel-primary">
                <div class="modal-header panel-heading">
                    <h4 class="modal-title w-100 text-center">Agregar Registro</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body panel-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="concepto" class="form-control input-base-concepto" id="concepto" placeholder="Concepto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="descripcion" class="form-control input-base-descripcion" id="descripcion" rows="3" placeholder="Descripcion del Insumo"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="compendio" class="form-control input-base-compendio" id="compendio" placeholder="Clave de Compendio">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="proveedor" class="form-control input-base-proveedor" id="proveedor" placeholder="Proveedor">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="preciounitario" class="form-control input-base-preciounitario" id="preciounitario" placeholder="Precio Unitario" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digitsOptional': true, 'prefix': '','allowMinus': false,'placeholder':''">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="marca" class="form-control input-base-marca" id="marca" placeholder="Marca">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="modelo" class="form-control input-base-modelo" id="modelo" placeholder="Modelo">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="serie" class="form-control input-base-serie" id="serie" placeholder="Numero de Serie">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="cucop" class="form-control input-base-cucop" id="cucop" placeholder="Clave CUCoP">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="cabm" class="form-control input-base-cabm" id="cabm" placeholder="Clave CABM (Catálogo de Bienes Muebles)">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="partidapresupuestal" class="form-control input-base-partidapresupuestal" id="partidapresupuestal" placeholder="Partida Presupuestal">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="tipoadquisicion" class="form-control input-base-tipoadquisicion" id="tipoadquisicion" placeholder="Tipo de Adquisicion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="registrocartera" class="form-control input-base-registrocartera" id="registrocartera" placeholder="Registro en Cartera">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfecharegcartera">
                                    <input type="text" name="fecharegcartera" class="form-control input-base-fecharegcartera" id="fecharegcartera" placeholder="Fecha de Registro en Cartera">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="ofadjudicacion" class="form-control input-base-ofadjudicacion" id="ofadjudicacion" placeholder="Oficio de Adjudicacion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfofadjudicacion">
                                    <input type="text" name="fofadjudicacion" class="form-control input-base-fofadjudicacion" id="fofadjudicacion" placeholder="Fecha de Oficio de Adjudicacion">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="contrato" class="form-control input-base-contrato" id="contrato" placeholder="Numero de Contrato">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="oficiosolicitud" class="form-control input-base-oficiosolicitud" id="oficiosolicitud" placeholder="Oficio de Solicitud">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfechasolicitud">
                                    <input type="text" name="fechasolicitud" class="form-control input-base-fechasolicitud" id="fechasolicitud" placeholder="Fecha de Solicitud">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="claveclues" class="form-control input-base-claveclues" id="claveclues" placeholder="Clave CLUES">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="unidad" class="form-control input-base-unidad" id="unidad" placeholder="Unidad">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="entidad" class="form-control input-base-entidad" id="entidad" placeholder="Entidad Federativa">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="municipio" class="form-control input-base-municipio" id="municipio" placeholder="Municipio">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="jurisdiccion" class="form-control input-base-jurisdiccion" id="jurisdiccion" placeholder="Jurisdiccion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="institucion" class="form-control input-base-institucion" id="institucion" placeholder="Institucion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="estatusop" class="form-control input-base-estatusop" id="estatusop" placeholder="Estatus de Operacion">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="bajoresguardo" class="form-control input-base-bajoresguardo" id="bajoresguardo" placeholder="Bajo Resguardo">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="contactoestund" class="form-control input-base-contactoestund" id="contactoestund" placeholder="Contacto Estatal/Unidad">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="telefono" class="form-control input-base-telefono" id="telefono" Placeholder="Telefono" data-inputmask="'alias': 'phone','mask': '9','repeat':'10'">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="direccion" class="form-control input-base-direccion" id="direccion" placeholder="Direccion">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="dispalmacen" class="form-control input-base-dispalmacen" id="dispalmacen" placeholder="Disponible Almacen">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="ordensuministro" class="form-control input-base-ordensuministro" id="ordensuministro" placeholder="Orden de Suministro">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfechaos">
                                    <input type="text" name="fechaos" class="form-control input-base-fechaos" id="fechaos" placeholder="Fecha de Orden de Suministro">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="actaer" class="form-control input-base-actaer" id="actaer" placeholder="Numero de Acta Entrega-Recepcion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfechaexp">
                                    <input type="text" name="fechaexp" class="form-control input-base-fechaexp" id="fechaexp" placeholder="Fecha de Expedicion">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfinstalacion">
                                    <input type="text" name="finstalacion" class="form-control input-base-finstalacion" id="finstalacion" placeholder="Fecha de Instalacion">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="ordensi" class="form-control input-base-ordensi" id="ordensi" placeholder="Orden de Servicio/Instalacion">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfcapacitacion">
                                    <input type="text" name="fcapacitacion" class="form-control input-base-fcapacitacion" id="fcapacitacion" placeholder="Fecha de Capacitacion">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="accesorios" class="form-control input-base-accesorios" id="accesorios" placeholder="Accesorios">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="garantia" class="form-control input-base-garantia text-left" id="garantia" placeholder="Garantia en Meses" data-inputmask="'alias': 'numeric','min': '1','max':'36', 'prefix': '','placeholder':''">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="consumibles" class="form-control input-base-consumibles" id="consumibles" placeholder="Consumibles">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="observaciones" class="form-control input-base-observaciones" id="observaciones" rows="3" placeholder="Observaciones"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class=" row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="ordenservm1" class="form-control input-base-ordenservm1" id="ordenservm1" placeholder="Orden de Servicio/Mantenimiento 1">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfservm1">
                                    <input type="text" name="fservm1" class="form-control input-base-fservm1" id="fservm1" placeholder="Fecha de Servicio/Mantenimiento 1">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="obsordenservm1" class="form-control input-base-obsordenservm1" id="obsordenservm1" rows="3" placeholder="Observaciones Orden de Servicio/Mantenimiento 1"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="ordenservm2" class="form-control input-base-ordenservm2" id="ordenservm2" placeholder="Orden de Servicio/Mantenimiento 2">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group date" id="divfservm2">
                                    <input type="text" name="fservm2" class="form-control input-base-fservm2" id="fservm2" placeholder="Fecha de Servicio/Mantenimiento 2">
                                    <div class="input-group-addon input-group-append">
                                        <div class="input-group-text">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="obsordenservm2" class="form-control input-base-obsordenservm2" id="obsordenservm2" rows="3" placeholder="Observaciones Orden de Servicio/Mantenimiento 2"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer panel-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn rkmd-btn btn-success" data-addempid="" id="agregar-base">Agregar</button>
                            <button type="button" class="btn rkmd-btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>