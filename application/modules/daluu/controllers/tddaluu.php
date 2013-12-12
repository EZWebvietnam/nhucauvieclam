<?php
class Tddaluu extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daluu_post');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        parent:: load_cate_job();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
            redirect('/');
        }
        
        if($this->this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        $this->data['tddaluu_detail']= $this->daluu_post->load_post($u_id);
        if(empty($this->data['tddaluu_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['main_content']='view_tddaluu';
        $this->load->view('home/daluu_layout',  $this->data);
    }
}
?>