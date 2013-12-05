<div class="content-qlhs">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div>
        <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Việc làm 24h thông báo: Từ 6/10 KHÔNG GIỚI HẠN SỐ LẦN LÀM MỚI </span>
        </marquee>
    </div>
    <div class="navBar">
        <div class="navBarLeft">
            <h2><span class="navBarTxt24-1">Việc làm đã ứng tuyển</span></h2>
        </div>
        <div class="navBarRight">
            <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
        </div>
        <div class="clear"></div>
    </div>
    <div name="div_ntv_quan_tri_viec_lam_da_ung_tuyen" id="div_ntv_quan_tri_viec_lam_da_ung_tuyen">
        <form name="form_ds_viec_lam_da_ung_tuyen" id="form_ds_viec_lam_da_ung_tuyen" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_ds_viec_lam_da_ung_tuyen" width="0" height="0" style="visibility:hidden"></iframe>
            <div class="marBot7">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td class="tb-header" width="5" align="center">
                                <input type="checkbox" id="checkbox_viec_lam_da_ung_tuyen_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[', ']', 0, document.getElementById('checkbox_viec_lam_da_ung_tuyen_all').checked)">
                            </td>
                            <td class="tb-header" width="200">Tên việc làm</td>
                            <td class="tb-header" width="200">Tên công ty</td>
                            <td class="tb-header" width="80">Nơi làm việc</td>
                            <td class="tb-header" width="85">Mức lương</td>
                            <td class="tb-header" width="85">Ngày đăng</td>
                            <td class="tb-header" width="90">Hạn nộp hồ sơ</td>
                            <td class="tb-header" width="90">Ngày nộp</td>
                            <td class="tb-header" width="95">Thao tác</td>

                        </tr>
                    <input type="hidden" name="tong_so_viec_lam_da_ung_tuyen" id="tong_so_viec_lam_da_ung_tuyen" value="0">
                    <input type="hidden" name="page" id="page" value="1">
                    <input type="hidden" name="number_items" id="number_items" value="15">
                    <tr>
                        <td class="tb-row-W" align="center">
                            <input type="checkbox" name="checkbox_viec_lam_da_ung_tuyen[]" id="checkbox_viec_lam_da_ung_tuyen[0]" value="1330523">
                        </td>
                        <td class="tb-row-W"><b><a href="/it-phan-cung/mang/nhan-vien-cong-nghe-thong-tin-c5p1id1330523.html" target="_blank" title="Click để xem thông tin chi tiết việc làm" class="linkBlack" onmouseover="tooltip.show('&lt;table width=420 cellpadding=1 cellspacing=1 border=0 bgcolor=#d7d7d7&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=textBoldBlue14&gt;Nhân viên công nghệ thông tin&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Công ty:&lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;Công ty TNHH tin học Gôn Ta&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 style=&quot;width:60px;&quot;&gt;&lt;span class=textBoldBlue14&gt;Số lượng:&lt;/span&gt;&lt;/td&gt;&lt;td class=DSTT_row_L14 &gt;&lt;span class=textBoldBlue14&gt;1&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=DSTT_row_L14 colspan=2&gt;&lt;span class=tt-tieude&gt;Mô tả công việc:&lt;/span&gt;&lt;div class=textBoldBlack14 style=&quot;padding-left:15px;padding-top:5px;&quot;&gt;- Tiếng Anh giao tiếp được&lt;br/&gt;- Tốt nghiệp trung cấp, Cao đẳng hoặc Đại học, chuyên ngành Công nghệ thông tin&lt;br/&gt;- Có khả năng phân tích và xử lý sự cố mạng, hệ thống Server, máy tính&lt;br/&gt;- Giao tiếp tốt, sẵn sàng học hỏi và chia sẻ&lt;br/&gt;- Ngoại hình cân đối, ưa nhìn&lt;br/&gt;- Thật thà, trung thực&lt;br/&gt;- Có định hướng làm việc lâu dài&lt;br/&gt;- Có khả năng chịu áp lực cao&lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;');" onmouseout="tooltip.hide();"><?php echo $ungtuyen_detail[0]['e_title']; ?></a></b>
                            <br>
                            <span>Ngành: <?php echo $ungtuyen_detail[0]['e_ngheID']; ?>
                            <?php echo $ungtuyen_detail[0]['e_ngheID1']; ?> <?php echo $ungtuyen_detail[0]['e_ngheID2']; ?> <?php echo $ungtuyen_detail[0]['e_ngheID3']; ?></span>
                            <br>
                            Số lượng: <?php echo $ungtuyen_detail[0]['e_mem']; ?> </td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['u_companyName']; ?></td>
                        <td class="tb-row-W" align="center" onmouseover="tooltip.show('Hải Dương');" onmouseout="tooltip.hide();"><?php echo $ungtuyen_detail[0]['e_cityID']; ?> <?php echo $ungtuyen_detail[0]['e_cityID1']; ?> <?php echo $ungtuyen_detail[0]['e_cityID2']; ?> <?php echo $ungtuyen_detail[0]['e_cityID3']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['e_luong']; ?> <?php echo $ungtuyen_detail[0]['e_luonga']; ?> <?php echo $ungtuyen_detail[0]['e_luongb']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['e_dateActive']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['e_lastDate']; ?></td>
                        <td class="tb-row-W" align="center"><?php echo $ungtuyen_detail[0]['e_datesave']; ?></td>
                        <td class="tb-row-W">
                            <div class="borderBot padTop5">
                                <a href="/it-phan-cung/mang/nhan-vien-cong-nghe-thong-tin-c5p1id1330523.html" target="_blank" title="Click để xem thông tin chi tiết việc làm">Xem</a>
                            </div>
                            <div class="padTop5">
                                <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_1_viec_lam_da_ung_tuyen(1330523); }" title="Hủy ứng tuyển việc làm đã ứng tuyển">Hủy ứng tuyển</a>
                            </div></td>
                    </tr>
                    </tbody>
                </table>
                <table width="100%" class="padTop10">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[',']',0,true)" title="Chọn tất cả các ứng viên trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_viec_lam_da_ung_tuyen[',']',0,false)" title="Bỏ chọn tất cả các ứng viên trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                            <td class="borderBot"><div class="pageList"></div></td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%">
                    <tbody>
                        <tr>
                            <td height="30" class="borderBot" width="700"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntv_quan_tri_xoa_ds_viec_lam_da_ung_tuyen(); }" title="Hủy ứng tuyển danh sách việc làm đã ứng tuyển" class="xoaHoSo">Hủy ứng tuyển</a></td>
                            <td class="borderBot" align="right"><b>Sắp xếp theo: </b>
                                <select class="dropBox" name="select_sap_xep_bottom" id="select_sap_xep_bottom" style="width:200px;" onchange="ntv_quan_tri_sap_xep_viec_lam_da_ung_tuyen('select_sap_xep_bottom', 'select_sap_xep_top')">
                                    <option value="thoi_gian_ung_tuyen_giam" selected="">Thời gian ứng tuyển giảm dần</option>
                                    <option value="thoi_gian_ung_tuyen_tang">Thời gian ứng tuyển tăng dần</option>
                                    <option value="thoi_gian_dang_tin_giam">Thời gian đăng tin giảm dần</option>
                                    <option value="thoi_gian_dang_tin_tang">Thời gian đăng tin tăng dần</option>
                                    <option value="thoi_gian_het_han_giam">Hạn nộp hồ sơ giảm dần</option>
                                    <option value="thoi_gian_het_han_tang">Hạn nộp hồ sơ tăng dần</option>
                                </select></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <!--</div> -->
        <script language="javascript" type="text/javascript"></script>
    </div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_71") != null) {
            document.getElementById("a_menu_lv2_71").style.color = "#518c04";
        }
    </script>
</div>