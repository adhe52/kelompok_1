<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    function DaftarOnline()
    {
        $query = $this->db->query("SELECT COUNT(*) as JumlahDaftar FROM booking");

        return $query->result_array();
    }

    function PendakiNaik()
    {
        $naik = $this->db->query("SELECT COUNT(*) as JumlahNaik FROM naik");
        return $naik->result_array();
    }
    function GetAllPendaftar()
    {
        $result = $this->db->get('booking');
        return $result->result_array();
    }

    public function saveFormData($jum, $kode_pendaki, $nama, $nbelakang, $ktp, $tlp, $tanggal, $jalurdaki, $schedule)
    {
        for ($i = 0; $i < $jum; $i++) {
            $data = array(
                'kode' => $kode_pendaki[$i],
                'nama' => $nama[$i],
                'belakang' => $nbelakang[$i],
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
    function getTotalPendakiNaik()
    {
        $naik = $this->db->query("SELECT COUNT(*) as JumlahNaik FROM naik");
        return $naik->row()->JumlahNaik;
    }

    public function searchPendakiNaik($search)
    {
        $this->db->like('kode', $search);
        $query = $this->db->get('naik');

        return $query->result_array();
    }
    public function saveTurunData($pendaki)
    {
        $data = array(
            'kode' => $pendaki['kode'],
            'nama' => $pendaki['nama'],
            'belakang' => $pendaki['belakang'],
            'nik' => $pendaki['nik'],
            'no_telp' => $pendaki['telepon'],
            'tanggal' => $pendaki['tanggal'],
            'jalur' => $pendaki['jalur'],
        );

        $this->db->insert('turun', $data);
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
}
