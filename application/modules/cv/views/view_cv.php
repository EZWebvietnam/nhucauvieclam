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
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Từ 25/10 NTV chỉ được đăng tối đa 10 hồ sơ tìm việc </span>
        </marquee>
    </div>
    <div name="div_ntv_quan_tri_ho_so_ca_nhan" id="div_ntv_quan_tri_ho_so_ca_nhan">
        <form name="form_cap_nhat_tin_tv" id="form_cap_nhat_tin_tv" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_cap_nhat_tin_tv" width="0" height="0" style="visibility:hidden"></iframe>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td align="left">
                            <div class="navBarLeft">
                                <span class="navBarTxt24-1">Hồ sơ cá nhân</span>
                            </div></td>
                        <td align="right"><a href="/trang-xem-cv.html?id_cv_mau=20" target="_blank" class="button2" style="width:150px;height:30px;display:inline-block;text-align:center">Xem CV mẫu cho ứng viên
                                <br>
                                chưa có kinh nghiệm</a> &nbsp; <a href="/trang-xem-cv.html?id_cv_mau=13" target="_blank" class="button2" style="width:150px;height:30px;display:inline-block;text-align:center">Xem CV mẫu cho ứng viên
                                <br>
                                đã có kinh nghiệm</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="clear"></div>
        </form>
    </div>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td>Hồ sơ này sẽ là hồ sơ để bạn ứng tuyển trực tuyến với các việc làm trên hệ thống tìm việc 24H.
                    <br>
                    Vui lòng điền đầy đủ thông tin để nhà tuyển dụng biết rõ về bạn và khả năng, kinh nghiệm, kỹ năng của bạn,...
                    <br>
                    <br>
                    Những mục có dấu <span class="textRed">*</span> là bắt buộc phải nhập
                    <br>
                    <br>
                    <div id="thong_bao_trang_thai_ho_so" class="textRed">
                        Vui lòng chọn CV cần chỉnh sửa hoặc tạo mới một CV khác!
                    </div></td>
                <td width="400" align="right">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="25" valign="top" class="padTop10"></td>
                                <td colspan="5" class="tbInfo-header" align="left">CV bạn đã tạo: <span class="textRed11">(Tối đa được tạo 3 CV)</span></td>
                            </tr>
                            <tr>
                                <td width="25" valign="top" class="padTop10"></td>
                                <td valign="top" class="padTop10 padLeft10" width="150" align="left"><a href="/ntv-trang-quan-tri-ho-so-ca-nhan.html?id_cv=137108" title="Hồ sơ ứng tuyển vị trí nhân viên lập trình web">Hồ sơ ứng tuyển vị trí nhân viên lập...</a></td>
                                <td valign="top" class="padTop10" width="50" align="left"> Đã duyệt </td>
                                <td valign="top" class="padTop10" width="50" align="center">
                                    <a href="<?php echo base_url(); ?>thongtin-canhan/<?php echo $info_user_detail[0]['u_id']; ?>"><input type="button" value="Sửa" onclick="" >   </a>            
                                </td>
                                <td width="20" valign="top" class="padTop10" align="right">
                                    <input type="button" value="Xóa" onclick="javascript: ntv_quan_tri_xoa_CV(137108);
                                            return(false);">
                                </td>
                                <td width="5" valign="top" class="padTop10"></td>
                            </tr>
                        </tbody>
                    </table><div class="lineHeight10 padBot10"></div></td>
            </tr>
        </tbody>
    </table>
    <div class="lineHeight10 padBot10"></div>
    <form name="them_viec" method="post">
    <input type="hidden" name="pk_cv" id="pk_cv" value="-1">
    <div class="tbInfo-header">
        Tiêu đề CV
    </div>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td colspan="4" height="10" class="br-L br-R"></td>
            </tr>
            <tr>
                <td rowspan="10" width="100" class="br-L"></td>
                <td width="160" valign="top" class="tbUser-row"><b>Tiêu đề CV (<span class="textRed">*</span>):</b>
                    <br>
                    <span class="text11" style="line-height:14px">(Bạn nên để Tiêu đề CV rõ ràng để thu hút NTD hơn)</span></td>
                <td class="tbUser-row"><a name="href-c_tieu_de_cv"></a>
                    <input type="text" class="textbox" name="c_tieu_de_cv" id="c_tieu_de_cv" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                return(false);
                            }">
                    <div id="err_c_tieu_de_cv" class="textRed11">
                        <span style="font-weight:bold;font-size:11px;">Ví dụ: </span>Hồ sơ ứng tuyển vị trí nhân viên kế toán
                    </div></td>
                <td rowspan="10" width="50" class="br-R"></td>
            </tr>
        </tbody>
    </table>
    <div class="lineHeight10 padBot10"></div>

    <div class="tbInfo-header">
        Thông tin cá nhân
    </div>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td width="250" class="tbUser-row br-L" valign="top" align="center" style="padding-top:20px"><div id="div_anh_dai_dien_da_duyet" style="display: inline;"></div>
                    <div id="div_anh_dai_dien_cho_duyet" style="display: none;">
                        <div id="div_anh_dai_dien"></div>
                        <div class="padTop10">
                            <a name="href-c_anh_dai_dien"></a>
                            <input type="image" src="images/btnUpAnh.gif" onclick="ntv_quan_tri_show_box_popup_doi_anh_dai_dien();
                                    return false;">
                        </div>
                    </div></td>
                <td valign="top" class="padTop10">
                    <div id="thong_tin_ntv_da_duyet" style="display: inline;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="100" valign="top" class="tbUser-row"><b>Họ và tên:</b></td>
                                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_fullname']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Ngày sinh:</b></td>
                                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_birthday']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_sex']; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_marry']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right">
                                        <a href="<?php echo base_url(); ?>thongtin-canhan/<?php echo $info_user_detail[0]['u_id']; ?>"> <input type="button" class="buttonGreen" value="Sửa" onclick="<?php echo base_url(); ?>thongtincanhan/thongtincanhan/index/<?php echo $info_user_detail[0]['u_id']; ?>"> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <div id="thong_tin_ntv_cho_duyet" style="display: none;">
                        <div class="textRed11"></div>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td width="135" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                    <td class="tbUser-row"><a name="href-ho_ten"></a>
                                        <input type="text" class="textbox" name="txt_ho_ten" id="txt_ho_ten" style="width:210px" value="Đoàn Quang Thắng" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                    return(false);
                                                }">
                                        <div id="err_ho_ten" class="textRed11"></div></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                    <td class="tbUser-row"><a name="href-ngay_sinh"></a>
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="130">
                                                        <input type="text" class="textbox" name="ngay_sinh" id="ngay_sinh" style="width:110px" readonly="" value="12-08-1981" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                return false;">
                                                    </td>
                                                    <td width="30">
                                                        <input type="image" src="images/iconCalendar.gif" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
                                                                return false;">
                                                    </td>
                                                    <td>(dd-mm-yyyy)</td>
                                                </tr>
                                            </tbody>
                                        </table><div id="err_ngay_sinh" class="textRed11"></div></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                    <td class="tbUser-row"><a name="href-gioi_tinh"></a>
                                        <input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="1" checked="">
                                        &nbsp; Nam&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="0">
                                        &nbsp; Nữ&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gioi_tinh" id="gioi_tinh_khac" value="2">
                                        &nbsp; Khác <div id="err_gioi_tinh" class="textRed11"></div></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                    <td class="tbUser-row"><a name="href-tinh_trang_hon_nhan"></a>
                                        <select class="dropbox" style="width:220px" name="tinh_trang_hon_nhan" id="tinh_trang_hon_nhan">
                                            <option value="0">Độc thân</option>
                                            <option value="1">Đã có gia đình</option>
                                        </select><div id="err_tinh_trang_hon_nhan" class="textRed11"></div></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Mã chỉnh sửa:</b></td>
                                    <td class="tbUser-row">
                                        <div id="div_ma_chinh_thong_tin"><img src="/security_image.php?time=1385193243" id="security_image" name="security_image" alt="" width="65" height="31">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row"><b>Nhập mã chỉnh sửa (<span class="textRed">*</span>):</b></td>
                                    <td class="tbUser-row">
                                        <input type="text" class="textbox" style="width:210px" name="ma_chinh_thong_tin" id="ma_chinh_thong_tin" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                    return(false);
                                                }">
                                        <div id="err_ma_chinh_thong_tin" class="textRed11"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right">
                                        <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                    ntv_quan_tri_thay_doi_thong_tin_ntv();
                                                }">
                                        <input type="button" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_tai_khoan();
                                                return(false);">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div></td>
                <td rowspan="10" width="10" class="br-R"></td>
            </tr>
        </tbody>
    </table>

    <div class="tbInfo-header">
        Trình độ học vấn
    </div>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td colspan="4" height="10" class="br-L br-R"></td>
            </tr>
            <tr>
                <td rowspan="10" width="100" class="br-L"></td>
                <td width="160" valign="top" class="tbUser-row"><b>Trình độ học vấn (<span class="textRed">*</span>):</b></td>
                <td class="tbUser-row"><a name="href-c_trinh_do"></a>
                    <select class="dropbox" name="c_trinh_do" id="c_trinh_do">
                        <option value="-1">-- Chọn trình độ học vấn --</option>
                        <option value="1">Trên đại học</option><option value="2">Đại học</option><option value="3">Cao đẳng</option><option value="4">Trung cấp</option><option value="5">Trung học</option><option value="6">Không yêu cầu</option>
                    </select><div id="err_c_trinh_do" class="textRed11"></div></td>
                <td rowspan="10" width="50" class="br-R"></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Ngành học (<span class="textRed">*</span>):</b></td>
                <td class="tbUser-row"><a name="href-c_nganh_hoc"></a>
                    <input type="text" class="textbox" name="c_nganh_hoc" id="c_nganh_hoc" value="" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                return(false);
                            }">
                    <div id="err_c_nganh_hoc" class="textRed11"></div></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Tốt nghiệp năm:</b></td>
                <td class="tbUser-row">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="110"><a name="href-c_nam_tot_nghiep"></a>
                                    <select class="dropbox" style="width:80px" name="c_nam_tot_nghiep" id="c_nam_tot_nghiep">
                                        <option value="-1">-- Chọn năm tốt nghiệp --</option>
                                        <option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option>
                                    </select><div id="err_c_nam_tot_nghiep" class="textRed11"></div></td>
                                <td width="100"><b>Loại tốt nghiệp:</b></td>
                                <td><a name="href-c_loai_tot_nghiep"></a>
                                    <select class="dropbox" style="width:120px" name="c_loai_tot_nghiep" id="c_loai_tot_nghiep">
                                        <option value="-1">-- Chọn loại tốt nghiệp --</option>
                                        <option value="1">Xuất sắc</option><option value="2">Giỏi</option><option value="3">Khá</option><option value="4">Trung bình khá</option><option value="5">Trung bình</option>
                                    </select><div id="err_c_loai_tot_nghiep" class="textRed11"></div></td>
                            </tr>
                        </tbody>
                    </table></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Tốt nghiệp tại trường:</b>
                </td>
                <td class="tbUser-row" width ="510"><a name="href-c_truong"></a>
                   <textarea class="textArea" style="width:500px" name="c_truong_da_hoc" id="c_truong_da_hoc"></textarea>
                </td>
            </tr>

            <tr>
                <td valign="top" class="tbUser-row"><b>Trình độ ngoại ngữ:</b></td>
                <td class="tbUser-row">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td width="267"><a name="href-c_ma_ngoai_ngu"></a>
                                    <select class="dropbox" style="width:235px" name="c_ma_ngoai_ngu" id="c_ma_ngoai_ngu">
                                        <option value="-1">-- Chọn ngoại ngữ --</option>
                                        <option value="EN-DE">Tiếng Anh – Tiếng Đức</option><option value="EN-RU">Tiếng Anh - Tiếng Nga</option><option value="EN-IT">Tiếng Anh – Tiếng Ý</option><option value="EN-ES">Tiếng Anh – Tiếng Tây Ban Nha</option><option value="EN">English - Tiếng Anh</option><option value="FR">French - Tiếng Pháp</option><option value="US">United States - Tiếng Anh Mỹ</option><option value="RU">Russian - Tiếng Nga</option><option value="CN">Chinese - Tiếng Trung</option><option value="KR">Korean - Tiếng Hàn</option><option value="JP">Japanese - Tiếng Nhật</option><option value="DE">German - Tiếng Đức</option><option value="SA">Arabic - Tiếng Ả Rập</option><option value="BJ">Bengalic - Tiếng Bengal</option><option value="BG">Bulgarian - Tiếng Bungary</option><option value="BF">Burmese - Tiếng Miến điện</option><option value="KH">Cambodian - Tiếng Campuchia</option><option value="CZ">Czech  - Tiếng Séc</option><option value="DA">Danmark - Tiếng Đan mạch</option><option value="SX">Dutch - Tiếng Hà Lan</option><option value="FI">Finnish - Tiếng phần Lan</option><option value="GR">Greek - Tiếng Hy Lạp</option><option value="IN">Hindi - Tiếng Hinđi</option><option value="HU">Hungarian - Tiếng Hungary</option><option value="ID">Indonesian - Tiếng Inđônesia</option><option value="IT">Italian - Tiếng Ý</option><option value="LA">Laotian - Tiếng Lào</option><option value="MY">Malay - Tiếng Mã Lai</option><option value="NO">Norwegian - Tiếng Nauy</option><option value="PL">Polish - Tiếng Ba Lan</option><option value="PT">Portuguese - Tiếng Bồ Đào Nha</option><option value="RO">Romanian  - Tiếng Ru ma ni</option><option value="ES">Spanish - Tiếng Tây Ban Nha</option><option value="TW">Taiwanese - Tiếng Đài Loan</option><option value="TR">Turkish - Tiếng Thổ Nhĩ Kỳ</option><option value="TH">Thai - Tiếng Thái</option><option value="UA">Ukrainian - Tiếng Ucraina</option><option value="00">Khác</option>
                                    </select><div id="err_c_ma_ngoai_ngu" class="textRed11"></div></td>
                                <td><a name="href-c_trinh_do_ngoai_ngu"></a>
                                    <select class="dropbox" style="width:235px" name="c_trinh_do_ngoai_ngu" id="c_trinh_do_ngoai_ngu">
                                        <option value="-1">-- Chọn trình độ ngoại ngữ --</option>
                                        <option value="1">Sơ cấp</option><option value="2">Trung cấp</option><option value="3">Cao cấp</option>
                                    </select><div id="err_c_trinh_do_ngoai_ngu" class="textRed11"></div></td>
                            </tr>
                        </tbody>
                    </table></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Trình độ tin học:</b></td>
                <td class="tbUser-row"><a name="href-c_trinh_do_tin_hoc"></a>										<textarea class="textArea" style="width:500px" name="c_trinh_do_tin_hoc" id="c_trinh_do_tin_hoc"></textarea><div id="err_c_trinh_do_tin_hoc" class="textRed11"></div></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Các bằng cấp
                        <br>
                        / chứng chỉ khác:</b></td>
                <td class="tbUser-row"><a name="href-c_bang_cap_khac"></a>										<textarea class="textArea" style="width:500px" name="c_bang_cap_khac" id="c_bang_cap_khac"></textarea><div id="err_c_bang_cap_khac" class="textRed11"></div></td>
            </tr>
            <tr>
                <td colspan="4" height="10" class="br-L br-R"></td>
            </tr>
        </tbody>
    </table>

    <div class="tbInfo-header">
        Kinh nghiệm làm việc
    </div>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="4" height="10" class="br-L br-R"></td>
            </tr>
            <tr>
                <td rowspan="10" width="100" class="br-L"></td>
                <td width="160" valign="top" class="tbUser-row"><b>Số năm kinh nghiệm (<span class="textRed">*</span>):</b></td>
                <td class="tbUser-row"><a name="href-c_so_nam_kinh_nghiem"></a>
                    <select class="dropbox" name="c_so_nam_kinh_nghiem" id="c_so_nam_kinh_nghiem">
                        <option value="-1">-- Chọn số năm kinh nghiệm --</option>
                        <option value="8">Chưa có kinh nghiệm</option><option value="1">Dưới 1 năm</option><option value="2">1 năm</option><option value="3">2 năm</option><option value="4">3 năm</option><option value="5">4 năm</option><option value="6">5 năm</option><option value="7">Hơn 5 năm</option>
                    </select><div id="err_c_so_nam_kinh_nghiem" class="textRed11"></div></td>
                <td width="50" rowspan="17" class="br-R"></td>
            </tr>

            <tr>
                <td valign="top" class="tbUser-row1"><b>Quá trình làm việc:</b>
                    <br>
                    <span class="text11" style="line-height:14px"> Nếu bạn chưa có kinh nghiệm làm việc, hãy đưa ra các công việc/ hoạt động bạn đã từng tham gia hoặc đảm trách và các thành tích kỹ năng đạt được </span></td>
                <td class="tbUser-row"><a name="href-c_kinh_nghiem"></a>
                    <table>
                        <tbody>
                            <tr>
                                <td>													<textarea class="textArea" style="width:500px;height:200px;line-height:20px" name="c_kinh_nghiem" id="c_kinh_nghiem">Tên công ty:
