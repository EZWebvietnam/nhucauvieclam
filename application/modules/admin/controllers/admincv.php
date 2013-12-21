<?php 
class Admincv extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admincvmodel');
        $this->load->library('session');
        $this->load->library('tank_auth');
		$this->lang->load('tank_auth');
        $this->load->library('session');
        if (!$this->tank_auth->is_logged_in()) {						// logged in, not activated
			redirect('/admin/login.xxx');

		}
    }
    public function index()
    {
        parent::load_cate_job();
        $this->data['data']=$this->admincvmodel->list_cv();
        $this->data['main_content']='cv/list';
        $this->load->view('admin/table_template',$this->data);
    }
    public function ban($id = null)
    {
       
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        
        $cv_detail = $this->admincvmodel->cv_detail($id);
        if(empty($cv_detail))
        {
            show_404();
            exit;
        }
        else
        {
            
           if($cv_detail[0]['j_status']==0)
           {
            $j_status = 1 - $cv_detail[0]['j_status'];
            $data = array('j_status'=>$j_status);
            $this->admincvmodel->update_cv($id,$data);
            $this->sendmail($cv_detail[0]['u_email'],$cv_detail[0]['u_fullname'],$cv_detail[0]['j_title']);
            redirect('admin/admincv');
           }
        }
    }
    public function delete($id = null)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        
        $cv_detail = $this->admincvmodel->cv_detail($id);
        if(empty($cv_detail))
        {
            show_404();
            exit;
        }
        else
        {
            
           
            $this->admincvmodel->delete($id);
            $this->sendmail_delete($cv_detail[0]['u_email'],$cv_detail[0]['u_fullname'],$cv_detail[0]['j_title']);
            redirect('admin/admincv');
           
        }
    }
    public function sendmail($to, $name,$cv)
    {
        $this->load->library('maillinux');
        $subject = "Hồ sơ đã được duyệt tại NHU CẦU VIỆC LÀM !";
        $body = "Xin chào " . $name . "!<br>
        Nhu Cầu Việc Làm xin thông báo:<br>
        Hồ sơ : $name <br>
        Của bạn đã được chúng tôi duyệt trên hệ thống Nhu Cầu Việc Làm<br>
        - Tổng đài hỗ trợ: 08.372.723.48-0906.703.499<br>
        Nhu Cầu Việc Làm luôn nỗ lực đem lợi ích thiết thực tới cộng đồng!<br>
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to, $subject, $body);
    }
    public function sendmail_delete($to, $name,$cv)
    {
        $this->load->library('maillinux');
        $subject = "Hồ sơ đã bị xóa tại NHU CẦU VIỆC LÀM !";
        $body = "Xin chào " . $name . "!<br>
        Nhu Cầu Việc Làm xin thông báo:<br>
        Hồ sơ : $name <br>
        Của bạn đã bị xóa trên hệ thống Nhu Cầu Việc Làm<br>
        - Tổng đài hỗ trợ: 08.372.723.48-0906.703.499<br>
        Nhu Cầu Việc Làm luôn nỗ lực đem lợi ích thiết thực tới cộng đồng!<br>
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to, $subject, $body);
    }
}
?>