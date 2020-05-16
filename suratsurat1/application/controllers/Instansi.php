<?php
defined('BASEPATH') or exit('No direct script access allowed');

class instansi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('instansi_model');
    }

    public function index()
    {
        //$this->load->database();
        //$this->load->model('mahasiswa_model');
        $data['title'] = 'List Instansi';
        $data['instansi'] = $this->instansi_model->getAllinstansi();
        if ($this->input->post('keyword')) {
            # code...
            $data['instansi'] = $this->instansi_model->cariDataInstansi();
        }
        $this->load->view('template/header', $data);
        $this->load->view('instansi/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->model('instansi_model');
        $data['title'] = 'Form Menambahkan Data Instansi';
        $data['instansi'] = $this->instansi_model->getAllinstansi();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required|numeric');
        $this->form_validation->set_rules('nama_instansi', 'Nama_instansi', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('instansi/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->instansi_model->tambahdatains();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('instansi', 'refresh');
        }
    }

    public function hapus($nomor_instansi)
    {
        $this->instansi_model->hapusdatains($nomor_instansi);
        $this->session->set_flashdata('flash-data', 'dihapus');

        redirect('instansi', 'refresh');
    }

    public function detail($nomor_instansi)
    {
        $data['title'] = 'Detail Instansi';
        $data['instansi'] = $this->instansi_model->getinstansiByID($nomor_instansi);
        $this->load->view('template/header', $data);
        $this->load->view('instansi/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($nomor_instansi)
    {
        $data['title'] = 'Form Edit Data Instansi';
        $this->load->model('instansi_model');
        $data['instansi'] = $this->instansi_model->getinstansiByID($nomor_instansi);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required|numeric');
        $this->form_validation->set_rules('nama_instansi', 'Nama_instansi', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('instansi/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->instansi_model->ubahdatains();
            $this->session->set_flashdata('flash-data', 'diedit');

            redirect('instansi', 'refresh');
        }
    }
}
