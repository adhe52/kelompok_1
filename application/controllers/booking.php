<?php
defined('BASEPATH') or exit('no direct script allowed');

class Booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('booking_model');
        $this->load->model('harga_model');
    }

    public function index()
    {
        // Retrieve data from Harga_model
        $data['datajalur'] = $this->harga_model->getdata();

        // Generate unique code from booking_model
        $data['kd'] = $this->booking_model->auto_code();

        // Load view
        $this->load->view('form_booking', $data);
    }

    function pilih_harga()
    {
        $id_jalur = $_POST['id_jalur'];
        $p = "SELECT price as price_j from harga where id_jalur='$id_jalur'";
        $result_jalur = $this->db->query($p)->row_array();
        echo json_encode($result_jalur);
    }
}
