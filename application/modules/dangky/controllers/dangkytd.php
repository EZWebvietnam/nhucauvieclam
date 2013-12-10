<?php
class Dangkytd extends CI_Controller
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
    public function dangky_td()
    {
        
        $this->form_validation->set_rules('email', 'Email',
            'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('c_company', 'Company',
            'trim|required|xss_clean');
        
        $this->form_validation->set_rules('c_address', 'Address',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('com_address', 'Address',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_phone', 'Phone',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('c_mail_contact', 'Mail',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('com_phone', 'Phone',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('nguoi_lien_he', 'Contact Person',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('com_address', 'Address',
            'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password',
            'trim|required|xss_clean|min_length[' . $this->config->item('password_min_length',
            'tank_auth') . ']|max_length[' . $this->config->item('password_max_length',
            'tank_auth') . ']|alpha_dash');
        $this->form_validation->set_rules('password2', 'Confirm Password',
            'trim|required|xss_clean|matches[password]');
        $data['errors'] = array();
         if ($this->form_validation->run() == true) {
                $data = array(
                    'u_username' => $this->form_validation->set_value('email'),
                    'u_password' => $this->form_validation->set_value('password'),
                    'u_email' => $this->form_validation->set_value('email'),
                    'u_companyName' => $this->form_validation->set_value('c_company'),
                    'u_companyadress' => $this->form_validation->set_value('c_address'),
                    'u_cityID' => $this->input->post('c_city'),
                    'u_companyMem' => $this->input->post('c_quy_mo'),
                    'u_companyphone' => $this->form_validation->set_value('c_phone'),
                    'u_fax' => $this->input->post('c_fax'),
                    'u_home' => $this->input->post('c_website'),
                    'u_companyIntro' => $this->input->post('c_mota'),
                    'u_contactEmail' => $this->form_validation->set_value('c_mail_contact'),
                    'u_contactName' => $this->form_validation->set_value('nguoi_lien_he'),
                    'u_adress' => $this->form_validation->set_value('com_address'),
                    'u_contactPhone' => $this->form_validation->set_value('com_phone'),
                    'u_contactMobi' => $this->input->post('c_contactmobi'),
                    'u_role'=>3,
                    'u_redate' => strtotime('now'));
                    $this->load->library('upload');
                    $image_upload_folder = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file';
                    if (!file_exists($image_upload_folder)) {
                        mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                    }
                    $this->upload_config = array(
                        'upload_path'   => $image_upload_folder,
                        'allowed_types' => 'png|jpg|jpeg|bmp|tiff',
                        'max_size'      => 2048,
                        'remove_space'  => TRUE,
                        'encrypt_name'  => TRUE,
                    );
                    $this->upload->initialize($this->upload_config);
                    if (!$this->upload->do_upload()) {
                        $data['error_file'] = $this->upload->display_errors();
                        $file='';
                    } else {
                        $file_info = $this->upload->data();
                    }
                    if(!empty($file_info))
                    {
                        $file = $file_info['file_name'];
                    }
                    $data['u_img']=$file;
                    if (!is_null($data = $this->tank_auth->create_user_normal($data))) 
                    {
                        $data['site_name'] = $this->config->item('website_name', 'tank_auth');
                        unset($data['u_password']); // Clear password (just for any case)
                        redirect('/');
                    } else {
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)
                        $data['errors'][$k] = $this->lang->line($v);
                    }
            }
        $data['main_content'] = 'view_dangkytd';
        $this->load->view('home/dangky_layout', $data);
    }
     function _show_message($message)
    {
	$this->session->set_flashdata('message', $message);
	redirect('/');
    }
}
?>