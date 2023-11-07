<?php

class booking_model extends CI_Model
{
    public function auto_code()
    {
        $this->db->select_max('id');
        $auto = $this->db->get('booking');
        return $auto->result_array();
    }
}
