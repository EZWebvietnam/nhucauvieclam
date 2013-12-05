<?php
class Searchadress extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('searchadress_post');
    }
    public function searchadress_post($id = null)
    {
        $data['searchadress_detail']= $this->searchadress_post->view_searchadress_detail($id);
        if(empty($data['searchadress_detail']))
        {
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data['main_content']='view_searchadress';
        $this->load->view('home/searchadress_layout',$data);
    }
}
?>