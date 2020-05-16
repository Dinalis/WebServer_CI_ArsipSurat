<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi_model extends CI_Model {

	public function index()
	{
		return $this->db->get('registrasi');
	}

	public function input_data($data){
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() == 0) {
			return false;
		}
		return true;
	}

}

/* End of file registrasi_model.php */
/* Location: ./application/models/registrasi_model.php */?>