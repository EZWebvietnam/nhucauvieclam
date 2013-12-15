<?php
class Qlhsuv_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function qlhsuv_detail($id){
        $id = intval($id);
        $this->db->select();
        $this->db->where('j_id',$id);
        $query_array = $this->db->get('tbl_employers_post');
        return $query_array->result_array();
    }
    public function load_post($id)
    {
        $id = intval($id);
        $sql_join ="SELECT tbl_job_post.e_id,tbl_job_post.e_title"
                . " FROM tbl_job_post"
                . " WHERE tbl_job_post.u_id = ".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function load_hs($id)
    {
        $id = intval($id);
        $sql_join ="SELECT tbl_job_post.e_mem,tbl_job_post.e_capbacID,tbl_job_post.e_lastDate,tbl_job_post.e_request,tbl_job_post.e_cityID"
                . " FROM tbl_job_post"
                . " WHERE tbl_job_post.e_id = ".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
}
?>