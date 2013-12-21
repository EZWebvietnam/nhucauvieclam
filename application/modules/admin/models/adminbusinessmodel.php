<?php 
class Adminbusinessmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_business()
    {
        $this->db->select();
        $this->db->where('u_role',3);
        $query = $this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function business_detail($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_role',3);
        $this->db->where('u_id',$id);
        $query = $this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function update_business($id, array $data) {
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