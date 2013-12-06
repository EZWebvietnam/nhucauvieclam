<?php
class Qltuyendung extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltuyendung_model');
    }
    public function index($id = null){
        $data['qltuyendung_detail']= $this->qltuyendung_model->load_post($id);
        if(empty($data['qltuyendung_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qltuyendung';
        $this->load->view('home/qltuyendung_layout',$data);
    }
}
?>