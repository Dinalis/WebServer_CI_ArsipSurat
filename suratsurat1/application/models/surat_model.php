<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_model extends CI_Model {
        
	public function getAllsurat()
	{
        //https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        //$query untuk menampung isi dari tabel mahasiswa
        //$query=$this->db->get('mahasiswa');

        //https://www.codeigniter.com/user_guide/database/results.html
        //untuk menampilkan isi query
        //return $query->result_array();

        return $this->db->get('surat')->result_array();
    }
	public function tambahdatasrt(){
        $data = [
            "kode_surat" => $this->input->post('kode_surat', true),
            "no_agenda" => $this->input->post('no_agenda', true),
            "isi_ringkasan" => $this->input->post('isi_ringkasan', true),
            "asal_surat" => $this->input->post('asal_surat', true),
            "no_surat" => $this->input->post('no_surat', true),
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "tanggal_diterima" => $this->input->post('tanggal_diterima', true),
            "penerima" => $this->input->post('penerima', true),
            "kode_instansi" => $this->input->post('kode_surat', true)
            // "nama" => $this->input->post('nama',true),
            // "nim" => $this->input->post('nim',true),
            // "email" => $this->input->post('email',true),
            // "jurusan" => $this->input->post('jurusan',true)
        ];
    
    $this->db->insert('surat', $data);
    }

    public function hapusdatasrt($kode_surat){
        $this->db->where('kode_surat', $kode_surat);
        $this->db->delete('surat');
    }

    public function getsuratByID($kode_surat){
        return $this->db->get_where('surat', ['kode_surat'=>$kode_surat])->row_array();
    }

    public function ubahdatamhs(){
        $data=[
            "kode_surat" => $this->input->post('kode_surat', true),
            "no_agenda" => $this->input->post('no_agenda', true),
            "isi_ringkasan" => $this->input->post('isi_ringkasan', true),
            "asal_surat" => $this->input->post('asal_surat', true),
            "no_surat" => $this->input->post('no_surat', true),
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "tanggal_diterima" => $this->input->post('tanggal_diterima', true),
            "penerima" => $this->input->post('penerima', true),
            "kode_instansi" => $this->input->post('kode_surat', true)
        ];
        $this->db->where('kode_surat',$this->input->post ('kode_surat'));
        $this->db->update('surat', $data);
    }

    public function cariDataSurat(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_surat',$keyword);
        $this->db->or_like('no_agenda',$keyword);
        return $this->db->get('surat')->result_array();
    }
}
