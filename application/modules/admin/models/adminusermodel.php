<?php 
class Adminusermodel extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_user()
    {
        $sql_get_user = "SELECT * FROM tbl_job_user INNER JOIN tbl_role ON tbl_job_user.u_role = tbl_role.id WHERE tbl_role.access_admin = 1";
        $query = $this->db->query($sql_get_user);
        return $query->result_array();
    }
    public function user_detail($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_id',$id);
        $query = $this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function update_user($id, array $data) {
        $id = intval($id);
        $this->db->where('u_id', $id);
        $this->db->update('tbl_job_user', $data);
    }
    public function delete($id = null)
    {
        $id = intval($id);
        $data = array('u_id',$id);
        $this->db->delete('tbl_job_user',$data);
    }
}
?>