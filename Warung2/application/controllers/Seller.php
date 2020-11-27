<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_seller');
    }
    public function index()
    {
        $id = $_SESSION['idSeller'];
        $data['barang'] = $this->model_barang->barangSeller($id)->result();
        $this->load->view('seller/listBarang', $data);
    }
    public function addProduct()
    {
        $this->load->helper('form');
        $this->load->view('seller/addproduct');
    }
    public function preview($id)
    {
        $this->barang = $this->model_barang->find($id);
        $this->load->view('seller/preview');
    }
    public function delete($id)
    {
        $this->load->model('model_barang');
        $this->model_barang->delete($id);
        redirect('Seller');
    }
    public function tambah_aksi()
    {
        $namaBarang  = $this->input->post('namaBarang');
        $harga       = $this->input->post('harga');
        $deskirpsi   = $this->input->post('deskripsi');
        $kategori    = $this->input->post('kategori');
        $idSeller    = $this->session->idSeller;
        $gambar      = $_FILES['gambar'];

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
        }

        $data = array(
            'namaBarang'    => $namaBarang,
            'harga'         => $harga,
            'deskripsi'     => $deskirpsi,
            'kategori'      => $kategori,
            'idSeller'      => $idSeller,
            'gambar'        => $gambar
        );
        $this->db->insert('barang', $data);
        redirect('Seller');
    }
    public function update($id)
    {
        $this->load->helper('form');
        $this->product = $this->model_barang->find($id);
        $this->load->view('seller/updateproduct');
    }
    public function update_aksi($id)
    {
        $namaBarang  = $this->input->post('namaBarang');
        $harga       = $this->input->post('harga');
        $deskirpsi   = $this->input->post('deskripsi');
        $kategori    = $this->input->post('kategori');
        $idSeller    = $this->session->idSeller;
        $gambar      = $_FILES['gambar'];

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['overwrite']            = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data("file_name");
            $data = array(
                'namaBarang'    => $namaBarang,
                'harga'         => $harga,
                'deskripsi'     => $deskirpsi,
                'kategori'      => $kategori,
                'idSeller'      => $idSeller,
                'gambar'        => $gambar
            );
            $this->db->where('idBarang', $id);
            $this->db->update('barang', $data);
            redirect('Seller');
        } else {
            $data = array(
                'namaBarang'    => $namaBarang,
                'harga'         => $harga,
                'deskripsi'     => $deskirpsi,
                'kategori'      => $kategori,
                'idSeller'      => $idSeller,
            );
            $this->db->where('idBarang', $id);
            $this->db->update('barang', $data);
            redirect('Seller');
        }
    }
}
