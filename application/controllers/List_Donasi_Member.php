<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Donasi_Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('list_donasi_member_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	// Index login
	public function index()
		{
		$data = array('title'	=> 'Halaman Dashboard');
		$data['donasi'] = $this->list_donasi_member_data->get_data_donasi()->result();
		$this->load->view('list_donasi_member_view',$data);
	}
	public function ikut($email){
		$data = array(
			'nilai' => 1
		);

		$where = array(
			'email' => $email
		);

		$this->list_donasi_member_data->update_data($where,$data,'donasi');
		redirect(base_url('donasi'));
	}
}