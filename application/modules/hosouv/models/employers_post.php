<?php
class Employers_post extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function load_user_post(){
        $this->db->select();
        $query_array = $this->db->get('tbl_employers_post');
        return $query_array->result_array();
    }
}
?>