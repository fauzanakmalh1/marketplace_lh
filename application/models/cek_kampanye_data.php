<?php defined('BASEPATH') or exit('No direct script access allowed');
class cek_kampanye_data extends CI_Model
{
    public function show_data()
    {
        return $this->db->get('kampanye')->result_array();
	}

	function get_kampanye_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT * FROM kampanye WHERE kode_kampanye='$kode'");
		return $hsl;
	}

	function get_all_kampanye()
	{
		$hsl = $this->db->query("SELECT * FROM kampanye ORDER BY kode_kampanye DESC");
		return $hsl;
	}

	function get_data_kampanye() {
		$kampanye = $this->db->query("select * from kampanye where  verifikasi = 0");
		return $kampanye;
	}

	public function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}