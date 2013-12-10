<?php
class Hsdadang extends CI_Controller
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

