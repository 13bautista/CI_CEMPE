<?php
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
$capacitacion = $baseInfo['CAPACITACION'] ? $baseInfo['CAPACITACION'] : '';
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

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p><strong>Concepto:&emsp;</strong><?php print $concepto ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p><strong>Descripcion:&emsp;</strong><?php print "" ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Clave Compendio:&emsp;</strong><?php print $compendio ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Proveedor:&emsp;</strong><?php print $proveedor ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Precio Unitario :&emsp; </strong>$ <?php print $preciounitario <> null ? number_format((float)$preciounitario,2) : 0 ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Marca:&emsp;</strong><?php print $marca ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Modelo:&emsp;</strong><?php print $modelo ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>N° Serie:&emsp;</strong><?php print $serie ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Clave CUCoP:&emsp;</strong><?php print $cucop ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Clave CABM:&emsp;</strong><?php print $cabm ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Partida Presupuestal:&emsp;</strong><?php print $partidapresupuestal ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Tipo de Adquisicion:&emsp;</strong><?php print $tipoadquisicion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Registro en Cartera:&emsp;</strong><?php print $registrocartera ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Registro en Cartera:&emsp;</strong><?php print $fecharegcartera ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Oficio de Adjudicacion:&emsp;</strong><?php print $ofadjudicacion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Oficio de Adjudicacion:&emsp;</strong><?php print $fofadjudicacion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Contrato:&emsp;</strong><?php print $contrato ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Oficio Solicitud:&emsp;</strong><?php print $oficiosolicitud ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Solicitud:&emsp;</strong><?php print $fechasolicitud ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Clave CLUES:&emsp;</strong><?php print $claveclues ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Unidad:&emsp;</strong><?php print $unidad ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Entidad:&emsp;</strong><?php print $entidad ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Municipio:&emsp;</strong><?php print $municipio ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Jurisdiccion:&emsp;</strong><?php print $jurisdiccion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Institucion:&emsp;</strong><?php print $institucion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Estatus de Operacion:&emsp;</strong><?php print $estatusop ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Bajo Resguardo:&emsp;</strong><?php print $bajoresguardo ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Contacto Estatal/Unidad:&emsp;</strong><?php print $contactoestund ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Telefono:&emsp;</strong><?php print $telefono ?></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p><strong>Direccion:&emsp;</strong><?php print $direccion ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Disponibilidad en Almacen:&emsp;</strong><?php print $dispalmacen ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Orden de Suministro:&emsp;</strong><?php print $ordensuministro ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Orden de Suministro:&emsp;</strong><?php print $fechaos ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Numero de Acta Entrega-Recepcion:&emsp;</strong><?php print $actaer ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Expedición:&emsp;</strong><?php print "" ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Instalacion:&emsp;</strong><?php print $finstalacion ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Orden de Servicio/Instalacion:&emsp;</strong><?php print $ordensi ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Capacitacion:&emsp;</strong><?php print $capacitacion ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Accesorios:&emsp;</strong><?php print $accesorios ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Consumibles:&emsp;</strong><?php print $consumibles ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Observaciones:&emsp;</strong><?php print $observaciones ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Garantia en Meses:&emsp;</strong><?php print $garantia ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Orden de Servicio/Mantenimiento 1:&emsp;</strong><?php print $ordenservm1 ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Servicio/Mantenimiento 1:&emsp;</strong><?php print $fservm1 ?></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p> <strong>Observaciones Orden de Servicio/Mantenimiento 1:&emsp;</strong><?php print $obsordenservm1 ?></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Orden de Servicio/Mantenimiento 2:&emsp;</strong><?php print $ordenservm2 ?></p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <p><strong>Fecha de Servicio/Mantenimiento 2:&emsp;</strong><?php print $fservm2 ?></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <p><strong>Observaciones Orden de Servicio/Mantenimiento 2:&emsp;</strong><?php print $obsordenservm2 ?></p>
        </div>
    </div>
</div>