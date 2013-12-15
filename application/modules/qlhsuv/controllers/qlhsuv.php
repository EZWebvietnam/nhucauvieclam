<?php
class Qlhsuv extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('qlhsuv_model');
        $this->load->library('tank_auth');
    }
    public function index(){
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
            redirect('/');
        }
        if($this->session->userdata('u_role')==2)
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
        $this->data['qlhsuv_detail']= $this->qlhsuv_model->load_post($u_id);
        
        $this->data['main_content']='view_qlhsuv';
        $this->load->view('home/qlhsuv_layout',$this->data);
    }
    public function ajax_hs()
    {
        if ($this->input->is_ajax_request())
        {
            parent::load_city();
            parent::load_capbac();
            $id_hs = $this->input->post('hs_id');
            $this->data['detail']= $this->qlhsuv_model->load_hs($id_hs);
            $this->load->view('view_ajax_detail',$this->data);
        }
    }
}
?>