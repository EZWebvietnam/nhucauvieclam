<?php
class Jobpost extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('job_post');
    }
    public function index(){
        $data['job_post_list']=  $this->job_post->load_job_post();
        $data['main_content']= 'view_job_post';
        $this->load->view('home/hosouv_layout',$data);
    }
}
?>

