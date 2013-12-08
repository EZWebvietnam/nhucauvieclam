<?php
class Dangkyuv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dangky');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }
    public function index()
    {
        if ($this->input->post()) {
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
            $data = array(
                'u_username' => $username,
                'u_password' => $password,
                'u_confpassword' => $confpassword,
                'u_fullname' => $fullname,
                'u_birthday' => $birthday,
                'u_sex' => $sex,
                'u_adress' => $adress,
                'u_cityID' => $city,
                'u_mobi' => $mobi);

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
            $data['main_content'] = 'view_dangkyuv';
            $this->load->view('home/dangky_layout', $data);
        }
    }
    public function dangky_uv()
    {
        $use_username = $this->config->item('use_username', 'tank_auth');
        $this->form_validation->set_rules('username', 'Username',
            'trim|required|xss_clean|min_length[' . $this->config->item('username_min_length',
            'tank_auth') . ']|max_length[' . $this->config->item('username_max_length',
            'tank_auth') . ']|alpha_dash');
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('c_fullname', 'Fullname',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_birthday', 'Birthday',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_address', 'Address',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password',
            'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length',
            'tank_auth') . ']|max_length[' . $this->config->item('password_max_length',
            'tank_auth') . ']|alpha_dash');
        $this->form_validation->set_rules('password2', 'Confirm Password',
            'trim|required|xss_clean|matches[password]');
        $data['errors'] = array();
        if ($this->form_validation->run() == true) {
           
            if (!is_null($data = $this->tank_auth->create_user_normal($use_username ? $this->
                form_validation->set_value('username') : '', $this->form_validation->set_value('email'),
                $this->form_validation->set_value('password'),$this->form_validation->set_value('c_birthday'),$this->input->post('c_sex'),$this->form_validation->set_value('c_address'),$this->input->post('c_city'),$this->input->post('c_mobi'),$this->form_validation->set_value('c_fullname')))) 
                {
                $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                unset($data['password']); // Clear password (just for any case)
                $this->_show_message($this->lang->line('auth_message_registration_completed_2') .
                    ' ' . anchor('/auth/login/', 'Login'));
                redirect('admin/user/listuser');
            } else {
                $errors = $this->tank_auth->get_error_message();
                foreach ($errors as $k => $v)
                    $data['errors'][$k] = $this->lang->line($v);
            }
            
        }
         $data['main_content'] = 'view_dangkyuv';
         $this->load->view('home/dangky_layout', $data);
    }
}
?>