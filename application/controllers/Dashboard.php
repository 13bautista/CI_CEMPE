<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Dashboard Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Dasboard
 */
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        // Load the parent construct
        parent::__construct();

        // Load the libraries
        $this->load->library(['session']);

        // Load the helpers
        $this->load->helper(['url']);

        // Check session
        $this->checkSession();
    }

    private function checkSession()
    {
        if (!$this->session->has_userdata('username')) {
            redirect('login');
            die;
        }
    }

    public function registroCartera()
    {
        $data = [
            'page' => [
                'title' => 'Regidtro en Cartera',
            ],
        ];
        $this->load->view('dashboard/registrocartera', $data);
    }

    public function oficioAdjudicacion()
    {
        $data = [
            'page' => [
                'title' => 'Oficios de Adjudicacion',
            ],
        ];
        $this->load->view('dashboard/oficioadjudicacion', $data);
    }

    public function contrato()
    {
        $data = [
            'page' => [
                'title' => 'Contratos',
            ],
        ];
        $this->load->view('dashboard/contrato', $data);
    }

    public function ordenSuministro()
    {
        $data = [
            'page' => [
                'title' => 'Ordenes de Suministro',
            ],
        ];
        $this->load->view('dashboard/ordensuministro', $data);
    }
}
