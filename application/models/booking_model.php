<?php

class booking_model extends CI_Model
{
    public function auto_code()
    {

        // Ambil id terbaru dari tabel booking
        $this->db->select_max('id');
        $id_result = $this->db->get('booking')->row_array();
        $latest_id = $id_result['id'];

        // Format kode booking
        $kode_booking = date('Ymd') . ($latest_id + 1);

        // Ubah menjadi array
        return ['kode_booking' => $kode_booking];
    }

    public function save_booking($data)
    {
        // Simpan data ke tabel booking di database
        $this->db->insert('booking', $data);

        var_dump($this->db->last_query());
        var_dump($this->db->error());

        return $this->db->insert_id();
    }

    public function get_booking_by_id($id)
    {
        // Query untuk mendapatkan data booking berdasarkan ID
        $this->db->where('id', $id);
        $query = $this->db->get('booking');

        // Mengembalikan hasil query sebagai array
        return $query->row_array();
    }
}
