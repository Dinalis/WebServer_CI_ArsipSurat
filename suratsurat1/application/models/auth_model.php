<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model {
        
	public function login($username,$password)
	{
        // var_dump($username);
        // var_dump($password);
        // die();
		$this->db->select('username,password,level,status,id_user');
		$this->db->from('user');
		$this->db->where('username',$username); //maksudnya adalah selama inputan user yang disimpan pada parameter $user sama dengan username
		$this->db->where('password',$password);
		$query=$this->db->get();
		return $query;
	}

	public function input_data($data){
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() == 0) {
			return false;
		}
		return true;
	}

}



/*End of file ModelName.php*/
?> 