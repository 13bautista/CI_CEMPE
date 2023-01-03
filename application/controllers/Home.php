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
        //Arrays
        $datosConceptos = [];
        $datosTipoAdq = [];
        $datosRegCartera = [];

        //Cards
        $numRegCartera = $this->Bd_model->getCountRegistroCartera();
        $numOfAdjudicacion = $this->Bd_model->getCountOfAdjudicacion();
        $numDeContratos = $this->Bd_model->getCountNumContrato();
        $numOrdSuminsitro = $this->Bd_model->getCountOrdenSuministro();

        //Maps
        $maps = $this->Bd_model->getOrdenesXEstado();

        //Conceptos
        $conceptos = $this->Bd_model->getConceptos();

        foreach ($conceptos as $x) {
            $datosConceptos["label"][] = $x->concepto;
            $datosConceptos["data"][] = $x->count;
        }

        //Donuts Charts
        $tipoAdquisicion = $this->Bd_model->getTipoAdquisicion();
        foreach ($tipoAdquisicion as $x) {
            $datosTipoAdq["label"][] = $x->tipo_adquisicion;
            $datosTipoAdq["data"][] = $x->count;
        }

        $faltantesOrd = $this->Bd_model->getFaltantesOrdenes();
        foreach ($faltantesOrd as $x) {
            $datosOSFaltantes["label"][] = $x->faltante;
            $datosOSFaltantes["data"][] = $x->count;
        }

        $registroCart = $this->Bd_model->getRegistroCartera();
        foreach ($registroCart as $x) {
            $datosRegCartera["label"][] = $x->num_reg_cartera;
            $datosRegCartera["data"][] = $x->total;
        }

        //Proveedores
        $proveedores = $this->Bd_model->getProveedores();

        //Marcas
        $marcas = $this->Bd_model->getMarcas();

        $data = [
            'page' => [
                'title' => 'Homepages',
            ],
            'user' => (array) $this->_user,
            'cardRC' => $numRegCartera,
            'cardOA' => $numOfAdjudicacion,
            'cardNC' => $numDeContratos,
            'cardOS' => $numOrdSuminsitro,
            'OSEdos' => json_encode($maps),
            'conceptos' => json_encode($datosConceptos),
            'tipoAdq' => json_encode($datosTipoAdq),
            'faltanteOS' => json_encode($datosOSFaltantes),
            'regCartera' => json_encode($datosRegCartera),
            'proveedores' => json_encode($proveedores),
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
        $data = [
            'page' => [
                'title' => 'Opcion 1',
            ],
            'user' => (array) $this->_user,
        ];
        $this->load->view('opc1', $data);
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

    public function getDataTable()
    {
        $json = array();
        $list = $this->Bd_model->get_bd();
        $data = array();

        foreach ($list as $r) {
            $data[] = array(
                $r->ID,
                $r->CLAVE_COMPENDIO,
                $r->CONCEPTO,       
                $r->PROVEEDOR,
                $r->MARCA,
                $r->MODELO,
                $r->SERIE,
                $r->NUM_REGISTRO_CARTERA,
                $r->OFICIO_ADJUDICACION,
                $r->ORDEN_SUMINISTRO,
            );
        }
        $json['data'] = array(
            "draw" => 1,
            "recordsTotal" => $this->Bd_model->countAll(),
            "recordsFiltered" => $this->Bd_model->countFiltered(),
            "data" => $data,
        );
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json['data']);
    }
}
