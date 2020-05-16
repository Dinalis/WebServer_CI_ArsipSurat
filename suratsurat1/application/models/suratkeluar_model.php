<?php
defined('BASEPATH') or exit('No direct script access allowed');

class suratkeluar_model extends CI_Model
{

    public function getAllsurat_keluar()
    {
        $this->db->select('*');
        $this->db->from('surat_keluar sm');
        $this->db->join('instansi i', 'i.nomor_instansi = sm.nomor_instansi');
        return $this->db->get()->result_array();
        // return $this->db->get('surat_masuk')->result_array();
    }
    public function tambahdatasrtkr()
    {
        $data = [
            "no_surat" => $this->input->post('no_surat', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "isi_ringkasan" => $this->input->post('isi_ringkasan', true),
            "nomor_instansi" => $this->input->post('nomor_instansi', true)
            
        ];

        $this->db->insert('surat_keluar', $data);
    }

    public function hapusdatasrtkr($no_surat)
    {
        $this->db->where('no_surat', $no_surat);
        $this->db->delete('surat_keluar');
    }

    public function getsuratByID($no_surat)
    {
        return $this->db->get_where('surat_keluar', ['no_surat' => $no_surat])->row();
    }

    public function ubahdatasrtkr()
    {

        $data = [
            "no_surat" => $this->input->post('no_surat', true),
            "tgl_surat" => $this->input->post('tgl_surat', true),
            "isi_ringkasan" => $this->input->post('isi_ringkasan', true),
            "nomor_instansi" => $this->input->post('nomor_instansi', true)
        ];
        $this->db->where('no_surat', $this->input->post('no_surat'));
        $this->db->update('surat_keluar', $data);
    }

    public function cariDataSurat()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('no_surat', $keyword);
        $this->db->or_like('tgl_surat', $keyword);
        return $this->db->get('surat_keluar')->result_array();
    }
}
