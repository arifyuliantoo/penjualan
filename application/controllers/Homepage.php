<?php
class Homepage extends CI_Controller
{
    public function ___construct()
    {
        parent::___construct();
        
    }

    public function index()
    {
        $data['judul']="Toko Online";
        $this->load->view('template/header',$data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }   
}
?>