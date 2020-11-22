<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{
		$this->load->view('pemesanan/shopping-cart');
	}
	public function pesan()
	{
		$this->load->view('pemesanan/payment-page');
	}

	public function add_cart($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'		=> $barang->idBarang,
			'qty'		=> 1,
			'price'		=> $barang->harga,
			'name'		=> $barang->namaBarang
		);

		$this->cart->insert($data);
		redirect('Welcome');
	}

	public function add_cart2($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'		=> $barang->idBarang,
			'qty'		=> 1,
			'price'		=> $barang->harga,
			'name'		=> $barang->namaBarang
		);

		$this->cart->insert($data);
		redirect('Cart');
	}

	public function delete_cart()
	{
		$this->cart->destroy();
		redirect('Welcome');
	}
}
