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
        $p = "SELECT price as price_j from harga where jalur='$id_jalur'";
        $result_jalur = $this->db->query($p)->row_array();
        echo json_encode($result_jalur);
    }

    public function submit_booking()
    {
        // Memuat library validasi
        $this->load->library('form_validation');

        // Menetapkan aturan validasi untuk setiap field
        $this->form_validation->set_rules('unik', 'Kode Booking', 'required');
        $this->form_validation->set_rules('depan', 'Nama Depan', 'required');
        // Tambahkan aturan validasi untuk field lainnya sesuai kebutuhan

        // Menjalankan validasi
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan pesan kesalahan
            $this->load->view('form_booking');
        } else {
            // Jika validasi berhasil, proses formulir dan simpan ke database
            // Memproses formulir yang disubmit
            $data = array(
                'kode' => $this->input->post('unik'),
                'nama_depan' => $this->input->post('depan'),
                'nama_belakang' => $this->input->post('belakang'),
                'nik' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'telp' => $this->input->post('tlp'),
                'telp_darurat' => $this->input->post('darurat'),
                'jalur' => $this->input->post('id_jalur'),
                'harga' => $this->input->post('harga'),
                'anggota' => $this->input->post('anggota'),
                'tanggal' => $this->input->post('tanggal'),
                'total_harga' => $this->input->post('tharga_rp')

            );

            // Menyimpan data ke database
            $booking_id = $this->booking_model->save_booking($data);

            if ($booking_id) {
                // Redirect atau tampilkan pesan sukses jika berhasil
                redirect('booking/cetak/' . $booking_id);
            } else {
                // Tampilkan pesan error jika gagal
                show_error('Gagal menyimpan data booking.', 500, 'Oops, terjadi kesalahan!');
            }
        }
    }

    public function cetak($id)
    {
        // Ambil data booking berdasarkan ID
        $data['booking'] = $this->booking_model->get_booking_by_id($id);

        // Load view cetak
        $this->load->view('cetak', $data);
    }
}
