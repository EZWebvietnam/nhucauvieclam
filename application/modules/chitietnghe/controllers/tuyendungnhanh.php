<?php
class Tuyendungnhanh extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tuyendungnhanh_up');
    }
    public function timviecnhanh_post($id)
    {   
        $data['timviecnhanh_detail']= $this->tuyendungnhanh_up->view_timviecnhanh_detail($id);
        if(empty($data['timviecnhanh_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_timviecnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
    public function tuyendungnhanh_post($id)
    {   
        $data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->view_tuyendungnhanh_detail($id);
        if(empty($data['tuyendungnhanh_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
}
?>