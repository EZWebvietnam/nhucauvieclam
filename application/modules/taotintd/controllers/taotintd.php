<?php
class Taohsuv extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('taotintd_model');
    }
    public function index($id = null)
    {   
        $data['taotintd_detail']= $this->taotintd_model->tintd_detail($id);
        if($this->input->post())
        {
            $title = $this->input->post('tieu_de');
            $capbac = $this->input->post('select_box_chuc_vu');
            $nganhnghe = $this->input->post('nganh_nghe');
            $city = $this->input->post('dia_diem');
            $thoigian = $this->input->post('thoi_gian_lam_viec');
            $mucluong = $this->input->post('muc_luong');
            $soluong = $this->input->post('so_luong');
            $quyenloi = $this->input->post('quyen_loi');
            $mota = $this->input->post('mo_ta_cong_viec');
            $namkinhnghiem = $this->input->post('so_nam_kinh_nghiem');
            $trinhdo = $this->input->post('trinh_do');
            $gioitinh = $this->input->post('c_gioi_tinh');
            $dotuoi = $this->input->post('c_do_tuoi');
            $yeucau = $this->input->post('yeu_cau');
            $hoso = $this->input->post('ho_so');
            $denngay = $this->input->post('den_ngay');
            $lienhe = $this->input->post('cach_lien_he');
            
            $data = array('e_title'=>$title,
                'e_lienhe'=>$lienhe,
                );
            // Khi gán vào mảng xong, lưu xuống DB, hàm sẽ trả về một số là id được insert xuống
            $id = $this->taotintd_model->save_tintd($data);
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
            $data['main_content']='view_taotintd';
            $this->load->view('home/taotintd_layout',$data);
        }     
    }
}
?>