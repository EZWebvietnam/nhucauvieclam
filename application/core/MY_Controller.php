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
        $list_city = $this->tuyendungnhanh_up->get_city();
        $array =array();
        foreach($list_city as $city)
        {
            $array[$city['n_id']] = $city['n_name'];
        }
        $this->data['list_city']=$array;
        
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
        $list_bang_cap = $this->tuyendungnhanh_up->get_bangcap();
        $array =array();
        foreach($list_bang_cap as $data)
        {
            $array[$data['bang_id']] = $data['bang_name'];
        }
        $this->data['list_bangcap']=$array;   
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
        $list_luong = $this->tuyendungnhanh_up->get_luong();
        $array =array();
        foreach($list_luong as $luong)
        {
            $array[$luong['luong_id']] = $luong['luong_name'];
        }
        $this->data['list_luong']=$array;   
    }
    public function load_exp()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_kn = $this->tuyendungnhanh_up->get_exp();
        $array =array();
        foreach($list_kn as $kn)
        {
            $array[$kn['exp_id']] = $kn['exp_name'];
        }
        $this->data['list_exp']=$array;   
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
    public function load_loaitn()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $this->data['list_loaitn']=$this->tuyendungnhanh_up->get_loaitn();   
    }
}