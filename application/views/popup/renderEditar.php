    <?php
    $id = $baseInfo['ID'] ? $baseInfo['ID'] : '';
    $compendio = $baseInfo['CLAVE_COMPENDIO'] ? $baseInfo['CLAVE_COMPENDIO'] : '';
    $concepto = $baseInfo['CONCEPTO'] ? $baseInfo['CONCEPTO'] : '';
    $proveedor = $baseInfo['PROVEEDOR'] ? $baseInfo['PROVEEDOR'] : '';
    $marca = $baseInfo['MARCA'] ? $baseInfo['MARCA'] : '';
    $modelo = $baseInfo['MODELO'] ? $baseInfo['MODELO'] : '';
    $serie = $baseInfo['SERIE'] ? $baseInfo['SERIE'] : '';
    $preciounitario = $baseInfo['PRECIO_UNITARIO_SIN_IVA'] ? $baseInfo['PRECIO_UNITARIO_SIN_IVA'] : '';
    $cucop = $baseInfo['CLAVE_CUCOP'] ? $baseInfo['CLAVE_CUCOP'] : '';
    $cabm = $baseInfo['CLAVE_CABM'] ? $baseInfo['CLAVE_CABM'] : '';
    $partidapresupuestal = $baseInfo['PARTIDA_PRESUPUESTAL'] ? $baseInfo['PARTIDA_PRESUPUESTAL'] : '';
    $tipoadquisicion = $baseInfo['TIPO_ADQUISICION'] ? $baseInfo['TIPO_ADQUISICION'] : '';
    $registrocartera = $baseInfo['NUM_REGISTRO_CARTERA'] ? $baseInfo['NUM_REGISTRO_CARTERA'] : '';
    $fecharegcartera = $baseInfo['FECHA_REGISTRO_CARTERA'] ? $baseInfo['FECHA_REGISTRO_CARTERA'] : '';
    $ofadjudicacion = $baseInfo['OFICIO_ADJUDICACION'] ? $baseInfo['OFICIO_ADJUDICACION'] : '';
    $fofadjudicacion = $baseInfo['FECHA_OFICIO_ADJUDICACION'] ? $baseInfo['FECHA_OFICIO_ADJUDICACION'] : '';
    $contrato = $baseInfo['NUM_CONTRATO'] ? $baseInfo['NUM_CONTRATO'] : '';
    $oficiosolicitud = $baseInfo['OFICIO_SOLICITUD'] ? $baseInfo['OFICIO_SOLICITUD'] : '';
    $fechasolicitud = $baseInfo['FECHA_SOLICITUD'] ? $baseInfo['FECHA_SOLICITUD'] : '';
    $claveclues = $baseInfo['CLUES'] ? $baseInfo['CLUES'] : '';
    $unidad = $baseInfo['UNIDAD'] ? $baseInfo['UNIDAD'] : '';
    $entidad = $baseInfo['ENTIDAD_FEDERATIVA'] ? $baseInfo['ENTIDAD_FEDERATIVA'] : '';
    $municipio = $baseInfo['CLAVE_MUNICIPIO'] ? $baseInfo['CLAVE_MUNICIPIO'] : '';
    $jurisdiccion = $baseInfo['NOMBRE_JURISDICCION'] ? $baseInfo['NOMBRE_JURISDICCION'] : '';
    $institucion = $baseInfo['NOMBRE_INSTITUCION'] ? $baseInfo['NOMBRE_INSTITUCION'] : '';
    $estatusop = $baseInfo['ESTATUS_OPERACION'] ? $baseInfo['ESTATUS_OPERACION'] : '';
    $bajoresguardo = $baseInfo['BAJO_RESGUARDO'] ? $baseInfo['BAJO_RESGUARDO'] : '';
    $contactoestund = $baseInfo['CONTACTO_ESTATAL_UNIDAD'] ? $baseInfo['CONTACTO_ESTATAL_UNIDAD'] : '';
    $direccion = $baseInfo['DIRECCION'] ? $baseInfo['DIRECCION'] : '';
    $telefono = $baseInfo['TELEFONO'] ? $baseInfo['TELEFONO'] : '';
    $dispalmacen = $baseInfo['DISPONIBLE_ALMACEN'] ? $baseInfo['DISPONIBLE_ALMACEN'] : '';
    $ordensuministro = $baseInfo['ORDEN_SUMINISTRO'] ? $baseInfo['ORDEN_SUMINISTRO'] : '';
    $fechaos = $baseInfo['FECHA_ORDEN_SUMINISTRO'] ? $baseInfo['FECHA_ORDEN_SUMINISTRO'] : '';
    $actaer = $baseInfo['ACTA_ENTREGA_RECEPCION'] ? $baseInfo['ACTA_ENTREGA_RECEPCION'] : '';
    $finstalacion = $baseInfo['FECHA_INSTALACION'] ? $baseInfo['FECHA_INSTALACION'] : '';
    $ordensi = $baseInfo['ORDEN_SERVICIO_INST'] ? $baseInfo['ORDEN_SERVICIO_INST'] : '';
    $fcapacitacion = $baseInfo['CAPACITACION'] ? $baseInfo['CAPACITACION'] : '';
    $accesorios = $baseInfo['ACCESORIOS'] ? $baseInfo['ACCESORIOS'] : '';
    $consumibles = $baseInfo['CONSUMIBLES'] ? $baseInfo['CONSUMIBLES'] : '';
    $observaciones = $baseInfo['OBSERVACIONES'] ? $baseInfo['OBSERVACIONES'] : '';
    $garantia = $baseInfo['GARANTIA_MESES'] ? $baseInfo['GARANTIA_MESES'] : '';
    $ordenservm1 = $baseInfo['ORDEN_SERVICIO_MP1'] ? $baseInfo['ORDEN_SERVICIO_MP1'] : '';
    $fservm1 = $baseInfo['FECHA_MP1'] ? $baseInfo['FECHA_MP1'] : '';
    $obsordenservm1 = $baseInfo['OBSERVACIONES_MP1'] ? $baseInfo['OBSERVACIONES_MP1'] : '';
    $ordenservm2 = $baseInfo['ORDEN_SERVICIO_MP2'] ? $baseInfo['ORDEN_SERVICIO_MP2'] : '';
    $fservm2 = $baseInfo['FECHA_MP2'] ? $baseInfo['FECHA_MP2'] : '';
    $obsordenservm2 = $baseInfo['OBSERVACIONES_MP2'] ? $baseInfo['OBSERVACIONES_MP2'] : '';
    ?>
    <input type="hidden" name="id" value="<?php print $id; ?>">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <p><strong>Concepto:&emsp;</strong><input type="text" name="concepto" class="form-control input-base-concepto" id="concepto" value="<?php print $concepto ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <p><strong>Descripcion:&emsp;</strong><textarea name="descripcion" class="form-control input-base-descripcion" id="descripcion" rows="3"><?php print "" ?></textarea></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Clave Compendio:&emsp;</strong><input type="text" name="compendio" class="form-control input-base-compendio" id="compendio" value="<?php print $compendio ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Proveedor:&emsp;</strong><input type="text" name="proveedor" class="form-control input-base-proveedor" id="proveedor" value="<?php print $proveedor ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Precio unitario:&emsp;</strong>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="preciounitario" class="form-control input-base-preciounitario" id="preciounitario" value="<?php print $preciounitario <> null ? number_format((float)$preciounitario, 2) : 0 ?>" data-inputmask="'alias':'numeric','prefix':'','decimalProtect':true,'groupSeparator':',','radixFocus':true,'autoGroup':true,'autoUnmask':true,'removeMaskOnSubmit':true,'allowMinus':false" />
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Marca:&emsp;</strong><input type="text" name="marca" class="form-control input-base-marca" id="marca" value="<?php print $marca ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Modelo:&emsp;</strong><input type="text" name="modelo" class="form-control input-base-modelo" id="modelo" value="<?php print $modelo ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>N° Serie:&emsp;</strong><input type="text" name="serie" class="form-control input-base-serie" id="serie" value="<?php print $serie ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Clave CUCoP:&emsp;</strong><input type="text" name="cucop" class="form-control input-base-cucop" id="cucop" value="<?php print $cucop ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Clave CABM:&emsp;</strong><input type="text" name="cabm" class="form-control input-base-cabm" id="cabm" value="<?php print $cabm ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Partida Presupuestal:&emsp;</strong><input type="text" name="partidapresupuestal" class="form-control input-base-partidapresupuestal" id="partidapresupuestal" value="<?php print $partidapresupuestal ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Tipo de Adquisicion:&emsp;</strong><input type="text" name="tipoadquisicion" class="form-control input-base-tipoadquisicion" id="tipoadquisicion" value="<?php print $tipoadquisicion ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Registro en Cartera:&emsp;</strong><input type="text" name="registrocartera" class="form-control input-base-registrocartera" id="registrocartera" value="<?php print $registrocartera ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Registro en Cartera:&emsp;</strong>
                <div class="input-group date" id="e_fecharegcartera">
                    <input type="text" name="fecharegcartera" class="form-control input-base-fecharegcartera" id="fecharegcartera" value="<?php print $fecharegcartera ?>">
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
                <p><strong>Oficio de Adjudicacion:&emsp;</strong><input type="text" name="ofadjudicacion" class="form-control input-base-ofadjudicacion" id="ofadjudicacion" value="<?php print $ofadjudicacion ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de oficio de Adjudicacion:&emsp;</strong>
                <div class="input-group date" id="e_fofadjudicacion">
                    <input type="text" name="fofadjudicacion" class="form-control input-base-fofadjudicacion" id="fofadjudicacion" value="<?php print $fofadjudicacion ?>">
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
                <p><strong>Contrato:&emsp;</strong><input type="text" name="contrato" class="form-control input-base-contrato" id="contrato" value="<?php print $contrato ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Oficio Solicitud:&emsp;</strong><input type="text" name="oficiosolicitud" class="form-control input-base-oficiosolicitud" id="oficiosolicitud" value="<?php print $oficiosolicitud ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Solicitud:&emsp;</strong>
                <div class="input-group date" id="e_fechasolicitud">
                    <input type="text" name="fechasolicitud" class="form-control input-base-fechasolicitud" id="fechasolicitud" value="<?php print $fechasolicitud ?>">
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
                <p><strong>Clave CLUES:&emsp;</strong><input type="text" name="claveclues" class="form-control input-base-claveclues" id="claveclues" value="<?php print $claveclues ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Unidad:&emsp;</strong><input type="text" name="unidad" class="form-control input-base-unidad" id="unidad" value="<?php print $unidad ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Entidad:&emsp;</strong><input type="text" name="entidad" class="form-control input-base-entidad" id="entidad" value="<?php print $entidad ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Municipio:&emsp;</strong><input type="text" name="municipio" class="form-control input-base-municipio" id="municipio" value="<?php print $municipio ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Jurisdiccion:&emsp;</strong><input type="text" name="jurisdiccion" class="form-control input-base-jurisdiccion" id="jurisdiccion" value="<?php print $jurisdiccion ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Institucion:&emsp;</strong><input type="text" name="institucion" class="form-control input-base-institucion" id="institucion" value="<?php print $institucion ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Estatus de Operacion:&emsp;</strong><input type="text" name="estatusop" class="form-control input-base-estatusop" id="estatusop" value="<?php print $estatusop ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Bajo Resguardo:&emsp;</strong><input type="text" name="bajoresguardo" class="form-control input-base-bajoresguardo" id="bajoresguardo" value="<?php print $bajoresguardo ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Contacto Estatal/Unidad:&emsp;</strong><input type="text" name="contactoestund" class="form-control input-base-contactoestund" id="contactoestund" value="<?php print $contactoestund ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Telefono:&emsp;</strong>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" name="telefono" class="form-control input-base-telefono" id="telefono" value="<?php print $telefono ?>" data-inputmask="'alias': 'phone','mask': '9','repeat':'10'">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <p><strong>Direccion:&emsp;</strong><input type="text" name="direccion" class="form-control input-base-direccion" id="direccion" value="<?php print $direccion ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Disponibilidad en Almacen:&emsp;</strong><input type="text" name="dispalmacen" class="form-control input-base-dispalmacen" id="dispalmacen" value="<?php print $dispalmacen ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Orden de Suministro:&emsp;</strong><input type="text" name="ordensuministro" class="form-control input-base-ordensuministro" id="ordensuministro" value="<?php print $ordensuministro ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Orden de Suministro:&emsp;</strong>
                <div class="input-group date" id="e_fechaos">
                    <input type="text" name="fechaos" class="form-control input-base-fechaos" id="fechaos" value="<?php print $fechaos ?>">
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
                <p><strong>Numero de Acta Entrega-Recepcion:&emsp;</strong><input type="text" name="actaer" class="form-control input-base-actaer" id="actaer" value="<?php print $actaer ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Expedición:&emsp;</strong>
                <div class="input-group date" id="e_fechaexp">
                    <input type="text" name="fechaexp" class="form-control input-base-fechaexp" id="fechaexp" value="<?php print "" ?>">
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
                <strong>Fecha de Instalacion:&emsp;</strong>
                <div class="input-group date" id="e_finstalacion">
                    <input type="text" name="finstalacion" class="form-control input-base-finstalacion" id="finstalacion" value="<?php print $finstalacion ?>">
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
                <p><strong>Orden de Servicio/Instalacion:&emsp;</strong><input type="text" name="ordensi" class="form-control input-base-ordensi" id="ordensi" value="<?php print $ordensi ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Capacitacion:&emsp;</strong>
                <div class="input-group date" id="e_fcapacitacion">
                    <input type="text" name="fcapacitacion" class="form-control input-base-fcapacitacion" id="fcapacitacion" value="<?php print $fcapacitacion ?>">
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
                <p><strong>Accesorios:&emsp;</strong><input type="text" name="accesorios" class="form-control input-base-accesorios" id="accesorios" value="<?php print $accesorios ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Garantia en Meses:&emsp;</strong><input type="text" name="garantia" class="form-control input-base-garantia" id="garantia" value="<?php print $garantia ?>" data-inputmask="'alias': 'numeric','min': '1','max':'36', 'prefix': '','placeholder':''"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Consumibles:&emsp;</strong><input type="text" name="consumibles" class="form-control input-base-consumibles" id="consumibles" value="<?php print $consumibles ?>"></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <p><strong>Observaciones:&emsp;</strong><textarea name="observaciones" class="form-control input-base-observaciones" id="observaciones" rows="3"><?php print $observaciones ?></textarea></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Orden de Servicio/Mantenimiento 1:&emsp;</strong><input type="text" name="ordenservm1" class="form-control input-base-ordenservm1" id="ordenservm1" value="<?php print $ordenservm1 ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Servicio/Mantenimiento 1:&emsp;</strong>
                <div class="input-group date" id="e_fservm1">
                    <input type="text" name="fservm1" class="form-control input-base-fservm1" id="fservm1" value="<?php print $fservm1 ?>">
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
                <p><strong>Observaciones Orden de Servicio/Mantenimiento 1:&emsp;</strong><textarea name="obsordenservm1" class="form-control input-base-obsordenservm1" id="obsordenservm1" rows="3"><?php print $obsordenservm1 ?></textarea></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <p><strong>Orden de Servicio/Mantenimiento 2:&emsp;</strong><input type="text" name="ordenservm2" class="form-control input-base-ordenservm2" id="ordenservm2" value="<?php print $ordenservm2 ?>"></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>Fecha de Servicio/Mantenimiento 2:&emsp;</strong>
                <div class="input-group date" id="e_fservm2">
                    <input type="text" name="fservm2" class="form-control input-base-fservm2" id="fservm2" value="<?php print $fservm2 ?>">
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
                <p><strong>Observaciones Orden de Servicio/Mantenimiento 2:&emsp;</strong><textarea name="obsordenservm2" class="form-control input-base-obsordenservm2" id="obsordenservm2" rows="3"><?php print $obsordenservm2 ?></textarea></p>
            </div>
        </div>
    </div>
    <script>
        var options = {
            todayHighlight: true,
            autoclose: true,
            toggleActive: true,
            format: "dd/mm/yyyy",
            language: "es",
            orientation: "auto",
            setDate: null
        };
        $(function() {
            $("#e_fecharegcartera").datepicker(options);
            $("#e_fofadjudicacion").datepicker(options);
            $("#e_fechasolicitud").datepicker(options);
            $("#e_fechaos").datepicker(options);
            $("#e_fechaexp").datepicker(options);
            $("#e_finstalacion").datepicker(options);
            $("#e_fcapacitacion").datepicker(options);
            $("#e_fservm1").datepicker(options);
            $("#e_fservm2").datepicker(options);
            $("input").inputmask();
        });
    </script>