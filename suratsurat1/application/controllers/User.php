<?php
defined('BASEPATH') OR EXIT('no direct script access allowed');

/**
 * 
 */
class user extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('auth_model');
		$this->load->model('suratmasuk_model');
		$this->load->model('cetak_model');
		
		if ($this->session->userdata('level')!="user") {
			redirect('auth','refresh');
		}

	}

	public function index()
	{
		$data=array(
		'title' => 'List Surat',
        'surat_masuk' => $this->suratmasuk_model->datatabels()
      );
		$this->load->view('template/header_datatabels_user', $data);
		$this->load->view('user/index',$data);
		$this->load->view('template/footer_datatabels_user');
	}

	public function laporan_pdf(){
		$this->load->library('pdf');

		$data['surat_masuk']= $this->cetak_model->view();
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('surat_masuk/laporan', $data);
	}
}