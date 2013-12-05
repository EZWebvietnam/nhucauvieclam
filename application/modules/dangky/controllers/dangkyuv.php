<?php
class Dangkyuv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('dangky');
    }
    public function index(){
        if($this->input->post())
        {
            // Mỗi input có một name, tùy theo name của input là gì, thì khi gán vào biến cái name của input cũng như vậy.
            //VI input title có name c_tieu_de_cv dùng để lưu tiêu đề, thì khi lấy ra là như dưới:
            $username = $this->input->post('c_username');
            // Sau khi lấy ra, gán một mảng, key của mảng là tên field trong database
            $password = $this->input->post('c_password');
            $confpassword = $this->input->post('c_conf_password');
            $fullname = $this->input->post('c_fullname');
            $birthday = $this->input->post('c_birthday');
            $sex = $this->input->post('c_sex');
            $adress = $this->input->post('c_adress');
            $city = $this->input->post('c_city');
            $mobi = $this->input->post('c_mobi');
            $data = array('u_username'=>$username,
                'u_password'=>$password,
                'u_confpassword'=>$confpassword,
                'u_fullname'=>$fullname,
                'u_birthday'=>$birthday,
                'u_sex'=>$sex,
                'u_adress'=>$adress,
                'u_cityID'=>$city,
                'u_mobi'=>$mobi
                    );
            
            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->dangky->save_dangky($data);
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
            $data['main_content']='view_dangkyuv';
            $this->load->view('home/dangky_layout',$data);
        }
    }
}
?>