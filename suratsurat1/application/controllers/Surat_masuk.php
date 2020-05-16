<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_masuk extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('suratmasuk_model');
        }

        public function index()
        {
               
                $data['title'] = 'List Surat';
                $data['surat_masuk'] = $this->suratmasuk_model->getAllsurat_masuk();
                if ($this->input->post('keyword')) {
                        # code...
                        $data['surat_masuk'] = $this->suratmasuk_model->cariDataSurat();
                }
                $this->load->view('template/header', $data);
                $this->load->view('surat_masuk/index', $data);
                $this->load->view('template/footer');
        }

        public function tambah()
        {
                $this->load->model('suratmasuk_model');
                $data['title'] = 'Form Menambahkan Data Surat';
                $this->load->model('instansi_model');
                $data['instansi'] = $this->instansi_model->getAllinstansi();

                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('no_agenda', 'No_agenda', 'required|numeric');
                $this->form_validation->set_rules('isi_ringkasan', 'Isi_ringkasan', 'required');
                $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
                $this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|date');
                $this->form_validation->set_rules('tgl_diterima', 'Tgl_diterima', 'required|date');
                $this->form_validation->set_rules('penerima', 'Penerima', 'required');
                $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required|numeric');
                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('template/header', $data);
                        $this->load->view('surat_masuk/tambah', $data);
                        $this->load->view('template/footer');
                } else {
                        $this->suratmasuk_model->tambahdatasrtmk();
                        $this->session->set_flashdata('flash-data', 'ditambahkan');

                        redirect('surat_masuk', 'refresh');
                }
        }

        public function hapus($kode_surat)
        {
                $this->suratmasuk_model->hapusdatasrtmk($kode_surat);
                $this->session->set_flashdata('flash-data', 'dihapus');

                redirect('surat_masuk', 'refresh');
        }

        public function detail($kode_surat)
        {
                $data['title'] = 'Detail Surat';
                $data['surat_masuk'] = $this->suratmasuk_model->getsuratByID($kode_surat);
                $levelLogin = $this->session->userdata('level');
                if($levelLogin == 'user'){
                        $this->load->view('template/header_user', $data);
                }else{
                        $this->load->view('template/header', $data);        
                } 
                $this->load->view('surat_masuk/detail', $data);
                $this->load->view('template/footer');
        }

        public function edit($kode_surat)
        {
                $data['title'] = 'Form Edit Data Surat';
                $this->load->model('instansi_model');
                $this->load->model('suratmasuk_model');

                $data['instansi'] = $this->instansi_model->getAllinstansi();
                $data['surat_masuk'] = $this->suratmasuk_model->getsuratByID($kode_surat);
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('no_agenda', 'No_agenda', 'required|numeric');
                $this->form_validation->set_rules('isi_ringkasan', 'Isi_ringkasan', 'required');
                $this->form_validation->set_rules('no_surat', 'No_surat', 'required');
                $this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|date');
                $this->form_validation->set_rules('tgl_diterima', 'Tgl_diterima', 'required|date');
                $this->form_validation->set_rules('penerima', 'Penerima', 'required');
                $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required');

                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('template/header', $data);
                        $this->load->view('surat_masuk/edit', $data);
                        $this->load->view('template/footer');
                } else {
                        $this->suratmasuk_model->ubahdatasrtmk();
                        $this->session->set_flashdata('flash-data', 'diedit');

                        redirect('surat_masuk', 'refresh');
                }
        }

        public function data_user()
    {  
		$this->load->model('user_model');
		$data['title'] = 'Data User';
		$data['user'] = $this->user_model->get_all_user();
		$this->load->view('template/header', $data);
		$this->load->view('surat_masuk/data_user', $data);
		$this->load->view('template/footer');
    }

    public function useredit($id_user){
            // check if the user exists before trying to edit it
        $this->load->model('user_model');
        $data['user'] = $this->user_model->get_user($id_user);
        
        if(isset($data['user']['id_user']))
        {
        $this->load->library('form_validation');

                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('level','Level','required');
                $this->form_validation->set_rules('status','Status','required');

                if($this->form_validation->run())     
        {   
                $params = array(
                        'username' => $this->input->post('username'),
                        'level' => $this->input->post('level'),
                        'status' => $this->input->post('status'),
                );

                $this->user_model->update_user($id_user,$params);            
                redirect('surat_masuk/data_user');
        }
        else
        {
        $this->load->view('template/header');
		$this->load->view('surat_masuk/data_user_edit', $data);
		$this->load->view('template/footer');
        }
        }
        else
        show_error('The user you are trying to edit does not exist.');
        
    }

    function userhapus($id_user)
    {
        $this->load->model('user_model');
        $user = $this->user_model->get_user($id_user);

        // check if the user exists before trying to delete it
        if(isset($user['id_user']))
        {
            $this->user_model->delete_user($id_user);
            redirect('surat_masuk/data_user');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
}
