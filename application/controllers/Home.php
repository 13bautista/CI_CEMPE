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
        $data = [
            'page' => [
                'title' => 'Homepages',
            ],
            'user' => (array) $this->_user,
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
        $record = $this->Users_model->barChart();

        foreach ($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }

        $data = [
            'page' => [
                'title' => 'Opcion 1',
            ],
            'user' => (array) $this->_user,
            'chart_data' => json_encode($data),
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
        $record = $this->Bd_model->getCountRegistroCartera();

        $data = [
            'page' => [
                'title' => 'Opcion 3',
            ],
            'user' => (array) $this->_user,
            'countRegistroCartera'=>$record,
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
