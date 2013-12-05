<?php
class Hsdadang extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tindadang_post');
    }
    public function index($id = null){
        $data['hsdangdang_detail']= $this->tindadang_post->view_hsdadang_detail($id);
        if(empty($data['hsdangdang_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_hsdadang';
        $this->load->view('home/hsdadang_layout',$data);
    }
}
?>

