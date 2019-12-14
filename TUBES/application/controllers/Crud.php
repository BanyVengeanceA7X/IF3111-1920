<?php 

class Crud extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('m_data');
             $this->load->helper('url');
 }

 function index(){
    $this->load->view('desain');
    $this->load->view('mainpage');
}

 function aksi() {
    date_default_timezone_set("Asia/Jakarta");
    $isi_laporan = $this->input->post('isi_laporan');
    $kategori = $this->input->post('kategori');
    $tgl_laporan = date("Y-m-d H:i:s");

    $data = array(
        'isi_laporan' => $isi_laporan,
        'kategori' => $kategori,
        'tgl_laporan' => $tgl_laporan
        );
        
    $this->m_data->input_data($data,'laporan');
    redirect('');
 }
}