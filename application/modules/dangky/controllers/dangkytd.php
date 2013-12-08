<?php
class Dangkytd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dangky');
    }
    public function index($id = null)
    {
        if ($this->input->post()) {
            // Mỗi input có một name, tùy theo name của input là gì, thì khi gán vào biến cái name của input cũng như vậy.
            //VI input title có name c_tieu_de_cv dùng để lưu tiêu đề, thì khi lấy ra là như dưới:
            $username = $this->input->post('c_username');
            // Sau khi lấy ra, gán một mảng, key của mảng là tên field trong database

            $password = $this->input->post('c_password');
            $confpassword = $this->input->post('c_conf_password');
            $namecompany = $this->input->post('c_namecompany');
            $adresscompany = $this->input->post('c_adress_company');
            $city = $this->input->post('c_city');
            $quymo = $this->input->post('c_quy_mo');
            $phone = $this->input->post('c_phone');
            $fax = $this->input->post('c_fax');
            $website = $this->input->post('c_website');
            $mota = $this->input->post('c_mota');
            $email = $this->input->post('c_email');
            $contactname = $this->input->post('c_contactname');
            $contactadress = $this->input->post('c_contactadress');
            $contactphone = $this->input->post('c_contactphone');
            $contactmobi = $this->input->post('c_contactmobi');
            $lienhe = $this->input->post('c_lien_he');
            $data = array(
                'u_username' => $username,
                'u_password' => $password,
                'u_confpassword' => $confpassword,
                'u_companyName' => $namecompany,
                'u_companyadress' => $adresscompany,
                'u_cityID' => $city,
                'u_companyMem' => $quymo,
                'u_companyphone' => $phone,
                'u_fax' => $fax,
                'u_home' => $website,
                'u_companyIntro' => $mota,
                'u_contactEmail' => $email,
                'u_contactName' => $contactname,
                'u_adress' => $contactadress,
                'u_contactPhone' => $contactphone,
                'u_contactMobi' => $contactmobi,
                'u_lienhe' => $lienhe,
                'u_redate' => strtotime('now'));

            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->dangky->save_dangky($data);
            if ($id > 0) {
                //Insert thành công
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                // Insert không thành công
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $data['main_content'] = 'view_dangkytd';
            $this->load->view('home/dangky_layout', $data);
        }
    }
}
?>