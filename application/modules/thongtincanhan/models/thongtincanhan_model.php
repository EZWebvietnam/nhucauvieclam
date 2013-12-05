<?php
class Thongtincanhan_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function info_detail(){
        $this->db->select();
        $query_array = $this->db->get('tbl_job_user');
        return $query_array->result_array();
    }
}
?>
