<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class cetak_model extends CI_Model{

    public function view(){

        $query=$this->db->get('surat_masuk');
        return $query->result();
    }
}



?>