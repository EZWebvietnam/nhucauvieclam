<?php
class Job_post extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function load_job_post(){
        $this->db->select();
        $query_array = $this->db->get('tbl_job_post');
        return $query_array->result_array();
    }
}
?>

