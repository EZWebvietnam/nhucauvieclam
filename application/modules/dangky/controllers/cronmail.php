<?php 
class Cronmail extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('cronmailmodel');
        $list_user = $this->cronmailmodel->get_id_nghe();
        $link = "";
        foreach($list_user as $user)
        {
            $list_job = $this->cronmailmodel->get_job($user['m_id']);
            foreach($list_job as $job)
            {
                $link .="<a href='http://dev.nhucauvieclam.net/tin-tuyen-dung/".$job['e_id']."-".mb_strtolower(url_title(removesign($job['e_title'])))."'>".$job['e_title']."</a><br>";
            }
            $this->sendmail($user['u_email'],$user['u_fullname'],$link);
            $link="";
        }
        sleep(2);
    }
    public function sendmail($to,$to_name,$link)
    {
        $this->load->library('mailer');
        $subject="Danh sách việc làm mới nhất";
        $content = "Xin chào bạn ".$to_name."<br>
        Nhu Cầu Việc Làm xin gửi bạn danh sách việc làm phù hợp với bạn nhất<br>
        ".$link;
        $this->mailer->sendmail($to,$to_name,$subject,$content);
    }
}
?>