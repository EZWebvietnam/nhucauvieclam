<?php 
class Adminworker extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminworkermodel');
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
        $this->data['data']=$this->adminworkermodel->list_worker();
        $this->data['main_content']='worker/list';
        $this->load->view('admin/table_template',$this->data);
    }
    public function ban($id = null)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $business_detail = $this->adminworkermodel->worker_detail($id);
        if(empty($business_detail))
        {
            show_404();
            exit;
        }
        if($business_detail[0]['u_status']==0)
        {
            $u_status = 1 - $business_detail[0]['u_status'];
            $data = array('u_status'=>$u_status);
            $this->adminworkermodel->update_worker($id,$data);
            $this->sendmail($business_detail[0]['u_email'],$business_detail[0]['u_fullname']);
            redirect('admin/adminworker');
        }
        
    }
    public function delete($id = null)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $business_detail = $this->adminbusinessmodel->business_detail($id);
        if(empty($business_detail))
        {
            show_404();
            exit;
        }
        else
        {
            
            $this->adminbusinessmodel->delete($id);
            $this->adminbusinessmodel->delete_cv($id);
            $this->adminbusinessmodel->delete_nop_don($id);
            $this->adminbusinessmodel->delete_save_tin($id);
            $this->sendmail_delete($business_detail[0]['u_email'],$business_detail[0]['u_fullname']);
            redirect('admin/adminworker');
        }
    }
    public function sendmail($to, $name)
    {
        $this->load->library('maillinux');
        $subject = "Tài khoản ứng viên đã được duyệt !";
        $body = "Xin chào " . $name . "!<br>
        Nhu Cầu Việc Làm xin thông báo:<br>
        Thông tin tài khoản doanh nghiệp của bạn đã được kích hoạt thành công, bạn có thể đăng tin tuyển dụng việc làm, vui lòng vào nhucauvieclam.net để xem chi tiết<br>
        - Tổng đài hỗ trợ: 08.372.723.48-0906.703.499<br>
        Nhu Cầu Việc Làm luôn nỗ lực đem lợi ích thiết thực tới cộng đồng!<br>
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to, $subject, $body);
    }
     public function sendmail_delete($to, $name)
    {
        $this->load->library('maillinux');
        $subject = "Tài khoản ứng viên đã bị xóa !";
        $body = "Xin chào " . $name . "!<br>
        Nhu Cầu Việc Làm xin thông báo:<br>
        Thông tin tài khoản ứng viên của bạn đã bị xóa khỏi hệ thống !<br>
        - Tổng đài hỗ trợ: 08.372.723.48-0906.703.499<br>
        Nhu Cầu Việc Làm luôn nỗ lực đem lợi ích thiết thực tới cộng đồng!<br>
        ";
        $from = "no-reply@nhucauvieclam.net";
        $this->maillinux->SendMail($from,$to, $subject, $body);
    }
}

?>