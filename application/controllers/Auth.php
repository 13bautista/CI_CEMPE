<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Auth Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Auth
 
 * @link        https://github.com/inibah97
 */
class Auth extends CI_Controller
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
        $this->load->library(['session', 'form_validation']);

        // Load the helpers
        $this->load->helper(['url', 'string', 'cookie']);

        // Load the models
        $this->load->model(['Users_model']);
    }

    /**
     * Login - Default for this controller
     *
     * @return void
     */
    public function index()
    {
        $this->checkAuth();

        $data = [
            'page' => [
                'title' => 'Login',
            ],
        ];

        $this->form_validation->set_rules('username', 'Usuario', 'trim|required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required');
        $this->form_validation->set_rules('remember', 'Recordarme', 'trim|integer');

        $this->form_validation->set_message('trim', '%s no debe tener espacios');
        $this->form_validation->set_message('required', 'Ingresa tu %s');
        $this->form_validation->set_message('alpha_numeric', 'El %s solo puede contener caracteres alfanuméricos');

        if ($this->form_validation->run() === false) {
            $this->load->view('login', $data);
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $remember = $this->input->post('remember', true);

            $checkUser = $this->Users_model->getUserByField([
                'username' => $username,
            ], true);

            if ($checkUser) {
                if (password_verify($password, $checkUser->password)) {
                    $this->session->set_userdata('username', $checkUser->username);

                    if ($remember == '1') {
                        $rememberToken = random_string('md5');
                        $this->Users_model->updateUser($checkUser->id, ['remember_token' => $rememberToken]);

                        set_cookie([
                            'name' => '_auth',
                            'value' => $rememberToken,
                            'expire' => (60 * 60 * 24 * 7),
                        ]);
                    }

                    $this->session->set_flashdata('success_message', 'Bienvenido, ' . $checkUser->username . '.');
                    redirect('/');
                } else {
                    $this->session->set_flashdata('error_message', 'Contraseña invalida');
                    redirect('login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error_message', 'Usuario no encontrado');
                redirect('login', 'refresh');
            }
        }
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        $this->checkAuth();

        $data = [
            'page' => [
                'title' => 'Register',
            ],
        ];

        $this->form_validation->set_rules('username', 'Usuario', 'trim|required|min_length[6]|max_length[30]|alpha_numeric|is_unique[usuario.username]');
        $this->form_validation->set_rules('password1', 'Contraseña', 'trim|required|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirmación', 'trim|required|min_length[6]|matches[password1]');

        $this->form_validation->set_message('trim', '%s no debe tener espacios');
        $this->form_validation->set_message('required', '%s es obligatorio ');
        $this->form_validation->set_message('min_length', '%s debe tener al menos 6 caracteres');
        $this->form_validation->set_message('max_length', '%s no debe exceder 30 caracteres');
        $this->form_validation->set_message('alpha_numeric', '%s debe ser alfanumerico');
        $this->form_validation->set_message('is_unique', 'Este %s ya existe');
        $this->form_validation->set_message('matches', 'La %s no coincide');

        if ($this->form_validation->run() === false) {
            $this->load->view('register', $data);
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password1', true);

            $createUser = $this->Users_model->insertUser($username, $password);
            if ($createUser) {
                $this->session->set_flashdata('success_message', '¡Felicidades! su cuenta ha sido creada, por favor inicie sesión.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error_message', '¡Ocurrió un error! Por favor, inténtelo de nuevo más tarde');
                redirect('register', 'refresh');
            }
        }
    }

    /**
     * Logout
     *
     * @return void
     */
    public function logout()
    {
        $rememberToken = get_cookie('_auth', true);
        if ($rememberToken) {
            $checkUser = $this->Users_model->getUserByField([
                'remember_token' => $rememberToken,
            ], true);

            if ($checkUser) {
                $this->Users_model->updateUser($checkUser->id, [
                    'remember_token' => null,
                ]);
            }

            delete_cookie('_auth');
        }

        if ($this->session->has_userdata('username')) {
            $this->session->unset_userdata('username');
        }

        $this->session->set_flashdata('success_message', 'Te has desconectado.');
        redirect('login');
    }

    /**
     * Check Auth
     *
     * @return void
     */
    private function checkAuth()
    {
        if ($this->session->has_userdata('username')) {
            redirect('/');
            die;
        } else {
            $rememberToken = get_cookie('_auth', true);
            if ($rememberToken) {
                $checkUser = $this->Users_model->getUserByField(['remember_token' => $rememberToken], true);
                if ($checkUser) {
                    $this->session->set_userdata('username', $checkUser->username);
                    $this->session->set_flashdata('success_message', 'Bienvenido de nuevo, ' . $checkUser->username . '.');
                    redirect('/');
                    die;
                }
            }
        }
    }
}
