<?php
defined('BASEPATH') or exit('No direct access allowed');

class Model_login extends CI_Model
{

    public function ambillogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'email' => $row->email,
                    'password' => $row->password
                );
            }
            $this->session->get_userdata($sess);
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('info', 'Maaf Email dan Password Salah !!');
            redirect('Admin');
        }
    }
}
