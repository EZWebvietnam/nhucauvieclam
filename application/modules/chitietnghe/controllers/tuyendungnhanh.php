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
        $data['tuyendung_detail']= $this->tuyendungnhanh_up->hot_post();
        if(empty($data['tuyendung_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['sanggia_detail']= $this->tuyendungnhanh_up->sanggia_post();
        if(empty($data['sanggia_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->tintuyendung_post();
        if(empty($data['tuyendungnhanh_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }        
        $data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
    public function timviecnhanh_post($id)
    {  
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
        $data['uvhot_detail']= $this->tuyendungnhanh_up->timviec_hot();
        if(empty($data['uvhot_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['tintimviec_detail']= $this->tuyendungnhanh_up->tintimviec_post();
        if(empty($data['tintimviec_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }        
        $data['main_content']='view_timviecnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
}
?>