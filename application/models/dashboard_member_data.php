<?php defined('BASEPATH') or exit('No direct script access allowed');
class dashboard_member_data extends CI_Model
{
    public function show_data()
    {
        return $this->db->get('dashboard_member');
    }
}
