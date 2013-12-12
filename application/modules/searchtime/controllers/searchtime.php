<?php
class Searchtime extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('searchtime_model');
        $this->load->library('tank_auth');
    }
    public function index($id)
    {
        parent::load_cate_job();
        parent::load_age();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_city();
        parent::load_exp();
        parent::load_luong();
        parent::load_sex();
        parent::load_time();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $config['base_url'] = base_url(). "/searchtime/searchtime/index/";
        
        $config['per_page'] = 10;
        $config['uri_segment'] = 5;
       
        $page = $this->input->get('page');
       
        if ($page == '') {
            $page = 1;
        }
        
        $page = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            return;
        }
        if(empty($id))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->data['search_detail']= $this->searchtime_model->searchadress_detail($id);
                       
        $this->data['main_content'] = 'view_searchtime';
        $this->load->view('home/searchtime_layout', $this->data);
    }
}
?>