Vị trí công việc:
Ngành nghề:
Thời gian bắt đầu:
Thời gian kết thúc:
Mô tả công việc:
Lý do thôi việc:
Thành tích đạt được:
Mức lương:</textarea></td>
                            </tr>
                        </tbody>
                    </table></td>
            </tr>
            <tr>
                <td colspan="2" height="10"></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row"><b>Kỹ năng nổi bật:</b></td>
                <td class="tbUser-row"><a name="href-c_ky_nang"></a>										<textarea class="textArea" style="width:500px" name="c_ky_nang" id="c_ky_nang"></textarea><div id="err_c_ky_nang" class="textRed11"></div></td>
            </tr>
            <tr>
                <td colspan="4" height="10" class="br-L br-R"></td>
            </tr>
        </tbody>
    </table>

    <div class="tbInfo-header">
        Mục tiêu nghề nghiệp
    </div>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td rowspan="10" width="100" class="br-L"></td>
                <td width="160" valign="top" class="tbUser-row1"><b>Mục tiêu nghề nghiệp:</b><!-- <br/><i class="text11 textRed">(tối đa 1000 ký tự)</i> --></td>
                <td class="tbUser-row" colspan="3"><a name="href-c_muc_tieu_nghe_nghiep"></a>										<textarea class="textArea" style="width:500px;height:100px" name="c_muc_tieu_nghe_nghiep" id="c_muc_tieu_nghe_nghiep"></textarea><div id="err_c_muc_tieu_nghe_nghiep" class="textRed11"></div></td>
                <td rowspan="10" width="100" class="br-R"></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row1"><b>Mức lương mong muốn (<span class="textRed">*</span>):</b></td>
                <td class="tbUser-row" colspan="3"><a name="href-c_muc_luong"></a>
                    <select class="dropbox" name="c_muc_luong" id="c_muc_luong">
                        <option value="-1">-- Chọn mức lương --</option>
                        <option value="1">Thỏa thuận</option><option value="2">1 - 3 triệu</option><option value="3">3 - 5 triệu</option><option value="4">5 - 7 triệu</option><option value="5">7 – 10 triệu</option><option value="6">10 – 15 triệu</option><option value="7">15 – 20 triệu</option><option value="8">20 – 30 triệu</option><option value="9">Trên 30 triệu</option>
                    </select><div id="err_c_muc_luong" class="textRed11"></div></td>
            </tr>
            <tr>
                <td valign="top" class="tbUser-row1"><b>Ngày có thể bắt đầu làm việc (<span class="textRed">*</span>):</b></td>
                <td class="tbUser-row"><a name="href-c_ngay_co_the_bat_dau_lam"></a>
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
                    </table><div id="err_c_ngay_co_the_bat_dau_lam" class="textRed11"></div></td>
            </tr>
            <tr>
                <td colspan="4" height="10" class="br-R"></td>
            </tr>
        </tbody>
    </table>

    <div class="tbInfo-header">
        Nguồn tham khảo
    </div>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td rowspan="10" width="100" class="br-L"></td>
                <td width="160" valign="top" class="tbUser-row1"><b>Nguồn tham khảo:</b>
                    <br>
                    <span class="text11" style="line-height:14px">Hãy nêu tên những người không phải là người thân, không phải là người đã thuê bạn làm việc? (Họ tên, địa chỉ, số điện thoại, nghề nghiệp, quan hệ, đã biết bạn mấy năm?)</span></td>
                <td class="tbUser-row"><a name="href-c_nguon_tham_khao"></a>
                    <textarea class="textArea" style="width:500px;height:100px" name="c_nguon_tham_khao" id="c_nguon_tham_khao">
