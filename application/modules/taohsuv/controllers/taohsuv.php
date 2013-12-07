<?php
class Taohsuv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('taohsuv_model');
    }
    public function index($id = null)
    {   
        $data['taohsuv_detail']= $this->taohsuv_model->view_hsuv_detail($id);
        $data['main_content']='view_taohsuv';
        if($this->input->post())
        {
            $title = $this->input->post('tieu_de');
            $chucvumm = $this->input->post('select_box_chuc_vu');
            $nganhnghe = $this->input->post('nganh_nghe');
            $city = $this->input->post('dia_diem');
            $timeid = $this->input->post('thoi_gian_lam_viec');
            $luongmm = $this->input->post('muc_luong');
            $muctieunn = $this->input->post('muc_tieu_nghe_nghiep');
            $lastdate = $this->input->post('den_ngay');
            $trinhdo = $this->input->post('trinh_do');
            $nganhhoc = $this->input->post('nganh_hoc');
            $namtotnghiep = $this->input->post('select_box_nam_tot_nghiep');
            $loaitotnghiep = $this->input->post('select_box_loai_tot_nghiep');
            $truongdahoc = $this->input->post('c_truong_da_hoc');
            $ngoaingu = $this->input->post('select_box_ngoai_ngu');
            $trinhdonn = $this->input->post('select_box_trinh_do_ngoai_ngu');
            $tinhoc = $this->input->post('trinh_do_tin_hoc');
            $bangcapkhac = $this->input->post('bang_cap_khac');
            $kinhnghiem = $this->input->post('so_nam_kinh_nghiem');
            $infokinhnghiem = $this->input->post('c_kinh_nghiem');
            $kynang = $this->input->post('ky_nang');
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
                'j_thamkhao'=>$thamkhao,
                'j_chucmm'=>$chucvumm,
                'm_id'=>$nganhnghe,
                'j_cityID'=>$city,
                'j_timeID'=>$timeid,
                'j_lastdate'=>$lastdate,
                );
            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->taohsuv_model->save_hsuv($data);
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
            $data['main_content']='view_taohsuv';
            $this->load->view('home/taohsuv_layout',$data);
        }     
    }
}
?>