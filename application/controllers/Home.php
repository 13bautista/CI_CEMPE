<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Home
 */
class Home extends CI_Controller
{
    /**
     * User data
     *
     * @var object
     */
    private $_user;

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
        $this->load->model(['Users_model']);
        $this->load->model(['Bd_model']);

        // Check session
        $this->checkSession();

        // Get user data from resource by session
        $this->_user = $this->Users_model->getUserByField([
            'username' => $this->session->username,
        ], true);
    }

    /**
     * Default for this controller.
     *
     * @return void
     */
    public function index()
    {
        //Cards
        $countRegistroCartera = $this->Bd_model->getCountRegistroCartera();
        $countOfAdjudicacion = $this->Bd_model->getCountOfAdjudicacion();
        $countNumContrato = $this->Bd_model->getCountNumContrato();
        $countOrdenSuministro = $this->Bd_model->getCountOrdenSuministro();

        //Charts
        $distinctConceptos = $this->Bd_model->getConceptos();
        foreach ($distinctConceptos as $row) {
            $datosConceptos['label'][] = $row->concepto;
            $datosConceptos['data'][] = $row->count;
        }

        //Google Charts
        $OSxEstados = $this->Bd_model->getOrdenesXEstado();

        //Donuts Charts
        $tipoAdquisicion = $this->Bd_model->getTipoAdquisicion();
        foreach ($tipoAdquisicion as $row) {
            $datosTipoAdq['label'][] = $row->TIPO_ADQUISICION;
            $datosTipoAdq['data'][] = $row->COUNT;
        }

        $faltanteOS = $this->Bd_model->getFaltantesOrdenes();
        foreach ($faltanteOS as $row) {
            $datosFaltantesOS['label'][] = $row->FALTANTE;
            $datosFaltantesOS['data'][] = $row->COUNT;
        }

        $registroCartera = $this->Bd_model->getRegistroCartera();
        foreach ($registroCartera as $row) {
            $datosRegistroCartera['label'][] = $row->NUM_REGISTRO_CARTERA;
            $datosRegistroCartera['data'][] = $row->TOTAL;
        }

        //proveedores y otros
        $proveedores = $this->Bd_model->getProveedores();
        foreach ($proveedores as $row) {
            $datosProveedores['label'][] = $row->proveedor;
            $datosProveedores['data'][] = $row->percent;
        }

        $marcas = $this->Bd_model->getMarcas();

        $data = [
            'page' => [
                'title' => 'Dashboard',
            ],
            'user' => (array) $this->_user,
            'cardRC' => $countRegistroCartera,
            'cardOA' => $countOfAdjudicacion,
            'cardNC' => $countNumContrato,
            'cardOS' => $countOrdenSuministro,
            'conceptos' => json_encode($datosConceptos),
            'OSEdos' => json_encode($OSxEstados),
            'tipoAdq' => json_encode($datosTipoAdq),
            'faltanteOS' => json_encode($datosFaltantesOS),
            'regCartera' => json_encode($datosRegistroCartera),
            'proveedores' => json_encode($proveedores),
            'dproveedores' => json_encode($datosProveedores),
            'marcas' => json_encode($marcas),
        ];
        $this->load->view('home', $data);
    }

    /**
     * Check Session
     *
     * @return void
     */
    private function checkSession()
    {
        if (!$this->session->has_userdata('username')) {
            redirect('login');
            die;
        }
    }

    public function opc1()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $result = $this->Bd_model->get_all();
        $datos = [];

        foreach ($result as $r) {
            $datos[] = array(
                $r->ID,
                $r->CLAVE_COMPENDIO,
                $r->CONCEPTO,
                $r->DESCRIPCION_OS,
                $r->PROVEEDOR,
                $r->PROVEEDOR_OS,
                $r->PROVEEDOR_CORREGIDO,
                $r->MARCA,
                $r->MARCA_OS,
                $r->MARCA_CORREGIDO,
                $r->MODELO,
                $r->MODELO_OS,
                $r->MODELO_CORREGIDO,
                $r->SERIE,
                $r->SERIE_OS,
                $r->SERIE_CORREGIDO,
                $r->CANTIDAD,
                $r->CLAVE_CUCOP,
                $r->CLAVE_CABM,
                $r->PARTIDA_PRESUPUESTAL,
                $r->TIPO_ADQUISICION,
                $r->NUM_REGISTRO_CARTERA,
                $r->FECHA_REGISTRO_CARTERA,
                $r->OFICIO_ADJUDICACION,
                $r->FECHA_OFICIO_ADJUDICACION,
                $r->NUM_CONTRATO,
                $r->PRECIO_UNITARIO_SIN_IVA,
                $r->OFICIO_SOLICITUD,
                $r->FECHA_SOLICITUD,
                $r->CLUES,
                $r->ESTATUS_OPERACION,
                $r->UNIDAD,
                $r->ENTIDAD_FEDERATIVA,
                $r->NOMBRE_MUNICIPIO,
                $r->NOMBRE_JURISDICCION,
                $r->BAJO_RESGUARDO,
                $r->NOMBRE_INSTITUCION,
                $r->CONTACTO_ESTATAL_UNIDAD,
                $r->DIRECCION,
                $r->TELEFONO,
                $r->ORDEN_SUMINISTRO,
                $r->OS_PDF,
                $r->OS_CORREGIDA,
                $r->ESTATUS,
                $r->DISPONIBLE_ALMACEN,
                $r->FECHA_ORDEN_SUMINISTRO,
                $r->FECHA_EXPEDICION_OS,
                $r->FECHA_INSTALACION,
                $r->ACTA_ENTREGA_RECEPCION,
                $r->ORDEN_SERVICIO_INST,
                $r->CAPACITACION,
                $r->ACCESORIOS,
                $r->CONSUMIBLES,
                $r->OBSERVACIONES,
                $r->GARANTIA_MESES,
                $r->FECHA_MP1,
                $r->ORDEN_SERVICIO_MP1,
                $r->DIAS_MP1,
                $r->ALERTA_MP1,
                $r->OBSERVACIONES_MP1,
                $r->FECHA_MP2,
                $r->ORDEN_SERVICIO_MP2,
                $r->DIAS_MP2,
                $r->ALERTA_MP2,
                $r->OBSERVACIONES_MP2,
            );
        }

        $data = [
            'page' => [
                'title' => 'Opcion 1',
            ],
            'user' => (array) $this->_user,
            'tabla' => json_encode($datos),
        ];
        $this->load->view('opc1', $data,json_encode($datos));
    }

    public function opc2()
    {
        $data = [
            'page' => [
                'title' => 'Opcion 2',
            ],
            'user' => (array) $this->_user,
        ];
        $this->load->view('opc2', $data);
    }

    public function opc3()
    {
        $data = [
            'page' => [
                'title' => 'Opcion 3',
            ],
            'user' => (array) $this->_user,
        ];
        $this->load->view('opc3', $data);
    }

    public function opc4()
    {
        $data = [
            'page' => [
                'title' => 'Opcion 4',
            ],
            'user' => (array) $this->_user,
        ];
        $this->load->view('opc4', $data);
    }

    public function opc5()
    {
        $data = [
            'page' => [
                'title' => 'Opcion 5',
            ],
            'user' => (array) $this->_user,
        ];
        $this->load->view('opc5', $data);
    }
}