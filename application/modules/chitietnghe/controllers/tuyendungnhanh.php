<?php
class Tuyendungnhanh extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tuyendungnhanh_up');
        $this->load->library('tank_auth');
    }
    public function tuyendungnhanh_post($id)
    {   
        $data['list_bangcap']= $this->tuyendungnhanh_up->get_bangcap();
        $data['list_luong']= $this->tuyendungnhanh_up->get_luong();
        $data['list_city']= $this->tuyendungnhanh_up->get_city();
        $data['list_exp']= $this->tuyendungnhanh_up->get_exp();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;
        }
       
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }       
        $data['tuyendung_detail']= $this->tuyendungnhanh_up->hot_post($id);
        if(empty($data['tuyendung_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['sanggia_detail']= $this->tuyendungnhanh_up->sanggia_post();
        if(empty($data['sanggia_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->tintuyendung_post($id);
        if(empty($data['tuyendungnhanh_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }        
        $data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
    public function timviecnhanh_post($id)
    {  
        $data['list_bangcap']= $this->tuyendungnhanh_up->get_bangcap();
        $data['list_luong']= $this->tuyendungnhanh_up->get_luong();
        $data['list_city']= $this->tuyendungnhanh_up->get_city();
        $data['list_exp']= $this->tuyendungnhanh_up->get_exp();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $data['is_login'] = 1;
        } else {
            $data['is_login'] = 0;
        }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['uvsanggia_detail']= $this->tuyendungnhanh_up->timviec_sanggia();
        if(empty($data['uvsanggia_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['uvhot_detail']= $this->tuyendungnhanh_up->timviec_hot($id);
        if(empty($data['uvhot_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
           
        $data['main_content']='view_timviecnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
}
?>