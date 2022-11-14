<?php
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data["judul"] = "halaman depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about()
    {
        $data["judul"] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
    public function galeri()
    {
        $data["judul"] = "Halaman galeri";
        $this->load->view('v_header', $data);
        $this->load->view('v_galeri', $data);
        $this->load->view('v_footer', $data);
    }



    public function lihat()
    {
        $this->load->model('ModelUser');
        $data = $this->ModelUser->getUserLimit();

        // $query = $this->db->get('mytable');

        foreach ($data->result() as $row)
        {
                echo $row->nama;
                
        }
    }

    public function lihatBuku()
    {
        $data['judul'] = "Lihat daftar buku";
        $this->load->model('ModelBuku');

        $data['buku']= $this->ModelBuku->getBuku()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('v_footer');

        echo "lihat buku";
    }
}
