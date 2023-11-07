<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga_model extends CI_Model
{

    function getdata()
    {
        $query = $this->db->query("SELECT * FROM harga ORDER BY jalur ASC");

        return $query->result_array();
    }
}
