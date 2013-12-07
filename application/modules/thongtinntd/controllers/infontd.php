<?php
class Infontd extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('infontd_model');
    }
    public function index($id = null)
    {   
        $data['info_list']=  $this->infontd_model->info_detail();
        $data['main_content']= 'view_infontd';
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
            
            $data = array('u_companyName'=>$companyname,
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
                );
            $id = $this->infontd_model->save_info($data);
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
            $data['main_content']= 'view_infontd';
            $this->load->view('home/thongtinntd_layout',$data);
        }     
    }
}
?>
