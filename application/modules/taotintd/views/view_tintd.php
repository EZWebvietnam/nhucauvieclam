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
                                                    <option value="-1">-- Chọn cấp bậc --</option>
                                                    <option value="3">Quản trị cấp cao</option><option value="4">Trưởng/Phó phòng</option><option value="5">Tư vấn/Trợ lý</option><option value="6">Chuyên gia</option><option value="7">Nhân viên</option><option value="9">Trưởng nhóm/Giám sát</option><option value="10">Kỹ thuật viên/kỹ sư</option><option value="11">Chuyên viên</option><option value="8">Khác</option>
                                                </select><div id="err_chuc_vu" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Chọn ngành nghề: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(Chỉ được chọn 1 ngành nghề cấp 1)</i></td>
                                            <td class="tbUser-row"><a name="href-nganh_nghe"></a>
                                                <input type="text" class="textbox ac_input" name="txt_nganh_nghe" id="txt_nganh_nghe" value="Nhập ngành nghề cấp 1 cần chọn vào đây" onblur="if (this.value == '')
                                                            this.value = 'Nhập ngành nghề cấp 1 cần chọn vào đây';" onfocus="if (this.value == 'Nhập ngành nghề cấp 1 cần chọn vào đây')
                                                                        this.value = '';" title="Đánh tên ngành cấp 1 bạn muốn tìm, chọn trong danh sách hiển thị, sau đó chọn chi tiết ngành cấp 2 trong ô bên dưới" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                                    return(false);
                                                                                }" autocomplete="off">
                                                <input type="hidden" name="nganh_nghe_cap_1" id="nganh_nghe_cap_1" value="-1">
                                                <input type="hidden" name="list_nganh_cap2" id="list_nganh_cap2" value="">
                                                <input type="hidden" name="them_nganh_cap1_tu_suggestion" id="them_nganh_cap1_tu_suggestion" value="">
                                                <div class="listTruong" id="div_listNganh">
                                                    <input type="hidden" name="tong_so_nganh_cap1" id="tong_so_nganh_cap1" value="68">
                                                    <div id="hien_thi_nganh_cap1_0">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[0]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(89,0);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[0]" value="89" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(89, 0)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_0').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_0').style.textDecoration = 'none';" id="b_ten_nganh_cap1_0" style="text-decoration: none;"> Ô tô - Xe máy</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_0" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_89" id="list_nganh_cap2_89" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_89" id="tong_so_nganh_cap2_89" value="0">
                                                    <div id="hien_thi_nganh_cap1_1">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[1]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(63,1);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[1]" value="63" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(63, 1)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_1').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_1').style.textDecoration = 'none';" id="b_ten_nganh_cap1_1" style="text-decoration: none;"> Bán hàng </b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_1" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_63" id="list_nganh_cap2_63" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_63" id="tong_so_nganh_cap2_63" value="0">
                                                    <div id="hien_thi_nganh_cap1_2">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[2]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(49,2);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[2]" value="49" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(49, 2)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_2').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_2').style.textDecoration = 'none';" id="b_ten_nganh_cap1_2" style="text-decoration: none;"> Báo chí-Truyền hình</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_2" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_49" id="list_nganh_cap2_49" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_49" id="tong_so_nganh_cap2_49" value="0">
                                                    <div id="hien_thi_nganh_cap1_3">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[3]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(1,3);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[3]" value="1" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(1, 3)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_3').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_3').style.textDecoration = 'none';" id="b_ten_nganh_cap1_3"> Bảo hiểm</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_3" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_1" id="list_nganh_cap2_1" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_1" id="tong_so_nganh_cap2_1" value="0">
                                                    <div id="hien_thi_nganh_cap1_4">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[4]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(94,4);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[4]" value="94" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(94, 4)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_4').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_4').style.textDecoration = 'none';" id="b_ten_nganh_cap1_4"> Bảo vệ</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_4" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_94" id="list_nganh_cap2_94" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_94" id="tong_so_nganh_cap2_94" value="0">
                                                    <div id="hien_thi_nganh_cap1_5">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[5]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(79,5);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[5]" value="79" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(79, 5)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_5').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_5').style.textDecoration = 'none';" id="b_ten_nganh_cap1_5"> Biên-Phiên dịch</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_5" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_79" id="list_nganh_cap2_79" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_79" id="tong_so_nganh_cap2_79" value="0">
                                                    <div id="hien_thi_nganh_cap1_6">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[6]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(2,6);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[6]" value="2" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(2, 6)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_6').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_6').style.textDecoration = 'none';" id="b_ten_nganh_cap1_6"> Bưu chính</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_6" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_2" id="list_nganh_cap2_2" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_2" id="tong_so_nganh_cap2_2" value="0">
                                                    <div id="hien_thi_nganh_cap1_7">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[7]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(88,7);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[7]" value="88" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(88, 7)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_7').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_7').style.textDecoration = 'none';" id="b_ten_nganh_cap1_7"> Công nghệ cao</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_7" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_88" id="list_nganh_cap2_88" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_88" id="tong_so_nganh_cap2_88" value="0">
                                                    <div id="hien_thi_nganh_cap1_8">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[8]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(90,8);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[8]" value="90" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(90, 8)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_8').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_8').style.textDecoration = 'none';" id="b_ten_nganh_cap1_8"> Công nghiệp</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_8" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_90" id="list_nganh_cap2_90" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_90" id="tong_so_nganh_cap2_90" value="0">
                                                    <div id="hien_thi_nganh_cap1_9">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[9]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(101,9);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[9]" value="101" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(101, 9)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_9').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_9').style.textDecoration = 'none';" id="b_ten_nganh_cap1_9"> Chứng khoán- Vàng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_9" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_101" id="list_nganh_cap2_101" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_101" id="tong_so_nganh_cap2_101" value="0">
                                                    <div id="hien_thi_nganh_cap1_10">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[10]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(4,10);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[10]" value="4" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(4, 10)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_10').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_10').style.textDecoration = 'none';" id="b_ten_nganh_cap1_10"> Cơ khí-Chế tạo</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_10" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_4" id="list_nganh_cap2_4" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_4" id="tong_so_nganh_cap2_4" value="0">
                                                    <div id="hien_thi_nganh_cap1_11">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[11]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(6,11);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[11]" value="6" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(6, 11)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_11').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_11').style.textDecoration = 'none';" id="b_ten_nganh_cap1_11"> Dầu khí-Hóa chất</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_11" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_6" id="list_nganh_cap2_6" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_6" id="tong_so_nganh_cap2_6" value="0">
                                                    <div id="hien_thi_nganh_cap1_12">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[12]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(50,12);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[12]" value="50" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(50, 12)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_12').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_12').style.textDecoration = 'none';" id="b_ten_nganh_cap1_12"> Dệt may - Da giày</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_12" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_50" id="list_nganh_cap2_50" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_50" id="tong_so_nganh_cap2_50" value="0">
                                                    <div id="hien_thi_nganh_cap1_13">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[13]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(7,13);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[13]" value="7" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(7, 13)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_13').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_13').style.textDecoration = 'none';" id="b_ten_nganh_cap1_13"> Dịch vụ</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_13" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_7" id="list_nganh_cap2_7" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_7" id="tong_so_nganh_cap2_7" value="0">
                                                    <div id="hien_thi_nganh_cap1_14">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[14]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(9,14);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[14]" value="9" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(9, 14)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_14').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_14').style.textDecoration = 'none';" id="b_ten_nganh_cap1_14"> Du lịch</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_14" style="display: none;">
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_9[0]').checked=!(document.getElementById('check_box_nganh_cap_2_9[0]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[0]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_9[]" id="check_box_nganh_cap_2_9[0]" value="132" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[0]', ',~,')">
                                                                        Hướng dẫn du lịch</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_9[1]').checked=!(document.getElementById('check_box_nganh_cap_2_9[1]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[1]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_9[]" id="check_box_nganh_cap_2_9[1]" value="133" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[1]', ',~,')">
                                                                        Kinh doanh du lịch</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_9[2]').checked=!(document.getElementById('check_box_nganh_cap_2_9[2]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[2]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_9[]" id="check_box_nganh_cap_2_9[2]" value="135" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[2]', ',~,')">
                                                                        Quản trị lữ hành</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_9[3]').checked=!(document.getElementById('check_box_nganh_cap_2_9[3]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[3]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_9[]" id="check_box_nganh_cap_2_9[3]" value="134" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_9[3]', ',~,')">
                                                                        Quản trị lưu trú du lịch</a>
                                                                </li>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_9" id="list_nganh_cap2_9" value="132,~,133,~,135,~,134">
                                                    <input type="hidden" name="tong_so_nganh_cap2_9" id="tong_so_nganh_cap2_9" value="4">
                                                    <div id="hien_thi_nganh_cap1_15">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[15]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(76,15);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[15]" value="76" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(76, 15)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_15').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_15').style.textDecoration = 'none';" id="b_ten_nganh_cap1_15"> Game</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_15" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_76" id="list_nganh_cap2_76" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_76" id="tong_so_nganh_cap2_76" value="0">
                                                    <div id="hien_thi_nganh_cap1_16">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[16]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(10,16);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[16]" value="10" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(10, 16)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_16').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_16').style.textDecoration = 'none';" id="b_ten_nganh_cap1_16"> Giáo dục-Đào tạo</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_16" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_10" id="list_nganh_cap2_10" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_10" id="tong_so_nganh_cap2_10" value="0">
                                                    <div id="hien_thi_nganh_cap1_17">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[17]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(85,17);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[17]" value="85" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(85, 17)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_17').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_17').style.textDecoration = 'none';" id="b_ten_nganh_cap1_17"> Hàng gia dụng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_17" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_85" id="list_nganh_cap2_85" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_85" id="tong_so_nganh_cap2_85" value="0">
                                                    <div id="hien_thi_nganh_cap1_18">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[18]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(57,18);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[18]" value="57" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(57, 18)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_18').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_18').style.textDecoration = 'none';" id="b_ten_nganh_cap1_18"> Hàng hải</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_18" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_57" id="list_nganh_cap2_57" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_57" id="tong_so_nganh_cap2_57" value="0">
                                                    <div id="hien_thi_nganh_cap1_19">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[19]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(55,19);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[19]" value="55" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(55, 19)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_19').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_19').style.textDecoration = 'none';" id="b_ten_nganh_cap1_19"> Hàng không</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_19" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_55" id="list_nganh_cap2_55" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_55" id="tong_so_nganh_cap2_55" value="0">
                                                    <div id="hien_thi_nganh_cap1_20">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[20]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(38,20);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[20]" value="38" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(38, 20)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_20').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_20').style.textDecoration = 'none';" id="b_ten_nganh_cap1_20"> Hành chính-Văn phòng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_20" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_38" id="list_nganh_cap2_38" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_38" id="tong_so_nganh_cap2_38" value="0">
                                                    <div id="hien_thi_nganh_cap1_21">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[21]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(87,21);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[21]" value="87" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(87, 21)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_21').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_21').style.textDecoration = 'none';" id="b_ten_nganh_cap1_21"> Hoá học-Sinh học</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_21" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_87" id="list_nganh_cap2_87" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_87" id="tong_so_nganh_cap2_87" value="0">
                                                    <div id="hien_thi_nganh_cap1_22">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[22]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(93,22);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[22]" value="93" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(93, 22)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_22').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_22').style.textDecoration = 'none';" id="b_ten_nganh_cap1_22"> Hoạch định-Dự án</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_22" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_93" id="list_nganh_cap2_93" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_93" id="tong_so_nganh_cap2_93" value="0">
                                                    <div id="hien_thi_nganh_cap1_23">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[23]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(12,23);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[23]" value="12" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(12, 23)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_23').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_23').style.textDecoration = 'none';" id="b_ten_nganh_cap1_23"> In ấn-Xuất bản</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_23" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_12" id="list_nganh_cap2_12" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_12" id="tong_so_nganh_cap2_12" value="0">
                                                    <div id="hien_thi_nganh_cap1_24">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[24]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(5,24);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[24]" value="5" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(5, 24)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_24').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_24').style.textDecoration = 'none';" id="b_ten_nganh_cap1_24"> IT phần cứng/mạng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_24" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_5" id="list_nganh_cap2_5" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_5" id="tong_so_nganh_cap2_5" value="0">
                                                    <div id="hien_thi_nganh_cap1_25">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[25]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(74,25);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[25]" value="74" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(74, 25)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_25').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_25').style.textDecoration = 'none';" id="b_ten_nganh_cap1_25"> IT phần mềm</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_25" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_74" id="list_nganh_cap2_74" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_74" id="tong_so_nganh_cap2_74" value="0">
                                                    <div id="hien_thi_nganh_cap1_26">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[26]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(30,26);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[26]" value="30" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(30, 26)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_26').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_26').style.textDecoration = 'none';" id="b_ten_nganh_cap1_26"> Kế toán-Kiểm toán</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_26" style="display: none;">
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[0]').checked=!(document.getElementById('check_box_nganh_cap_2_30[0]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[0]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[0]" value="129" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[0]', ',~,')">
                                                                        kế toán kho</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[1]').checked=!(document.getElementById('check_box_nganh_cap_2_30[1]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[1]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[1]" value="128" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[1]', ',~,')">
                                                                        kế toán ngân hàng</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[2]').checked=!(document.getElementById('check_box_nganh_cap_2_30[2]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[2]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[2]" value="124" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[2]', ',~,')">
                                                                        Kế toán quản trị</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[3]').checked=!(document.getElementById('check_box_nganh_cap_2_30[3]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[3]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[3]" value="123" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[3]', ',~,')">
                                                                        Kế toán tài chính</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[4]').checked=!(document.getElementById('check_box_nganh_cap_2_30[4]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[4]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[4]" value="125" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[4]', ',~,')">
                                                                        Kế toán thuế</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[5]').checked=!(document.getElementById('check_box_nganh_cap_2_30[5]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[5]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[5]" value="126" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[5]', ',~,')">
                                                                        Kiểm toán</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[6]').checked=!(document.getElementById('check_box_nganh_cap_2_30[6]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[6]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[6]" value="131" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[6]', ',~,')">
                                                                        Thủ quỹ</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: document.getElementById('check_box_nganh_cap_2_30[7]').checked=!(document.getElementById('check_box_nganh_cap_2_30[7]').checked); ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[7]',',~,');">
                                                                        <input type="checkbox" name="check_box_nganh_cap_2_30[]" id="check_box_nganh_cap_2_30[7]" value="130" onclick="ntd_ntv_quan_tri_chon_nganh_cap_2('check_box_nganh_cap_2_30[7]', ',~,')">
                                                                        Thu ngân</a>
                                                                </li>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_30" id="list_nganh_cap2_30" value="129,~,128,~,124,~,123,~,125,~,126,~,131,~,130">
                                                    <input type="hidden" name="tong_so_nganh_cap2_30" id="tong_so_nganh_cap2_30" value="8">
                                                    <div id="hien_thi_nganh_cap1_27">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[27]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(16,27);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[27]" value="16" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(16, 27)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_27').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_27').style.textDecoration = 'none';" id="b_ten_nganh_cap1_27"> Kỹ thuật</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_27" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_16" id="list_nganh_cap2_16" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_16" id="tong_so_nganh_cap2_16" value="0">
                                                    <div id="hien_thi_nganh_cap1_28">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[28]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(61,28);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[28]" value="61" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(61, 28)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_28').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_28').style.textDecoration = 'none';" id="b_ten_nganh_cap1_28"> Kỹ thuật ứng dụng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_28" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_61" id="list_nganh_cap2_61" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_61" id="tong_so_nganh_cap2_61" value="0">
                                                    <div id="hien_thi_nganh_cap1_29">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[29]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(81,29);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[29]" value="81" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(81, 29)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_29').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_29').style.textDecoration = 'none';" id="b_ten_nganh_cap1_29"> KD bất động sản</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_29" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_81" id="list_nganh_cap2_81" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_81" id="tong_so_nganh_cap2_81" value="0">
                                                    <div id="hien_thi_nganh_cap1_30">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[30]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(84,30);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[30]" value="84" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(84, 30)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_30').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_30').style.textDecoration = 'none';" id="b_ten_nganh_cap1_30"> Khách sạn-Nhà hàng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_30" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_84" id="list_nganh_cap2_84" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_84" id="tong_so_nganh_cap2_84" value="0">
                                                    <div id="hien_thi_nganh_cap1_31">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[31]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(15,31);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[31]" value="15" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(15, 31)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_31').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_31').style.textDecoration = 'none';" id="b_ten_nganh_cap1_31"> Kiến trúc-TK nội thất</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_31" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_15" id="list_nganh_cap2_15" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_15" id="tong_so_nganh_cap2_15" value="0">
                                                    <div id="hien_thi_nganh_cap1_32">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[32]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(26,32);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[32]" value="26" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(26, 32)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_32').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_32').style.textDecoration = 'none';" id="b_ten_nganh_cap1_32"> Lao động phổ thông</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_32" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_26" id="list_nganh_cap2_26" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_26" id="tong_so_nganh_cap2_26" value="0">
                                                    <div id="hien_thi_nganh_cap1_33">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[33]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(48,33);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[33]" value="48" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(48, 33)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_33').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_33').style.textDecoration = 'none';" id="b_ten_nganh_cap1_33"> Làm bán thời gian</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_33" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_48" id="list_nganh_cap2_48" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_48" id="tong_so_nganh_cap2_48" value="0">
                                                    <div id="hien_thi_nganh_cap1_34">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[34]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(53,34);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[34]" value="53" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(53, 34)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_34').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_34').style.textDecoration = 'none';" id="b_ten_nganh_cap1_34"> Marketing-PR</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_34" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_53" id="list_nganh_cap2_53" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_53" id="tong_so_nganh_cap2_53" value="0">
                                                    <div id="hien_thi_nganh_cap1_35">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[35]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(20,35);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[35]" value="20" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(20, 35)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_35').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_35').style.textDecoration = 'none';" id="b_ten_nganh_cap1_35"> Mỹ phẩm-Trang sức</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_35" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_20" id="list_nganh_cap2_20" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_20" id="tong_so_nganh_cap2_20" value="0">
                                                    <div id="hien_thi_nganh_cap1_36">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[36]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(17,36);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[36]" value="17" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(17, 36)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_36').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_36').style.textDecoration = 'none';" id="b_ten_nganh_cap1_36"> Nông-Lâm-Ngư nghiệp</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_36" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_17" id="list_nganh_cap2_17" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_17" id="tong_so_nganh_cap2_17" value="0">
                                                    <div id="hien_thi_nganh_cap1_37">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[37]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(44,37);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[37]" value="44" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(44, 37)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_37').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_37').style.textDecoration = 'none';" id="b_ten_nganh_cap1_37"> Ngành nghề khác</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_37" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_44" id="list_nganh_cap2_44" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_44" id="tong_so_nganh_cap2_44" value="0">
                                                    <div id="hien_thi_nganh_cap1_38">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[38]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(22,38);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[38]" value="22" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(22, 38)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_38').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_38').style.textDecoration = 'none';" id="b_ten_nganh_cap1_38"> Ngân hàng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_38" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_22" id="list_nganh_cap2_22" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_22" id="tong_so_nganh_cap2_22" value="0">
                                                    <div id="hien_thi_nganh_cap1_39">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[39]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(62,39);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[39]" value="62" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(62, 39)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_39').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_39').style.textDecoration = 'none';" id="b_ten_nganh_cap1_39"> Nghệ thuật - Điện ảnh</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_39" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_62" id="list_nganh_cap2_62" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_62" id="tong_so_nganh_cap2_62" value="0">
                                                    <div id="hien_thi_nganh_cap1_40">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[40]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(78,40);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[40]" value="78" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(78, 40)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_40').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_40').style.textDecoration = 'none';" id="b_ten_nganh_cap1_40"> Người giúp việc</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_40" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_78" id="list_nganh_cap2_78" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_78" id="tong_so_nganh_cap2_78" value="0">
                                                    <div id="hien_thi_nganh_cap1_41">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[41]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(59,41);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[41]" value="59" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(59, 41)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_41').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_41').style.textDecoration = 'none';" id="b_ten_nganh_cap1_41"> Nhân sự</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_41" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_59" id="list_nganh_cap2_59" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_59" id="tong_so_nganh_cap2_59" value="0">
                                                    <div id="hien_thi_nganh_cap1_42">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[42]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(96,42);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[42]" value="96" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(96, 42)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_42').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_42').style.textDecoration = 'none';" id="b_ten_nganh_cap1_42"> Nhân viên kinh doanh</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_42" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_96" id="list_nganh_cap2_96" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_96" id="tong_so_nganh_cap2_96" value="0">
                                                    <div id="hien_thi_nganh_cap1_43">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[43]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(65,43);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[43]" value="65" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(65, 43)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_43').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_43').style.textDecoration = 'none';" id="b_ten_nganh_cap1_43"> NV trông quán Internet</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_43" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_65" id="list_nganh_cap2_65" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_65" id="tong_so_nganh_cap2_65" value="0">
                                                    <div id="hien_thi_nganh_cap1_44">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[44]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(18,44);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[44]" value="18" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(18, 44)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_44').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_44').style.textDecoration = 'none';" id="b_ten_nganh_cap1_44"> Pháp lý</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_44" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_18" id="list_nganh_cap2_18" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_18" id="tong_so_nganh_cap2_18" value="0">
                                                    <div id="hien_thi_nganh_cap1_45">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[45]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(92,45);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[45]" value="92" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(92, 45)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_45').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_45').style.textDecoration = 'none';" id="b_ten_nganh_cap1_45"> Promotion Girl (PG)</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_45" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_92" id="list_nganh_cap2_92" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_92" id="tong_so_nganh_cap2_92" value="0">
                                                    <div id="hien_thi_nganh_cap1_46">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[46]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(28,46);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[46]" value="28" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(28, 46)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_46').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_46').style.textDecoration = 'none';" id="b_ten_nganh_cap1_46"> Quan hệ đối ngoại</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_46" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_28" id="list_nganh_cap2_28" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_28" id="tong_so_nganh_cap2_28" value="0">
                                                    <div id="hien_thi_nganh_cap1_47">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[47]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(14,47);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[47]" value="14" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(14, 47)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_47').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_47').style.textDecoration = 'none';" id="b_ten_nganh_cap1_47"> Quản trị kinh doanh</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_47" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_14" id="list_nganh_cap2_14" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_14" id="tong_so_nganh_cap2_14" value="0">
                                                    <div id="hien_thi_nganh_cap1_48">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[48]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(46,48);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[48]" value="46" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(46, 48)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_48').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_48').style.textDecoration = 'none';" id="b_ten_nganh_cap1_48"> Sinh viên làm thêm</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_48" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_46" id="list_nganh_cap2_46" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_46" id="tong_so_nganh_cap2_46" value="0">
                                                    <div id="hien_thi_nganh_cap1_49">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[49]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(83,49);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[49]" value="83" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(83, 49)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_49').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_49').style.textDecoration = 'none';" id="b_ten_nganh_cap1_49"> Tổ chức sự kiện-Quà tặng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_49" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_83" id="list_nganh_cap2_83" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_83" id="tong_so_nganh_cap2_83" value="0">
                                                    <div id="hien_thi_nganh_cap1_50">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[50]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(86,50);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[50]" value="86" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(86, 50)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_50').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_50').style.textDecoration = 'none';" id="b_ten_nganh_cap1_50"> Thời trang</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_50" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_86" id="list_nganh_cap2_86" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_86" id="tong_so_nganh_cap2_86" value="0">
                                                    <div id="hien_thi_nganh_cap1_51">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[51]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(33,51);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[51]" value="33" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(33, 51)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_51').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_51').style.textDecoration = 'none';" id="b_ten_nganh_cap1_51"> Thủ công mỹ nghệ</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_51" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_33" id="list_nganh_cap2_33" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_33" id="tong_so_nganh_cap2_33" value="0">
                                                    <div id="hien_thi_nganh_cap1_52">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[52]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(34,52);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[52]" value="34" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(34, 52)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_52').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_52').style.textDecoration = 'none';" id="b_ten_nganh_cap1_52"> Thực phẩm-Đồ uống</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_52" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_34" id="list_nganh_cap2_34" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_34" id="tong_so_nganh_cap2_34" value="0">
                                                    <div id="hien_thi_nganh_cap1_53">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[53]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(52,53);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[53]" value="52" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(52, 53)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_53').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_53').style.textDecoration = 'none';" id="b_ten_nganh_cap1_53"> Thực tập</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_53" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_52" id="list_nganh_cap2_52" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_52" id="tong_so_nganh_cap2_52" value="0">
                                                    <div id="hien_thi_nganh_cap1_54">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[54]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(75,54);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[54]" value="75" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(75, 54)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_54').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_54').style.textDecoration = 'none';" id="b_ten_nganh_cap1_54"> Thiết kế đồ hoạ web</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_54" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_75" id="list_nganh_cap2_75" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_75" id="tong_so_nganh_cap2_75" value="0">
                                                    <div id="hien_thi_nganh_cap1_55">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[55]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(32,55);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[55]" value="32" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(32, 55)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_55').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_55').style.textDecoration = 'none';" id="b_ten_nganh_cap1_55"> Thiết kế-Mỹ thuật</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_55" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_32" id="list_nganh_cap2_32" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_32" id="tong_so_nganh_cap2_32" value="0">
                                                    <div id="hien_thi_nganh_cap1_56">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[56]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(91,56);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[56]" value="91" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(91, 56)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_56').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_56').style.textDecoration = 'none';" id="b_ten_nganh_cap1_56"> Thư ký-Trợ lý</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_56" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_91" id="list_nganh_cap2_91" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_91" id="tong_so_nganh_cap2_91" value="0">
                                                    <div id="hien_thi_nganh_cap1_57">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[57]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(77,57);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[57]" value="77" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(77, 57)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_57').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_57').style.textDecoration = 'none';" id="b_ten_nganh_cap1_57"> Thương mại điện tử</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_57" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_77" id="list_nganh_cap2_77" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_77" id="tong_so_nganh_cap2_77" value="0">
                                                    <div id="hien_thi_nganh_cap1_58">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[58]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(36,58);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[58]" value="36" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(36, 58)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_58').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_58').style.textDecoration = 'none';" id="b_ten_nganh_cap1_58"> Tiếp thị-Quảng cáo</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_58" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_36" id="list_nganh_cap2_36" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_36" id="tong_so_nganh_cap2_36" value="0">
                                                    <div id="hien_thi_nganh_cap1_59">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[59]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(37,59);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[59]" value="37" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(37, 59)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_59').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_59').style.textDecoration = 'none';" id="b_ten_nganh_cap1_59"> Tư vấn</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_59" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_37" id="list_nganh_cap2_37" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_37" id="tong_so_nganh_cap2_37" value="0">
                                                    <div id="hien_thi_nganh_cap1_60">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[60]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(39,60);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[60]" value="39" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(39, 60)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_60').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_60').style.textDecoration = 'none';" id="b_ten_nganh_cap1_60"> Vận tải - Lái xe</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_60" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_39" id="list_nganh_cap2_39" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_39" id="tong_so_nganh_cap2_39" value="0">
                                                    <div id="hien_thi_nganh_cap1_61">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[61]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(40,61);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[61]" value="40" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(40, 61)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_61').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_61').style.textDecoration = 'none';" id="b_ten_nganh_cap1_61"> Vật tư-Thiết bị</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_61" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_40" id="list_nganh_cap2_40" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_40" id="tong_so_nganh_cap2_40" value="0">
                                                    <div id="hien_thi_nganh_cap1_62">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[62]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(41,62);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[62]" value="41" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(41, 62)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_62').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_62').style.textDecoration = 'none';" id="b_ten_nganh_cap1_62"> Xây dựng</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_62" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_41" id="list_nganh_cap2_41" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_41" id="tong_so_nganh_cap2_41" value="0">
                                                    <div id="hien_thi_nganh_cap1_63">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[63]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(42,63);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[63]" value="42" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(42, 63)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_63').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_63').style.textDecoration = 'none';" id="b_ten_nganh_cap1_63"> Xuất, nhập khẩu</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_63" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_42" id="list_nganh_cap2_42" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_42" id="tong_so_nganh_cap2_42" value="0">
                                                    <div id="hien_thi_nganh_cap1_64">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[64]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(43,64);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[64]" value="43" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(43, 64)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_64').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_64').style.textDecoration = 'none';" id="b_ten_nganh_cap1_64"> Y tế-Dược</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_64" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_43" id="list_nganh_cap2_43" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_43" id="tong_so_nganh_cap2_43" value="0">
                                                    <div id="hien_thi_nganh_cap1_65">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[65]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(80,65);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[65]" value="80" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(80, 65)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_65').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_65').style.textDecoration = 'none';" id="b_ten_nganh_cap1_65"> Đầu tư</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_65" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_80" id="list_nganh_cap2_80" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_80" id="tong_so_nganh_cap2_80" value="0">
                                                    <div id="hien_thi_nganh_cap1_66">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[66]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(54,66);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[66]" value="54" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(54, 66)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_66').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_66').style.textDecoration = 'none';" id="b_ten_nganh_cap1_66"> Điện tử viễn thông</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_66" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_54" id="list_nganh_cap2_54" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_54" id="tong_so_nganh_cap2_54" value="0">
                                                    <div id="hien_thi_nganh_cap1_67">
                                                        <a href="javascript: document.getElementById('radio_nganh_cap_1[67]').checked=true; ntd_ntv_quan_tri_chon_nganh_cap1(8,67);">
                                                            <input type="radio" name="radio_nganh_cap_1" id="radio_nganh_cap_1[67]" value="8" onclick="ntd_ntv_quan_tri_chon_nganh_cap1(8, 67)">
                                                            <b onmouseover="document.getElementById('b_ten_nganh_cap1_67').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_nganh_cap1_67').style.textDecoration = 'none';" id="b_ten_nganh_cap1_67"> Điện-Điện tử</b></a>
                                                        <ul class="searchList">
                                                            <div id="hien_thi_nganh_cap_2_67" style="display: none;"></div>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" name="list_nganh_cap2_8" id="list_nganh_cap2_8" value="">
                                                    <input type="hidden" name="tong_so_nganh_cap2_8" id="tong_so_nganh_cap2_8" value="0">
                                                </div><div id="err_nganh_nghe" class="textRed11"></div></td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"></td>
                                            <td class="tbUser-row">
                                                <input type="radio" name="radio_hien_thi_nganh_duoc_chon" id="radio_hien_thi_nganh_duoc_chon" value="1" checked="" onclick="ntd_ntv_quan_tri_hien_thi_nganh_duoc_chon(1)">
                                                <a href="javascript:document.getElementById('radio_hien_thi_nganh_duoc_chon').checked=true;ntd_ntv_quan_tri_hien_thi_nganh_duoc_chon(1);">Hiển thị ngành cấp 1 được chọn</a>
                                                <br>
                                                <input type="radio" name="radio_hien_thi_nganh_duoc_chon" id="radio_hien_thi_nganh_duoc_chon_0" value="0" checked="" onclick="ntd_ntv_quan_tri_hien_thi_nganh_duoc_chon(0)">
                                                <a href="javascript:document.getElementById('radio_hien_thi_nganh_duoc_chon_0').checked=true;ntd_ntv_quan_tri_hien_thi_nganh_duoc_chon(0);">Hiển thị tất cả các ngành cấp 1</a>
                                                <script>
                                                    ntd_ntv_quan_tri_hien_thi_nganh_duoc_chon(0);
                                                </script></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Địa điểm làm việc: <span class="textRed">*</span></b>
                                                <br>
                                                <i class="text11 textRed">(tối đa 10 địa điểm)</i></td>
                                            <td class="tbUser-row"><a name="href-tinh"></a>
                                                <input type="text" class="textbox ac_input" name="txt_tinh" id="txt_tinh" value="Nhập tỉnh thành cần chọn vào đây" onblur="if (this.value == '')
                                                            this.value = 'Nhập tỉnh thành cần chọn vào đây';" onfocus="if (this.value == 'Nhập tỉnh thành cần chọn vào đây')
                                                                        this.value = '';" title="Đánh tên tỉnh bạn cần tìm vào, chọn tên tỉnh trong danh sách hiển thị, tỉnh sẽ tự động được chọn ở box dưới" onkeypress="if (event.keyCode == 13 || event.keyCode == '13') {
                                                                                    return(false);
                                                                                }" autocomplete="off">
                                                <input type="hidden" name="list_tinh" id="list_tinh" value="">
                                                <input type="hidden" name="them_tinh_tu_suggestion" id="them_tinh_tu_suggestion" value="">
                                                <div class="listTruong" id="div_listTinh">
                                                    <input type="hidden" name="tong_so_tinh" id="tong_so_tinh" value="68">
                                                    <div id="hien_thi_tinh_0">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[0]" value="2" onclick="ntd_ntv_quan_tri_chon_tinh(0, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[0]').checked=!(document.getElementById('checkbox_tinh[0]').checked); ntd_ntv_quan_tri_chon_tinh(0,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_0').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_0').style.textDecoration = 'none';" id="b_ten_tinh_0">Hà Nội</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_1">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[1]" value="1" onclick="ntd_ntv_quan_tri_chon_tinh(1, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[1]').checked=!(document.getElementById('checkbox_tinh[1]').checked); ntd_ntv_quan_tri_chon_tinh(1,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_1').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_1').style.textDecoration = 'none';" id="b_ten_tinh_1">TP. HCM</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_2">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[2]" value="23" onclick="ntd_ntv_quan_tri_chon_tinh(2, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[2]').checked=!(document.getElementById('checkbox_tinh[2]').checked); ntd_ntv_quan_tri_chon_tinh(2,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_2').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_2').style.textDecoration = 'none';" id="b_ten_tinh_2">Đà Nẵng</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_3">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[3]" value="9" onclick="ntd_ntv_quan_tri_chon_tinh(3, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[3]').checked=!(document.getElementById('checkbox_tinh[3]').checked); ntd_ntv_quan_tri_chon_tinh(3,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_3').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_3').style.textDecoration = 'none';" id="b_ten_tinh_3">Bình Dương</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_4">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[4]" value="21" onclick="ntd_ntv_quan_tri_chon_tinh(4, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[4]').checked=!(document.getElementById('checkbox_tinh[4]').checked); ntd_ntv_quan_tri_chon_tinh(4,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_4').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_4').style.textDecoration = 'none';" id="b_ten_tinh_4">Cần Thơ</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_5">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[5]" value="22" onclick="ntd_ntv_quan_tri_chon_tinh(5, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[5]').checked=!(document.getElementById('checkbox_tinh[5]').checked); ntd_ntv_quan_tri_chon_tinh(5,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_5').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_5').style.textDecoration = 'none';" id="b_ten_tinh_5">Hải Phòng</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_6">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[6]" value="53" onclick="ntd_ntv_quan_tri_chon_tinh(6, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[6]').checked=!(document.getElementById('checkbox_tinh[6]').checked); ntd_ntv_quan_tri_chon_tinh(6,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_6').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_6').style.textDecoration = 'none';" id="b_ten_tinh_6">Bà Rịa - Vũng Tàu</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_7">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[7]" value="91" onclick="ntd_ntv_quan_tri_chon_tinh(7, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[7]').checked=!(document.getElementById('checkbox_tinh[7]').checked); ntd_ntv_quan_tri_chon_tinh(7,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_7').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_7').style.textDecoration = 'none';" id="b_ten_tinh_7">Bắc Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_8">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[8]" value="92" onclick="ntd_ntv_quan_tri_chon_tinh(8, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[8]').checked=!(document.getElementById('checkbox_tinh[8]').checked); ntd_ntv_quan_tri_chon_tinh(8,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_8').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_8').style.textDecoration = 'none';" id="b_ten_tinh_8">Bắc Kạn</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_9">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[9]" value="94" onclick="ntd_ntv_quan_tri_chon_tinh(9, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[9]').checked=!(document.getElementById('checkbox_tinh[9]').checked); ntd_ntv_quan_tri_chon_tinh(9,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_9').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_9').style.textDecoration = 'none';" id="b_ten_tinh_9">Thừa Thiên Huế</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_10">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[10]" value="32" onclick="ntd_ntv_quan_tri_chon_tinh(10, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[10]').checked=!(document.getElementById('checkbox_tinh[10]').checked); ntd_ntv_quan_tri_chon_tinh(10,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_10').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_10').style.textDecoration = 'none';" id="b_ten_tinh_10">Bắc Ninh</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_11">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[11]" value="90" onclick="ntd_ntv_quan_tri_chon_tinh(11, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[11]').checked=!(document.getElementById('checkbox_tinh[11]').checked); ntd_ntv_quan_tri_chon_tinh(11,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_11').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_11').style.textDecoration = 'none';" id="b_ten_tinh_11">Bến Tre</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_12">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[12]" value="93" onclick="ntd_ntv_quan_tri_chon_tinh(12, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[12]').checked=!(document.getElementById('checkbox_tinh[12]').checked); ntd_ntv_quan_tri_chon_tinh(12,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_12').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_12').style.textDecoration = 'none';" id="b_ten_tinh_12">Bạc Liêu</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_13">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[13]" value="89" onclick="ntd_ntv_quan_tri_chon_tinh(13, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[13]').checked=!(document.getElementById('checkbox_tinh[13]').checked); ntd_ntv_quan_tri_chon_tinh(13,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_13').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_13').style.textDecoration = 'none';" id="b_ten_tinh_13">Bình Định</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_14">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[14]" value="88" onclick="ntd_ntv_quan_tri_chon_tinh(14, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[14]').checked=!(document.getElementById('checkbox_tinh[14]').checked); ntd_ntv_quan_tri_chon_tinh(14,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_14').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_14').style.textDecoration = 'none';" id="b_ten_tinh_14">Bình Phước</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_15">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[15]" value="87" onclick="ntd_ntv_quan_tri_chon_tinh(15, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[15]').checked=!(document.getElementById('checkbox_tinh[15]').checked); ntd_ntv_quan_tri_chon_tinh(15,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_15').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_15').style.textDecoration = 'none';" id="b_ten_tinh_15">Bình Thuận</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_16">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[16]" value="86" onclick="ntd_ntv_quan_tri_chon_tinh(16, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[16]').checked=!(document.getElementById('checkbox_tinh[16]').checked); ntd_ntv_quan_tri_chon_tinh(16,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_16').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_16').style.textDecoration = 'none';" id="b_ten_tinh_16">Cà Mau</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_17">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[17]" value="85" onclick="ntd_ntv_quan_tri_chon_tinh(17, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[17]').checked=!(document.getElementById('checkbox_tinh[17]').checked); ntd_ntv_quan_tri_chon_tinh(17,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_17').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_17').style.textDecoration = 'none';" id="b_ten_tinh_17">Cao Bằng</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_18">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[18]" value="84" onclick="ntd_ntv_quan_tri_chon_tinh(18, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[18]').checked=!(document.getElementById('checkbox_tinh[18]').checked); ntd_ntv_quan_tri_chon_tinh(18,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_18').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_18').style.textDecoration = 'none';" id="b_ten_tinh_18">Cửu Long</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_19">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[19]" value="83" onclick="ntd_ntv_quan_tri_chon_tinh(19, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[19]').checked=!(document.getElementById('checkbox_tinh[19]').checked); ntd_ntv_quan_tri_chon_tinh(19,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_19').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_19').style.textDecoration = 'none';" id="b_ten_tinh_19">Đắc Lắc</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_20">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[20]" value="52" onclick="ntd_ntv_quan_tri_chon_tinh(20, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[20]').checked=!(document.getElementById('checkbox_tinh[20]').checked); ntd_ntv_quan_tri_chon_tinh(20,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_20').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_20').style.textDecoration = 'none';" id="b_ten_tinh_20">An Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_21">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[21]" value="82" onclick="ntd_ntv_quan_tri_chon_tinh(21, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[21]').checked=!(document.getElementById('checkbox_tinh[21]').checked); ntd_ntv_quan_tri_chon_tinh(21,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_21').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_21').style.textDecoration = 'none';" id="b_ten_tinh_21">Đắc Nông</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_22">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[22]" value="81" onclick="ntd_ntv_quan_tri_chon_tinh(22, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[22]').checked=!(document.getElementById('checkbox_tinh[22]').checked); ntd_ntv_quan_tri_chon_tinh(22,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_22').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_22').style.textDecoration = 'none';" id="b_ten_tinh_22">Điện Biên</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_23">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[23]" value="19" onclick="ntd_ntv_quan_tri_chon_tinh(23, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[23]').checked=!(document.getElementById('checkbox_tinh[23]').checked); ntd_ntv_quan_tri_chon_tinh(23,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_23').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_23').style.textDecoration = 'none';" id="b_ten_tinh_23">Đồng Nai</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_24">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[24]" value="80" onclick="ntd_ntv_quan_tri_chon_tinh(24, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[24]').checked=!(document.getElementById('checkbox_tinh[24]').checked); ntd_ntv_quan_tri_chon_tinh(24,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_24').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_24').style.textDecoration = 'none';" id="b_ten_tinh_24">Đồng Tháp</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_25">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[25]" value="79" onclick="ntd_ntv_quan_tri_chon_tinh(25, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[25]').checked=!(document.getElementById('checkbox_tinh[25]').checked); ntd_ntv_quan_tri_chon_tinh(25,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_25').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_25').style.textDecoration = 'none';" id="b_ten_tinh_25">Gia Lai</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_26">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[26]" value="78" onclick="ntd_ntv_quan_tri_chon_tinh(26, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[26]').checked=!(document.getElementById('checkbox_tinh[26]').checked); ntd_ntv_quan_tri_chon_tinh(26,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_26').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_26').style.textDecoration = 'none';" id="b_ten_tinh_26">Hà Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_27">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[27]" value="77" onclick="ntd_ntv_quan_tri_chon_tinh(27, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[27]').checked=!(document.getElementById('checkbox_tinh[27]').checked); ntd_ntv_quan_tri_chon_tinh(27,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_27').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_27').style.textDecoration = 'none';" id="b_ten_tinh_27">Hà Nam</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_28">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[28]" value="76" onclick="ntd_ntv_quan_tri_chon_tinh(28, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[28]').checked=!(document.getElementById('checkbox_tinh[28]').checked); ntd_ntv_quan_tri_chon_tinh(28,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_28').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_28').style.textDecoration = 'none';" id="b_ten_tinh_28">Hà Tĩnh</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_29">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[29]" value="27" onclick="ntd_ntv_quan_tri_chon_tinh(29, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[29]').checked=!(document.getElementById('checkbox_tinh[29]').checked); ntd_ntv_quan_tri_chon_tinh(29,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_29').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_29').style.textDecoration = 'none';" id="b_ten_tinh_29">Hải Dương</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_30">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[30]" value="75" onclick="ntd_ntv_quan_tri_chon_tinh(30, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[30]').checked=!(document.getElementById('checkbox_tinh[30]').checked); ntd_ntv_quan_tri_chon_tinh(30,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_30').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_30').style.textDecoration = 'none';" id="b_ten_tinh_30">Hậu Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_31">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[31]" value="74" onclick="ntd_ntv_quan_tri_chon_tinh(31, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[31]').checked=!(document.getElementById('checkbox_tinh[31]').checked); ntd_ntv_quan_tri_chon_tinh(31,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_31').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_31').style.textDecoration = 'none';" id="b_ten_tinh_31">Hòa Bình</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_32">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[32]" value="26" onclick="ntd_ntv_quan_tri_chon_tinh(32, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[32]').checked=!(document.getElementById('checkbox_tinh[32]').checked); ntd_ntv_quan_tri_chon_tinh(32,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_32').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_32').style.textDecoration = 'none';" id="b_ten_tinh_32">Hưng Yên</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_33">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[33]" value="73" onclick="ntd_ntv_quan_tri_chon_tinh(33, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[33]').checked=!(document.getElementById('checkbox_tinh[33]').checked); ntd_ntv_quan_tri_chon_tinh(33,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_33').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_33').style.textDecoration = 'none';" id="b_ten_tinh_33">Khánh Hòa</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_34">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[34]" value="72" onclick="ntd_ntv_quan_tri_chon_tinh(34, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[34]').checked=!(document.getElementById('checkbox_tinh[34]').checked); ntd_ntv_quan_tri_chon_tinh(34,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_34').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_34').style.textDecoration = 'none';" id="b_ten_tinh_34">Kiên Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_35">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[35]" value="71" onclick="ntd_ntv_quan_tri_chon_tinh(35, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[35]').checked=!(document.getElementById('checkbox_tinh[35]').checked); ntd_ntv_quan_tri_chon_tinh(35,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_35').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_35').style.textDecoration = 'none';" id="b_ten_tinh_35">Kon Tum</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_36">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[36]" value="70" onclick="ntd_ntv_quan_tri_chon_tinh(36, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[36]').checked=!(document.getElementById('checkbox_tinh[36]').checked); ntd_ntv_quan_tri_chon_tinh(36,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_36').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_36').style.textDecoration = 'none';" id="b_ten_tinh_36">Lai Châu</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_37">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[37]" value="69" onclick="ntd_ntv_quan_tri_chon_tinh(37, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[37]').checked=!(document.getElementById('checkbox_tinh[37]').checked); ntd_ntv_quan_tri_chon_tinh(37,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_37').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_37').style.textDecoration = 'none';" id="b_ten_tinh_37">Lạng Sơn</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_38">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[38]" value="68" onclick="ntd_ntv_quan_tri_chon_tinh(38, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[38]').checked=!(document.getElementById('checkbox_tinh[38]').checked); ntd_ntv_quan_tri_chon_tinh(38,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_38').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_38').style.textDecoration = 'none';" id="b_ten_tinh_38">Lào Cai</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_39">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[39]" value="67" onclick="ntd_ntv_quan_tri_chon_tinh(39, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[39]').checked=!(document.getElementById('checkbox_tinh[39]').checked); ntd_ntv_quan_tri_chon_tinh(39,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_39').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_39').style.textDecoration = 'none';" id="b_ten_tinh_39">Lâm Đồng</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_40">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[40]" value="66" onclick="ntd_ntv_quan_tri_chon_tinh(40, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[40]').checked=!(document.getElementById('checkbox_tinh[40]').checked); ntd_ntv_quan_tri_chon_tinh(40,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_40').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_40').style.textDecoration = 'none';" id="b_ten_tinh_40">Long An</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_41">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[41]" value="65" onclick="ntd_ntv_quan_tri_chon_tinh(41, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[41]').checked=!(document.getElementById('checkbox_tinh[41]').checked); ntd_ntv_quan_tri_chon_tinh(41,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_41').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_41').style.textDecoration = 'none';" id="b_ten_tinh_41">Nam Định</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_42">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[42]" value="64" onclick="ntd_ntv_quan_tri_chon_tinh(42, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[42]').checked=!(document.getElementById('checkbox_tinh[42]').checked); ntd_ntv_quan_tri_chon_tinh(42,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_42').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_42').style.textDecoration = 'none';" id="b_ten_tinh_42">Nghệ An</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_43">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[43]" value="63" onclick="ntd_ntv_quan_tri_chon_tinh(43, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[43]').checked=!(document.getElementById('checkbox_tinh[43]').checked); ntd_ntv_quan_tri_chon_tinh(43,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_43').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_43').style.textDecoration = 'none';" id="b_ten_tinh_43">Ninh Bình</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_44">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[44]" value="62" onclick="ntd_ntv_quan_tri_chon_tinh(44, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[44]').checked=!(document.getElementById('checkbox_tinh[44]').checked); ntd_ntv_quan_tri_chon_tinh(44,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_44').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_44').style.textDecoration = 'none';" id="b_ten_tinh_44">Ninh Thuận</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_45">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[45]" value="61" onclick="ntd_ntv_quan_tri_chon_tinh(45, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[45]').checked=!(document.getElementById('checkbox_tinh[45]').checked); ntd_ntv_quan_tri_chon_tinh(45,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_45').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_45').style.textDecoration = 'none';" id="b_ten_tinh_45">Phú Thọ</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_46">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[46]" value="60" onclick="ntd_ntv_quan_tri_chon_tinh(46, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[46]').checked=!(document.getElementById('checkbox_tinh[46]').checked); ntd_ntv_quan_tri_chon_tinh(46,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_46').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_46').style.textDecoration = 'none';" id="b_ten_tinh_46">Phú Yên</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_47">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[47]" value="59" onclick="ntd_ntv_quan_tri_chon_tinh(47, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[47]').checked=!(document.getElementById('checkbox_tinh[47]').checked); ntd_ntv_quan_tri_chon_tinh(47,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_47').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_47').style.textDecoration = 'none';" id="b_ten_tinh_47">Quảng Bình</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_48">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[48]" value="58" onclick="ntd_ntv_quan_tri_chon_tinh(48, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[48]').checked=!(document.getElementById('checkbox_tinh[48]').checked); ntd_ntv_quan_tri_chon_tinh(48,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_48').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_48').style.textDecoration = 'none';" id="b_ten_tinh_48">Quảng Nam</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_49">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[49]" value="30" onclick="ntd_ntv_quan_tri_chon_tinh(49, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[49]').checked=!(document.getElementById('checkbox_tinh[49]').checked); ntd_ntv_quan_tri_chon_tinh(49,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_49').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_49').style.textDecoration = 'none';" id="b_ten_tinh_49">Quảng Ngãi</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_50">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[50]" value="57" onclick="ntd_ntv_quan_tri_chon_tinh(50, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[50]').checked=!(document.getElementById('checkbox_tinh[50]').checked); ntd_ntv_quan_tri_chon_tinh(50,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_50').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_50').style.textDecoration = 'none';" id="b_ten_tinh_50">Quảng Ninh</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_51">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[51]" value="56" onclick="ntd_ntv_quan_tri_chon_tinh(51, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[51]').checked=!(document.getElementById('checkbox_tinh[51]').checked); ntd_ntv_quan_tri_chon_tinh(51,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_51').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_51').style.textDecoration = 'none';" id="b_ten_tinh_51">Quảng Trị</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_52">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[52]" value="55" onclick="ntd_ntv_quan_tri_chon_tinh(52, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[52]').checked=!(document.getElementById('checkbox_tinh[52]').checked); ntd_ntv_quan_tri_chon_tinh(52,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_52').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_52').style.textDecoration = 'none';" id="b_ten_tinh_52">Sóc Trăng</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_53">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[53]" value="54" onclick="ntd_ntv_quan_tri_chon_tinh(53, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[53]').checked=!(document.getElementById('checkbox_tinh[53]').checked); ntd_ntv_quan_tri_chon_tinh(53,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_53').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_53').style.textDecoration = 'none';" id="b_ten_tinh_53">Sơn La</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_54">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[54]" value="51" onclick="ntd_ntv_quan_tri_chon_tinh(54, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[54]').checked=!(document.getElementById('checkbox_tinh[54]').checked); ntd_ntv_quan_tri_chon_tinh(54,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_54').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_54').style.textDecoration = 'none';" id="b_ten_tinh_54">Tây Ninh</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_55">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[55]" value="50" onclick="ntd_ntv_quan_tri_chon_tinh(55, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[55]').checked=!(document.getElementById('checkbox_tinh[55]').checked); ntd_ntv_quan_tri_chon_tinh(55,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_55').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_55').style.textDecoration = 'none';" id="b_ten_tinh_55">Thái Bình</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_56">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[56]" value="49" onclick="ntd_ntv_quan_tri_chon_tinh(56, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[56]').checked=!(document.getElementById('checkbox_tinh[56]').checked); ntd_ntv_quan_tri_chon_tinh(56,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_56').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_56').style.textDecoration = 'none';" id="b_ten_tinh_56">Thái Nguyên</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_57">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[57]" value="48" onclick="ntd_ntv_quan_tri_chon_tinh(57, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[57]').checked=!(document.getElementById('checkbox_tinh[57]').checked); ntd_ntv_quan_tri_chon_tinh(57,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_57').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_57').style.textDecoration = 'none';" id="b_ten_tinh_57">Thanh Hóa</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_58">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[58]" value="47" onclick="ntd_ntv_quan_tri_chon_tinh(58, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[58]').checked=!(document.getElementById('checkbox_tinh[58]').checked); ntd_ntv_quan_tri_chon_tinh(58,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_58').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_58').style.textDecoration = 'none';" id="b_ten_tinh_58">Tiền Giang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_59">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[59]" value="46" onclick="ntd_ntv_quan_tri_chon_tinh(59, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[59]').checked=!(document.getElementById('checkbox_tinh[59]').checked); ntd_ntv_quan_tri_chon_tinh(59,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_59').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_59').style.textDecoration = 'none';" id="b_ten_tinh_59">Trà Vinh</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_60">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[60]" value="45" onclick="ntd_ntv_quan_tri_chon_tinh(60, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[60]').checked=!(document.getElementById('checkbox_tinh[60]').checked); ntd_ntv_quan_tri_chon_tinh(60,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_60').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_60').style.textDecoration = 'none';" id="b_ten_tinh_60">Tuyên Quang</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_61">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[61]" value="44" onclick="ntd_ntv_quan_tri_chon_tinh(61, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[61]').checked=!(document.getElementById('checkbox_tinh[61]').checked); ntd_ntv_quan_tri_chon_tinh(61,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_61').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_61').style.textDecoration = 'none';" id="b_ten_tinh_61">Vĩnh Long</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_62">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[62]" value="43" onclick="ntd_ntv_quan_tri_chon_tinh(62, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[62]').checked=!(document.getElementById('checkbox_tinh[62]').checked); ntd_ntv_quan_tri_chon_tinh(62,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_62').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_62').style.textDecoration = 'none';" id="b_ten_tinh_62">Vĩnh Phúc</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_63">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[63]" value="42" onclick="ntd_ntv_quan_tri_chon_tinh(63, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[63]').checked=!(document.getElementById('checkbox_tinh[63]').checked); ntd_ntv_quan_tri_chon_tinh(63,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_63').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_63').style.textDecoration = 'none';" id="b_ten_tinh_63">Yên Bái</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_64">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[64]" value="95" onclick="ntd_ntv_quan_tri_chon_tinh(64, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[64]').checked=!(document.getElementById('checkbox_tinh[64]').checked); ntd_ntv_quan_tri_chon_tinh(64,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_64').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_64').style.textDecoration = 'none';" id="b_ten_tinh_64">Toàn quốc</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_65">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[65]" value="96" onclick="ntd_ntv_quan_tri_chon_tinh(65, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[65]').checked=!(document.getElementById('checkbox_tinh[65]').checked); ntd_ntv_quan_tri_chon_tinh(65,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_65').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_65').style.textDecoration = 'none';" id="b_ten_tinh_65">Miền Bắc</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_66">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[66]" value="98" onclick="ntd_ntv_quan_tri_chon_tinh(66, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[66]').checked=!(document.getElementById('checkbox_tinh[66]').checked); ntd_ntv_quan_tri_chon_tinh(66,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_66').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_66').style.textDecoration = 'none';" id="b_ten_tinh_66">Miền Nam</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="hien_thi_tinh_67">
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="checkbox_tinh[]" id="checkbox_tinh[67]" value="97" onclick="ntd_ntv_quan_tri_chon_tinh(67, ',~,', 10)">
                                                                    </td><td style="padding-left:5px;"><a href="javascript: document.getElementById('checkbox_tinh[67]').checked=!(document.getElementById('checkbox_tinh[67]').checked); ntd_ntv_quan_tri_chon_tinh(67,',~,',10);"> <b onmouseover="document.getElementById('b_ten_tinh_67').style.textDecoration = 'underline';" onmouseout="document.getElementById('b_ten_tinh_67').style.textDecoration = 'none';" id="b_ten_tinh_67">Miền Trung</b></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><div id="err_tinh" class="textRed11"></div></td>
                                            <td width="30"></td>
                                            <td class="tbUser-row"></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"></td>
                                            <td class="tbUser-row">
                                                <input type="radio" name="radio_hien_thi_tinh_duoc_chon" id="radio_hien_thi_tinh_duoc_chon" value="1" checked="" onclick="ntd_ntv_quan_tri_hien_thi_tinh_duoc_chon(1)">
                                                <a href="javascript:document.getElementById('radio_hien_thi_tinh_duoc_chon').checked=true;ntd_ntv_quan_tri_hien_thi_tinh_duoc_chon(1);">Hiển thị các tỉnh-thành phố được chọn</a>
                                                <br>
                                                <input type="radio" name="radio_hien_thi_tinh_duoc_chon" id="radio_hien_thi_tinh_duoc_chon_0" value="0" checked="" onclick="ntd_ntv_quan_tri_hien_thi_tinh_duoc_chon(0)">
                                                <a href="javascript:document.getElementById('radio_hien_thi_tinh_duoc_chon_0').checked=true;ntd_ntv_quan_tri_hien_thi_tinh_duoc_chon(0);">Hiển thị tất cả các tỉnh-thành phố</a>
                                                <script>
                                                    ntd_ntv_quan_tri_hien_thi_tinh_duoc_chon(0);
                                                </script></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Hình thức làm việc: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-thoi_gian"></a>
                                                <select class="dropbox" name="thoi_gian_lam_viec" id="thoi_gian_lam_viec">
                                                    <option value="-1">-- Chọn hình thức làm việc --</option>
                                                    <option value="1">Toàn thời gian cố định</option><option value="2">Toàn thời gian tạm thời</option><option value="3">Bán thời gian cố định</option><option value="4">Bán thời gian tạm thời</option><option value="5">Theo hợp đồng tư vấn</option><option value="6">Thực tập</option><option value="7">Khác</option>
                                                </select><div id="err_thoi_gian" class="textRed11"></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-row"><b>Mức lương: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-muc_luong"></a>
                                                <select class="dropbox" name="muc_luong" id="muc_luong">
                                                    <option value="-1">-- Chọn mức lương --</option>
                                                    <option value="1">Thỏa thuận</option><option value="2">1 - 3 triệu</option><option value="3">3 - 5 triệu</option><option value="4">5 - 7 triệu</option><option value="5">7 – 10 triệu</option><option value="6">10 – 15 triệu</option><option value="7">15 – 20 triệu</option><option value="8">20 – 30 triệu</option><option value="9">Trên 30 triệu</option>
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
                                                    <option value="-1">-- Chọn số năm kinh nghiệm --</option>
                                                    <option value="8">Chưa có kinh nghiệm</option><option value="1">Dưới 1 năm</option><option value="2">1 năm</option><option value="3">2 năm</option><option value="4">3 năm</option><option value="5">4 năm</option><option value="6">5 năm</option><option value="7">Hơn 5 năm</option>
                                                </select><div id="err_so_nam_kinh_nghiem" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu bằng cấp: <span class="textRed">*</span></b></td>
                                            <td class="tbUser-row"><a name="href-trinh_do"></a>
                                                <select class="dropbox" name="trinh_do" id="trinh_do">
                                                    <option value="-1">-- Chọn yêu cầu bằng cấp --</option>
                                                    <option value="1">Trên đại học</option><option value="2">Đại học</option><option value="3">Cao đẳng</option><option value="4">Trung cấp</option><option value="5">Trung học</option><option value="6">Không yêu cầu</option>
                                                </select><div id="err_trinh_do" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu giới tính:</b></td>
                                            <td class="tbUser-row"><a name="href-c_gioi_tinh"></a>
                                                <select class="dropbox" name="c_gioi_tinh" id="c_gioi_tinh">
                                                    <option value="-1">-- Chọn yêu cầu giới tính --</option>
                                                    <option value="1">Nam</option>
                                                    <option value="0">Nữ</option>
                                                    <option value="2">Khác</option>
                                                </select><div id="err_c_gioi_tinh" class="textRed11"></div></td>
                                        </tr>
                                        <tr>
                                            <td width="125" valign="top" class="tbUser-row"><b>Yêu cầu độ tuổi:</b></td>
                                            <td class="tbUser-row"><a name="href-c_do_tuoi"></a>
                                                <select class="dropbox" name="c_do_tuoi" id="c_do_tuoi">
                                                    <option value="-1">-- Chọn yêu cầu độ tuổi --</option>
                                                    <option value="1">Dưới 18 tuổi</option><option value="2">18 - 24 tuổi</option><option value="3">25 - 29 tuổi</option><option value="4">30 - 34 tuổi</option><option value="5">35 - 39 tuổi</option><option value="6">40 - 44 tuổi</option><option value="7">Trên 45 tuổi</option>
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
                                                                <input type="text" class="textbox" style="width:110px" name="den_ngay" id="den_ngay" readonly="" value="" onclick="show_box_popup_calendar(23, 11, 2013, 'den_ngay', '', '', '', '', '');
                                                                        return false;">
                                                            </td>
                                                            <td width="30">
                                                                <input type="image" src="images/iconCalendar.gif" onclick="show_box_popup_calendar(23, 11, 2013, 'den_ngay', '', '', '', '', '');
                                                                        return false;">
                                                            </td>
                                                            <td>(dd-mm-yyyy)</td>
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
                            <td width="170" align="center" valign="top" class="padTop10"><img src="/upload/files_cua_nguoi_dung/logo/2013/11/23/1385194604_78577167.jpg" alt="" width="104" height="79"></td>
                            <td valign="top" class="padTop10">
                                <div id="thong_tin_cong_ty" style="display: inline;">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td width="145" valign="top" class="tbUser-info"><b>Tên công ty:</b></td>
                                                <td class="tbUser-info">CP DV Bảo Vệ An Tâm</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Quy mô công ty:</b></td>
                                                <td class="tbUser-info">Từ 100 - 499 nhân viên</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Sơ lược về công ty:</b></td>
                                                <td class="tbUser-info">Thành lập từ năm 2000, Tường An là một công ty kinh doanh chuyên về phụ kiện vi tính, thiết bị mạng và các thiết bị ngoại vi. Với môi trường làm việc năng động và hiệu quả, chúng tôi xây dựng đội ngũ nhân viên chuyên nghiệp, nhiệt tình, tinh thần trách nhiệm cao, để đưa công ty phát triển nhanh, đi đầu trong lĩnh vực kinh doanh của mình.</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info">Tầng 3, Số 7, Đường Số 49, P.Hiệp Bình Chánh, Q.Thủ Đức, Tp.HCM</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Mã số thuế:</b></td>
                                                <td class="tbUser-info"></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Website:</b></td>
                                                <td class="tbUser-info">baoveantam.net</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="buttonRed" value="Sửa" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = 'none';
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
                                                    <input type="text" class="textbox" name="ten_cty" id="ten_cty" value="CP DV Bảo Vệ An Tâm">
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
                                                <td class="tbUser-info">																	<textarea class="textArea" style="width:450px;height:80px" name="mo_ta_cty" id="mo_ta_cty">Thành lập từ năm 2000, Tường An là một công ty kinh doanh chuyên về phụ kiện vi tính, thiết bị mạng và các thiết bị ngoại vi. Với môi trường làm việc năng động và hiệu quả, chúng tôi xây dựng đội ngũ nhân viên chuyên nghiệp, nhiệt tình, tinh thần trách nhiệm cao, để đưa công ty phát triển nhanh, đi đầu trong lĩnh vực kinh doanh của mình.</textarea><div id="err_mo_ta_cty" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_lien_he" id="dia_chi_lien_he" value="Tầng 3, Số 7, Đường Số 49, P.Hiệp Bình Chánh, Q.Thủ Đức, Tp.HCM">
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
                                                    <input type="text" class="textbox" name="website" id="website" value="baoveantam.net">
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
                                                    <input type="button" class="buttonRed" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_thong_tin_ntd();
                                                            }">
                                                    <input type="button" class="buttonRed" value="Hủy" onclick="javascript:document.getElementById('thong_tin_cong_ty').style.display = '';
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
                                                <td class="tbUser-info">Đoàn Quang Thắng</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info">Tầng 3, Số 7, Đường Số 49, P.Hiệp Bình Chánh, Q.Thủ Đức, Tp.HCM</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info"><a href="mailto:quangthang12891@gmail.com" title="">quangthang12891@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info">0962925599</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="button" class="buttonRed" value="Sửa" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = 'none';
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
                                                    <input type="text" class="textbox" name="nguoi_lien_he" id="nguoi_lien_he" value="Đoàn Quang Thắng">
                                                    <div id="err_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Địa chỉ liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dia_chi_nguoi_lien_he" id="dia_chi_nguoi_lien_he" value="Tầng 3, Số 7, Đường Số 49, P.Hiệp Bình Chánh, Q.Thủ Đức, Tp.HCM">
                                                    <div id="err_dia_chi_nguoi_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Email liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="email_lien_he" id="email_lien_he" value="quangthang12891@gmail.com">
                                                    <div id="err_email_lien_he" class="textRed11"></div></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="tbUser-info"><b>Điện thoại liên hệ:</b></td>
                                                <td class="tbUser-info">
                                                    <input type="text" class="textbox" name="dien_thoai_lien_he" id="dien_thoai_lien_he" value="0962925599">
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
                                                    <input type="button" class="buttonRed" value="Cập nhật" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                                                ntd_quan_tri_thay_doi_lien_he_ntd();
                                                                return(false);
                                                            }">
                                                    <input type="button" class="buttonRed" value="Hủy" onclick="javascript:document.getElementById('thong_tin_lien_he').style.display = '';
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
                            <td colspan="2">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Mã bảo mật:</b></td>
                                            <td class="tbUser-info">
                                                <div id="div_ma_xac_minh"><img src="/security_image.php?time=1385195608" id="security_image" name="security_image" alt="" width="65" height="31">
                                                </div></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" class="tbUser-info"><b>Nhập mã bảo mật (<span class="textRed">*</span>):</b></td>
                                            <td class="tbUser-info"><a name="href-ma_xac_minh"></a>
                                                <input type="text" class="textbox" name="txt_ma_xac_minh" id="txt_ma_xac_minh" onkeydown="if (event.keyCode == 13 || event.keyCode == '13') {
                                                            return(false);
                                                        }">
                                                <div id="err_ma_xac_minh" class="textRed11"></div></td>
                                        </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="borderBot" height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="10"></td>
                        </tr>
                        <tr>
                            <td class="tbUser-row" valign="top" colspan="2" align="center">
                                <input type="button" class="button" value="Xem trước" onclick="javascript: ntd_quan_tri_xem_truoc_tin_td()">
                                &nbsp;&nbsp;
                                <input type="button" class="button" value="Lưu tạm" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntd_quan_tri_ghi_lai_tin_td('luu_tam');
                                        }">
                                &nbsp;&nbsp;
                                <input type="button" class="button" value="Đăng tuyển" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                                            ntd_quan_tri_ghi_lai_tin_td('dang_tin');
                                        }">
                                &nbsp;&nbsp;
                                <input type="button" class="button" value="Quay lại" onclick="javascript: window.location.href = '/ntd-trang-quan-tri-tin-tuyen-dung.html';" title="Về trang quản lý tin tuyển dụng">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <script src="/js/HeaderScriptHandler.js"></script>
        <script src="/temp/ds_tinh.js"></script>
        <script src="/temp/ds_nganh_cap1.js"></script>
        <script>
                                    set_focus(document.forms['form_cap_nhat_tin_td']);
                                    SetAutoComplete(ds_tinh, 'txt_tinh', 'them_tinh_tu_suggestion', 'them_tinh_tu_suggestion', 150, 'ntd_ntv_quan_tri_them_tinh_tu_suggestion(",~,",10)');
                                    SetAutoComplete(ds_nganh_cap1, 'txt_nganh_nghe', 'txt_nganh_nghe', 'them_nganh_cap1_tu_suggestion', 150, 'ntd_ntv_quan_tri_them_nganh_cap_1_tu_suggestion()');
        </script>
        <!--</div> -->
    </div>
    <div name="div_mau_tin_tuyen_dung" id="div_mau_tin_tuyen_dung">
        <!--<div name='div_mau_tin_tuyen_dung' id='div_mau_tin_tuyen_dung'> -->
        <div class="colRight-QT1">
            <div>
                <b class="text15">MẪU TIN TUYỂN DỤNG</b>
            </div>
            <div class="borderBot"></div>
            <div id="div_hien_thi_nganh_thu_1" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Báo chí-Truyền hình</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=75&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_75" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_75').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=75';
                                            }">
                                    Tuyển Trưởng ban Biên tập và Phóng viên </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_1_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=76&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_76" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_76').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=76';
                                            }">
                                    Nhân viên phát triển nội dung Website </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_2" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">IT phần cứng/mạng</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_2_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=71&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_71" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_71').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=71';
                                            }">
                                    Chuyên viên quản trị Cơ sở dữ liệu </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_2_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=72&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_72" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_72').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=72';
                                            }">
                                    Tuyển gấp 02 Leader Quản trị hệ thống Server có kinh nghiệm (lương hấp dẫn) </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_3" style="display:inline;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">IT phần mềm</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=73&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_73" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_73').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=73';
                                            }">
                                    Tuyển Senior Android Developer </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_3_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=74&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_74" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_74').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=74';
                                            }">
                                    Nhân viên quản trị WebSite </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_4" style="display:none;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Kế toán-Kiểm toán</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=1&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_1" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_1').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=1';
                                            }">
                                    Phó phòng Tài chính và chuyên viên Tài chính </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=22&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_22" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_22').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=22';
                                            }">
                                    Kế toán tổng hợp 2 năm kinh nghiệm </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_4_tin_mau_3" style="display:none;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=63&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_63" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_63').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=63';
                                            }">
                                    Nhân viên Kế toán Thuế lương 7-8 triệu </a>
                            </li>
                        </div>
                    </ul>
                    <div class="ntd_chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_4_tin_mau_">
                        <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_4_tin_mau_', 3, 2, -1, 'Xem thêm', 'Thu gọn')" title="Xem tất cả các mẫu tin tuyển dụng ngành này">Xem thêm</a>
                    </div>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div id="div_hien_thi_nganh_thu_5" style="display:none;">
                <div class="HSMauItem">
                    <span class="searchGroupMauTin">Nhân viên kinh doanh</span><div class="clear"></div>
                    <ul class="HSMau">
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_1" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=69&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_69" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_69').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=69';
                                            }">
                                    Nhân viên kinh doanh tại Hà Nội </a>
                            </li>
                        </div>
                        <div id="div_hien_thi_nganh_thu_5_tin_mau_2" style="display:inline;">
                            <li>
                                <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=70&amp;id_tin_td=-1" title="">
                                    <input type="checkbox" id="mau_tin_tuyen_dung_70" onclick="javascript: if (document.getElementById('mau_tin_tuyen_dung_70').checked) {
                                                window.location.href = '/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_mau_tin_td=70';
                                            }">
                                    Nhân viên kinh doanh quảng cáo online tại HN - lương (5-&gt;10 triệu đồng) </a>
                            </li>
                        </div>
                    </ul>
                    <script language="javascript" type="text/javascript"></script>
                </div>
            </div>
            <div class="ntd_chiTiet mar-T-B-10" id="nut_bam_div_hien_thi_nganh_thu_">
                <a href="javascript: hien_thi_cac_div_an_trong_list_div('div_hien_thi_nganh_thu_',5, 3, -1, 'Xem tất cả các ngành', 'Thu gọn danh sách các ngành')" title="Xem tất cả các ngành có tin tuyển dụng mẫu">Xem tất cả các ngành</a>
            </div>
            <script language="javascript" type="text/javascript"></script>
        </div>
        <!--</div> -->
    </div><div class="clear"></div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_90") != null) {
            document.getElementById("a_menu_lv2_90").style.color = "#518c04";
        }
    </script>
</div>