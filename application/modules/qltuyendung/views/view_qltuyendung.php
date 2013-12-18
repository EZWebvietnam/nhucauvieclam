<?php
if ($is_login == 1) {
    if ($this->session->userdata['u_role'] == 2) {
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
    <?php } else { ?>
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
    <?php }
} ?>
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
                            <?php
                            foreach ($qltuyendung_detail as $qltuyendung) {
                                $count = $this->load->qltuyendung_model->get_count($qltuyendung['e_id'])
                                ?>
                                <tr style="">

                                    <td class="tb-row-W" align="center"><?php echo $qltuyendung['e_id']; ?></td>
                                    <td class="ntd_tb-row-W">
                                        <div class="cumTT-tieude">
                                            <b class="linkBlack">
                                                <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $qltuyendung['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($qltuyendung['e_title']))) ?>" target="_blank" title="<?php echo $qltuyendung['e_title']; ?>" class="linkBlack"><?php echo $qltuyendung['e_title']; ?></a>
                                            </b>							<br>
                                            <span style="font-size: 11px;"><?php echo $list_cate_job[$qltuyendung['m_id']]; ?></span>
                                            <br>
                                        </div>
                                    </td>
                                    <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $qltuyendung['e_dateActive']); ?></td>
                                    <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $qltuyendung['e_date']); ?></td>
                                    <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $qltuyendung['e_dateActive']); ?></td>
                                    <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $qltuyendung['e_lastDate']); ?></td>
                                    <td class="ntd_tb-row-W">
                                        Đã đăng					</td>
                                    <td class="tb-row-W" align="center"><?php echo $count; ?><br> </td>
                                    <td class="ntd_tb-row-W">
                                        <div class="borderBot padTop5"><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $qltuyendung['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($qltuyendung['e_title']))) ?>" title="" target="_blank">Xem</a> | 
                                            <a href="/ntd-trang-quan-tri-cap-nhat-tin-tuyen-dung.html?id_tin_td=1407482" title="">Sửa</a> | 
                                            <a onclick="return confirm('Bạn có chắc muốn xóa hồ sơ không ?')" href='<?php echo base_url(); ?>xoa-tin-td/<?php echo $qltuyendung['e_id']; ?>/<?php echo mb_strtolower(url_title(removesign($qltuyendung['e_title']))) ?>' title="Xoá tạm hồ sơ">Xóa</a></div><div class="borderBot padTop5"><a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_lam_moi_1_ttd(1407482); }" title="Làm mới tin tuyển dụng">Làm mới</a> | <a href="javascript: if (dat_trang_thai_dang_xu_ly()) {ntd_quan_tri_gia_han_1_ttd(2384130,1407482); }" title="Gia hạn tin tuyển dụng">Gia hạn</a></div>
                                    </td>

                                </tr>
                            <?php } ?>
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