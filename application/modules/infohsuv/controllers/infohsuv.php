<?php
class Infohsuv extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('infohsuv_model');
    }
    public function view_employers_post($id = null)
    {
        $data['infohsuv_detail']= $this->infohsuv_model->load_job($id);
        $data['list_user']= $this->infohsuv_model->list_job();
        if(empty($data['infohsuv_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_infohsuv';
        $this->load->view('home/infohsuv_layout',$data);
    }
}