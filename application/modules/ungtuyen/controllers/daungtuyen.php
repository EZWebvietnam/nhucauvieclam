<?php
class Daungtuyen extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daungtuyen_post');
    }
    public function index($id){
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