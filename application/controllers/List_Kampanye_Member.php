<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_Kampanye_Member extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('list_kampanye_member_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	// Index login
	public function index()
	{
		$data = array('title'	=> 'Halaman Dashboard');
		$data['kampanye'] = $this->list_kampanye_member_data->get_data_kampanye()->result();
		$this->load->view('list_kampanye_member_view',$data);
	}
}
