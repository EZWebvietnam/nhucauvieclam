<div class="content-qlhs">
    <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
    <div class="colCenter">
        <div>
            <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
                <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Việc làm 24h thông báo: Từ 6/10 KHÔNG GIỚI HẠN SỐ LẦN LÀM MỚI </span>
            </marquee>
        </div>
        <div name="div_ds_ttd" id="div_ds_ttd">
            <form name="form_ds_ttd" id="form_ds_ttd" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_ds_ttd" width="0" height="0" style="visibility:hidden"></iframe>
                <input type="hidden" name="tin_td_ds_thu_gon" id="tin_td_ds_thu_gon" value="1">
                <div class="marBot7">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header" width="50">Mã tin</td>
                                <td class="tb-header" width="150">Tiêu đề tuyển dụng</td>
                                <td class="tb-header" width="80">Ngày làm mới</td>
                                <td class="tb-header" width="80">Ngày đăng</td>
                                <td class="tb-header" width="80">Ngày cập nhật</td>
                                <td class="tb-header" width="80">Ngày hết hạn</td>
                                <td class="tb-header" width="85">Tình trạng tin</td>
                                <td class="tb-header" width="80">HS ứng tuyển</td>
                                <td class="tb-header" width="125">Thao tác</td>
                            </tr>
                            <tr style="">
                                <td class="tb-row-W" align="center"><?php echo $qltuyendung_detail[0]['j_id']; ?></td>
                                <td class="ntd_tb-row-W">
                                    <div class="cumTT-tieude">
                                        <b class="linkBlack">
                                            <a href="/bao-ve/cong-tac-vien-kinh-doanh-tinh-c94p1id1407482.html" target="_blank" title="CỘNG TÁC VIÊN KINH DOANH TỈNH" class="linkBlack">CỘNG TÁC VIÊN KINH DOANH TỈNH</a>
                                        </b>							<br><span style="font-size: 11px;"><?php echo $qltuyendung_detail[0]['j_nghe1']; ?><?php echo $qltuyendung_detail[0]['j_nghe2']; ?><?php echo $qltuyendung_detail[0]['j_nghe3']; ?></span>
                                        <br>
                                    </div>
                                </td>
                                <td class="tb-row-W" align="center"><?php echo $qltuyendung_detail[0]['j_update']; ?>						<br>(Số lần làm mới còn lại: <span class="textRed11">1000</span>)</td>
                                <td class="tb-row-W" align="center"><?php echo $qltuyendung_detail[0]['j_date']; ?></td>
                                <td class="tb-row-W" align="center"><?php echo $qltuyendung_detail[0]['j_update']; ?></td>
                                <td class="tb-row-W" align="center"><?php echo $qltuyendung_detail[0]['j_lastdate']; ?>						<br>(Số lần gia hạn còn lại: <span class="textRed11">3</span>)</td>
                                <td class="ntd_tb-row-W">
                                    Đã đăng					</td>
                                <td class="tb-row-W" align="center">0 <br> </td>
                                <td class="ntd_tb-row-W">
                                    <div class="borderBot padTop5"><a href="/bao-ve/cong-tac-vien-kinh-doanh-tinh-c94p1id1407482.html" title="" target="_blank">Xem</a> | <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_tin_td=1407482" title="">Sửa</a> | <a href='javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_1_ttd(1407482,"xoa_tam"); }' title="Xoá tạm tin tuyển dụng">Xóa</a></div><div class="borderBot padTop5"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_lam_moi_1_ttd(1407482); }" title="Làm mới tin tuyển dụng">Làm mới</a> | <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_gia_han_1_ttd(2384130,1407482); }" title="Gia hạn tin tuyển dụng">Gia hạn</a></div><div class="padTop5"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_xuat_ban_them_1_ttd(1407482); }" title="Xuất bản thêm tin tuyển dụng">Xuất bản thêm</a> | <a href='javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_doi_trang_thai_1_ttd(1407482,"an_tin"); }' title="Ẩn tin tuyển dụng, không cho hiển thị nữa">Ẩn tin</a></div>					</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <!--</div>-->
        </div>
        <div name="div_ntd_xem_phan_hoi" id="div_ntd_xem_phan_hoi">
            <div name="div_ntd_quan_tri_xem_phan_hoi" id="div_ntd_quan_tri_xem_phan_hoi">
                <div class="binhluan-bar binhluan-bar2">
                    Xem phản hồi - đánh giá của Người tìm việc
                </div>
                <div class="binhluan-cnt">
                    <div class="BL-content2">
                        <div style="-moz-border-radius:8px; border:1px solid #CCCCCC;padding:30px 0;text-align:center;">
                            Bạn chưa có phản hồi nào từ người tìm việc.
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div name="div_ntd_ung_vien_da_xem" id="div_ntd_ung_vien_da_xem">
            <meta content="noindex, follow" name="robots">

            <script type="text/javascript">
                try {
                    v_height = 58;
                    if (parent.document.getElementById("fr_ung_vien_da_xem")) {
                        parent.document.getElementById("fr_ung_vien_da_xem").height = 0;
                    }
                } catch (e) {
                }
            </script>
        </div>
    </div>
    <script type="text/javascript">
        if (document.getElementById("a_menu_lv2_89") != null) {
            document.getElementById("a_menu_lv2_89").style.color = "#518c04";
        }
    </script>
</div>