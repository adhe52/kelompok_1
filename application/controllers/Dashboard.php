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
        $data['jml_pendaki_turun'] = $this->Dashboard_model->PendakiTurun();
        $data['JmlAccident'] = $this->Dashboard_model->PendakiAccident();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_admin', $data);
        $this->load->view('dashboard/footer_dashboard');
    }
    //Dashboard khusus menu pendaftaran Online
    public function PendaftarPages()
    {
        $data['jml_pendaftar'] = $this->Dashboard_model->DaftarOnline();
        $data['all_pendaftar'] = $this->Dashboard_model->GetAllPendaftar();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/PendaftarPage', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function daftar($id)
    {
        // Hapus data pendaki dari tabel booking
        $deleted = $this->Dashboard_model->deletependaftar($id);

        if ($deleted) {
            // Redirect kembali ke halaman DashboardNaik jika penghapusan berhasil
            redirect('dashboard/PendaftarPages');
        } else {
            // Handle kesalahan jika penghapusan gagal
            echo 'Gagal menghapus data pendaki.';
        }
    }


    public function hapus($id)
    {
        try {
            $this->Dashboard_model->deletependaftar($id);
            // Redirect kembali ke halaman DashboardNaik
            redirect('dashboard/PendaftarPages');
        } catch (Exception $e) {
            // Tangkap pesan kesalahan dan tampilkan (opsional)
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function searchDaftar()
    {
        $search = $this->input->get('search');

        $data['all_pendaftar'] = $this->Dashboard_model->SearchPendaftar($search);

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/PendaftarPage', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    //Dashboard khusus menu simaksi dan input form
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
        $ktp = $this->input->post('nik');
        $tlp = $this->input->post('telp');
        $tanggal = $this->input->post('tanggal');
        $jalurdaki = $this->input->post('lokasi');
        $schedule = $this->input->post('schedule');

        $this->load->model('Dashboard_model');
        $this->Dashboard_model->saveFormData($jum, $kode_pendaki, $nama, $ktp, $tlp, $tanggal, $jalurdaki, $schedule);

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

    public function handleAccident($id)
    {
        // Ambil data pendaki yang akan di-handle accident
        $pendaki = $this->Dashboard_model->getPendakiById($id);
        $status = $this->input->post('status');

        if ($pendaki) {
            // Masukkan data pendaki ke dalam tabel accident dengan menyertakan nilai status
            $pesanNotifikasi = $this->Dashboard_model->saveAccident($pendaki, $status);
            // Tampilkan notifikasi jika pesan notifikasi tidak kosong
            if (!empty($pesanNotifikasi)) {
                $this->session->set_flashdata('notification', $pesanNotifikasi);
            }
        }
        $this->session->set_flashdata('success', 'Data berhasil disimpan.');

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

    public function SaveAccident()
    {
        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'telp' => $this->input->post('telepon'),
            'tanggal' => $this->input->post('tanggal'),
            'schedule' => $this->input->post('schedule'),
            'jalur' => $this->input->post('jalur'),
            'status' => $this->input->post('status')
        );

        $this->Dashboard_model->insertAccident($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan.');

        redirect('Dashboard/FormAccident'); // Ganti 'your_redirect_page' dengan halaman tujuan setelah menyimpan data
    }

    //Controller Halaman Pendaki Turun
    public function DashboardTurun()
    {
        $data['jml_pendaki_turun'] = $this->Dashboard_model->PendakiTurun();
        $data['PendakiNaik'] = $this->Dashboard_model->GetAllTurun();

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_turun', $data);
        $this->load->view('dashboard/footer_dashboard');
    }
    public function searchturun()
    {
        $search = $this->input->get('search');

        $data['PendakiNaik'] = $this->Dashboard_model->searchpendakiturun($search);

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_turun', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    // Controller Kelompok

    public function Kelompok()
    {
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/kelompok');
        $this->load->view('dashboard/footer_dashboard');
    }

    //Controller Halaman Accident
    public function DashboardAccident()

    {
        $data['JmlAccident'] = $this->Dashboard_model->PendakiAccident();
        $data['PendakiNaik'] = $this->Dashboard_model->GetAllAccident();
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_accident', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    //Controller Halaman Accident
    public function Regis()
    {
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/body_regis');
        $this->load->view('dashboard/footer_dashboard');
    }
    public function searchaccident()
    {
        $search = $this->input->get('search');

        $data['PendakiNaik'] = $this->Dashboard_model->searchpendakiaccident($search);

        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/DashboardAccident', $data);
        $this->load->view('dashboard/footer_dashboard');
    }
    public function editModal()
    {
        $id = $this->input->post("id");
        $this->Dashboard_model->proses_edit_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('dashboard/DashboardAccident');
    }

    //Dahsboard Regis
    public function SaveRegis()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
        );

        $this->Dashboard_model->insertRegis($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan.');

        redirect('Dashboard/regis');
    }
}
