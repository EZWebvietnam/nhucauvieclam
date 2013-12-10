<?php
class Daungtuyen extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daungtuyen_post');
        $this->load->library('tank_auth');
    }
    public function index($id){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        $data['ungtuyen_detail']= $this->daungtuyen_post->load_post($id);
        if(empty($data['ungtuyen_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_daungtuyen';
        $this->load->view('home/daungtuyen_layout',$data);
    }
}
?>