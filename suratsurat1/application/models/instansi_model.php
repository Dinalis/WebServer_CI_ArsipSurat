<?php
defined('BASEPATH') or exit('No direct script access allowed');

class instansi_model extends CI_Model
{

    public function getAllinstansi()
    {
       
        $query = $this->db->query("select * from instansi");
        return $query->result_array();
    }
// untuk api
    public function getInstansi($nomor_instansi=null){
        if ($nomor_instansi === null) {
            return $this->db->get('instansi')->result_array();
        } else {
            return $this->db->get_where('instansi', ['nomor_instansi' => $nomor_instansi])->result_array();
        }
    }

    public function tambahdatains()
    {
        $data = [
            "nomor_instansi" => $this->input->post('nomor_instansi', true),
            "nama_instansi" => $this->input->post('nama_instansi', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->insert('instansi', $data);
    }

// untuk api
    public function createInstansi($data){
        $this->db->insert('instansi', $data);
        return $this->db->affected_rows();
        
    }

    public function hapusdatains($nomor_instansi)
    {
        $this->db->where('nomor_instansi', $nomor_instansi);
        $this->db->delete('instansi');
    }
// unutk api
    public function deleteInstansi($nomor_instansi){
        $this->db->delete('instansi', ['nomor_instansi' => $nomor_instansi]);
        return $this->db->affected_rows();
        
    }

    public function getinstansiByID($nomor_instansi)
    {
        return $this->db->get_where('instansi', ['nomor_instansi' => $nomor_instansi])->row();
    }

    public function ubahdatains()
    {
        $data = [
            "nomor_instansi" => $this->input->post('nomor_instansi', true),
            "nama_instansi" => $this->input->post('nama_instansi', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('nomor_instansi', $this->input->post('nomor_instansi'));
        $this->db->update('instansi', $data);
    }

// untuk api
    public function updateInstansi($data, $nomor_instansi){
        $this->db->update('instansi', $data, ['nomor_instansi' => $nomor_instansi]);
        return $this->db->affected_rows();
        
    }

    public function cariDataInstansi()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nomor_instansi', $keyword);
        $this->db->or_like('nama_instansi', $keyword);
        return $this->db->get('instansi')->result_array();
    }
}
