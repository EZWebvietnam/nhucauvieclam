<?php 
class Admincvmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_cv()
    {
        $sql_list_cv = "SELECT * FROM tbl_employers_post INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id";
        $query = $this->db->query($sql_list_cv);
        return $query->result_array();
    }
    public function cv_detail($id)
    {
        $id = intval($id);
        $sql_list_cv = "SELECT * FROM tbl_employers_post INNER JOIN tbl_job_user ON tbl_job_user.u_id = tbl_employers_post.u_id WHERE tbl_employers_post.j_id = ".$id;
     
        $query = $this->db->query($sql_list_cv);
        return $query->result_array();
    }
    public function update_cv($id,array $data)
    {
        $id = intval($id);
        $this->db->where('j_id',$id);
        $this->db->update('tbl_employers_post',$data);
    }
    public function delete($id = null)
    {
        $id = intval($id);
        $this->db->delete('tbl_employers_post',array('j_id'=>$id));
    }
}

?>