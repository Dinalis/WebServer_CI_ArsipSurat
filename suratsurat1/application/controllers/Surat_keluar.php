<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_keluar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('suratkeluar_model');
    }

    public function index()
    {
        
        $data['title'] = 'List Surat';
        $data['surat_keluar'] = $this->suratkeluar_model->getAllsurat_keluar();
        if ($this->input->post('keyword')) {
            # code...
            $data['surat_keluar'] = $this->suratkeluar_model->cariDataSurat();
        }
        $this->load->view('template/header', $data);
        $this->load->view('surat_keluar/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->model('suratkeluar_model');
        $data['title'] = 'Form Menambahkan Data Surat';
        $this->load->model('instansi_model');
        $data['instansi'] = $this->instansi_model->getAllinstansi();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_surat', 'No_surat', 'required|numeric');
        $this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|date');
        $this->form_validation->set_rules('isi_ringkasan', 'Isi_ringkasan', 'required');
        $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('surat_keluar/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->suratkeluar_model->tambahdatasrtkr();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('surat_keluar', 'refresh');
        }
    }

    public function hapus($no_surat)
    {
        $this->suratkeluar_model->hapusdatasrtkr($no_surat);
        $this->session->set_flashdata('flash-data', 'dihapus');

        redirect('surat_keluar', 'refresh');
    }

    public function detail($no_surat)
    {
        $data['title'] = 'Detail Surat';
        $data['surat_keluar'] = $this->suratkeluar_model->getsuratByID($no_surat);
        $this->load->view('template/header', $data);
        $this->load->view('surat_keluar/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($no_surat)
    {
        $data['title'] = 'Form Edit Data Surat';
        $this->load->model('instansi_model');
        $this->load->model('suratkeluar_model');

        $data['instansi'] = $this->instansi_model->getAllinstansi();
        $data['surat_keluar'] = $this->suratkeluar_model->getsuratByID($no_surat);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_surat', 'No_surat', 'required|numeric');
        $this->form_validation->set_rules('tgl_surat', 'Tgl_surat', 'required|date');
        $this->form_validation->set_rules('isi_ringkasan', 'Isi_ringkasan', 'required');
        $this->form_validation->set_rules('nomor_instansi', 'Nomor_instansi', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('surat_keluar/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->suratkeluar_model->ubahdatasrtkr();
            $this->session->set_flashdata('flash-data', 'diedit');

            redirect('surat_keluar', 'refresh');
        }
    }
}
