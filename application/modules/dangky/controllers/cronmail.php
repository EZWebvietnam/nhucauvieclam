<?php 
class Cronmail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->model('cronmailmodel');
        $list_user = $this->cronmailmodel->get_id_nghe();
        $count = count($list_user);
        $link="";
        foreach($list_user as $user)
        {
            
            $list_job = $this->cronmailmodel->get_job($user['m_id']);
            if($this->session->userdata('mail_user')==$user['u_email'])
            {
                foreach($list_job as $job)
                {
                    $link .="<a href='http://dev.nhucauvieclam.net/tin-tuyen-dung/".$job['e_id']."-".mb_strtolower(url_title(removesign($job['e_title'])))."'>".$job['e_title']."</a><br>";
                }
            }
            if($this->session->userdata('mail_user'))
            {
                if($this->session->userdata('mail_user')!=$user['u_email'])
                {
                    $this->sendmail($this->session->userdata('mail_user'),$link);
                    $link="";
                    foreach($list_job as $job)
                    {
                        $link .="<a href='http://dev.nhucauvieclam.net/tin-tuyen-dung/".$job['e_id']."-".mb_strtolower(url_title(removesign($job['e_title'])))."'>".$job['e_title']."</a><br>";
                    }
                    $this->sendmail($user['u_email'],$link);
                    
                }
                
            }
            else
            {
                $this->session->set_userdata('mail_user',$user['u_email']);
            }
 
        }
    }
    public function sendmail($to,$link)
    {
        $this->load->library('maillinux');
        $subject="Danh sách việc làm mới nhất";
        $content = "Xin chào bạn 
        Nhu Cầu Việc Làm xin gửi bạn danh sách việc làm phù hợp với bạn nhất<br>
        ".$link;
        $from = "thangdq@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to,$subject,$content);
    }
}
?>