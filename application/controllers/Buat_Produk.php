<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_Produk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('akses') != "1") {
			redirect(base_url("login"));
		}
		else{
			$this->load->model('list_produk_data');
			$this->load->library('upload');
		}
	}

	public function index() {
		$this->load->view('buat_produk_view');
	}

	function simpan_post()
	{
		$config['upload_path'] = 'assets/images/produk'; 	//Path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 	//Type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; 					//Nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();

				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'assets/images/produk' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 710;
				$config['height'] = 420;
				$config['new_image'] = 'assets/images/produk' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$this->db->select("MAX(kode_produk)+1 AS id");
				$this->db->from("produk");
				$query = $this->db->get();

				$gambar = $gbr['file_name'];
				$judul = $this->input->post('judul_produk');
				$desk = $this->input->post('deskripsi');
				$pen = $this->input->post('penjual');
				$harga = $this->input->post('harga');

				$data = array(
					'email' => ($_SESSION['email']),
					'judul_produk' => $judul,
					'deskripsi' => $desk,
					'penjual' => $pen,
					'gambar' => $gambar,
					'harga' => $harga,
					'kode_produk' => $query->row()->id
				);
				$this->db->insert('produk', $data);
				redirect(base_url('Dashboard_admin'));
			} else {
				redirect(base_url('buat_produk'));
			}
		} else {
			redirect(base_url('buat_produk'));
		}
	}
}
