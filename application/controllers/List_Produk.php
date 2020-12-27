<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Produk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('list_produk_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array('title'	=> 'Halaman Dashboard');
		$data['produk'] = $this->list_produk_data->show_data();
		$this->load->view('list_produk_view',$data);
	}

	function delete($kode_produk)
	{
		$where = array('kode_produk' => $kode_produk);
		$this->list_produk_data->hapus_data($where,'produk');

		$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Successfully deleted.</div>');
		redirect(base_url('list_produk'));
	}
}