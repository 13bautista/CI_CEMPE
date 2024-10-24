<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bd_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public $table = "base";
    public $id = 'id';
    public $orderAsc = 'ASC';
    public $orderDesc = 'DESC';

    private $_bdID;
    private $_compendio;
    private $_concepto;
    private $_proveedor;
    private $_marca;
    private $_modelo;
    private $_serie;
    private $_preciounitario;
    private $_cucop;
    private $_cabm;
    private $_partidapresupuestal;
    private $_tipoadquisicion;
    private $_registrocartera;
    private $_fecharegcartera;
    private $_ofadjudicacion;
    private $_fofadjudicacion;
    private $_contrato;
    private $_oficiosolicitud;
    private $_fechasolicitud;
    private $_claveclues;
    private $_unidad;
    private $_entidad;
    private $_municipio;
    private $_jurisdiccion;
    private $_institucion;
    private $_estatusop;
    private $_bajoresguardo;
    private $_contactoestund;
    private $_direccion;
    private $_telefono;
    private $_dispalmacen;
    private $_ordensuministro;
    private $_fechaexp;
    private $_fechaos;
    private $_actaer;
    private $_finstalacion;
    private $_ordensi;
    private $_fcapacitacion;
    private $_accesorios;
    private $_consumibles;
    private $_observaciones;
    private $_garantia;
    private $_ordenservm1;
    private $_fservm1;
    private $_obsordenservm1;
    private $_ordenservm2;
    private $_fservm2;
    private $_obsordenservm2;

    public function setBdID($bdID)
    {
        $this->_bdID = $bdID;
    }
    public function setCompendio($compendio)
    {
        $this->_compendio = $compendio;
    }
    public function setConcepto($concepto)
    {
        $this->_concepto = $concepto;
    }
    public function setProveedor($proveedor)
    {
        $this->_proveedor = $proveedor;
    }
    public function setMarca($marca)
    {
        $this->_marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->_modelo = $modelo;
    }
    public function setSerie($serie)
    {
        $this->_serie = $serie;
    }
    public function setPreciounitario($preciounitario)
    {
        $this->_preciounitario = $preciounitario;
    }
    public function setCucop($cucop)
    {
        $this->_cucop = $cucop;
    }
    public function setCabm($cabm)
    {
        $this->_cabm = $cabm;
    }
    public function setPartidapresupuestal($partidapresupuestal)
    {
        $this->_partidapresupuestal = $partidapresupuestal;
    }
    public function setTipoadquisicion($tipoadquisicion)
    {
        $this->_tipoadquisicion = $tipoadquisicion;
    }
    public function setRegistrocartera($registrocartera)
    {
        $this->_registrocartera = $registrocartera;
    }
    public function setFecharegcartera($fecharegcartera)
    {
        $this->_fecharegcartera = $fecharegcartera;
    }
    public function setOfadjudicacion($ofadjudicacion)
    {
        $this->_ofadjudicacion = $ofadjudicacion;
    }
    public function setFofadjudicacion($fofadjudicacion)
    {
        $this->_fofadjudicacion = $fofadjudicacion;
    }
    public function setContrato($contrato)
    {
        $this->_contrato = $contrato;
    }
    public function setOficiosolicitud($oficiosolicitud)
    {
        $this->_oficiosolicitud = $oficiosolicitud;
    }
    public function setFechasolicitud($fechasolicitud)
    {
        $this->_fechasolicitud = $fechasolicitud;
    }
    public function setClaveclues($claveclues)
    {
        $this->_claveclues = $claveclues;
    }
    public function setUnidad($unidad)
    {
        $this->_unidad = $unidad;
    }
    public function setEntidad($entidad)
    {
        $this->_entidad = $entidad;
    }
    public function setMunicipio($municipio)
    {
        $this->_municipio = $municipio;
    }
    public function setJurisdiccion($jurisdiccion)
    {
        $this->_jurisdiccion = $jurisdiccion;
    }
    public function setInstitucion($institucion)
    {
        $this->_institucion = $institucion;
    }
    public function setEstatusop($estatusop)
    {
        $this->_estatusop = $estatusop;
    }
    public function setBajoresguardo($bajoresguardo)
    {
        $this->_bajoresguardo = $bajoresguardo;
    }
    public function setContactoestund($contactoestund)
    {
        $this->_contactoestund = $contactoestund;
    }
    public function setDireccion($direccion)
    {
        $this->_direccion = $direccion;
    }
    public function setTelefono($telefono)
    {
        $this->_telefono = $telefono;
    }
    public function setDispalmacen($dispalmacen)
    {
        $this->_dispalmacen = $dispalmacen;
    }
    public function setOrdensuministro($ordensuministro)
    {
        $this->_ordensuministro = $ordensuministro;
    }
    public function setFechaexp($fechaexp)
    {
        $this->_fechaexp = $fechaexp;
    }
    public function setFechaos($fechaos)
    {
        $this->_fechaos = $fechaos;
    }
    public function setActaer($actaer)
    {
        $this->_actaer = $actaer;
    }
    public function setFinstalacion($finstalacion)
    {
        $this->_finstalacion = $finstalacion;
    }
    public function setOrdensi($ordensi)
    {
        $this->_ordensi = $ordensi;
    }
    public function setFcapacitacion($fcapacitacion)
    {
        $this->_fcapacitacion = $fcapacitacion;
    }
    public function setAccesorios($accesorios)
    {
        $this->_accesorios = $accesorios;
    }
    public function setConsumibles($consumibles)
    {
        $this->_consumibles = $consumibles;
    }
    public function setObservaciones($observaciones)
    {
        $this->_observaciones = $observaciones;
    }
    public function setGarantia($garantia)
    {
        $this->_garantia = $garantia;
    }
    public function setOrdenservm1($ordenservm1)
    {
        $this->_ordenservm1 = $ordenservm1;
    }
    public function setFservm1($fservm1)
    {
        $this->_fservm1 = $fservm1;
    }
    public function setObsordenservm1($obsordenservm1)
    {
        $this->_obsordenservm1 = $obsordenservm1;
    }
    public function setOrdenservm2($ordenservm2)
    {
        $this->_ordenservm2 = $ordenservm2;
    }
    public function setFservm2($fservm2)
    {
        $this->_fservm2 = $fservm2;
    }
    public function setObsordenservm2($obsordenservm2)
    {
        $this->_obsordenservm2 = $obsordenservm2;
    }

    public function createRow()
    {
        $data = array(
            'clave_compendio' => $this->_compendio,
            'concepto' => $this->_concepto,
            'proveedor' => $this->_proveedor,
            'marca' => $this->_marca,
            'modelo' => $this->_modelo,
            'serie' => $this->_serie,
            'precio_unitario_sin_iva' => $this->_preciounitario,
            'clave_cucop' => $this->_cucop,
            'clave_cabm' => $this->_cabm,
            'partida_presupuestal' => $this->_partidapresupuestal,
            'tipo_adquisicion' => $this->_tipoadquisicion,
            'num_registro_cartera' => $this->_registrocartera,
            'fecha_registro_cartera' => $this->_fecharegcartera,
            'oficio_adjudicacion' => $this->_ofadjudicacion,
            'fecha_oficio_adjudicacion' => $this->_fofadjudicacion,
            'num_contrato' => $this->_contrato,
            'oficio_solicitud' => $this->_oficiosolicitud,
            'fecha_solicitud' => $this->_fechasolicitud,
            'clues' => $this->_claveclues,
            'unidad' => $this->_unidad,
            'entidad_federativa' => $this->_entidad,
            'clave_municipio' => $this->_municipio,
            'nombre_jurisdiccion' => $this->_jurisdiccion,
            'nombre_institucion' => $this->_institucion,
            'estatus_operacion' => $this->_estatusop,
            'bajo_resguardo' => $this->_bajoresguardo,
            'contacto_estatal_unidad' => $this->_contactoestund,
            'direccion' => $this->_direccion,
            'telefono' => $this->_telefono,
            'disponible_almacen' => $this->_dispalmacen,
            'orden_suministro' => $this->_ordensuministro,
            'fecha_orden_suministro' => $this->_fechaos,
            'acta_entrega_recepcion' => $this->_actaer,
            'fecha_instalacion' => $this->_finstalacion,
            'orden_servicio_inst' => $this->_ordensi,
            'capacitacion' => $this->_fcapacitacion,
            'accesorios' => $this->_accesorios,
            'consumibles' => $this->_consumibles,
            'observaciones' => $this->_observaciones,
            'garantia_meses' => $this->_garantia,
            'orden_servicio_mp1' => $this->_ordenservm1,
            'fecha_mp1' => $this->_fservm1,
            'observaciones_mp1' => $this->_obsordenservm1,
            'orden_servicio_mp2' => $this->_ordenservm2,
            'fecha_mp2' => $this->_fservm2,
            'observaciones_mp2' => $this->_obsordenservm2,
        );
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function updateRow()
    {
        //$this->debug_to_console($this->_observaciones);
        $data = array(
            'clave_compendio' => $this->_compendio,
            'concepto' => $this->_concepto,
            'proveedor' => $this->_proveedor,
            'marca' => $this->_marca,
            'modelo' => $this->_modelo,
            'serie' => $this->_serie,
            'precio_unitario_sin_iva' => $this->_preciounitario,
            'clave_cucop' => $this->_cucop,
            'clave_cabm' => $this->_cabm,
            'partida_presupuestal' => $this->_partidapresupuestal,
            'tipo_adquisicion' => $this->_tipoadquisicion,
            'num_registro_cartera' => $this->_registrocartera,
            'fecha_registro_cartera' => $this->_fecharegcartera,
            'oficio_adjudicacion' => $this->_ofadjudicacion,
            'fecha_oficio_adjudicacion' => $this->_fofadjudicacion,
            'num_contrato' => $this->_contrato,
            'oficio_solicitud' => $this->_oficiosolicitud,
            'fecha_solicitud' => $this->_fechasolicitud,
            'clues' => $this->_claveclues,
            'unidad' => $this->_unidad,
            'entidad_federativa' => $this->_entidad,
            'clave_municipio' => $this->_municipio,
            'nombre_jurisdiccion' => $this->_jurisdiccion,
            'nombre_institucion' => $this->_institucion,
            'estatus_operacion' => $this->_estatusop,
            'bajo_resguardo' => $this->_bajoresguardo,
            'contacto_estatal_unidad' => $this->_contactoestund,
            'direccion' => $this->_direccion,
            'telefono' => $this->_telefono,
            'disponible_almacen' => $this->_dispalmacen,
            'orden_suministro' => $this->_ordensuministro,
            'fecha_orden_suministro' => $this->_fechaos,
            'acta_entrega_recepcion' => $this->_actaer,
            'fecha_instalacion' => $this->_finstalacion,
            'orden_servicio_inst' => $this->_ordensi,
            'capacitacion' => $this->_fcapacitacion,
            'accesorios' => $this->_accesorios,
            'consumibles' => $this->_consumibles,
            'observaciones' => $this->_observaciones,
            'garantia_meses' => $this->_garantia,
            'orden_servicio_mp1' => $this->_ordenservm1,
            'fecha_mp1' => $this->_fservm1,
            'observaciones_mp1' => $this->_obsordenservm1,
            'orden_servicio_mp2' => $this->_ordenservm2,
            'fecha_mp2' => $this->_fservm2,
            'observaciones_mp2' => $this->_obsordenservm2,
        );
        $this->db->where('ID', $this->_bdID);
        $this->db->update($this->table, $data);
    }

    public function getBase()
    {
        $this->db->select(array(
            's.ID', 's.CLAVE_COMPENDIO', 's.CONCEPTO', 's.PROVEEDOR', 's.MARCA',
            's.MODELO', 's.SERIE', 's.CLAVE_CUCOP', 's.CLAVE_CABM', 's.PARTIDA_PRESUPUESTAL', 's.TIPO_ADQUISICION', 's.NUM_REGISTRO_CARTERA',
            's.FECHA_REGISTRO_CARTERA', 's.OFICIO_ADJUDICACION', 's.FECHA_OFICIO_ADJUDICACION', 's.NUM_CONTRATO', 's.PRECIO_UNITARIO_SIN_IVA',
            's.OFICIO_SOLICITUD', 's.FECHA_SOLICITUD', 's.CLUES', 's.ESTATUS_OPERACION', 's.UNIDAD', 's.ENTIDAD_FEDERATIVA', 's.CLAVE_MUNICIPIO',
            's.NOMBRE_JURISDICCION', 's.BAJO_RESGUARDO', 's.NOMBRE_INSTITUCION', 's.CONTACTO_ESTATAL_UNIDAD', 's.DIRECCION', 's.TELEFONO', 's.ORDEN_SUMINISTRO',
            's.ESTATUS', 's.DISPONIBLE_ALMACEN', 's.FECHA_ORDEN_SUMINISTRO', 's.FECHA_INSTALACION', 's.ACTA_ENTREGA_RECEPCION',
            's.ORDEN_SERVICIO_INST', 's.CAPACITACION', 's.ACCESORIOS', 's.CONSUMIBLES', 's.OBSERVACIONES', 's.GARANTIA_MESES', 's.FECHA_MP1', 's.ORDEN_SERVICIO_MP1',
            's.DIAS_MP1', 's.ALERTA_MP1', 's.OBSERVACIONES_MP1', 's.FECHA_MP2', 's.ORDEN_SERVICIO_MP2', 's.DIAS_MP2', 's.ALERTA_MP2', 's.OBSERVACIONES_MP2'
        ));
        $this->db->from($this->table . " s");
        $this->db->where('s.ID', $this->_bdID);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function countAll()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function countFiltered()
    {
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function deleteBd()
    {
        $this->db->where('ID', $this->_bdID);
        $this->db->delete($this->table);
    }

    // Specific Queryes
    public function get_all()
    {
        $this->db->order_by($this->id, $this->orderAsc);
        return $this->db->get($this->table)->result();
    }

    public function get_bd()
    {
        $this->db->select("ID, CLAVE_COMPENDIO, CONCEPTO, PROVEEDOR, MARCA, MODELO, SERIE, NUM_REGISTRO_CARTERA, OFICIO_ADJUDICACION, ORDEN_SUMINISTRO");
        $this->db->order_by($this->id, $this->orderDesc);
        return $this->db->get($this->table)->result();
    }

    public function getCountRegistroCartera()
    {
        $this->db->distinct();
        $this->db->select('NUM_REGISTRO_CARTERA');
        $this->db->where("NUM_REGISTRO_CARTERA NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getCountOfAdjudicacion()
    {
        $this->db->distinct();
        $this->db->select('OFICIO_ADJUDICACION');
        $this->db->where("OFICIO_ADJUDICACION NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getCountNumContrato()
    {
        $this->db->distinct();
        $this->db->select('NUM_CONTRATO');
        $this->db->where("NUM_CONTRATO NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function getCountOrdenSuministro()
    {
        $this->db->distinct();
        $this->db->select('ORDEN_SUMINISTRO');
        $this->db->where("ORDEN_SUMINISTRO NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    /* * * * * INFORMATION FROM GOOGLE GEOCHARTS * * * * */

    public function getOrdenesXEstado()
    {
        $this->db->select('ENTIDAD_FEDERATIVA, COUNT(DISTINCT ORDEN_SUMINISTRO) AS COUNT');
        $this->db->where("ORDEN_SUMINISTRO <> '' AND ENTIDAD_FEDERATIVA NOT IN ('', 'IMSS BIENESTAR','NO APLICA')");
        $this->db->group_by('ENTIDAD_FEDERATIVA');
        $query = $this->db->get($this->table);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM CHARTS * * * * */

    public function getConceptos()
    {
        $this->db->select('COUNT(1) AS count, CONCEPTO AS concepto');
        $this->db->where("CONCEPTO IS NOT NULL AND CONCEPTO NOT IN ('','NA','NO APLICA')");
        $this->db->group_by('CONCEPTO');
        $this->db->order_by(1, $this->orderDesc);
        $query = $this->db->get($this->table, 10);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM DONUTS CHARTS * * * * */

    public function getTipoAdquisicion()
    {
        $this->db->select('TIPO_ADQUISICION AS tipo_adquisicion, COUNT(1) AS count');
        $this->db->where("TIPO_ADQUISICION NOT IN ('','NA','NO APLICA')");
        $this->db->group_by('TIPO_ADQUISICION');
        $this->db->order_by(1, $this->orderDesc);
        $query = $this->db->get($this->table);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM DONUTS CHARTS * * * * */
    public function getFaltantesOrdenes()
    {
        $this->db->select("'SIN CONTRATO' AS faltante,COUNT(DISTINCT ORDEN_SUMINISTRO) AS count");
        $this->db->from($this->table);
        $this->db->where("ORDEN_SUMINISTRO <> '' AND NUM_CONTRATO='' ");
        $query1 = $this->db->get_compiled_select();
        $this->db->select("'SIN OFICIO DE ADJUDICACION', COUNT(DISTINCT ORDEN_SUMINISTRO)");
        $this->db->from($this->table);
        $this->db->where("ORDEN_SUMINISTRO <> '' AND OFICIO_ADJUDICACION='' ");
        $query2 = $this->db->get_compiled_select();
        $this->db->select("'SIN PARTIDA PRESUPUESTAL', COUNT(DISTINCT ORDEN_SUMINISTRO)");
        $this->db->from($this->table);
        $this->db->where("ORDEN_SUMINISTRO <> '' AND PARTIDA_PRESUPUESTAL='' ");
        $query3 = $this->db->get_compiled_select();
        $this->db->select("'SIN REGISTRO EN CARTERA',COUNT(DISTINCT ORDEN_SUMINISTRO)");
        $this->db->from($this->table);
        $this->db->where("ORDEN_SUMINISTRO <> '' AND NUM_REGISTRO_CARTERA='' ");
        $query4 = $this->db->get_compiled_select();

        $query = $this->db->query($query1 . ' UNION ALL ' . $query2 . ' UNION ALL ' . $query3 . ' UNION ALL ' . $query4);
        $record = $query->result();
        return $record;
    }

    public function getRegistroCartera()
    {
        $this->db->select("IF(NUM_REGISTRO_CARTERA='','SIN INFORMACION',NUM_REGISTRO_CARTERA) AS num_reg_cartera, COUNT(1) AS total");
        $this->db->group_by("IF(NUM_REGISTRO_CARTERA='','SIN INFORMACION',NUM_REGISTRO_CARTERA)");
        $this->db->order_by(2, $this->orderDesc);
        $query = $this->db->get($this->table, 10);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM PROJECTS CHARTS * * * * */

    public function getProveedores()
    {
        $str = "SELECT T1.PROVEEDOR as proveedor, T1.total, ROUND((T1.TOTAL *100)/T2.TOTAL,2) as percent FROM "
            . "(SELECT PROVEEDOR, COUNT(1) AS TOTAL "
            . "FROM BASE "
            . "WHERE PROVEEDOR <> '' "
            . "GROUP BY PROVEEDOR) T1 "
            . "CROSS JOIN (SELECT COUNT(1) AS TOTAL FROM BASE) T2 "
            . "ORDER BY 3 DESC LIMIT 10";
        $query = $this->db->query($str);
        $record = $query->result();
        return $record;
    }

    public function getMarcas()
    {
        $str = "SELECT T1.MARCA as marca, T1.total, ROUND((T1.TOTAL *100)/T2.TOTAL,2) as percent FROM "
            . "(SELECT MARCA, COUNT(1) AS TOTAL "
            . "FROM BASE "
            . "WHERE MARCA <> '' "
            . "GROUP BY MARCA) T1 "
            . "CROSS JOIN (SELECT COUNT(1) AS TOTAL FROM BASE) T2 "
            . "ORDER BY 3 DESC LIMIT 10";
        $query = $this->db->query($str);
        $record = $query->result();
        return $record;
    }

    public function debug_to_console($data, $context = 'Debug in Console')
    {
        ob_start();
        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);
        echo $output;
    }
}
