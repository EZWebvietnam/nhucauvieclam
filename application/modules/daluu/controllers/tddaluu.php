<?php
class Tddaluu extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daluu_post');
    }
    public function index($id = null){
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