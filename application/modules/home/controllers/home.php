<?php
class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('jobpost');
        $this->load->library('tank_auth');
    }
    public function index()
    {   
        parent::load_cate_job();
        $active = true;
        $location ='home';
        if($this->tank_auth->is_logged_in($active,$location))
        {
            $this->data['is_login'] = 1;
        }
        else
        {
             $this->data['is_login'] = 0;
        }
        
        $this->data['job_list']=$this->jobpost->job_post();
        $this->data['user_list']=  $this->jobpost->user_post();
        $this->data['main_content']='home_/view_home';
        $this->load->view('home/home_layout',$this->data);
    }
    /*public function job_post(){
        parent::load_cate_job();
        $this->data['user_list']=  $this->jobpost->user_post();
        $this->data['main_content']= 'home_/view_home';
        $this->load->view('home/home_layout',$data);
    }*/
}
?>

