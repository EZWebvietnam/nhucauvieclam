<?php 
                                        if($is_login == 1)
                                        {
                                        if($this->session->userdata['u_role']==2)
                                        {
                                        ?>
                                        <div id="user-menu">

                                            <div class="GridInfo">
                                                <div class="Content">

                                                    <ul class="UserMenu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>quanly-timviec">Quản lý tìm việc</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>hsda-dang">Hồ Sơ đã đăng</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>tao-hsungvien">Tạo HS tìm việc</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>daluu">Việc làm đã Lưu</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>da-ung-tuyen">Việc làm đã ứng tuyển</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>cv">Hồ sơ cá nhân(CV)</a>
                                                        </li>

                                                        <li class="Separator">
                                                            |
                                                        </li>

                                                        <li>
                                                            <a href="<?php echo base_url(); ?>thongtin-canhan">Thông tin cá nhân</a>
                                                        </li>

                                                    </ul>
                                                    <div class="Clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } else {?>
                                        <div id="user-menu">

                                            <div class="GridInfo">
                                                <div class="Content">

                                                    <ul class="UserMenu">
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>quanly-tuyendung">Quản lý tuyển dụng</a>
                                                        </li>
                                                        <li class="Separator">
                                                            |
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>tintd-dadang">Tin TD đã đăng</a>
                                                        </li>
                                                        <li class="Separator">
                                                            |
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>tao-tintuyendung">Taọ tin TD mới</a>
                                                        </li>
                                                        <li class="Separator">
                                                            |
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>thongtin-ntd">Thông tin NTD</a>
                                                        </li>
                                                        <li class="Separator">
                                                            |
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>quanly-hoso-ungvien">Quản lý hồ sơ ứng viên</a>
                                                        </li>
                                                        <li class="Separator">
                                                            |
                                                        </li>
                                                        <li>
                                                            <a href="#">Liên hệ quản cáo</a>
                                                        </li>
                                                    </ul>
                                                    <div class="Clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }} ?>
<div class="content-qlhs">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div>
        <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Việc làm 24h thông báo: Từ 6/10 KHÔNG GIỚI HẠN SỐ LẦN LÀM MỚI </span>
        </marquee>
    </div>
    <div class="navBar">
        <div class="navBarLeft">
            <h2><a href="#" title=""><span class="navBarTxt24-1_ntd">Đăng tin tuyển dụng</span></a></h2>
        </div>
        <div class="navBarRight">
            <a href="/dang-viec-lam-tinh-phi.html" title="Click để tới trang đăng tin tuyển dụng hot" class="dangTinVip">Tuyển dụng hiệu quả</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="lineHeight10 padBot10" id="huong_dan"></div>
    <div name="div_ntd_quan_tri_cap_nhat_tin_tuyen_dung" id="div_ntd_quan_tri_cap_nhat_tin_tuyen_dung">
        <br>
        <div class="colLeft-QT">
            <form name="form_cap_nhat_tin_td" id="form_cap_nhat_tin_td" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_cap_nhat_tin_td" width="0" height="0" style="visibility:hidden"></iframe>
                <input type="hidden" name="id_tin_td" id="id_tin_td" value="-1">
                <input type="hidden" name="id_tin_goc" id="id_tin_goc" value="-1">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2">Thông tin tuyển dụng</td>
                        </tr>
                        <tr>
                            <td valign="top" class="padTop10" colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Vị trí tuyển dụng: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" width="300"><a name="href-tieu_de"></a>
                                                <input type="text" class="textbox" name="tieu_de" id="tieu_de" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                            return(false);
                                                        }">
                                                <div id="err_tieu_de" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Cấp bậc: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-chuc_vu"></a>
                                                <select class="dropbox" name="select_box_chuc_vu" id="select_box_chuc_vu">
                                                    
                                                    <?php foreach($list_capbac as $k_cb=>$cb)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_cb ?>"><?php echo $cb;?></opption>
                                                        <?php }?>
                                                </select><div id="err_chuc_vu" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Chọn ngành nghề: <span class="textRed">*</span></b>                                           
                                            <td class="tbUser-row">        
                                                <select name="nganh_nghe" class="dropbox" id="nganh_nghe">
                                                    
                                                    <?php foreach($list_cate_job as $k_c=>$cate)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_c ?>"><?php echo $cate;?></opption>
                                                        <?php }?>
                                                </select>
                                            </td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>                                        
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Địa điểm làm việc: <span class="textRed">*</span></b>
                                            <td class="tbUser-row"><a name="href-tinh"></a>
                                                <select name="dia_diem" class="dropbox" id="dia_diem">
                                                    
                                                    <?php foreach($list_city as $k_city=>$city)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_city ?>"><?php echo $city;?></opption>
                                                        <?php }?>
                                                </select>
                                            </td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>    
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hình thức làm việc: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-thoi_gian"></a>
                                                <select class="dropbox" name="thoi_gian_lam_viec" id="thoi_gian_lam_viec">
                                                    
                                                    <?php foreach($list_time as $k_time=>$time)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_time ?>"><?php echo $time;?></opption>
                                                        <?php }?>
                                                </select><div id="err_thoi_gian" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Mức lương: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-muc_luong"></a>
                                                <select class="dropbox" name="muc_luong" id="muc_luong">
                                                    
                                                     <?php foreach($list_luong as $k_luong=>$luong)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_luong ?>"><?php echo $luong;?></opption>
                                                        <?php }?>
                                                </select><div id="err_muc_luong" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Số lượng tuyển: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(Nhập ký tự số)</i></td>
                                            <td class="tbUser-row"><a name="href-so_luong"></a>
                                                <input type="text" class="textbox" name="so_luong" id="so_luong" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                            return(false);
                                                        }">
                                                <div id="err_so_luong" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Quyền lợi được hưởng: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-quyen_loi"></a>																<textarea class="textArea" style="width:560px;height:80px" name="quyen_loi" id="quyen_loi"></textarea><div id="err_quyen_loi" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Mô tả công việc: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(Tối thiểu 100 ký tự)</i></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-mo_ta_cong_viec"></a>																<textarea class="textArea" style="width:560px;height:80px" name="mo_ta_cong_viec" id="mo_ta_cong_viec"></textarea><div id="err_mo_ta_cong_viec" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="130" valign="top" class="tbUser-row"><b>Yêu cầu số năm kinh nghiệm: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-so_nam_kinh_nghiem"></a>
                                                <select class="dropbox" name="so_nam_kinh_nghiem" id="so_nam_kinh_nghiem">
                                                    
                                                    <?php foreach($list_exp as $k_exp=>$exp)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_exp ?>"><?php echo $exp;?></opption>
                                                        <?php }?>
                                                </select><div id="err_so_nam_kinh_nghiem" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu bằng cấp: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-trinh_do"></a>
                                                <select class="dropbox" name="trinh_do" id="trinh_do">
                                                    
                                                    <?php foreach($list_bangcap as $k_bc=>$bc)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_bc ?>"><?php echo $bc;?></opption>
                                                        <?php }?>
                                                </select><div id="err_trinh_do" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu giới tính:</b></td>
                                            <td class="tbUser-row"><a name="href-c_gioi_tinh"></a>
                                                <select class="dropbox" name="c_gioi_tinh" id="c_gioi_tinh">
                                                    
                                                     <?php foreach($list_sex as $k_sx=>$sex)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_sx ?>"><?php echo $sex;?></opption>
                                                        <?php }?>
                                                </select><div id="err_c_gioi_tinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu độ tuổi:</b></td>
                                            <td class="tbUser-row"><a name="href-c_do_tuoi"></a>
                                                <select class="dropbox" name="c_do_tuoi" id="c_do_tuoi">
                                                  
                                                    <?php foreach($list_age as $k_age=>$age)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $k_age ?>"><?php echo $age;?></opption>
                                                        <?php }?>
                                                </select><div id="err_c_do_tuoi" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Yêu cầu khác :</b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-yeu_cau"></a>																<textarea class="textArea" style="width:560px;height:80px" name="yeu_cau" id="yeu_cau"></textarea><div id="err_yeu_cau" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hồ sơ bao gồm: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row" colspan="3"><a name="href-ho_so"></a>																<textarea class="textArea" style="width:560px;height:80px" name="ho_so" id="ho_so"></textarea><div id="err_ho_so" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hạn nộp hồ sơ: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-den_ngay"></a>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td width="130">
                                                                    <input class="dateline" type="text" style="width:110px" name="c_ngay_co_the_bat_dau_lam">
                                                                </td>
                                                                <td width="30">
                                                                    <input type="image" src="<?php echo base_url(); ?>template/home/img/iconCalendar.gif" >
                                                                </td>
                                                                <td>(dd/mm/yyyy)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table><div id="err_den_ngay" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Hình thức nộp hồ sơ: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row">
                                                <select class="dropbox" name="cach_lien_he" id="cach_lien_he">
                                                    <option value="1">Trực tiếp</option><option value="2">Trực tuyến</option><option value="3">Qua Email</option>
                                                </select><div id="err_cach_lien_he" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" height="20"></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin Nhà tuyển dụng</h3></td>
                        </tr>
                        <tr>
                            <td width="170" align="center" valign="top" class="padTop10"><img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" alt="" width="104" height="79"></td>
                            <td valign="top" class="padTop10">
                                <div id="thong_tin_cong_ty" style="display: inline;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyName'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyMem'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyIntro'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_companyadress'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                                <td class="tbUser-info"></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_home'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Sửa" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = 'none';
                                                            document.getElementById('sua_thong_tin_cong_ty').style.display = '';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_chinh_thong_tin');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="sua_thong_tin_cong_ty" style="display: none;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ten_cty" id="ten_cty" value="<?php echo $taotintd_detail[0]['u_companyName'] ?>">
                                                    <div id="err_ten_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                                <td class="tbUser-info"><a name="href-c_quy_mo_cty"></a>
                                                    <select class="dropbox" name="c_quy_mo_cty" id="c_quy_mo_cty">
                                                        <option value="-1">-- Chọn quy mô công ty --</option>
                                                        <option value="1">Ít hơn 10 nhân viên</option><option value="6">Từ 10 - 24 nhân viên</option><option value="2">Từ 25 - 99 nhân viên</option><option value="3" selected="">Từ 100 - 499 nhân viên</option><option value="4">Từ 500 - 999 nhân viên</option><option value="5">Trên 1000 nhân viên</option>
                                                    </select><div id="err_c_quy_mo_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <textarea class="textArea" style="width:450px;height:80px" name="mo_ta_cty" id="mo_ta_cty"><?php echo $taotintd_detail[0]['u_companyIntro'] ?></textarea>
                                                    <div id="err_mo_ta_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_lien_he" id="dia_chi_lien_he" value="<?php echo $taotintd_detail[0]['u_companyadress'] ?>">
                                                    <div id="err_dia_chi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_so_thue" id="ma_so_thue" value="">
                                                    <div id="err_ma_so_thue" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="website" id="website" value="<?php echo $taotintd_detail[0]['u_home'] ?>">
                                                    <div id="err_website" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Logo công ty:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="file" name="logo_cty" id="logo_cty" value="">
                                                    <div id="err_logo_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <div id="div_ma_chinh_thong_tin"><img src="/security_image.php?time=1385195608" id="security_image" name="security_image" alt="" width="65" height="31">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Nhập mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_chinh_thong_tin" id="ma_chinh_thong_tin">
                                                    <div id="err_ma_chinh_thong_tin" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_thong_tin_ntd();
                                                            }">
                                                    <input type="button" class="button" value="Hủy" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = '';
                                                            document.getElementById('sua_thong_tin_cong_ty').style.display = 'none';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_xac_minh');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></td>
                        </tr>
                        <tr>
                            <td class="ntd_tbInfo-header" colspan="2"><h3>Thông tin liên hệ</h3></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td valign="top" class="padTop10">
                                <div id="thong_tin_lien_he" style="display: inline;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Người liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactName'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactAdress'] ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info"><a href="mailto:quangthang12891@gmail.com" title=""><?php echo $taotintd_detail[0]['u_contactEmail'] ?></a></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info"><?php echo $taotintd_detail[0]['u_contactMobi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Sửa" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = 'none';
                                                            document.getElementById('sua_thong_tin_lien_he').style.display = '';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_chinh_lien_he');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="sua_thong_tin_lien_he" style="display: none;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Người liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="<?php echo $taotintd_detail[0]['u_contactName'] ?>">
                                                    <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="<?php echo $taotintd_detail[0]['u_contactAdress'] ?>">
                                                    <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="<?php echo $taotintd_detail[0]['u_contactEmail'] ?>">
                                                    <div id="err_email_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="<?php echo $taotintd_detail[0]['u_contactMobi'] ?>">
                                                    <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <div id="div_ma_chinh_lien_he"><img src="/security_image.php?time=1385195608" id="security_image" name="security_image" alt="" width="65" height="31">
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Nhập mã chỉnh sửa:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="ma_chinh_lien_he" id="ma_chinh_lien_he">
                                                    <div id="err_ma_chinh_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_lien_he_ntd();
                                                                return(false);
                                                            }">
                                                    <input type="button" class="button" value="Hủy" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = '';
                                                            document.getElementById('sua_thong_tin_lien_he').style.display = 'none';
                                                            ntd_quan_tri_reset_ma_bao_mat('div_ma_xac_minh');">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>                       
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                        <tr>
                            <td class="tbUser-row" valign="top" colspan="2" align="center">
                                <input type="submit" class="button" value="Đăng tuyển" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntd_quan_tri_ghi_lai_tin_td('dang_tin');
                                        }">
                                &nbsp;&nbsp;
                                <input type="submit" class="button" value="Quay lại" onclick="javascript: window.location.href = '/ntd-trang-quan-tri-tin-tuyen-dung.html';" title="Về trang quản lý tin tuyển dụng">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        
        <script src="<?php echo base_url(); ?>template/home/js/HeaderScriptHandler.js"></script>
        <!--</div> -->
    </div>
    <div class="clear"></div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_90") != null) {
            document.getElementById("a_menu_lv2_90").style.color = "#518c04";
        }
    </script>
</div>