Họ và tên:
Địa chỉ:
Điện thoại:
Nghề nghiệp:
Quan hệ:
Thời gian quen biết:</textarea></td>
                <td width="50" rowspan="17" class="br-R"></td>
            </tr>
        </tbody>
    </table>

    <div class="tbInfo-header">
        Thông tin liên hệ
    </div>
    <div id="div_thong_tin_lien_he_da_duyet" style="display: inline;">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td colspan="4" height="10"></td>
                </tr>
                <tr>
                    <td rowspan="20" width="100" class="br-L"></td>
                    <td valign="top" width="160" class="tbUser-row"><b>Người liên hệ:</b></td>
                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_fullname']; ?></td>
                    <td rowspan="20" width="100" class="br-R"></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ:</b></td>
                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_adress']; ?></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Email liên hệ:</b></td>
                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_email']; ?></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ:</b></td>
                    <td class="tbUser-row"><?php echo $info_user_detail[0]['u_mobi']; ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <a href="<?php echo base_url(); ?>thongtincanhan/thongtincanhan/index/<?php echo $info_user_detail[0]['u_id']; ?>"><input type="button" style="margin-right:10px;" class="buttonGreen" value="Sửa" onclick="<?php echo base_url(); ?>thongtin-canhan/<?php echo $info_user_detail[0]['u_id']; ?>"></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="borderBot" height="10"></td>
                </tr>
                <tr>
                    <td colspan="2" height="10"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="div_thong_tin_lien_he_cho_duyet" style="display: none;">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td colspan="4" height="10"></td>
                </tr>
                <tr>
                    <td></td><td colspan="2" height="10"><div class="textRed11"></div></td>
                </tr>
                <tr>
                    <td colspan="4" height="10"></td>
                </tr>
                <tr>
                    <td rowspan="20" width="100" class="br-L"></td>
                    <td valign="top" width="160" class="tbUser-row"><b>Người liên hệ (<span class="textRed">*</span>):</b></td>
                    <td class="tbUser-row">
                        <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="Đoàn Quang Thắng" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                    return(false);
                                }">
                        <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                    <td rowspan="10" width="100" class="br-R"></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Địa chỉ liên hệ (<span class="textRed">*</span>):</b></td>
                    <td class="tbUser-row">
                        <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="Phúc Đồng - Sài Đồng - Long Biên " onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                    return(false);
                                }">
                        <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Email liên hệ (<span class="textRed">*</span>):</b></td>
                    <td class="tbUser-row">
                        <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="quangthang12891@gmail.com" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                    return(false);
                                }">
                        <div id="err_email_lien_he" class="textRed11"></div></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Điện thoại liên hệ (<span class="textRed">*</span>):</b></td>
                    <td class="tbUser-row">
                        <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="0962925599" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                    return(false);
                                }">
                        <div id="err_dien_thoai_lien_he" class="textRed11"></div></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Mã chỉnh sửa:</b></td>
                    <td class="tbUser-row">
                        <div id="div_ma_chinh_lien_he"><img src="/security_image.php?time=1385193243" id="security_image" name="security_image" alt="" width="65" height="31">
                        </div></td>
                </tr>
                <tr>
                    <td valign="top" class="tbUser-row"><b>Nhập mã chỉnh sửa (<span class="textRed">*</span>):</b></td>
                    <td class="tbUser-row">
                        <input type="text" class="textbox" name="ma_chinh_lien_he" id="ma_chinh_lien_he" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                    return(false);
                                }">
                        <div id="err_ma_chinh_lien_he" class="textRed11"></div></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input type="button" class="buttonGreen" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                    ntv_quan_tri_thay_doi_lien_he_ntv();
                                    return(false);
                                }">
                        <input type="button" style="margin-right:10px;" class="buttonGreen" value="Hủy" onclick="ntv_quan_tri_khong_hien_thi_sua_thong_tin_lien_he();">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="borderBot" height="10"></td>
                </tr>
                <tr>
                    <td colspan="2" height="10"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="br-B"></div>
    <table>
        <tbody>
            <tr>
                <td colspan="4" height="50" class="tbUser-row">
                    <input type="checkbox" name="chap_nhan_dieu_khoan" id="chap_nhan_dieu_khoan" checked="">
                    &nbsp;<span>Tôi xin cam đoan những thông tin cung cấp trên đây là hoàn toàn đúng sự thật và đầy đủ. Tôi xin hoàn toàn chịu trách nhiệm nếu những thông tin sai lệch</span><div id="err_c_chap_nhan_dieu_khoan" class="textRed11"></div></td>
            </tr>
            <tr>
                <td rowspan="20" width="100"></td>
                <td class="tbUser-row" valign="top">
                    <input type="submit" class="button" value="Cập nhật" >
                </td>
                <td rowspan="20" width="100"></td>
            </tr>
        </tbody>
    </table>
    </form>
    <div class="pad10"></div>
    <script>
                        set_focus(document.forms['form_cap_nhat_tin_tv']);
                        SetAutoComplete(ds_truong_dhcd, 'txt_truong', 'chon_truong_tu_suggestion', 'chon_truong_tu_suggestion', 150, 'ntv_quan_tri_them_truong_tu_suggestion(",~,")');
    </script>
    <!--</div> -->
</div>