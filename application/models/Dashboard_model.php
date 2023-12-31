<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    //pendaftarpage

    public function getpendaftar($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('booking');
        return $query->row_array();
    }

    public function deletependaftar($id)
    {
        try {
            $this->db->where('id', $id);
            $this->db->delete('booking');

            // Periksa apakah ada baris yang terpengaruh
            if ($this->db->affected_rows() > 0) {
                return true; // Menunjukkan penghapusan berhasil
            } else {
                return false; // Menunjukkan bahwa tidak ada baris yang terpengaruh (baris dengan ID yang diberikan tidak ditemukan)
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            return false; // Menunjukkan bahwa terjadi kesalahan selama penghapusan
        }
    }


    public function SearchPendaftar($search)
    {
        $this->db->like('kode', $search);
        $query = $this->db->get('booking');

        return $query->result_array();
    }



    function DaftarOnline()
    {
        $query = $this->db->query("SELECT COUNT(*) as JumlahDaftar FROM booking");

        return $query->result_array();
    }
    function GetAllPendaftar()
    {
        $result = $this->db->get('booking');
        return $result->result_array();
    }
    function PendakiNaik()
    {
        $naik = $this->db->query("SELECT COUNT(*) as JumlahNaik FROM naik");
        return $naik->result_array();
    }

    function PendakiTurun()
    {
        $turun = $this->db->query("SELECT COUNT(*) as JumlahTurun FROM turun");
        return $turun->result_array();
    }


    public function saveFormData($jum, $kode_pendaki, $nama, $ktp, $tlp, $tanggal, $jalurdaki, $schedule)
    {
        for ($i = 0; $i < $jum; $i++) {
            $data = array(
                'kode' => $kode_pendaki[$i],
                'nama' => $nama[$i],
                'nik' => $ktp[$i],
                'telepon' => $tlp[$i],
                'tanggal' => $tanggal[$i],
                'jalur' => $jalurdaki[$i],
                'schedule' => $schedule[$i]
            );

            $this->db->insert('naik', $data);
        }
    }
    function GetAllNaik()
    {
        $result = $this->db->get('naik');
        return $result->result_array();
    }

    function GetAllTurun()
    {
        $result = $this->db->get('turun');
        return $result->result_array();
    }
    function getTotalPendakiNaik()
    {
        $naik = $this->db->query("SELECT COUNT(*) as JumlahNaik FROM naik");
        return $naik->row()->JumlahNaik;
    }

    public function searchPendakiNaik($search)
    {
        $this->db->group_start();
        $this->db->like('kode', $search);
        $this->db->or_like('nama', $search);
        $this->db->group_end();

        $query = $this->db->get('naik');

        return $query->result_array();
    }
    public function searchpendakiturun($search)
    {
        $this->db->group_start();
        $this->db->like('kode', $search);
        $this->db->or_like('nama', $search);
        $this->db->group_end();

        $query = $this->db->get('turun');

        return $query->result_array();
    }

    public function saveTurunData($pendaki)
    {
        $data = array(
            'kode' => $pendaki['kode'],
            'nama' => $pendaki['nama'],
            'nik' => $pendaki['nik'],
            'no_telp' => $pendaki['telepon'],
            'tanggal' => $pendaki['tanggal'],
            'jalur' => $pendaki['jalur'],
            'schedule' => $pendaki['schedule']
        );

        $this->db->insert('turun', $data);
    }

    public function saveAccident($pendaki, $status)
    {
        $data = array(
            'kode' => $pendaki['kode'],
            'nama' => $pendaki['nama'],
            'nik' => $pendaki['nik'],
            'telp' => $pendaki['telepon'],
            'tanggal' => $pendaki['tanggal'],
            'jalur' => $pendaki['jalur'],
            'schedule' => $pendaki['schedule'],
            'status' => $status
        );

        $this->db->insert('accident', $data);

        return 'Data pendaki berhasil disimpan.';
    }
    public function insertAccident($data)
    {
        $this->db->insert('accident', $data);
    }

    // Save Regis

    public function insertRegis($data)
    {
        $this->db->insert('user', $data);
    }



    public function deleteNaikData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('naik');
    }

    public function getPendakiById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('naik');
        return $query->row_array();
    }

    function GetAllAccident()
    {
        $result = $this->db->get('accident');
        return $result->result_array();
    }
    function PendakiAccident()
    {
        $turun = $this->db->query("SELECT COUNT(*) as JumlahAccident FROM accident");
        return $turun->result_array();
    }
    public function searchpendakiaccident($search)
    {
        $this->db->group_start();
        $this->db->like('kode', $search);
        $this->db->or_like('nama', $search);
        $this->db->group_end();

        $query = $this->db->get('accident');

        return $query->result_array();
    }
    // Model: Dashboard_model.php

    public function ambil_id_accident($id)
    {
        return $this->db->get_where('accident', ['id' => $id])->row_array();
    }
    public function proses_edit_data($id)
    {
        $data = array(

            "kode" => $this->input->post('kode'),
            "nama" => $this->input->post('nama'),
            "nik" => $this->input->post('nik'),
            "telp" => $this->input->post('telp'),
            "status" => $this->input->post('status')
        );
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('accident');
        // var_dump($this->db->last_query());
        // die;

    }
}
