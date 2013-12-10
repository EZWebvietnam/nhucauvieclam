<?php
class Nopdon extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->library('tank_auth');
    }
    public function index(){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        $this->load->view('home/nopdon_layout');
    }
}
?>
