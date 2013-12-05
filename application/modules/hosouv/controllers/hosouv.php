<?php
class Hosouv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('hsuv_post');
    }
    public function hosouv_post($id = null)
    {
        $data['hsuv_detail']= $this->hsuv_post->load_post($id);
        if(empty($data['hsuv_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_hsuv';
        $this->load->view('home/hosouv_layout',$data);
    }
}
?>