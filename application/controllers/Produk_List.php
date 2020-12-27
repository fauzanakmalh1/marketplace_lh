<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_List extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('list_produk_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function view() {
		$kode = $this->uri->segment(3);
		$x['data'] = $this->list_produk_data->get_barang_by_kode($kode);
		$this->load->view('templates/header_view_list');
		$this->load->view('produk_list_view',$x);
		$this->load->view('templates/footer_view_list');
	}
}
