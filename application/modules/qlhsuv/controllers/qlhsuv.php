<?php
class Qlhsuv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qlhsuv_model');
    }
    public function index($id = null){
        $data['qlhsuv_detail']= $this->qlhsuv_model->load_post($id);
        if(empty($data['qlhsuv_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qlhsuv';
        $this->load->view('home/qlhsuv_layout',$data);
    }
}
?>