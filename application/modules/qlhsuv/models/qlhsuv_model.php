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
    public function get_hs_detail($id)
    {
        $id = intval($id);
        $sql = "SELECT tbl_job_user.u_sex,tbl_employers_post.j_id, tbl_employers_post.j_title,tbl_employers_post.j_luongmm,tbl_employers_post.j_kinhnghiem,tbl_employers_post.j_title,tbl_employers_post.j_trinhdo,tbl_employers_post.j_status
        FROM tbl_nop_don
        INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_nop_don.id_user
        INNER JOIN tbl_employers_post ON tbl_employers_post.j_id = tbl_nop_don.id_cv
        WHERE tbl_nop_don.id_job=".$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>