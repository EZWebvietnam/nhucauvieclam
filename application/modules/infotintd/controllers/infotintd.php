<?php
class Infotintd extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('info_tintd');
        $this->load->library('tank_auth');
    }
    public function view_job_post($id)
    {   
        parent::load_cate_job();
        parent::load_age();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_city();
        parent::load_exp();
        parent::load_luong();
        parent::load_sex();
        parent::load_sex();
        parent::load_time();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $this->data['info_tintd_detail']= $this->info_tintd->load_job($id);
        if(empty($this->data['info_tintd_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_infotintd';
        $this->load->view('home/infotintd_layout',  $this->data);
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
