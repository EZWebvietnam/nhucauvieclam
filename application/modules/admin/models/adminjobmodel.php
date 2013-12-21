<?php 
class Adminjobmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_job()
    {
        $sql_job = "SELECT * FROM tbl_job_post INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id";
        $query = $this->db->query($sql_job);
        return $query->result_array();
    }
    public function load_job_detail($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('e_id',$id);
        $query = $this->db->get('tbl_job_post');
        return $query->result_array();
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('tbl_nop_don',array('id_job'=>$id));
        $this->db->delete('tbl_save_tin',array('id_job'=>$id));
        $this->db->delete('tbl_job_post',array('e_id'=>$id));
    }
}
?>