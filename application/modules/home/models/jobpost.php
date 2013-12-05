<?php
class Jobpost extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function job_post()
    {
        $this->db->select();
        $query_array = $this->db->get('tbl_job_post');
        return $query_array->result_array();
    }
    public function user_post(){
        $this->db->select();
        $query_array = $this->db->get('tbl_employers_post');
        return $query_array->result_array();
    }
}
?>