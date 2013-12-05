<?php
class Daungtuyen extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('daungtuyen_post');
    }
    public function index(){
        
    }
}
?>