<?php
class Infohsuv extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('infohsuv_model');
        $this->load->library('tank_auth');
    }
    public function view_employers_post($id = null)
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
        parent::load_ngoaingu();
        parent::load_trinhdonn();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $this->data['infohsuv_detail']= $this->infohsuv_model->load_job($id);
        $this->data['list_user']= $this->infohsuv_model->list_job();
        if(empty($this->data['infohsuv_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_infohsuv';
        $this->load->view('home/infohsuv_layout',  $this->data);
    }
}