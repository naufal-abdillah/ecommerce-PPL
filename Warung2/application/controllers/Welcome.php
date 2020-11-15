<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('product/catalog-page');
	}
	public function cart()
	{
		$this->load->view('product/product-page');
	}
}
