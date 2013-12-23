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
        $list_cate = $this->tuyendungnhanh_up->get_cate();
        $array =array();
        foreach($list_cate as $data)
        {
            $array[$data['m_id']] = $data['m_name'];
        }
        $this->data['list_cate_job']=$array;
        
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
        $list_time = $this->tuyendungnhanh_up->get_time();
        $array =array();
        foreach($list_time as $data)
        {
            $array[$data['t_id']] = $data['t_name'];
        }
        $this->data['list_time']=$array;   
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
        $list_cb = $this->tuyendungnhanh_up->get_capbac(); 
        $array =array();
        foreach($list_cb as $cb)
        {
            $array[$cb['cb_id']] = $cb['cb_name'];
        }
        $this->data['list_capbac']=$array;   
    }
    public function load_age()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $array = array();
        $list_age = $this->tuyendungnhanh_up->get_age();
        foreach($list_age as $age)
        {
            $array[$age['age_id']]=$age['age_name'];
        }
        $this->data['list_age']=$array;   
    }
    public function load_hoso()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_hs = $this->tuyendungnhanh_up->get_hoso();
        $array =array();
        foreach($list_hs as $hs)
        {
            $array[$hs['hoso_id']] = $hs['hoso_name'];
        }
        $this->data['list_hs']=$array;
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
        $list_exp = $this->tuyendungnhanh_up->get_exp();
        $array =array();
        foreach($list_exp as $kn)
        {
            $array[$kn['exp_id']] = $kn['exp_name'];
        }
        $this->data['list_exp']=$array;   
    }
    public function load_sex()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $array = array();
        $list_sex = $this->tuyendungnhanh_up->get_sex();
        foreach($list_sex as $sex)
        {
            $array[$sex['sex_id']]=$sex['sex_name'];
        }
       
        $this->data['list_sex']=$array;   
    }
    public function load_ngoaingu()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_nn = $this->tuyendungnhanh_up->get_ngoaingu();
        $array = array();
        foreach($list_nn as $data)
        {
            $array[$data['nn_id']]=$data['nn_name'];
        }
        $this->data['list_nn']=$array;   
    }
    public function load_trinhdonn()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $array = array();
        $trinh_do = $this->tuyendungnhanh_up->get_trinhdonn();
        foreach($trinh_do as $data)
        {
            $array[$data['td_id']]=$data['td_name'];
        }
        $this->data['trinh_do']=$array;   
    }
    public function load_loaitn()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_tn = $this->tuyendungnhanh_up->get_loaitn();
        $array = array();
        foreach($list_tn as $data)
        {
            $array[$data['tn_id']]=$data['tn_name'];
        }
        $this->data['list_loaitn']=$array;   
    }
    public function load_mem()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_mem = $this->tuyendungnhanh_up->get_mem();
        $array = array();
        foreach($list_mem as $data)
        {
            $array[$data['id_mem']]=$data['info_mem'];
        }
        $this->data['list_info_mem']=$array;
    }
     public function load_city_1()
    {
        $this->load->model('chitietnghe/tuyendungnhanh_up');
        $list_city = $this->tuyendungnhanh_up->get_city();
        
        $this->data['list_city_1']=$list_city;
        
    }
}