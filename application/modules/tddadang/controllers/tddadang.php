<?php
class Tddadang extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tindadang_post');
        $this->load->library('tank_auth');
    }
    public function index($id = null){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
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