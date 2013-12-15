<?php
class Nopdon extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('nopdon_model');
        $this->load->library('tank_auth');
        $this->load->library('session');
    }
    public function redirect_nopdon($id = null)
    {
        $active = true;
        $location = 'home';
        preg_match('/(\d+)/', $id, $b);
        if ($this->tank_auth->is_logged_in($active, $location)) {
         
         $data['tintd_detail']= $this->nopdon_model->load_job_($b[0]); 
        
         redirect('ung-tuyen/'.$data['tintd_detail'][0]['e_id'].'-'.mb_strtolower(url_title(removesign($data['tintd_detail'][0]['e_title']))));      
        } else {
            $this->session->set_userdata('session_link',$_SERVER['HTTP_REFERER']);
            redirect('dangnhap/index');
        }
    }
    public function index($id = null){
        preg_match('/(\d+)/', $id, $b);
        if($this->input->post())
        {
            $title = $this->input->post('txt_tieu_de');
            $content = $this->input->post('txta_noi_dung');
            $id_cv = $this->input->post('c_cv');
            $id_user = $this->session->userdata('u_id');
            $id_job = $this->input->post('checkbox_ut')[0];
            $title_job = $this->input->post('title_job');
            $email_com = $this->input->post('email_com');
            $data_cv = array(
            'id_job'=>$id_job,
            'id_user'=>$id_user,
            'title'=>$title,
            'id_cv'=>$id_cv,
            'content'=>$content,
            'create_date'=>strtotime('now')
            );
            $this->nopdon_model->insert_nd($data_cv);
            $this->sendmail($email_com,$title_job);
            $this->sendmail_user($this->session->userdata('u_username'),$title_job,$this->session->userdata('u_fullname'));
            redirect('/');
        }
        else
        {
            $active = true;
            $location = 'home';
            if ($this->tank_auth->is_logged_in($active, $location)) {
                $data['is_login'] = 1;
                
            } else {
                $data['is_login'] = 0;
                redirect($_SERVER['HTTP_REFERER']);
            }
            $id_user =$this->session->userdata('u_id');
            $data['cv_detail']= $this->nopdon_model->load_cv($id_user);
            $data['tintd_detail']= $this->nopdon_model->load_job($b[0]);
            
            if(empty($data['tintd_detail']))
            {
                redirect($_SERVER['HTTP_REFERER']);
            }
            $data['main_content']='view_nopdon';
            $this->load->view('home/nopdon_layout', $data);
        }
    }
    public function sendmail($to,$name)
    {
        $this->load->library('maillinux');
        $subject = "Ứng tuyển công việc - $name";
        $content = "Xin chào quý doanh nghiệp ! <br>
        Hiện tại đã có hồ sơ ứng tuyển tại công việc $name bạn đăng tại Nhu Cầu Việc Làm.<br>
        Vui lòng truy cập đường link http://nhucauvieclam.net/quanly-hoso-ungvien để coi ứng viên !
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from, $to, $subject, $content);
    }
    public function sendmail_user($to,$name,$fullname)
    {
        $this->load->library('maillinux');
        $subject = "Ứng tuyển công việc - $name";
        $content = "Xin chào $fullname ! <br>
        Bạn đã ứng tuyển vào hồ sơ $name trên hệ thống Nhu Cầu Việc Làm !";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from, $to, $subject, $content);
    }
}
?>
