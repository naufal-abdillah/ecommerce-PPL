<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
    }

    public function index()
    {
        $this->load->view('product/product-page');
    }
    public function details($id)
    {
        $this->barang = $this->model_barang->find($id);
        $this->load->view('product/product-page');
    }
}
