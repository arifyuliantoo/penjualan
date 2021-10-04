<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['judul']="halaman barang";
        $data['barang']=$this->Barang_model->getAllBarang();
        $this->load->view('template/header',$data);
        $this->load->view('barang/index');
        $this->load->view('template/footer');
        
    }   
}
