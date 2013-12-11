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
    public function load_user()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['info_user']=$this->tuyendungnhanh_up->get_user();
        
    }
    public function load_city()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_city']=$this->tuyendungnhanh_up->get_city();
        
    }
    public function load_time()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_time']=$this->tuyendungnhanh_up->get_time();   
    }
    public function load_age()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_age']=$this->tuyendungnhanh_up->get_age();   
    }
    public function load_bangcap()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_bangcap']=$this->tuyendungnhanh_up->get_bangcap();   
    }
    public function load_capbac()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_capbac']=$this->tuyendungnhanh_up->get_capbac();   
    }
    public function load_hoso()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_hoso']=$this->tuyendungnhanh_up->get_hoso();   
    }
    public function load_luong()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_luong']=$this->tuyendungnhanh_up->get_luong();   
    }
    public function load_exp()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_exp']=$this->tuyendungnhanh_up->get_exp();   
    }
    public function load_sex()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_sex']=$this->tuyendungnhanh_up->get_sex();   
    }
    public function load_ngoaingu()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_ngoaingu']=$this->tuyendungnhanh_up->get_ngoaingu();   
    }
    public function load_trinhdonn()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_trinhdonn']=$this->tuyendungnhanh_up->get_trinhdonn();   
    }
}