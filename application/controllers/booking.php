<?php 
defined('BASEPATH') or exit('no direct script allowed');

class booking extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('form_booking');
    }

}
