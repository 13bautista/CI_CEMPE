<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Exception Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Exception
 */

class Exceptions extends CI_Controller
{
    public function __construct()
    {
        // Load the parent construct
        parent::__construct();

        // Load the libraries
        $this->load->library(['session', 'form_validation']);

        // Load the helpers
        $this->load->helper(['url', 'string', 'cookie']);
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data = [
            'page' => [
                'title' => '404',
            ],
        ];
        $this->load->view('errors/404', $data);}
}
