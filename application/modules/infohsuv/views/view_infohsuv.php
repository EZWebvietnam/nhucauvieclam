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
<div id="content-detail">
    <div class="HighBlank"></div>
    <div id="content-left">
        <div class="GridInfo">
            <div class="Content">
                
                <div id="resume-seeker-info">
                    <h2><?php echo $infohsuv_detail[0]['u_fullname'] ?></h2>

                    <table class="TableInfo">
                        <tbody><tr>
                                <th>Ngày sinh</th>
                                <td><?php echo date('d/m/Y', $infohsuv_detail[0]['u_birthday']); ?></td>
                            </tr>                            
                            <tr>
                                <th>Địa chỉ</th>
                                <td><?php echo $infohsuv_detail[0]['u_adress'] ?></td>
                            </tr>

                            <tr>
                                <th>Điện thoại</th>
                                <td>
                                    <?php echo $infohsuv_detail[0]['u_mobi'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td><?php echo $infohsuv_detail[0]['u_email'] ?></td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="Clear"></div>
            </div>
        </div>
        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <h2>Hồ sơ Người tìm việc</h2>

                <table class="TableInfo">
                    <tbody><tr>
                            <th>Tiêu đề hồ sơ</th>
                            <td>
                                <span class="ResumeName"><?php echo $infohsuv_detail[0]['j_title'] ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>Mục tiêu nghề nghiệp</th>
                            <td><?php echo $infohsuv_detail[0]['j_muctieunn'] ?></td>
                        </tr>
                        <tr>
                            <th>Ngành nghề</th>
                            <td>
                                <?php echo $list_cate_job[$infohsuv_detail[0]['m_id']]; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Tỉnh/Thành phố</th>
                            <td>
                                <?php echo $list_city[$infohsuv_detail[0]['j_cityID']]; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Vị trí mong muốn</th>
                            <td><?php echo $list_capbac[$infohsuv_detail[0]['j_chucmm']]; ?></td>
                        </tr>                        
                        <tr>
                            <th>Kỹ năng</th>
                            <td><?php echo $infohsuv_detail[0]['j_kynang'] ?></td>
                        </tr>

                        <tr>
                            <th>Trình độ</th>
                            <td><?php echo $list_bangcap[$infohsuv_detail[0]['j_trinhdo']]; ?></td>
                        </tr>
                        <tr>
                            <th>Kinh nghiệm</th>
                            <td><?php echo $list_exp[$infohsuv_detail[0]['j_kinhnghiem']]; ?></td>
                        </tr>

                        <tr>
                            <th>Trình độ tin học</th>
                            <td><?php echo $infohsuv_detail[0]['j_tinhoc'] ?></td>
                        </tr>
                        <tr>
                            <th>Ngoại ngữ</th>
                            <td><?php echo $list_ngoaingu[$infohsuv_detail[0]['j_ngoaingu']]; ?>,<?php echo $list_trinhdonn[$infohsuv_detail[0]['j_trinhdonn']]; ?></td>
                        </tr>

                        <tr>
                            <th>Mức lương mong muốn</th>
                            <td><?php echo $list_luong[$infohsuv_detail[0]['j_luongmm']]; ?></td>
                        </tr>
                        <tr>
                            <th>Hình thức làm việc</th>
                            <td><?php echo $list_time[$infohsuv_detail[0]['j_timeID']]; ?></td>
                        </tr>

                        <tr>
                            <th>Sẵn sàng di chuyển</th>
                            <td><?php echo $infohsuv_detail[0]['j_goto'] ?></td>
                        </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <h2>Bằng cấp/Chứng chỉ</h2>

                <table class="TableInfo">
                    <tbody><tr>
                            <th><?php echo $infohsuv_detail[0]['j_namtotnghiep'] ?></th>
                            <td>
                                <span class="ResumeName"><?php echo $infohsuv_detail[0]['j_nganhhoc'] ?></span>
                                <br>
                                <span class="Number"><?php echo $infohsuv_detail[0]['j_truongdahoc'] ?></span>

                                <div class="Blank"></div><?php echo $list_loaitn[$infohsuv_detail[0]['j_loaitotnghiep']]; ?>
                            </td>
                        </tr>
                    </tbody></table>
            </div>
        </div>

        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <h2>Kinh nghiệm làm việc</h2>

                <table class="TableInfo">
                    <tbody><tr><?php echo $infohsuv_detail[0]['j_infokinhnghiem'] ?></tr>
                    </tbody></table>
            </div>
        </div>


        <div class="Blank"></div>
        <div class="AlignRight">
            <span class="CustomerCare">
                Cập nhật: <?php echo date('d/m/Y', $infohsuv_detail[0]['j_update']); ?></span>
        </div>
        <div class="Blank"></div>        
    </div>

    <div id="content-right">

        <div class="Grid">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline">Công cụ</h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">
                    <ul class="Tool">
                    <?php 
                    if($is_login == 1)
                    {
                        if($this->session->userdata['u_role']!=2)
                        {
                    ?>
                        <li>
                            <a href="#e-login" title="Gửi mail phỏng vấn" rel="popup" class="cboxElement">Gửi mail phỏng vấn</a>
                        </li>
                        <li>
                            <a href="#e-login" title="Lưu hồ sơ" rel="popup" class="cboxElement">Lưu hồ sơ</a>
                        </li>
                    <?php }} ?>
                        <li>
                            <a href="/timungvien/inhoso/661759" target="_blank">In hồ sơ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight">
                </div>
            </div>

            <div style="display: none;">
                <div id="e-login">
                    <div class="CboxContent">
                        Bạn chưa đăng nhập tài khoản Nhà tuyển dụng			</div>
                    <div class="CboxButton">
                        <button type="button" id="e-employer-login">
                            <span>Đăng nhập Nhà tuyển dụng</span>
                        </button>
                    </div>
                </div>
            </div>
            <script>
                        $(document).ready(function() {
                $('#e-employer-login').click(function() {
                window.location.href = '/thanhvien/nhatuyendung_dangnhap?return_url=http%3A%2F%2Fwww.timviecnhanh.com%2Ftimungvien%2Fnguoitimviec%2F661759%2Fnhan-vien-ky-thuat-may-tinh-trang-thiet-bi-van-phong.html';
                });
                });	</script>
        </div>

        <div class="Blank"></div>

        <div class="GridSub">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline">Người tìm việc năng động</h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">
                    <table class="TableVip">
                        <tbody>
                        <?php
                        foreach ($list_user as $user_post) {
                        ?>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/timungvien/nguoitimviec/1176957/nhan-vien-ki-thuat-nhan-vien-boc-tach-du-toan.html" title="Nhân Viên Kĩ Thuật, Nhân Viên Bóc Tách Dự Toán - Le Van Dung" target="_blank"><?php echo $user_post['j_title'] ?></a>
                                        <div class="TinyBlank"></div>
                                        <span class="Number"><?php echo $user_post['u_fullname'] ?></span>
                                    </li>
                                </ul></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody></table>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight">
                </div>
            </div>
        </div>      
        <div class="Blank"></div>        
    </div>
    <div class="Clear"></div>                        
</div>