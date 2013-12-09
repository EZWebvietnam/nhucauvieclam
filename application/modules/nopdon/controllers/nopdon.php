<?php
class Nopdon extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view('home/nopdon_layout');
    }
}
?>
