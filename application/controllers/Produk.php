<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('list_produk_data');
	}

	public function index() {
		$x['data'] = $this->list_produk_data->get_all_barang();
		$this->load->view('templates/header_view');
		$this->load->view('produk_view',$x);
		$this->load->view('templates/footer_view');
	}

}
