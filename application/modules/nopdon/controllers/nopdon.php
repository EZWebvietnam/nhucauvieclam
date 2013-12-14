<?php
class Nopdon extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('nopdon_model');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function redirect_nopdon($id = null)
    {
        $active = true;
        $location = 'home';
        preg_match('/(\d+)/', $id, $b);
        if ($this->tank_auth->is_logged_in($active, $location)) {
         
         $data['tintd_detail']= $this->nopdon_model->load_job_($b[0]); 
        
         redirect('ung-tuyen/'.$data['tintd_detail'][0]['e_id'].'-'.mb_strtolower(url_title(removesign($data['tintd_detail'][0]['e_title']))));      
        } else {
            $this->session->set_userdata('session_link',$_SERVER['HTTP_REFERER']);
            redirect('dangnhap/index');
        }
    }
    public function index($id = null){
        preg_match('/(\d+)/', $id, $b);
        if($this->input->post())
        {
            
        }
        else
        {
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
            $data['tintd_detail']= $this->nopdon_model->load_job($b[0]);
            
            if(empty($data['tintd_detail']))
            {
                redirect($_SERVER['HTTP_REFERER']);
            }
            $data['main_content']='view_nopdon';
            $this->load->view('home/nopdon_layout', $data);
        }
    }
}
?>
