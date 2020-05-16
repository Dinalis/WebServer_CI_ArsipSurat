<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('auth_model');
		$this->load->library('form_validation');
		//$this->load->library('session');
	}

	public function index()
	{
		$data['title']='Login';
		$this->load->helper('form');
		$this->load->view('template/header_login',$data);
		$this->load->view('auth/login');
		$this->load->view('template/footer');
	}

	public function proses_login()
	{
		$username=htmlspecialchars($this->input->post('uname1'));
		$password=htmlspecialchars($this->input->post('pwd1'));

		$ceklogin=$this->auth_model->login($username,$password);

		if ($ceklogin->num_rows() > 0) {
			$row = $ceklogin->row();
			$params = array(
				'id_user' => $row->id_user,
				'username' => $row->username,
				'level' => $row->level,
				'status' => $row->status
			);
			if ($row->level == "admin") 
			{
				echo "<script>
                        alert('Selamat, Berhasil Login Admin');
                        window.location='" . site_url('surat_masuk/index') . "';
                    </script>";
                $this->session->set_userdata($params);
			}
			elseif (($row->level == "user") && ($row->status == "aktif")) 
			{
				echo "<script>
                        alert('Selamat, Berhasil Login User');
                        window.location='" . site_url('user/index') . "';
                    </script>";
                $this->session->set_userdata($params);
			}else{
				echo "<script>
                    alert('Silahkan Menghubungi Admin Untuk Mengaktifkan Akun');
                    window.location='" . site_url('auth') . "';
                </script>";
			}
		}
		else
		{
			$data['pesan']="username dan password anda salah";
			$data['title']='Login';
			$this->load->view('template/header_login',$data);
			$this->load->view('login/index');
			$this->load->view('template/footer');
			//redirect('login/index','refresh');
		}
		}

		public function register()
	{
		$data['title'] = "Register";
		$this->load->view('template/header_login',$data);
		$this->load->view('auth/register');
		$this->load->view('template/footer');
	}

	public function doRegister() {
		if ($this->input->post('submit')){
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('user', 'Username', 'required');
			$this->form_validation->set_rules('pass', 'Password', 'required');

			if ($this->form_validation->run()) {
				$data = array(
					'username'	=> $this->input->post('user'),
					'password'	=> $this->input->post('pass'),
					'level'	=> 'user',
					'status' => 'Tidak Aktif'
				);

				$register = $this->auth_model->input_data($data);
				if ($register) {
					redirect('auth');
				} else {
					redirect('auth/false');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}
}

/* End of file Controllername.php */ 
?>