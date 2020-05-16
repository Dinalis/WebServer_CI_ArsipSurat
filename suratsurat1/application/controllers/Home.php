<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index($name='')
    {
        //echo "Selamat datang di halaman home";
        $data['title'] = 'Home';
        //$data adl aray dg isi arraynya adl nama dan diisi $name
        $this->load->view('template/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        $this->load->library('session');

        //validasi level
        if ($this->session->userdata('level')!="admin") {
                    redirect('auth','refresh');
                }
    }
}

/* End of file Controllername.php */