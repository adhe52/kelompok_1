<?php
defined('BASEPATH') or exit('no direct script allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_login');
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->model_login->ambillogin($email, $password);
        }
    }

    public function logout()
    {
        $this->session->set_userdata('email', false);
        $this->session->sess_destroy();
        redirect('Web');
    }
}
