<?php
class Thongtincanhan extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('thongtincanhan_model');
    }
    public function index($id = null)
    {   
        $data['info_list']=  $this->thongtincanhan_model->info_detail();
        $data['main_content']= 'view_thongtincanhan';
        if($this->input->post())
        {
            $hoten = $this->input->post('txt_ho_ten');
            $ngaysinh = $this->input->post('ngay_sinh');
            $gioitinh = $this->input->post('gioi_tinh');
            $marry = $this->input->post('tinh_trang_hon_nhan');
            $diachi = $this->input->post('txt_dia_chi');
            $city = $this->input->post('select_tinh');
            $mobi = $this->input->post('txt_dien_thoai_lien_he');
            $email = $this->input->post('txt_email_lien_he');
            
            $data = array('u_fullname'=>$hoten,
                'u_birthday'=>$ngaysinh,
                'u_sex'=>$gioitinh,
                'u_marry'=>$marry,
                'u_adress'=>$diachi,
                'u_cityID'=>$city,
                'u_mobi'=>$mobi,
                'u_email'=>$email
                );
            $id = $this->thongtincanhan_model->save_info($data);
            if($id > 0)
            {
                //Insert thành công
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                // Insert không thành công
                 redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            $data['main_content']='view_thongtincanhan';
            $this->load->view('home/thongtincanhan_layout',$data);
        }     
    }
}
?>
