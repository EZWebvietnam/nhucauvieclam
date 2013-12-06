<?php
class Tddadang extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tindadang_post');
    }
    public function index($id = null){
        $data['tddangdang_detail']= $this->tindadang_post->view_tddadang_detail($id);
        if(empty($data['tddangdang_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_tddadang';
        $this->load->view('home/tddadang_layout',$data);
    }
}
?>