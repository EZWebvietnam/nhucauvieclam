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
        $this->load->library('pagination1');
        $this->load->helper('url');
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
        $nghe_detail = $this->tuyendungnhanh_up->get_nghanh_nghe_detail($id);
        $config['base_url'] = base_url('nganh-nghe/'.$nghe_detail[0]['m_id'].'-'.mb_strtolower(url_title(removesign($nghe_detail[0]['m_name']))));
        $config['total_rows'] =count($this->tuyendungnhanh_up->tintuyendung_post_count($id));
        $config['per_page'] = 10;
        $config['uri_segment'] = 5;
       
        $page  = $this->uri->segment(4);
        $page = preg_replace('/[^0-9]/','',$page);
        
        if ($page == '') {
            $page = 1;
        }
        
        $page = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            return;
        }
        $this->pagination1->initialize($config);
        $data['tuyendung_detail']= $this->tuyendungnhanh_up->hot_post($id);
        
        $data['sanggia_detail']= $this->tuyendungnhanh_up->sanggia_post();
        
        $data['tuyendungnhanh_detail']= $this->tuyendungnhanh_up->tintuyendung_post($id,$page,$config['per_page']);
              
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
        
        $data['uvhot_detail']= $this->tuyendungnhanh_up->timviec_hot($id);
        
        $data['main_content']='view_timviecnhanh';
        $this->load->view('home/chitietnghe_layout',$data);
    }
}
?>