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
    
    public function dangky_uv()
    {
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
                $data_uv = array(
                'u_username' => $this->form_validation->set_value('email'),
                'u_password' => $this->form_validation->set_value('password'),
                'u_email' => $this->form_validation->set_value('email'),
                'u_birthday' => $this->form_validation->set_value('c_birthday'),
                'u_sex' => $this->input->post('c_sex'),
                'u_adress' => $this->form_validation->set_value('c_address'),
                'u_cityID' => $this->input->post('c_city'),
                'u_mobi' => $this->input->post('c_mobi'),
                'u_role' => 2,
                'u_fullname' => $this->form_validation->set_value('c_fullname'),
                'uredate'=>strtotime('now')
                );

            if (!is_null($data = $this->tank_auth->create_user_normal($data_uv))) 
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
    function _show_message($message)
    {
	$this->session->set_flashdata('message', $message);
	redirect('/');
    }
}
?>