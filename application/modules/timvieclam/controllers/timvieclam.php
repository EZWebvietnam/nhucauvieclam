<?php
class Timvieclam extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        parent::load_cate_job();
        parent::load_city();
        $this->load->view('home/timvieclam_layout',$this->data);
    }
}
?>