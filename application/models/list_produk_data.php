<?php defined('BASEPATH') or exit('No direct script access allowed');
class list_produk_data extends CI_Model
{
    public function show_data()
    {
        return $this->db->get('produk')->result_array();
	}

	function get_barang_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT * FROM produk WHERE kode_produk='$kode'");
		return $hsl;
	}

	function get_all_barang()
	{
		$hsl = $this->db->query("SELECT * FROM produk ORDER BY kode_produk DESC");
		return $hsl;
	}

	function get_all_barang_limit()
	{
		$hsl = $this->db->query("SELECT * FROM produk ORDER BY kode_produk DESC LIMIT 3");
		return $hsl;
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
