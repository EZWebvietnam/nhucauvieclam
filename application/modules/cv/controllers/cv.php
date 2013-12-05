<?php
class CV extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('cvmodel');
    }
    public function index($id = null)
    {   
        $data['info_user_detail']= $this->cvmodel->view_cv_detail($id);
        $data['main_content']='view_cv';
        if($this->input->post())
        {
            // Mỗi input có một name, tùy theo name của input là gì, thì khi gán vào biến cái name của input cũng như vậy.
            //VI input title có name c_tieu_de_cv dùng để lưu tiêu đề, thì khi lấy ra là như dưới:
            $title = $this->input->post('c_tieu_de_cv');
            // Sau khi lấy ra, gán một mảng, key của mảng là tên field trong database   
            $trinhdo = $this->input->post('c_trinh_do');
            $nganhhoc = $this->input->post('c_nganh_hoc');
            $namtotnghiep = $this->input->post('c_nam_tot_nghiep');
            $loaitotnghiep = $this->input->post('c_loai_tot_nghiep');
            $truongdahoc = $this->input->post('c_truong_da_hoc');
            $ngoaingu = $this->input->post('c_ma_ngoai_ngu');
            $trinhdonn = $this->input->post('c_trinh_do_ngoai_ngu');
            $tinhoc = $this->input->post('c_trinh_do_tin_hoc');
            $bangcapkhac = $this->input->post('c_bang_cap_khac');
            $kinhnghiem = $this->input->post('c_so_nam_kinh_nghiem');
            $infokinhnghiem = $this->input->post('c_kinh_nghiem');
            $kynang = $this->input->post('c_ky_nang');
            $muctieunn = $this->input->post('c_muc_tieu_nghe_nghiep');
            $luongmm = $this->input->post('c_muc_luong');
            $datestart = $this->input->post('c_ngay_co_the_bat_dau_lam');
            $thamkhao = $this->input->post('c_nguon_tham_khao');
    
            $data = array('j_title'=>$title,
                'j_trinhdo'=>$trinhdo,
                'j_nganhhoc'=>$nganhhoc,
                'j_namtotnghiep'=>$namtotnghiep,
                'j_loaitotnghiep'=>$loaitotnghiep,
                'j_truongdahoc'=>$truongdahoc,
                'j_ngoaingu'=>$ngoaingu,
                'j_trinhdonn'=>$trinhdonn,
                'j_tinhoc'=>$tinhoc,
                'j_bangcapkhac'=>$bangcapkhac,
                'j_kinhnghiem'=>$kinhnghiem,
                'j_infokinhnghiem'=>$infokinhnghiem,
                'j_kynang'=>$kynang,
                'j_muctieunn'=>$muctieunn,
                'j_luongmm'=>$luongmm,
                'j_datestart'=>$datestart,
                'j_thamkhao'=>$thamkhao,
                );
            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->cvmodel->save_cv($data);
            if($id > 0)
            {
                //Insert thành công
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                // Insert không thành công
                 redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            $data['main_content']='view_cv';
            $this->load->view('home/cv_layout',$data);
        }     
    }
}
?>