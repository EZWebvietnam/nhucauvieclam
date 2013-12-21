<?php 
class Adminjob extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminjobmodel');
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
        $this->data['data']=$this->adminjobmodel->load_job();
        $this->data['main_content']='job/list';
        $this->load->view('admin/table_template',$this->data);
    }
    public function delete($id = null)
    {
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $job_detail = $this->adminjobmodel->load_job_detail($id);
        if(empty($job_detail))
        {
            show_404();
            exit;
        }
        $this->adminjobmodel->delete($id);
        redirect('admin/adminjob');
    }
}
?>