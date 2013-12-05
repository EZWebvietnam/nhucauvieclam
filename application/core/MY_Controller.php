<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct() {
        parent::__construct();
        
    }
    public function load_cate_job()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_cate_job']=$this->tuyendungnhanh_up->get_cate();
        
    }
    public function load_job()
    {
        $this->load->model('infotintd/info_tintd');
        $this->data['list_job']=$this->info_tintd->get_job();
        
    }
}