<?php
class Qltimviec extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qltimviec_model');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index(){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;
            redirect('/');
        }
        if($this->session->userdata('u_role')==3)
        {
            redirect('/');
        }
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        $data['qltimviec_detail']= $this->qltimviec_model->load_post($u_id);
        if(empty($data['qltimviec_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_qltimviec';
        $this->load->view('home/qltimviec_layout',$data);
    }
}
?>