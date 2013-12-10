<?php
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->library('tank_auth');
    }
    public function index()
    {
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $this->data['job_list'] = $this->search_model->search_info();       
        $this->data['main_content'] = 'view_search';
        $this->load->view('home/formsearch_layout', $this->data);
    }
}
?>