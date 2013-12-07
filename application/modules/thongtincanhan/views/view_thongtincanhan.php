<div class="colLeft">
    <div class="navBar">
        <div class="navBarLeft" style="width:400px;">
            <span class="navBarTxt24-1">Thông tin Người tìm việc</span>
        </div>
        <div class="navBarRight">
            <a href="/dang-ho-so-tinh-phi.html" title="" class="dangTinVip">Tìm việc hiệu quả</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="lineHeight10 padBot10" id="thong_bao" style="color:blue;font-size:14px;">
        Thông tin cá nhân của bạn đã được duyệt!
    </div>
    <div class="tbInfo-header br-L br-R">
        Thông tin đăng nhập
    </div>
    <div class="padTop10 padBot10 br-L br-R br-B">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td width="150" valign="top" class="tbUser-row"><b>Email đăng nhập:</b></td>
                    <td class="tbUser-row"><?php echo $info_list[0]['u_username']; ?>
                        <br>
                        <a href="/trang-doi-mat-khau.html" title="">[Đổi mật khẩu]</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <form name="form_cap_nhat_thong_tin_ntv" id="form_cap_nhat_thong_tin_ntv" action="" method="post" onsubmit="" enctype="multipart/form-data">
        <iframe name="fr_submit_cap_nhat_thong_tin_ntv" width="0" height="0" style="visibility:hidden"></iframe>
        <div class="tbInfo-header br-L br-R">
            Thông tin cá nhân
        </div>
        <div class="padBot10 br-L br-R br-B ">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td width="140" class="tbUser-row" valign="top" style="padding-top:20px">
                            <div id="div_anh_dai_dien">
                                <img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" alt="" width="130" height="160" class="userImg">
                            </div>
                            <div class="padTop10">
                                <a name="href-anh_dai_dien"></a>
                                <input type="image" src="<?php echo base_url(); ?>template/home/img/btnUpAnh.gif" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntv_quan_tri_show_box_popup_doi_anh_dai_dien();
                                            dat_trang_thai_xu_ly_xong();
                                            return false;
                                        }">
                            </div><div id="div_xoa_anh_dai_dien"></div></td>
                        <td valign="top" class="padTop10">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><a name="href-ho_ten"></a>
                                            <input type="text" class="textbox" name="txt_ho_ten" id="txt_ho_ten" style="width:210px" value="<?php echo $info_list[0]['u_fullname']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
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
                                                            <input type="image" src="<?php echo base_url(); ?>template/home/img/iconCalendar.gif" onclick="show_box_popup_calendar(12, 08, 1981, 'ngay_sinh', '', '', '', '', '#7214AE');
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
                                        <td width="120" valign="top" class="tbUser-row"><b>Địa chỉ (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><a name="href-dia_chi"></a>
                                            <input type="text" class="textbox" name="txt_dia_chi" id="txt_dia_chi" style="width:210px" value="<?php echo $info_list[0]['u_adress']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                        return(false);
                                                    }">
                                            <div id="err_dia_chi" class="textRed11"></div></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="tbUser-row"><b>Tỉnh/ thành phố (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><a name="href-tinh"></a>
                                            <select class="dropbox" name="select_tinh" id="select_tinh">
                                                <option value="-1">-- Chọn tỉnh --</option>
                                                <option value="2" selected="">Hà Nội</option><option value="1">TP. HCM</option><option value="23">Đà Nẵng</option><option value="9">Bình Dương</option><option value="21">Cần Thơ</option><option value="22">Hải Phòng</option><option value="53">Bà Rịa - Vũng Tàu</option><option value="91">Bắc Giang</option><option value="92">Bắc Kạn</option><option value="94">Thừa Thiên Huế</option><option value="32">Bắc Ninh</option><option value="90">Bến Tre</option><option value="93">Bạc Liêu</option><option value="89">Bình Định</option><option value="88">Bình Phước</option><option value="87">Bình Thuận</option><option value="86">Cà Mau</option><option value="85">Cao Bằng</option><option value="84">Cửu Long</option><option value="83">Đắc Lắc</option><option value="52">An Giang</option><option value="82">Đắc Nông</option><option value="81">Điện Biên</option><option value="19">Đồng Nai</option><option value="80">Đồng Tháp</option><option value="79">Gia Lai</option><option value="78">Hà Giang</option><option value="77">Hà Nam</option><option value="76">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="75">Hậu Giang</option><option value="74">Hòa Bình</option><option value="26">Hưng Yên</option><option value="73">Khánh Hòa</option><option value="72">Kiên Giang</option><option value="71">Kon Tum</option><option value="70">Lai Châu</option><option value="69">Lạng Sơn</option><option value="68">Lào Cai</option><option value="67">Lâm Đồng</option><option value="66">Long An</option><option value="65">Nam Định</option><option value="64">Nghệ An</option><option value="63">Ninh Bình</option><option value="62">Ninh Thuận</option><option value="61">Phú Thọ</option><option value="60">Phú Yên</option><option value="59">Quảng Bình</option><option value="58">Quảng Nam</option><option value="30">Quảng Ngãi</option><option value="57">Quảng Ninh</option><option value="56">Quảng Trị</option><option value="55">Sóc Trăng</option><option value="54">Sơn La</option><option value="51">Tây Ninh</option><option value="50">Thái Bình</option><option value="49">Thái Nguyên</option><option value="48">Thanh Hóa</option><option value="47">Tiền Giang</option><option value="46">Trà Vinh</option><option value="45">Tuyên Quang</option><option value="44">Vĩnh Long</option><option value="43">Vĩnh Phúc</option><option value="42">Yên Bái</option><option value="95">Toàn quốc</option><option value="96">Miền Bắc</option><option value="98">Miền Nam</option><option value="97">Miền Trung</option>
                                            </select><div id="err_tinh" class="textRed11"></div></td>
                                    </tr>
                                    <tr>
                                        <td width="120" valign="top" class="tbUser-row"><b>Số điện thoại:</b></td>
                                        <td class="tbUser-row"><a name="href-so_dien_thoai"></a>
                                            <input type="text" class="textbox" name="txt_dien_thoai_lien_he" id="txt_dien_thoai_lien_he" style="width:210px" value="<?php echo $info_list[0]['u_mobi']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                        return(false);
                                                    }">
                                            <div id="err_so_dien_thoai" class="textRed11"></div></td>
                                    </tr>
                                    <tr>
                                        <td width="120" valign="top" class="tbUser-row"><b>Email (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><a name="href-email_lien_he"></a>
                                            <input type="text" class="textbox" name="txt_email_lien_he" id="txt_email_lien_he" style="width:210px" value="<?php echo $info_list[0]['u_email']; ?>" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                        return(false);
                                                    }">
                                            <div id="err_email_lien_he" class="textRed11"></div></td>
                                    </tr>    
                                    <tr>
                                        <td></td>
                                        <td height="60" class="tbUser-row">
                                            <input type="submit" class="button" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                        ntv_quan_tri_cap_nhat_thong_tin_tai_khoan();
                                                    }">
                                        </td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
    <br>
    <br>
    <div id="thong_tin_cu" style="display:none">
        <hr style="height:1px; color:#7214AE; background:#7214AE;">
        <br>
        <span style="color:blue;font-size:14px;">Thông tin đã được duyệt:</span>
        <br>
        <br>
        <div class="tbInfo-header br-L br-R">
            Thông tin cá nhân
        </div>
        <div class="padBot10 br-L br-R br-B ">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td width="140" class="tbUser-row" valign="top" style="padding-top:20px"></td>
                        <td valign="top" class="padTop10">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td width="125" valign="top" class="tbUser-row"><b>Họ và tên (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_fullname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="tbUser-row"><b>Ngày sinh (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_birthday']; ?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="tbUser-row"><b>Giới tính:</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_sex']; ?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="tbUser-row"><b>Tình trạng hôn nhân:</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_marry']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="120" valign="top" class="tbUser-row"><b>Địa chỉ (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_adress']; ?></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="tbUser-row"><b>Tỉnh/ thành phố (<span class="textRed">*</span>):</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_cityID']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="120" valign="top" class="tbUser-row"><b>Số điện thoại:</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_mobi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="120" valign="top" class="tbUser-row"><b>Email:</b></td>
                                        <td class="tbUser-row"><?php echo $info_list[0]['u_email']; ?></td>
                                    </tr>
                                </tbody>
                            </table></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>