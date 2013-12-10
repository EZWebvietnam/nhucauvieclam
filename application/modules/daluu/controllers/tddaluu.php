<?php
class Tddaluu extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daluu_post');
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
        $data['tddaluu_detail']= $this->daluu_post->load_post($id);
        if(empty($data['tddaluu_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_tddaluu';
        $this->load->view('home/daluu_layout',$data);
    }
}
?>