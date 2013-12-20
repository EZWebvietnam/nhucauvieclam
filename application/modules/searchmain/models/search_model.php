<?php
class Search_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function search_info($sql_join){ 
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    function count_all($sql) {
        $query = $this->db->query($sql);
        $query = $query->result_array();
        $count = count($query);
        return $count;
    }
}
?>