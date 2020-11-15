<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('pemesanan/shopping-cart');
	}
	public function pesan()
	{
		$this->load->view('pemesanan/payment-page');
	}
}
