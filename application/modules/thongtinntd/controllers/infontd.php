<?php
class Infontd extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('infontd_model');
    }
    public function index(){
        $data['info_list']=  $this->infontd_model->info_detail();
        $data['main_content']= 'view_infontd';
        $this->load->view('home/thongtinntd_layout',$data);
    }
}
?>
