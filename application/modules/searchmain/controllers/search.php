<?php
class Search extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->library('tank_auth');
    }
    public function index()
    {
        parent::load_age();
        parent::load_bangcap();
        parent::load_capbac();
        parent::load_cate_job();
        parent::load_city();
        parent::load_city_1();
        parent::load_exp();
        parent::load_luong();
        parent::load_sex();
        $this->load->library('pagination');
        $this->load->helper('url');
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            $this->data['is_login'] = 1;
        } else {
            $this->data['is_login'] = 0;
        }
        $sql_join ="SELECT tbl_job_user.u_id,tbl_job_user.u_username,tbl_job_user.u_companyName,tbl_job_user.u_companyAdress,tbl_job_user.u_companyTypeID,tbl_job_user.u_companyIntro,tbl_job_user.u_companyRun,tbl_job_user.u_companyMem,tbl_job_user.u_img,tbl_job_user.u_home,tbl_job_user.u_companyphone,tbl_job_user.u_companyMobi,tbl_job_user.u_fax,tbl_job_user.u_email,tbl_job_user.u_contactName,tbl_job_user.u_contactPosition,tbl_job_user.u_contactPhone,tbl_job_user.u_contactMobi,tbl_job_user.u_contactEmail,tbl_job_user.u_lienhe,tbl_job_user.u_countryID,tbl_job_user.u_cityID,tbl_job_user.u_urban,tbl_job_user.u_adress,tbl_job_user.u_redate,tbl_job_user.u_lasttime,tbl_job_user.u_now,tbl_job_user.u_sotin,tbl_job_user.u_visits,tbl_job_user.u_active,tbl_job_user.u_contactAdress,tbl_job_user.u_role,tbl_job_user.u_fullname,tbl_job_user.u_sex,tbl_job_user.u_birthday,tbl_job_user.u_age,tbl_job_user.u_marry,tbl_job_user.u_mobi,tbl_job_user.u_national"
                . ",tbl_job_post.e_id,tbl_job_post.u_id,tbl_job_post.e_sex,tbl_job_post.e_mem,tbl_job_post.e_visits,tbl_job_post.e_timetest,tbl_job_post.e_phucloi,tbl_job_post.e_dateActive,tbl_job_post.e_title,tbl_job_post.e_lastDate,tbl_job_post.e_dateActive,tbl_job_post.e_descript,tbl_job_post.e_luonga,tbl_job_post.e_luong,tbl_job_post.e_luongb,tbl_job_post.e_cityID,tbl_job_post.e_cityID1,tbl_job_post.e_cityID2,tbl_job_post.e_cityID3,tbl_job_post.e_timeID,tbl_job_post.e_trinhdo,tbl_job_post.m_id,tbl_job_post.e_kinhnghiem,tbl_job_post.e_skill,tbl_job_post.e_hoso,tbl_job_post.e_phucLoi"
                . " FROM tbl_job_user"
                . " INNER JOIN tbl_job_post ON tbl_job_post.u_id = tbl_job_user.u_id WHERE 1";
        $config['base_url'] = base_url('tim-kiem?jobfeild=' . $this->input->get('jobfeild') . '&jobplace=' . $this->input->get('jobplace') . '&joblevel=' . $this->input->get('joblevel') . '&jobexperience=' . $this->input->get('jobexperience') . '&jobtimework=' . $this->input->get('jobtimework'));
        
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
       
         
        if($this->input->get('jobfeild'))
        {
            if($this->input->get('jobfeild')!='')
            {
                $sql_join.=" AND tbl_job_post.m_id =".$this->input->get('jobfeild');
            }
        }
        if($this->input->get('jobplace'))
        {
            $sql_join.=" AND tbl_job_post.e_cityID = ".$this->input->get('jobplace')." OR tbl_job_post.e_cityID1 =".$this->input->get('jobplace')." OR tbl_job_post.e_cityID2=".$this->input->get('jobplace');
        }
        if($this->input->get('joblevel'))
        {
            $sql_join.=" AND tbl_job_post.e_trinhdo = ".$this->input->get('joblevel');
        }
        if($this->input->get('jobexperience'))
        {
            $sql_join.=" AND tbl_job_post.e_kinhnghiem = ".$this->input->get('jobexperience');
        }
        if($this->input->get('jobtimework'))
        {
            $sql_join.=" AND tbl_job_post.e_timeID = ".$this->input->get('jobtimework');
        }
        
        $config['total_rows'] = $this->search_model->count_all($sql_join);
        $this->pagination->initialize($config);
        $sql_join.=" LIMIT $page,".$config['per_page'];
        
        $array_new = $this->search_model->search_info($sql_join);
        $this->data['job_list'] = $array_new;       
        $this->data['main_content'] = 'view_search';
        $this->load->view('home/formsearch_layout', $this->data);
    }
}
?>