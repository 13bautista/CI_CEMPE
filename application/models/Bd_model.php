<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Users Model Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Models
 * @category    Bd
 * @link        https://github.com/inibah97
 */
class Bd_model extends CI_Model
{
    /**
     * The table used in this model
     *
     * @var array
     */
    private $_table = [
        'bd',
    ];

    /**
     * Construct functions
     *
     * @return void
     */
    public function __construct()
    {
        // Load the parent construct
        parent::__construct();

        // Load the database libraries
        $this->load->database();
    }

    /**
     * Get user by specific data
     *
     * @param array $data
     * @param bool  $first Get only the first data
     * @param object
     */
    public function getCountRegistroCartera()
    {
        $this->db->distinct();
        $this->db->select('NUM_REGISTRO_CARTERA');
        $this->db->where("NUM_REGISTRO_CARTERA NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get('bd');
        return $query->num_rows();
    }

}