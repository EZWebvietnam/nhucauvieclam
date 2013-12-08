<?php
class Tuyendungnhanh extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        parent::load_cate_job();
        parent::load_city();
        $this->load->view('home/tuyendungnhanh_layout',$this->data);
    }
}
?>