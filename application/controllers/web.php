<?php
defined('BASEPATH') or exit('no direct script allowed');

class web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_body');
        $this->load->view('v_footer');
    }
}
