<?php
class Employerspost extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('employers_post');
    }
    public function index(){
        $data['user_post_list']=  $this->employers_post->load_user_post();
        $data['main_content']= 'employers_post';
        $this->load->view('home/hosouv_layout',$data);
    }
}
?>

