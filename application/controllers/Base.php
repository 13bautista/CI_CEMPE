<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Base Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Base
 */
class Base extends CI_Controller
{
    /**
     * Construct functions
     *
     * @return void
     */
    public function __construct()
    {
        // Load the parent construct
        parent::__construct();

        // Load the libraries
        $this->load->library(['session']);

        // Load the helpers
        $this->load->helper(['url']);

        // Load the models
        $this->load->model('Bd_model', 'base');
    }

    public function guardar()
    {
        $json = array();
        $compendio = $this->input->post('compendio');
        $concepto = $this->input->post('concepto');
        $proveedor = $this->input->post('proveedor');
        $descripcion = $this->input->post('descripcion');
        $marca = $this->input->post('marca');
        $modelo = $this->input->post('modelo');
        $serie = $this->input->post('serie');
        $cleaners = array(",", " ", "$");
        $preciounitario = str_replace($cleaners, "", $this->input->post('preciounitario'));
        $cucop = $this->input->post('cucop');
        $cabm = $this->input->post('cabm');
        $partidapresupuestal = $this->input->post('partidapresupuestal');
        $tipoadquisicion = $this->input->post('tipoadquisicion');
        $registrocartera = $this->input->post('registrocartera');
        $fecharegcartera = $this->input->post('fecharegcartera');
        $ofadjudicacion = $this->input->post('ofadjudicacion');
        $fofadjudicacion = $this->input->post('fofadjudicacion');
        $contrato = $this->input->post('contrato');
        $oficiosolicitud = $this->input->post('oficiosolicitud');
        $fechasolicitud = $this->input->post('fechasolicitud');
        $claveclues = $this->input->post('claveclues');
        $unidad = $this->input->post('unidad');
        $entidad = $this->input->post('entidad');
        $municipio = $this->input->post('municipio');
        $jurisdiccion = $this->input->post('jurisdiccion');
        $institucion = $this->input->post('institucion');
        $estatusop = $this->input->post('estatusop');
        $bajoresguardo = $this->input->post('bajoresguardo');
        $contactoestund = $this->input->post('contactoestund');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $dispalmacen = $this->input->post('dispalmacen');
        $ordensuministro = $this->input->post('ordensuministro');
        $fechaexp = $this->input->post('fechaexp');
        $fechaos = $this->input->post('fechaos');
        $actaer = $this->input->post('actaer');
        $finstalacion = $this->input->post('finstalacion');
        $ordensi = $this->input->post('ordensi');
        $fcapacitacion = $this->input->post('fcapacitacion');
        $accesorios = $this->input->post('accesorios');
        $consumibles = $this->input->post('consumibles');
        $observaciones = $this->input->post('observaciones');
        $garantia = $this->input->post('garantia');
        $ordenservm1 = $this->input->post('ordenservm1');
        $fservm1 = $this->input->post('fservm1');
        $obsordenservm1 = $this->input->post('obsordenservm1');
        $ordenservm2 = $this->input->post('ordenservm2');
        $fservm2 = $this->input->post('fservm2');
        $obsordenservm2 = $this->input->post('obsordenservm2');

        if (empty(trim($compendio))) {
            $json['error']['compendio'] = 'Ingrese la clave de compendio ';
        }
        if (empty(trim($concepto))) {
            $json['error']['concepto'] = 'Ingrese el concepto de la clave';
        }
        if (empty($proveedor)) {
            $json['error']['proveedor'] = 'Ingrese el proveedor';
        }
        if (empty($descripcion)) {
            $json['error']['descripcion'] = 'Ingrese la descripcion de la clave';
        }
        if (empty(trim($marca))) {
            $json['error']['marca'] = 'Ingrese la marca';
        }
        if (empty(trim($modelo))) {
            $json['error']['modelo'] = 'Ingrese el modelo';
        }
        if (empty(trim($serie))) {
            $json['error']['serie'] = 'Ingrese el numero de serie';
        }
        if (is_null(trim($preciounitario))) {
            $json['error']['preciounitario'] = 'Ingrese el precio unitario';
        }
        if (empty(trim($cucop))) {
            $json['error']['cucop'] = 'Ingrese la clave CUCOP';
        }
        if (empty(trim($cabm))) {
            $json['error']['cabm'] = 'Ingrese la clave CABM';
        }
        if (empty(trim($partidapresupuestal))) {
            $json['error']['partidapresupuestal'] = 'Ingrese la partida presupuestal';
        }
        if (empty(trim($tipoadquisicion))) {
            $json['error']['tipoadquisicion'] = 'Ingrese el tipo de adquisicion';
        }
        if (empty(trim($registrocartera))) {
            $json['error']['registrocartera'] = 'Ingrese el registro en cartera';
        }
        if (empty(trim($fecharegcartera))) {
            $json['error']['fecharegcartera'] = 'Ingrese la fecha de registro en cartera';
        }
        if (empty(trim($ofadjudicacion))) {
            $json['error']['ofadjudicacion'] = 'Ingrese el folio de oficio de adjudicacion';
        }
        if (empty(trim($fofadjudicacion))) {
            $json['error']['fofadjudicacion'] = 'Ingrese la fecha de oficio de adjudicacion';
        }
        if (empty(trim($contrato))) {
            $json['error']['contrato'] = 'Ingrese el numero de contrato';
        }
        if (empty(trim($oficiosolicitud))) {
            $json['error']['oficiosolicitud'] = 'Ingrese el oficio de solicitud';
        }
        if (empty(trim($fechasolicitud))) {
            $json['error']['fechasolicitud'] = 'Ingrese la fecha de oficio de solicitud';
        }
        if (empty(trim($claveclues))) {
            $json['error']['claveclues'] = 'Ingrese la clave CLUES';
        }
        if (empty(trim($unidad))) {
            $json['error']['unidad   '] = 'Ingrese la unidad CLUES';
        }
        if (empty(trim($entidad))) {
            $json['error']['entidad'] = 'Ingrese la entidad CLUES';
        }
        if (empty(trim($municipio))) {
            $json['error']['municipio'] = 'Ingrese el municipio CLUES';
        }
        if (empty(trim($jurisdiccion))) {
            $json['error']['jurisdiccion'] = 'Ingrese la jurisdiccion CLUES';
        }
        if (empty(trim($institucion))) {
            $json['error']['institucion'] = 'Ingrese la institucion CLUES';
        }
        if (empty(trim($estatusop))) {
            $json['error']['estatusop'] = 'Ingrese un estatus de operacion';
        }
        if (empty(trim($bajoresguardo))) {
            $json['error']['bajoresguardo'] = 'Ingrese bajo resguardo';
        }
        if (empty(trim($contactoestund))) {
            $json['error']['contactoestund'] = 'Ingrese el contacto estatal/unidad';
        }
        if (empty(trim($direccion))) {
            $json['error']['direccion'] = 'Ingrese la direccion';
        }
        if (empty(trim($telefono))) {
            $json['error']['telefono'] = 'Ingrese el telefono';
        }
        if (empty(trim($dispalmacen))) {
            $json['error']['dispalmacen'] = 'Ingrese la disponibilidad en almacen';
        }
        if (empty(trim($ordensuministro))) {
            $json['error']['ordensuministro'] = 'Ingrese la orden de suministro';
        }
        if (empty(trim($fechaexp))) {
            $json['error']['fechaexp'] = 'Ingrese la fecha de expedicion de orden';
        }
        if (empty(trim($fechaos))) {
            $json['error']['fechaos'] = 'Ingrese la fecha de registro de orden';
        }
        if (empty(trim($actaer))) {
            $json['error']['actaer'] = 'Ingrese el folio de alta entrega/recepcion';
        }
        if (empty(trim($finstalacion))) {
            $json['error']['finstalacion'] = 'Ingrese la fecha de instalacion';
        }
        if (empty(trim($ordensi))) {
            $json['error']['ordensi'] = 'Ingrese la orden de servicio de instalacion';
        }
        if (empty(trim($fcapacitacion))) {
            $json['error']['fcapacitacion'] = 'Ingrese la fecha de capacitacion';
        }
        if (empty(trim($accesorios))) {
            $json['error']['accesorios'] = 'En caso de aplicar, ingresa acccesorios';
        }
        if (empty(trim($consumibles))) {
            $json['error']['consumibles'] = 'En caso de aplicar, ingresa consumibles';
        }
        if (empty(trim($observaciones))) {
            $json['error']['observaciones'] = 'Ingrese las observaciones';
        }
        if (empty(trim($garantia))) {
            $json['error']['garantia'] = 'Ingrese la garantia';
        }
        if (empty(trim($ordenservm1))) {
            $json['error']['ordenservm1'] = 'Ingrese la orden de servicio/mantenimiento 1';
        }
        if (empty(trim($fservm1))) {
            $json['error']['fservm1'] = 'Ingrese la fecha de servicio/mantenimiento 1';
        }
        if (empty(trim($obsordenservm1))) {
            $json['error']['obsordenservm1'] = 'Ingrese las observaciones de servicio/mantenimiento 1';
        }
        if (empty(trim($ordenservm2))) {
            $json['error']['ordenservm2'] = 'Ingrese la orden de servicio/mantenimiento 2';
        }
        if (empty(trim($fservm2))) {
            $json['error']['fservm2'] = 'Ingrese la fecha de servicio/mantenimiento 2';
        }
        if (empty(trim($obsordenservm2))) {
            $json['error']['obsordenservm2'] = 'Ingrese las observaciones de servicio/mantenimiento 2';
        }

        /* sets a propoiedades de objeto*/
        if (empty($json['error'])) {
            $this->base->setCompendio($compendio);
            $this->base->setConcepto($concepto);
            $this->base->setProveedor($proveedor);
            $this->base->setMarca($marca);
            $this->base->setModelo($modelo);
            $this->base->setSerie($serie);
            $this->base->setPreciounitario($preciounitario);
            $this->base->setCucop($cucop);
            $this->base->setCabm($cabm);
            $this->base->setPartidapresupuestal($partidapresupuestal);
            $this->base->setTipoadquisicion($tipoadquisicion);
            $this->base->setRegistrocartera($registrocartera);
            $this->base->setFecharegcartera($fecharegcartera);
            $this->base->setOfadjudicacion($ofadjudicacion);
            $this->base->setFofadjudicacion($fofadjudicacion);
            $this->base->setContrato($contrato);
            $this->base->setOficiosolicitud($oficiosolicitud);
            $this->base->setFechasolicitud($fechasolicitud);
            $this->base->setClaveclues($claveclues);
            $this->base->setUnidad($unidad);
            $this->base->setEntidad($entidad);
            $this->base->setMunicipio($municipio);
            $this->base->setJurisdiccion($jurisdiccion);
            $this->base->setInstitucion($institucion);
            $this->base->setEstatusop($estatusop);
            $this->base->setBajoresguardo($bajoresguardo);
            $this->base->setContactoestund($contactoestund);
            $this->base->setDireccion($direccion);
            $this->base->setTelefono($telefono);
            $this->base->setDispalmacen($dispalmacen);
            $this->base->setOrdensuministro($ordensuministro);
            $this->base->setFechaexp($fechaexp);
            $this->base->setFechaos($fechaos);
            $this->base->setActaer($actaer);
            $this->base->setFinstalacion($finstalacion);
            $this->base->setOrdensi($ordensi);
            $this->base->setFcapacitacion($fcapacitacion);
            $this->base->setAccesorios($accesorios);
            $this->base->setConsumibles($consumibles);
            $this->base->setObservaciones($observaciones);
            $this->base->setGarantia($garantia);
            $this->base->setOrdenservm1($ordenservm1);
            $this->base->setFservm1($fservm1);
            $this->base->setObsordenservm1($obsordenservm1);
            $this->base->setOrdenservm2($ordenservm2);
            $this->base->setFservm2($fservm2);
            $this->base->setObsordenservm2($obsordenservm2);
            try {
                $last_id = $this->base->createRow();
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
            if (!empty($last_id) && $last_id > 0) {
                $this->base->setBdID($last_id);
                $baseInfo = $this->base->getBase();
                $json['base_id'] = $baseInfo['ID'];
                $json['compendio'] = $baseInfo['CLAVE_COMPENDIO'];
                $json['concepto'] = $baseInfo['CONCEPTO'];
                $json['proveedor'] = $baseInfo['PROVEEDOR'];
                $json['marca'] = $baseInfo['MARCA'];
                $json['modelo'] = $baseInfo['MODELO'];
                $json['serie'] = $baseInfo['SERIE'];
                $json['preciounitario'] = $baseInfo['PRECIO_UNITARIO_SIN_IVA'];
                $json['cucop'] = $baseInfo['CLAVE_CUCOP'];
                $json['cabm'] = $baseInfo['CLAVE_CABM'];
                $json['partidapresupuestal'] = $baseInfo['PARTIDA_PRESUPUESTAL'];
                $json['tipoadquisicion'] = $baseInfo['TIPO_ADQUISICION'];
                $json['registrocartera'] = $baseInfo['NUM_REGISTRO_CARTERA'];
                $json['fecharegcartera'] = $baseInfo['FECHA_REGISTRO_CARTERA'];
                $json['ofadjudicacion'] = $baseInfo['OFICIO_ADJUDICACION'];
                $json['fofadjudicacion'] = $baseInfo['FECHA_OFICIO_ADJUDICACION'];
                $json['contrato'] = $baseInfo['NUM_CONTRATO'];
                $json['oficiosolicitud'] = $baseInfo['OFICIO_SOLICITUD'];
                $json['fechasolicitud'] = $baseInfo['FECHA_SOLICITUD'];
                $json['claveclues'] = $baseInfo['CLUES'];
                $json['unidad'] = $baseInfo['UNIDAD'];
                $json['entidad'] = $baseInfo['ENTIDAD_FEDERATIVA'];
                $json['municipio'] = $baseInfo['CLAVE_MUNICIPIO'];
                $json['jurisdiccion'] = $baseInfo['NOMBRE_JURISDICCION'];
                $json['institucion'] = $baseInfo['NOMBRE_INSTITUCION'];
                $json['estatusop'] = $baseInfo['ESTATUS_OPERACION'];
                $json['bajoresguardo'] = $baseInfo['BAJO_RESGUARDO'];
                $json['contactoestund'] = $baseInfo['CONTACTO_ESTATAL_UNIDAD'];
                $json['direccion'] = $baseInfo['DIRECCION'];
                $json['telefono'] = $baseInfo['TELEFONO'];
                $json['dispalmacen'] = $baseInfo['DISPONIBLE_ALMACEN'];
                $json['ordensuministro'] = $baseInfo['ORDEN_SUMINISTRO'];
                $json['fechaos'] = $baseInfo['FECHA_ORDEN_SUMINISTRO'];
                $json['actaer'] = $baseInfo['ACTA_ENTREGA_RECEPCION'];
                $json['finstalacion'] = $baseInfo['FECHA_INSTALACION'];
                $json['ordensi'] = $baseInfo['ORDEN_SERVICIO_INST'];
                $json['fcapacitacion'] = $baseInfo['CAPACITACION'];
                $json['accesorios'] = $baseInfo['ACCESORIOS'];
                $json['consumibles'] = $baseInfo['CONSUMIBLES'];
                $json['observaciones'] = $baseInfo['OBSERVACIONES'];
                $json['garantia'] = $baseInfo['GARANTIA_MESES'];
                $json['ordenservm1'] = $baseInfo['ORDEN_SERVICIO_MP1'];
                $json['fservm1'] = $baseInfo['FECHA_MP1'];
                $json['obsordenservm1'] = $baseInfo['OBSERVACIONES_MP1'];
                $json['ordenservm2'] = $baseInfo['ORDEN_SERVICIO_MP2'];
                $json['fservm2'] = $baseInfo['FECHA_MP2'];
                $json['obsordenservm2'] = $baseInfo['OBSERVACIONES_MP2'];
                $json['status'] = 'success';
            }
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function mostrar()
    {
        $json = array();
        $last_id = $this->input->post('id');
        $this->base->setBdID($last_id);
        $json['baseInfo'] = $this->base->getBase();

        $this->output->set_header('Content-Type: application/json');
        $this->load->view('popup/renderMostrar', $json);
    }

    public function editar()
    {
        $json = array();
        $last_id = $this->input->post('id');
        $this->base->setBdID($last_id);
        $json['baseInfo'] = $this->base->getBase();
        $this->output->set_header('Content-Type: application/json');
        $this->load->view('popup/renderEditar', $json);
    }

    public function actualizar()
    {
        $json = array();
        $base_id = $this->input->post('id');
        //$this->debug_to_console($base_id);
        $compendio = $this->input->post('compendio');
        $concepto = $this->input->post('concepto');
        $proveedor = $this->input->post('proveedor');
        $marca = $this->input->post('marca');
        $modelo = $this->input->post('modelo');
        $serie = $this->input->post('serie');
        $cleaners = array(",", " ", "$");
        $preciounitario = str_replace($cleaners, "", $this->input->post('preciounitario'));
        $cucop = $this->input->post('cucop');
        $cabm = $this->input->post('cabm');
        $partidapresupuestal = $this->input->post('partidapresupuestal');
        $tipoadquisicion = $this->input->post('tipoadquisicion');
        $registrocartera = $this->input->post('registrocartera');
        $fecharegcartera = $this->input->post('fecharegcartera');
        $ofadjudicacion = $this->input->post('ofadjudicacion');
        $fofadjudicacion = $this->input->post('fofadjudicacion');
        $contrato = $this->input->post('contrato');
        $oficiosolicitud = $this->input->post('oficiosolicitud');
        $fechasolicitud = $this->input->post('fechasolicitud');
        $claveclues = $this->input->post('claveclues');
        $unidad = $this->input->post('unidad');
        $entidad = $this->input->post('entidad');
        $municipio = $this->input->post('municipio');
        $jurisdiccion = $this->input->post('jurisdiccion');
        $institucion = $this->input->post('institucion');
        $estatusop = $this->input->post('estatusop');
        $bajoresguardo = $this->input->post('bajoresguardo');
        $contactoestund = $this->input->post('contactoestund');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');
        $dispalmacen = $this->input->post('dispalmacen');
        $ordensuministro = $this->input->post('ordensuministro');
        $fechaexp = $this->input->post('fechaexp');
        $fechaos = $this->input->post('fechaos');
        $actaer = $this->input->post('actaer');
        $finstalacion = $this->input->post('finstalacion');
        $ordensi = $this->input->post('ordensi');
        $fcapacitacion = $this->input->post('fcapacitacion');
        $accesorios = $this->input->post('accesorios');
        $consumibles = $this->input->post('consumibles');
        $observaciones = $this->input->post('observaciones');
        $garantia = $this->input->post('garantia');
        $ordenservm1 = $this->input->post('ordenservm1');
        $fservm1 = $this->input->post('fservm1');
        $obsordenservm1 = $this->input->post('obsordenservm1');
        $ordenservm2 = $this->input->post('ordenservm2');
        $fservm2 = $this->input->post('fservm2');
        $obsordenservm2 = $this->input->post('obsordenservm2');

        if (empty(trim($compendio))) {
            $json['error']['compendio'] = 'Ingrese la clave de compendio ';
        }
        if (empty(trim($concepto))) {
            $json['error']['concepto'] = 'Ingrese el concepto de la clave';
        }
        if (empty($proveedor)) {
            $json['error']['proveedor'] = 'Ingrese el proveedor';
        }
        if (empty(trim($marca))) {
            $json['error']['marca'] = 'Ingrese la marca';
        }
        if (empty(trim($modelo))) {
            $json['error']['modelo'] = 'Ingrese el modelo';
        }
        if (empty(trim($serie))) {
            $json['error']['serie'] = 'Ingrese el numero de serie';
        }

        if (empty(trim($preciounitario))) {
            $json['error']['preciounitario'] = 'Ingrese el precio unitario';
        }
        if (empty(trim($cucop))) {
            $json['error']['cucop'] = 'Ingrese la clave CUCOP';
        }
        if (empty(trim($cabm))) {
            $json['error']['cabm'] = 'Ingrese la clave CABM';
        }
        if (empty(trim($partidapresupuestal))) {
            $json['error']['partidapresupuestal'] = 'Ingrese la partida presupuestal';
        }
        if (empty(trim($tipoadquisicion))) {
            $json['error']['tipoadquisicion'] = 'Ingrese el tipo de adquisicion';
        }
        if (empty(trim($registrocartera))) {
            $json['error']['registrocartera'] = 'Ingrese el registro en cartera';
        }
        if (empty(trim($fecharegcartera))) {
            $json['error']['fecharegcartera'] = 'Ingrese la fecha de registro en cartera';
        }
        if (empty(trim($ofadjudicacion))) {
            $json['error']['ofadjudicacion'] = 'Ingrese el folio de oficio de adjudicacion';
        }
        if (empty(trim($fofadjudicacion))) {
            $json['error']['fofadjudicacion'] = 'Ingrese la fecha de oficio de adjudicacion';
        }
        if (empty(trim($contrato))) {
            $json['error']['contrato'] = 'Ingrese el numero de contrato';
        }
        if (empty(trim($oficiosolicitud))) {
            $json['error']['oficiosolicitud'] = 'Ingrese el oficio de solicitud';
        }
        if (empty(trim($fechasolicitud))) {
            $json['error']['fechasolicitud'] = 'Ingrese la fecha de oficio de solicitud';
        }
        if (empty(trim($claveclues))) {
            $json['error']['claveclues'] = 'Ingrese la clave CLUES';
        }
        if (empty(trim($unidad))) {
            $json['error']['unidad   '] = 'Ingrese la unidad CLUES';
        }
        if (empty(trim($entidad))) {
            $json['error']['entidad'] = 'Ingrese la entidad CLUES';
        }
        if (empty(trim($municipio))) {
            $json['error']['municipio'] = 'Ingrese el municipio CLUES';
        }
        if (empty(trim($jurisdiccion))) {
            $json['error']['jurisdiccion'] = 'Ingrese la jurisdiccion CLUES';
        }
        if (empty(trim($institucion))) {
            $json['error']['institucion'] = 'Ingrese la institucion CLUES';
        }
        if (empty(trim($estatusop))) {
            $json['error']['estatusop'] = 'Ingrese un estatus de operacion';
        }
        if (empty(trim($bajoresguardo))) {
            $json['error']['bajoresguardo'] = 'Ingrese bajo resguardo';
        }
        if (empty(trim($contactoestund))) {
            $json['error']['contactoestund'] = 'Ingrese el contacto estatal/unidad';
        }
        if (empty(trim($direccion))) {
            $json['error']['direccion'] = 'Ingrese la direccion';
        }
        if (empty(trim($telefono))) {
            $json['error']['telefono'] = 'Ingrese el telefono';
        }
        if (empty(trim($dispalmacen))) {
            $json['error']['dispalmacen'] = 'Ingrese la disponibilidad en almacen';
        }
        if (empty(trim($ordensuministro))) {
            $json['error']['ordensuministro'] = 'Ingrese la orden de suministro';
        }
        if (empty(trim($fechaexp))) {
            $json['error']['fechaexp'] = 'Ingrese la fecha de expedicion de orden';
        }
        if (empty(trim($fechaos))) {
            $json['error']['fechaos'] = 'Ingrese la fecha de registro de orden';
        }
        if (empty(trim($actaer))) {
            $json['error']['actaer'] = 'Ingrese el folio de alta entrega/recepcion';
        }
        if (empty(trim($finstalacion))) {
            $json['error']['finstalacion'] = 'Ingrese la fecha de instalacion';
        }
        if (empty(trim($ordensi))) {
            $json['error']['ordensi'] = 'Ingrese la orden de servicio de instalacion';
        }
        if (empty(trim($fcapacitacion))) {
            $json['error']['fcapacitacion'] = 'Ingrese la fecha de capacitacion';
        }
        if (empty(trim($accesorios))) {
            $json['error']['accesorios'] = 'En caso de aplicar, ingresa acccesorios';
        }
        if (empty(trim($consumibles))) {
            $json['error']['consumibles'] = 'En caso de aplicar, ingresa consumibles';
        }
        if (empty(trim($observaciones))) {
            $json['error']['observaciones'] = 'Ingrese las observaciones';
        }
        if (empty(trim($garantia))) {
            $json['error']['garantia'] = 'Ingrese la garantia';
        }
        if (empty(trim($ordenservm1))) {
            $json['error']['ordenservm1'] = 'Ingrese la orden de servicio/mantenimiento 1';
        }
        if (empty(trim($fservm1))) {
            $json['error']['fservm1'] = 'Ingrese la fecha de servicio/mantenimiento 1';
        }
        if (empty(trim($obsordenservm1))) {
            $json['error']['obsordenservm1'] = 'Ingrese las observaciones de servicio/mantenimiento 1';
        }
        if (empty(trim($ordenservm2))) {
            $json['error']['ordenservm2'] = 'Ingrese la orden de servicio/mantenimiento 2';
        }
        if (empty(trim($fservm2))) {
            $json['error']['fservm2'] = 'Ingrese la fecha de servicio/mantenimiento 2';
        }
        if (empty(trim($obsordenservm2))) {
            $json['error']['obsordenservm2'] = 'Ingrese las observaciones de servicio/mantenimiento 2';
        }

        /* sets a propoiedades de objeto*/
        if (empty($json['error'])) {
            $this->base->setBdID($base_id);
            $this->base->setCompendio($compendio);
            $this->base->setConcepto($concepto);
            $this->base->setProveedor($proveedor);
            $this->base->setMarca($marca);
            $this->base->setModelo($modelo);
            $this->base->setSerie($serie);
            $this->base->setPreciounitario($preciounitario);
            $this->base->setCucop($cucop);
            $this->base->setCabm($cabm);
            $this->base->setPartidapresupuestal($partidapresupuestal);
            $this->base->setTipoadquisicion($tipoadquisicion);
            $this->base->setRegistrocartera($registrocartera);
            $this->base->setFecharegcartera($fecharegcartera);
            $this->base->setOfadjudicacion($ofadjudicacion);
            $this->base->setFofadjudicacion($fofadjudicacion);
            $this->base->setContrato($contrato);
            $this->base->setOficiosolicitud($oficiosolicitud);
            $this->base->setFechasolicitud($fechasolicitud);
            $this->base->setClaveclues($claveclues);
            $this->base->setUnidad($unidad);
            $this->base->setEntidad($entidad);
            $this->base->setMunicipio($municipio);
            $this->base->setJurisdiccion($jurisdiccion);
            $this->base->setInstitucion($institucion);
            $this->base->setEstatusop($estatusop);
            $this->base->setBajoresguardo($bajoresguardo);
            $this->base->setContactoestund($contactoestund);
            $this->base->setDireccion($direccion);
            $this->base->setTelefono($telefono);
            $this->base->setDispalmacen($dispalmacen);
            $this->base->setOrdensuministro($ordensuministro);
            $this->base->setFechaexp($fechaexp);
            $this->base->setFechaos($fechaos);
            $this->base->setActaer($actaer);
            $this->base->setFinstalacion($finstalacion);
            $this->base->setOrdensi($ordensi);
            $this->base->setFcapacitacion($fcapacitacion);
            $this->base->setAccesorios($accesorios);
            $this->base->setConsumibles($consumibles);
            $this->base->setObservaciones($observaciones);
            $this->base->setGarantia($garantia);
            $this->base->setOrdenservm1($ordenservm1);
            $this->base->setFservm1($fservm1);
            $this->base->setObsordenservm1($obsordenservm1);
            $this->base->setOrdenservm2($ordenservm2);
            $this->base->setFservm2($fservm2);
            $this->base->setObsordenservm2($obsordenservm2);
            try {
                $last_id = $this->base->updateRow();
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
            if (!empty($base_id) && $base_id > 0) {
                $this->base->setBdID($base_id);
                $baseInfo = $this->base->getBase();
                $json['base_id'] = $baseInfo['ID'];
                $json['compendio'] = $baseInfo['CLAVE_COMPENDIO'];
                $json['concepto'] = $baseInfo['CONCEPTO'];
                $json['proveedor'] = $baseInfo['PROVEEDOR'];
                $json['marca'] = $baseInfo['MARCA'];
                $json['modelo'] = $baseInfo['MODELO'];
                $json['serie'] = $baseInfo['SERIE'];
                $json['preciounitario'] = $baseInfo['PRECIO_UNITARIO_SIN_IVA'];
                $json['cucop'] = $baseInfo['CLAVE_CUCOP'];
                $json['cabm'] = $baseInfo['CLAVE_CABM'];
                $json['partidapresupuestal'] = $baseInfo['PARTIDA_PRESUPUESTAL'];
                $json['tipoadquisicion'] = $baseInfo['TIPO_ADQUISICION'];
                $json['registrocartera'] = $baseInfo['NUM_REGISTRO_CARTERA'];
                $json['fecharegcartera'] = $baseInfo['FECHA_REGISTRO_CARTERA'];
                $json['ofadjudicacion'] = $baseInfo['OFICIO_ADJUDICACION'];
                $json['fofadjudicacion'] = $baseInfo['FECHA_OFICIO_ADJUDICACION'];
                $json['contrato'] = $baseInfo['NUM_CONTRATO'];
                $json['oficiosolicitud'] = $baseInfo['OFICIO_SOLICITUD'];
                $json['fechasolicitud'] = $baseInfo['FECHA_SOLICITUD'];
                $json['claveclues'] = $baseInfo['CLUES'];
                $json['unidad'] = $baseInfo['UNIDAD'];
                $json['entidad'] = $baseInfo['ENTIDAD_FEDERATIVA'];
                $json['municipio'] = $baseInfo['CLAVE_MUNICIPIO'];
                $json['jurisdiccion'] = $baseInfo['NOMBRE_JURISDICCION'];
                $json['institucion'] = $baseInfo['NOMBRE_INSTITUCION'];
                $json['estatusop'] = $baseInfo['ESTATUS_OPERACION'];
                $json['bajoresguardo'] = $baseInfo['BAJO_RESGUARDO'];
                $json['contactoestund'] = $baseInfo['CONTACTO_ESTATAL_UNIDAD'];
                $json['direccion'] = $baseInfo['DIRECCION'];
                $json['telefono'] = $baseInfo['TELEFONO'];
                $json['dispalmacen'] = $baseInfo['DISPONIBLE_ALMACEN'];
                $json['ordensuministro'] = $baseInfo['ORDEN_SUMINISTRO'];
                $json['fechaos'] = $baseInfo['FECHA_ORDEN_SUMINISTRO'];
                $json['actaer'] = $baseInfo['ACTA_ENTREGA_RECEPCION'];
                $json['finstalacion'] = $baseInfo['FECHA_INSTALACION'];
                $json['ordensi'] = $baseInfo['ORDEN_SERVICIO_INST'];
                $json['fcapacitacion'] = $baseInfo['CAPACITACION'];
                $json['accesorios'] = $baseInfo['ACCESORIOS'];
                $json['consumibles'] = $baseInfo['CONSUMIBLES'];
                $json['observaciones'] = $baseInfo['OBSERVACIONES'];
                $json['garantia'] = $baseInfo['GARANTIA_MESES'];
                $json['ordenservm1'] = $baseInfo['ORDEN_SERVICIO_MP1'];
                $json['fservm1'] = $baseInfo['FECHA_MP1'];
                $json['obsordenservm1'] = $baseInfo['OBSERVACIONES_MP1'];
                $json['ordenservm2'] = $baseInfo['ORDEN_SERVICIO_MP2'];
                $json['fservm2'] = $baseInfo['FECHA_MP2'];
                $json['obsordenservm2'] = $baseInfo['OBSERVACIONES_MP2'];
                $json['status'] = 'success';
            }
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function eliminar()
    {
        $json = array();
        $last_id = $this->input->post('id');
        $this->base->setBdID($last_id);
        $this->base->deleteBd();
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json);
    }
}
