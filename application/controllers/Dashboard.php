<?php
defined('BASEPATH') or exit('no direct script allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }
    public function index()
    {
        $data['jml_pendaftar'] = $this->Dashboard_model->DaftarOnline();
        $data['jml_pendaki_naik'] = $this->Dashboard_model->PendakiNaik();
        $data['all_pendaftar'] = $this->Dashboard_model->GetAllPendaftar();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_admin', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function PendaftarPages()
    {
        $data['jml_pendaftar'] = $this->Dashboard_model->DaftarOnline();
        $data['all_pendaftar'] = $this->Dashboard_model->GetAllPendaftar();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/PendaftarPage', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function Simaksi()
    {
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/SimaksiForm');
        $this->load->view('dashboard/footer_dashboard');
    }

    public function processForm()
    {
        // Set aturan validasi
        $this->form_validation->set_rules('jum', 'Jumlah Anggota', 'required|integer');

        // Lakukan validasi
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form
            $this->load->view('dashboard/header_dashboard');
            $this->load->view('dashboard/SimaksiForm');
            $this->load->view('dashboard/footer_dashboard');
        } else {
            // Jika validasi berhasil, lanjutkan dengan proses form
            $jum = $this->input->post('jum');
            $data['jum'] = $jum;

            $this->load->view('dashboard/header_dashboard');
            $this->load->view('dashboard/FormInput', $data);
            $this->load->view('dashboard/footer_dashboard');
        }
    }

    public function saveData()
    {
        $jum = $this->input->post('jum');
        $kode_pendaki = $this->input->post('kode_booking');
        $nama = $this->input->post('nama');
        $nbelakang = $this->input->post('nbelakang');
        $ktp = $this->input->post('nik');
        $tlp = $this->input->post('telp');
        $tanggal = $this->input->post('tanggal');
        $jalurdaki = $this->input->post('lokasi');
        $schedule = $this->input->post('schedule');

        $this->load->model('Dashboard_model');
        $this->Dashboard_model->saveFormData($jum, $kode_pendaki, $nama, $nbelakang, $ktp, $tlp, $tanggal, $jalurdaki, $schedule);

        // Tambahkan logika atau redirect ke halaman lain jika diperlukan
        redirect('Dashboard');
    }


    // Controller untuk menu pendaki naik
    public function DashboardNaik()
    {
        $data['jml_pendaki_naik'] = $this->Dashboard_model->PendakiNaik();
        $data['PendakiNaik'] = $this->Dashboard_model->GetAllNaik();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_naik', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function searchNaik()
    {
        $search = $this->input->get('search');

        $data['PendakiNaik'] = $this->Dashboard_model->searchPendakiNaik($search);

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_naik', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function checkOut($id)
    {
        // Ambil data pendaki yang akan di-check out
        $pendaki = $this->Dashboard_model->getPendakiById($id);

        if ($pendaki) {
            // Masukkan data pendaki ke dalam tabel turun
            $this->Dashboard_model->saveTurunData($pendaki);

            // Hapus data pendaki dari tabel naik
            $this->Dashboard_model->deleteNaikData($id);
        }

        // Redirect kembali ke halaman DashboardNaik
        redirect('dashboard/DashboardNaik');
    }
    // Contoh implementasi di dalam method handleOverlay
    public function handleOverStay($id)
    {
        die('test');
        // Ambil data pendaki yang akan di-handle overstay
        $pendaki = $this->Dashboard_model->getPendakiById($id);

        if ($pendaki) {
            // Panggil fungsi handleOverStay dari model
            $this->Dashboard_model->saveTurunData($pendaki);
        }

        // Redirect kembali ke halaman DashboardNaik
        redirect('dashboard/DashboardNaik');
    }

    //Controller untuk form Accident

    public function FormAccident()
    {
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/Form_accident');
        $this->load->view('dashboard/footer_dashboard');
    }
}
