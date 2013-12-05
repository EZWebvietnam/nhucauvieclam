<?php
class Tuyendungnhanh extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('tuyendungnhanh_up');
    }
    public function tuyendungnhanh_post($id)
    {   
        $data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->load_job_post($id);
        if(empty($data['tuyendungnhanh_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_tuyendungnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
}
?>