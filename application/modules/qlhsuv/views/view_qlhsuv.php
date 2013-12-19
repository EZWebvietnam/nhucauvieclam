
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
    <div>
        <marquee bgcolor="#FFCC99" scrolldelay="180" style="padding:5px;">
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Việc làm 24h thông báo: Từ 6/10 KHÔNG GIỚI HẠN SỐ LẦN LÀM MỚI </span>
        </marquee>
    </div>
    <div name="div_ntd_quan_tri_ho_so_ung_vien" id="div_ntd_quan_tri_ho_so_ung_vien">
        <form name="form_ds_ho_so_ung_vien" id="form_ds_ho_so_ung_vien" action="" method="post" onsubmit="" enctype="multipart/form-data">
            <iframe name="fr_submit_ds_ho_so_ung_vien" width="000" height="00" style="visibility:hidden"></iframe>
            <input type="hidden" name="decode_ttd" value="">
            <div id="box_tim_kiem_hs_ung_vien">
                <div class="navBar">
                    <div class="navBarLeft">
                        <span class="navBarTxt24-1" style="color: #1D4F50;">Ứng viên nộp hồ sơ
                            vào vị trí: </span>
                    </div>
                    <div class="navBarRight">
                        <a href="/dang-viec-lam-tinh-phi.html" title="Click để tới trang đăng tin tuyển dụng hot" class="dangTinVip">Tuyển dụng hiệu quả</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="marBot7">
                    <div class="marBot7">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>

                                    <td class="padTop10" align="center" valign="top" width="220"><img src="<?php echo base_url(); ?>template/home/img/user-img.jpg" height="140" width="187">

                                    </td>
                                    <td class="tbUser-info" valign="top" width="260"><b>Vị trí tuyển	dụng:</b>
                                        <br>
                                        <select class="abc">
                                            <?php
                                            foreach ($qlhsuv_detail as $vieclam) {
                                                ?>
                                                <option value="<?php echo $vieclam['e_id'] ?>"><?php echo $vieclam['e_title'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <br>
                                    </td>
                                    <td class="padTop10" valign="top" style="width:150px;">
                                        <br>
                                        <input type="button" class="button" value="Xem danh sách" id="xem" onclick="abc()"/>
                                    </td>

                                    <td id="item_list" class="lineHeight25" valign="top">
                                        <b>Vị trí tuyển dụng: </b>
                                        <br>
                                        <b>Hạn nộp hồ sơ: </b>
                                        <br>
                                        <b>Yêu cầu: </b> ...
                                        <br>
                                        <b>Số lượng tuyển: </b>
                                        <br>
                                        <b>Địa điểm làm việc:</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="list_hs_td">



                        </div>
                    </div>
                </div>
            </div><!--<div name='div_ntd_quan_tri_tin_tuyen_dung' id='div_ntd_quan_tri_tin_tuyen_dung'> -->

        </form>
    </div>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
                                            function abc()
                                            {
                                                var tinh_den = '';
                                                $('.abc').each(function() {

                                                    tinh_den = $(this).val();
                                                })

                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>qlhsuv/qlhsuv/ajax_hs",
                                                    type: "post",
                                                    data: {'hs_id': tinh_den},
                                                    success: function(response) {
                                                        $('#item_list').html(response);

                                                    },
                                                    error: function() {

                                                    }
                                                });
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>qlhsuv/qlhsuv/ajax_get_hs",
                                                    type: "post",
                                                    data: {'hs_id': tinh_den},
                                                    success: function(response) {
                                                        $('#list_hs_td').html(response);

                                                    },
                                                    error: function() {

                                                    }
                                                });
                                            }
                                            if (document.getElementById("a_menu_lv2_94") != null) {
                                                document.getElementById("a_menu_lv2_94").style.color = "#518c04";
                                            }
    </script>
</div>