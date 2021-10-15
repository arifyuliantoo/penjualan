<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');

       
    }

    public function index()
    {
        $data['judul']="halaman barang";
        $data['barang']=$this->Barang_model->getAllBarang();
        $this->load->view('template/header',$data);
        $this->load->view('barang/index');
        $this->load->view('template/footer');
        
    }
    public function tambah()
    {
        $data['judul']="Tambah Data Barang";
        $this->form_validation->set_rules('id_barang', 'Kode barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header',$data);
            $this->load->view('barang/tambah');
            $this->load->view('template/footer');   
        }
        else
        {
               $this->Barang_model->TambahDataBarang();
               $this->session->set_flashdata('flash','Berhasil di tambahkan');
               redirect('barang');
        }
          
}
}