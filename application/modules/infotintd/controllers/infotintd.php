<?php
class Infotintd extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('info_tintd');
    }
    public function view_job_post($id = null)
    {
        $data['info_tintd_detail']= $this->info_tintd->load_job($id);
        if(empty($data['info_tintd_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_infotintd';
        $this->load->view('home/infotintd_layout',$data);
    }
//    public function view_user_post($id = null)
//    {
//        $data['info_td_detail']= $this->info_tintd->load_job($id);
//        if(empty($data['info_td_detail']))
//        {
//            redirect($_SERVER['HTTP_REFERER']);
//        }
//        $data['main_content']='view_infotd';
//        $this->load->view('home/infotintd_layout',$data);
//    }
}
?>
