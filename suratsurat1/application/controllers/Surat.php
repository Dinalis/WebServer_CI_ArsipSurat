<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('surat_model');
        }

        public function index()
        {
                //$this->load->database();
                //$this->load->model('mahasiswa_model');
                $data['title'] = 'List Surat';
                $data['surat'] = $this->surat_model->getAllsurat();
                if ($this->input->post('keyword')) {
                        # code...
                        $data['surat'] = $this->surat_model->cariDataSurat();
                }
                $this->load->view('template/header', $data);
                $this->load->view('Surat/index', $data);
                $this->load->view('template/footer');
        }

        public function tambah()
        {
                $data['title'] = 'Form Menambahkan Data Surat';
                // $data['jurusan']=['Teknik Informatika','Teknik Kimia','Teknik Industri','Teknik Mesin'];
                // $this->form_validation->set_rules('fieldname','fieldlabel','trim|required|min_lenght[5]|max_length[12]');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('kode', 'Kode_surat', 'required|numeric');
                $this->form_validation->set_rules('tipe', 'Tipe_surat', 'required|numeric');
                $this->form_validation->set_rules('no_agenda', 'No_agenda', 'required|numeric');
                $this->form_validation->set_rules('isi', 'Isi_ringkasan', 'required');
                $this->form_validation->set_rules('asal', 'Asal_surat', 'required');
                $this->form_validation->set_rules('no', 'No_surat', 'required|numeric');
                $this->form_validation->set_rules('tgl', 'Tanggal_surat', 'required|date');
                $this->form_validation->set_rules('tgl_diterima', 'Tanggal_diterima', 'required|date');
                $this->form_validation->set_rules('penerima', 'Penerima', 'required');
                $this->form_validation->set_rules('kode', 'Kode_instansi', 'required|numeric');

                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('template/header', $data);
                        $this->load->view('Surat/tambah', $data);
                        $this->load->view('template/footer');
                } else {
                        $this->surat_model->tambahdatasrt();
                        $this->session->set_flashdata('flash-data', 'ditambahkan');

                        redirect('surat', 'refresh');
                }
        }

        public function hapus($kode_surat)
        {
                $this->surat_model->hapusdatasrt($kode_surat);
                $this->session->set_flashdata('flash-data', 'dihapus');

                redirect('surat', 'refresh');
        }

        public function detail($kode_surat)
        {
                $data['title'] = 'Detail Surat';
                $data['surat'] = $this->surat_model->getsuratByID($kode_surat);
                $this->load->view('template/header', $data);
                $this->load->view('surat/detail', $data);
                $this->load->view('template/footer');
        }

        public function edit($kode_surat)
        {
                $data['title'] = 'Form Edit Data Surat';
                $data['surat'] = $this->surat_model->getsuratByID($kode_surat);
                // $data['jurusan']=['Teknik Informatika','Teknik Kimia','Teknik Industri','Teknik Mesin'];
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('kode', 'Kode_surat', 'required|numeric');
                $this->form_validation->set_rules('tipe', 'Tipe_surat', 'required|numeric');
                $this->form_validation->set_rules('no_agenda', 'No_agenda', 'required|numeric');
                $this->form_validation->set_rules('isi', 'Isi_ringkasan', 'required');
                $this->form_validation->set_rules('asal', 'Asal_surat', 'required');
                $this->form_validation->set_rules('no', 'No_surat', 'required|numeric');
                $this->form_validation->set_rules('tgl', 'Tanggal_surat', 'required|date');
                $this->form_validation->set_rules('tgl_diterima', 'Tanggal_diterima', 'required|date');
                $this->form_validation->set_rules('penerima', 'Penerima', 'required');
                $this->form_validation->set_rules('kode', 'Kode_instansi', 'required|numeric');

                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('template/header', $data);
                        $this->load->view('Surat/edit', $data);
                        $this->load->view('template/footer');
                } else {
                        $this->surat_model->ubahdatasrt();
                        $this->session->set_flashdata('flash-data', 'diedit');

                        redirect('surat', 'refresh');
                }
        }
}
