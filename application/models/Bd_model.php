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
<<<<<<< HEAD

    public $table = "bd";
    public $id = 'id';
    public $orderAsc = 'ASC';
    public $orderDesc = 'DESC';
=======
    /**
     * The table used in this model
     *
     * @var array
     */
    private $_table = [
        'bd',
    ];
>>>>>>> a83247bca92426a321f315a3a7db53731a151181

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

<<<<<<< HEAD
    // get all
    public function get_all()
    {
        $this->db->order_by($this->id, $this->orderAsc);
        return $this->db->get($this->table)->result();
    }

=======
    /**
     * Get user by specific data
     *
     * @param array $data
     * @param bool  $first Get only the first data
     * @param object
     */
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
    public function getCountRegistroCartera()
    {
        $this->db->distinct();
        $this->db->select('NUM_REGISTRO_CARTERA');
        $this->db->where("NUM_REGISTRO_CARTERA NOT IN ('','NA','NO APLICA')");
<<<<<<< HEAD
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
        $this->db->select('OS_CORREGIDA');
        $this->db->where("OS_CORREGIDA NOT IN ('','NA','NO APLICA')");
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    /* * * * * INFORMATION FROM GOOGLE GEOCHARTS * * * * */

    public function getOrdenesXEstado()
    {
        $this->db->select('ENTIDAD_FEDERATIVA, COUNT(DISTINCT OS_CORREGIDA) AS COUNT');
        $this->db->where("OS_CORREGIDA <> '' AND ENTIDAD_FEDERATIVA NOT IN ('', 'IMSS BIENESTAR')");
        $this->db->group_by('ENTIDAD_FEDERATIVA');
        $query = $this->db->get($this->table);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM CHARTS * * * * */

    public function getConceptos()
    {
        $this->db->select('COUNT(1) AS count, IFNULL(CONCEPTO,UPPER(DESCRIPCION_OS)) AS concepto');
        $this->db->where("IFNULL(CONCEPTO,UPPER(DESCRIPCION_OS)) IS NOT NULL AND IFNULL(CONCEPTO,UPPER(DESCRIPCION_OS)) NOT IN ('','NA','NO APLICA')");
        $this->db->group_by('IFNULL(CONCEPTO,UPPER(DESCRIPCION_OS))');
        $this->db->order_by(1, $this->orderDesc);
        $query = $this->db->get($this->table, 10);
        $record = $query->result();
        return $record;
    }

    /* * * * * INFORMATION FROM DONUTS CHARTS * * * * */

    public function getTipoAdquisicion()
    {
        $this->db->select('TIPO_ADQUISICION, COUNT(1) AS COUNT');
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
        $this->db->select("'SIN CONTRATO' AS FALTANTE,COUNT(DISTINCT OS_CORREGIDA) AS COUNT");
        $this->db->from($this->table);
        $this->db->where("OS_CORREGIDA <> '' AND NUM_CONTRATO='' ");
        $query1 = $this->db->get_compiled_select();
        $this->db->select("'SIN OFICIO DE ADJUDICACION', COUNT(DISTINCT OS_CORREGIDA)");
        $this->db->from($this->table);
        $this->db->where("OS_CORREGIDA <> '' AND OFICIO_ADJUDICACION='' ");
        $query2 = $this->db->get_compiled_select();
        $this->db->select("'SIN PARTIDA PRESUPUESTAL', COUNT(DISTINCT OS_CORREGIDA)");
        $this->db->from($this->table);
        $this->db->where("OS_CORREGIDA <> '' AND PARTIDA_PRESUPUESTAL='' ");
        $query3 = $this->db->get_compiled_select();
        $this->db->select("'SIN REGISTRO EN CARTERA',COUNT(DISTINCT OS_CORREGIDA)");
        $this->db->from($this->table);
        $this->db->where("OS_CORREGIDA <> '' AND NUM_REGISTRO_CARTERA='' ");
        $query4 = $this->db->get_compiled_select();
       
        $query = $this->db->query($query1 . ' UNION ALL ' . $query2 . ' UNION ALL ' . $query3. ' UNION ALL '.$query4);
        $record = $query->result();
        return $record;
    }

    public function getRegistroCartera()
    {
        $this->db->select("IF(NUM_REGISTRO_CARTERA='','SIN INFORMACION',NUM_REGISTRO_CARTERA)  NUM_REGISTRO_CARTERA, COUNT(1) AS TOTAL");
        $this->db->group_by("IF(NUM_REGISTRO_CARTERA='','SIN INFORMACION',NUM_REGISTRO_CARTERA)");
        $this->db->order_by(2, $this->orderDesc);
        $query = $this->db->get($this->table, 10);
        $record = $query->result();
        return $record;
    }

/* * * * * INFORMATION FROM PROJECTS CHARTS * * * * */

    public function getProveedores()
    {
        $str = "SELECT T1.proveedor, T1.total, ROUND((T1.TOTAL *100)/T2.TOTAL,2) as percent FROM " .
            "(SELECT PROVEEDOR, COUNT(1) AS TOTAL " .
            "FROM BD " .
            "WHERE PROVEEDOR <> '' " .
            "GROUP BY PROVEEDOR) T1 " .
            "CROSS JOIN (SELECT COUNT(1) AS TOTAL FROM BD) T2 " .
            "ORDER BY 3 DESC LIMIT 10";
        $query = $this->db->query($str);
        $record = $query->result();
        return $record;
    }

    public function getMarcas()
    {
        $str = "SELECT T1.MARCA_CORREGIDO as marca, T1.total, ROUND((T1.TOTAL *100)/T2.TOTAL,2) as percent FROM " .
            "(SELECT MARCA_CORREGIDO, COUNT(1) AS TOTAL " .
            "FROM BD " .
            "WHERE MARCA_CORREGIDO <> '' " .
            "GROUP BY MARCA_CORREGIDO) T1 " .
            "CROSS JOIN (SELECT COUNT(1) AS TOTAL FROM BD) T2 " .
            "ORDER BY 3 DESC LIMIT 10";
        $query = $this->db->query($str);
        $record = $query->result();
        return $record;
    }

=======
        $query = $this->db->get('bd');
        return $query->num_rows();
    }

>>>>>>> a83247bca92426a321f315a3a7db53731a151181
}