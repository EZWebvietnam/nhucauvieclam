<?php
class Tindadang_post extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function view_hsdadang_detail($id = null){
        $id = intval($id);
        $this->db->select();
        $this->db->where('j_id',$id);
        $query_array = $this->db->get('tbl_employers_post');
        return $query_array->result_array();
    }
    public function view_tddadang_detail($id = null){
        $id = intval($id);
        $this->db->select();
        $this->db->where('e_id',$id);
        $query_array = $this->db->get('tbl_job_post');
        return $query_array->result_array();
    }
}
?>
