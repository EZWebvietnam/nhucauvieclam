<?php 
class Cronmailmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_id_nghe()
    {
        $sql="SELECT DISTINCT tbl_job_user.u_id,tbl_job_user.u_fullname,tbl_job_user.u_email,tbl_employers_post.m_id FROM tbl_job_user
        INNER JOIN tbl_employers_post ON tbl_employers_post.u_id=tbl_job_user.u_id WHERE tbl_job_user.is_mail = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_job($id)
    {
        $id = intval($id);
        $sql = "SELECT DISTINCT tbl_job_post.e_id,tbl_job_post.e_title FROM tbl_job_post INNER JOIN tbl_employers_post ON tbl_employers_post.m_id = tbl_job_post.m_id WHERE tbl_employers_post.m_id = ".$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}  
?>
