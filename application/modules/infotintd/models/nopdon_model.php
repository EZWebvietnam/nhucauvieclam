<?php
class Nopdon_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function load_job($id = null)
    {
        $id = intval($id);
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_home,tbl_job_user.u_companyName,tbl_job_user.u_companyMem,tbl_job_user.u_companyAdress,tbl_job_user.u_companyPhone,tbl_job_user.u_companyMobi,tbl_job_user.u_lienhe,tbl_job_user.u_lasttime,tbl_job_user.u_companyphone,tbl_job_user.u_email,tbl_job_user.u_fax,tbl_job_user.u_contactMobi,tbl_job_user.u_contactName,tbl_job_user.u_contactEmail,tbl_job_user.u_contactAdress,tbl_job_user.u_companyIntro,tbl_job_user.u_contactPhone,tbl_job_user.u_now,tbl_job_user.u_adress"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.m_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.e_nghe,tbl_job_post.e_nghe1,tbl_job_post.e_nghe2,tbl_job_post.e_nghe3,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"
                . " FROM tbl_job_post"
                . " LEFT JOIN tbl_job_user ON tbl_job_user.u_id = tbl_job_post.u_id WHERE tbl_job_post.e_id = ".$id;
        $query = $this->db->query($sql_join);
        return $query->result_array();
    }
    public function load_job_($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('e_id',$id);
        $query = $this->db->get('tbl_job_post');
        return $query->result_array();
    }
    public function load_cv($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('u_id',$id);
        $this->db->where('j_status',1);
        $query =  $this->db->get('tbl_employers_post');        
        return $query->result_array();
    }
    public function insert_nd(array $data)
    {
        $this->db->insert('tbl_nop_don',$data);
    }
    public function check_save($id_cv = null,$id_user = null)
    {
        $this->db->select();
        $this->db->where('id_user',$id_user);
        $this->db->where('id_job',$id_cv);
        $query = $this->db->get('tbl_save_tin');
        return $query->result_array();
    }
    public function save_cv(array $data)
    {
        $this->db->insert('tbl_save_tin',$data);
    }
}
?>