<?php
class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('jobpost');
    }
    public function index()
    {   
        parent::load_cate_job();
        $this->data['job_list']=$this->jobpost->job_post();
        $this->data['main_content']='home_/view_home';
        $this->load->view('home/home_layout',$this->data);
    }
    public function job_post(){
        parent::load_cate_job();
        $this->$data['user_list']=  $this->jobpost->user_post();
        $this->$data['main_content']= 'home_/view_home';
        $this->load->view('home/home_layout',$data);
    }
}
?>

