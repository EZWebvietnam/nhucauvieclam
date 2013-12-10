<?php
class Timvieclam extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    public function index(){
        parent::load_cate_job();
        parent::load_city();
        parent::load_user();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $this->load->view('home/timvieclam_layout',$this->data);
    }
}
?>