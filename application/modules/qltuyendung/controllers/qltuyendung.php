<?php
class Qltuyendung extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltuyendung_model');
        $this->load->library('tank_auth');
    }
    public function index($id){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        $data['qltuyendung_detail']= $this->qltuyendung_model->load_post($id);
        if(empty($data['qltuyendung_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qltuyendung';
        $this->load->view('home/qltuyendung_layout',$data);
    }
}
?>