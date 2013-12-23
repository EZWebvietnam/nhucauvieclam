<?php
class Infontd extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('infontd_model');
        $this->load->library('tank_auth');
    }
    public function index()
    {   
        parent::load_city();
        parent::load_age();
        parent::load_capbac();
        parent::load_bangcap();
        parent::load_cate_job();
        parent::load_exp();
        parent::load_luong();
        parent::load_mem();
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $this->data['is_login'] = 1;
            
        } else {
            $this->data['is_login'] = 0;
            redirect('/');
        }
        if($this->session->userdata('u_role')==2)
        {
            redirect('/');
        }
        if($this->session->userdata('u_id'))
        {
                $u_id = $this->session->userdata('u_id');
            }
            else
            {
                $u_id = 0;
            }
            $this->data['info_list']=  $this->infontd_model->info_detail($u_id);
            $this->data['main_content']= 'view_infontd';
        if($this->input->post())
        {
            $companyname = $this->input->post('txt_ten_cty');
            $quymo = $this->input->post('c_quy_mo_cty');
            $mota = $this->input->post('txt_mo_ta_cty');
            $logo = $this->input->post('file_logo_cong_ty');
            $diachi = $this->input->post('txt_dia_chi_lien_he');
            $city = $this->input->post('select_tinh');
            $website = $this->input->post('txt_website');
            $hoten = $this->input->post('txt_ten_day_du');
            $adress = $this->input->post('txt_dia_chi_nguoi_lien_he');
            $mobi = $this->input->post('txt_dien_thoai_lien_he');
            $email = $this->input->post('txt_email_lien_he');
            $mst = $this->input->post('txt_ma_so_thue');
            
            $this->data = array('u_companyName'=>$companyname,
                'u_companyMem'=>$quymo,
                'u_companyIntro'=>$mota,
                'u_img'=>$logo,
                'u_companyadress'=>$diachi,
                'u_cityID'=>$city,
                'u_home'=>$website,
                'u_contacttName'=>$hoten,
                'u_contactAdress'=>$adress,
                'u_contactMobi'=>$mobi,
                'u_contactEmail'=>$email,
                'u_mst'=>$mst,
                );
            $id = $this->infontd_model->save_info($this->data);
            if($id > 0)
            {
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                 redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            $this->data['main_content']= 'view_infontd';
            $this->load->view('home/thongtinntd_layout',  $this->data);
        }     
    }
    public function show_tt_ntd($id = null)
    {
        $active = true;
        $location = 'home';
        if ($this->tank_auth->is_logged_in($active, $location)) {
            
            $data['is_login'] = 1;
            
        } else {
            $data['is_login'] = 0;

        }
        $data['main_content']= 'show_tt_ntd';
            $this->load->view('home/thongtinntd_layout',$data);
    }
}
?>
