<?php
defined('BASEPATH') or exit('no direct script allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_login');
        $this->load->library('session');
        $this->load->library('form_validation');
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

            // Menggunakan metode model untuk melakukan validasi login
            $result = $this->model_login->ambillogin($email, $password);

            if ($result === 'email_not_found') {
                // Email tidak ditemukan
                $this->session->set_flashdata('error', 'Email tidak ditemukan.');
                redirect('login'); // Sesuaikan dengan URL login Anda
            } elseif ($result === 'password_mismatch') {
                // Password salah
                $this->session->set_flashdata('error', 'Password salah.');
                redirect('login'); // Sesuaikan dengan URL login Anda
            } else {
                // Login berhasil, lakukan aksi sesuai kebutuhan
                // Misalnya, redirect ke halaman dashboard
                redirect('dashboard'); // Sesuaikan dengan URL dashboard Anda
            }
        }
    }



    public function logout()
    {
        $this->session->set_userdata('email', false);
        $this->session->sess_destroy();
        redirect('Web');
    }
}
