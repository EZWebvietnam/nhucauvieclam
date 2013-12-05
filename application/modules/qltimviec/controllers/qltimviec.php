<?php
class Qltimviec extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltimviec_model');
    }
    public function index($id = null){
        $data['qltimviec_detail']= $this->qltimviec_model->load_post($id);
        if(empty($data['qltimviec_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qltimviec';
        $this->load->view('home/qltimviec_layout',$data);
    }
}
?>