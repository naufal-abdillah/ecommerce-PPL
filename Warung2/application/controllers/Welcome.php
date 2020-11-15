<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('product/catalog-page',$data);
	}
	public function cart()
	{
		$this->load->view('product/product-page');
	}
}
