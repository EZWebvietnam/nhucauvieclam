<?php
class Thongtincanhan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('thongtincanhan_model');
    }
    public function index(){
        $data['info_list']=  $this->thongtincanhan_model->info_detail();
        $data['main_content']= 'view_thongtincanhan';
        $this->load->view('home/thongtincanhan_layout',$data);
    }
}
?>
