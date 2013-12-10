<?php
class Hosouv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('hsuv_post');
        $this->load->library('tank_auth');
    }
    public function hosouv_post($id = null)
    {
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        $data['user_post_list']=  $this->hsuv_post->load_user_post();
        $data['job_post_list']=  $this->hsuv_post->load_job_post();
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