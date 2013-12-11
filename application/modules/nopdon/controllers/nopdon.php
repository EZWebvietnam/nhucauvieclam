<?php
class Nopdon extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('nopdon_model');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function index($id = null){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;
            redirect($_SERVER['HTTP_REFERER']);
        }
        $id_user =$this->session->userdata('u_id');
        $data['cv_detail']= $this->nopdon_model->load_cv($id_user);
        $data['tintd_detail']= $this->nopdon_model->load_job($id);
        if(empty($data['tintd_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_nopdon';
        $this->load->view('home/nopdon_layout', $data);
    }
}
?>
