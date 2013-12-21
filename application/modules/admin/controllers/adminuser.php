<?php 
class Adminuser extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminusermodel');
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
        echo '2222';exit;
    }
    public function listuser()
    {
        $list_user = $this->adminusermodel->get_user();
        $this->data['data']=$list_user;
        $this->data['main_content']='user/list_user';
        $this->load->view('admin/table_template',$this->data);
        
    }
    public function ban($id = null)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $user_detail = $this->adminusermodel->user_detail($id);
        if(empty($user_detail))
        {
            show_404();
            exit;
        }
        else
        {
            $u_status = 1 -  $user_detail[0]['u_status'];
            if($u_status == 0)
            {
                $data = array('u_status'=>$u_status,'u_ban_reason'=>'Tài khoản bị khóa');
            }
            else
            {
                 $data = array('u_status'=>$u_status,'u_ban_reason'=>'');
            }
            $this->adminusermodel->update_user($id,$data);
            if($this->session->userdata['u_id']==$id)
            {
                redirect('admin/index/logout');
            }
            redirect('admin/adminuser/listuser');
        }
    }
    public function delete($id)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $user_detail = $this->adminusermodel->user_detail($id);
        if(empty($user_detail))
        {
            show_404();
            exit;
        }
        else
        {
            $this->adminusermodel->delete($id);
            redirect('admin/adminuser/listuser');
        }
    }
}

?>