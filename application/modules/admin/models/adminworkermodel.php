<?php 
class Adminworkermodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_worker()
    {
        $this->db->select();
        $this->db->where('u_role',2);
        $query = $this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function worker_detail($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_role',2);
        $this->db->where('u_id',$id);
        $query = $this->db->get('tbl_job_user');
        return $query->result_array();
    }
    public function update_worker($id, array $data) {
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
    public function delete_cv($id = null)
    {
        $id = intval($id);
        $data = array('u_id',$id);
        $this->db->delete('tbl_employers_post',$data);
    }
    public function delete_nop_don($id = null)
    {
        $id = intval($id);
        $data = array('id_user',$id);
        $this->db->delete('tbl_nop_don',$data);
    }
    public function delete_save_tin($id = null)
    {
        $id = intval($id);
        $data = array('id_user',$id);
        $this->db->delete('tbl_save_tin',$data);
    }
}
?>