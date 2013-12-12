<div id="user-menu">

        <div class="GridInfo">
            <div class="Content">

                <ul class="UserMenu">
                    <li>
                        <a href="<?php echo base_url(); ?>quanly-timviec/<?php echo $info_tintd_detail[0]['u_id'] ?>">Quản lý tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>hsda-dang/<?php echo $info_tintd_detail[0]['u_id'] ?>">Hồ Sơ đã đăng</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>tao-hsungvien/<?php echo $info_tintd_detail[0]['u_id'] ?>">Tạo HS tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>daluu/<?php echo $info_tintd_detail[0]['u_id'] ?>">Việc làm đã Lưu</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>da-ung-tuyen/<?php echo $info_tintd_detail[0]['u_id'] ?>">Việc làm đã ứng tuyển</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>cv/<?php echo $info_tintd_detail[0]['u_id'] ?>">Hồ sơ cá nhân(CV)</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>thongtin-canhan/<?php echo $info_tintd_detail[0]['u_id'] ?>">Thông tin cá nhân</a>
                    </li>

                </ul>
                <div class="Clear"></div>
            </div>
        </div>
    </div>
<div id="content-detail">
    Đăng bởi: <a href="/vieclam/congty/2592848/cty-tnhh-cuu-long-giang-company.html" target="_blank"><?php echo $info_tintd_detail[0]['u_companyName']; ?></a>
    <div class="HighBlank"></div>

    <div id="content-left">
        <div class="GridInfo">
            <div class="Content">
                <h2>Thông tin tuyển dụng</h2>
                <table class="TableInfo">
                    <tbody>
                        <tr>
                            <th>Vị trí</th>
                            <td><span class="JobName"><?php
                                    echo $info_tintd_detail[0]['e_title'];
                                    ?></span></td>
                        </tr>
                        <tr>
                            <th>Số lượng tuyển</th>
                            <td> <?php echo $info_tintd_detail[0]['e_mem']; ?> </td>
                        </tr>

                        <tr>
                            <th>Giới tính</th>
                            <td><?php echo $list_sex[$info_tintd_detail[0]['e_sex']]['sex_name']; ?></td>
                        </tr>

                        <tr>
                            <th>Ngành nghề</th>
                            <td><a href="<?php echo $list_cate_job[$info_tintd_detail[0]['m_id']]['m_name']; ?>" target="_blank"><?php echo $list_cate_job[$info_tintd_detail[0]['m_id']]['m_name']; ?></a>
                                <br>                            
                            </td>
                        </tr>
                        <tr>
                            <th>Tính chất công việc</th>
                            <td><a href="<?php echo $list_time[$info_tintd_detail[0]['e_timeID']]['t_name']; ?>" target="_blank"><?php echo $list_time[$info_tintd_detail[0]['e_timeID']]['t_name']; ?></a></td>
                        </tr>
                        <tr>
                            <th>Tỉnh/Thành phố</th>
                            <td><a href="<?php echo $list_city[$info_tintd_detail[0]['e_cityID']]['n_name']; ?>" target="_blank"><?php echo $list_city[$info_tintd_detail[0]['e_cityID']]['n_name']; ?></a>
                                <br>

                            </td>
                        </tr>

                        <tr>
                            <th>Mô tả</th>
                            <td><?php echo $info_tintd_detail[0]['e_descript']; ?></td>
                        </tr>

                        <tr>
                            <th>Kỹ năng</th>
                            <td>
                                <?php echo $info_tintd_detail[0]['e_skill']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Trình độ</th>
                            <td><?php echo $list_bangcap[$info_tintd_detail[0]['e_trinhdo']]['bang_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Kinh nghiệm</th>
                            <td><?php echo $list_exp[$info_tintd_detail[0]['e_kinhnghiem']]['exp_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Mức lương</th>
                            <td><?php echo $list_luong[$info_tintd_detail[0]['e_luong']]['luong_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Hình thức làm việc</th>
                            <td><?php echo $list_time[$info_tintd_detail[0]['e_timeID']]['t_name']; ?></td>
                        </tr>

                        <tr>
                            <th>Chế độ khác</th>
                            <td><?php echo $info_tintd_detail[0]['e_phucLoi']; ?></td>
                        </tr>

                        <tr>
                            <th>Yêu cầu hồ sơ</th>
                            <td><?php echo $info_tintd_detail[0]['e_hoso']; ?></td>
                        </tr>
                        <tr>
                            <th>Hạn nộp hồ sơ</th>
                            <td><span class="JobName"><?php echo $info_tintd_detail[0]['e_lastDate']; ?></span></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><a href="#s-login" title="Nộp hồ sơ" class="ImageLink cboxElement" rel="popup"> <img src="<?php echo base_url(); ?>template/home/img/nop_ho_so.png" alt="Nộp hồ sơ"> </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="Blank"></div>
        <div class="AlignRight">
            <span class="CustomerCare"> <?php echo $info_tintd_detail[0]['e_dateActive']; ?>          -
                <?php echo $info_tintd_detail[0]['e_visits']; ?> </span>
        </div>

        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <div id="job-employer-image">
                    <?php
                    if (is_file($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/' . $info_tintd_detail[0]['u_img'])) {
                        ?>
                        <img src="<?php echo base_url(); ?>file/<?php echo $info_tintd_detail[0]['u_img']; ?>" width="50" alt="<?php echo $info_tintd_detail[0]['u_companyName']; ?>">
                    <?php } else { ?> 
                        <img src="<?php echo base_url(); ?>template/home/img/default.gif" width="50" alt="<?php echo $info_tintd_detail[0]['u_companyName']; ?>">
                    <?php } ?>
                    <div class="Blank"></div>

                </div>

                <div id="job-employer-info">
                    <h2><a href="<?php echo $info_tintd_detail[0]['u_home']; ?>" target="_blank"><?php echo $info_tintd_detail[0]['u_companyName']; ?></a></h2>

                    <table class="TableInfo">
                        <tbody>
                            <tr>
                                <th>Địa chỉ</th>
                                <td><a href="<?php echo $info_tintd_detail[0]['u_adress']; ?>" target="_blank"><?php echo $info_tintd_detail[0]['u_adress']; ?></a><span class="Note">← Click chọn địa chỉ để xem chi tiết bản đồ</span></td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td><?php echo $info_tintd_detail[0]['u_companyphone']; ?></td>
                            </tr>
                            <tr>
                                <th>Quy mô</th>
                                <td><?php
                    echo $info_tintd_detail[0]['u_companyMem'];
                    ?></td>
                            </tr>

                            <tr>
                                <th>Website</th>
                                <td><?php echo $info_tintd_detail[0]['u_home']; ?></td>
                            </tr>

                            <tr>
                                <th>Mô tả</th>
                                <td><?php echo $info_tintd_detail[0]['u_companyIntro']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="Clear"></div>
            </div>
        </div>

        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <h2>Thông tin liên hệ</h2>

                <table class="TableInfo">
                    <tbody>
                        <tr>
                            <th>Người liên hệ</th>
                            <td><span class="CompanyName"><?php echo $info_tintd_detail[0]['u_contactName']; ?></span></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td><?php echo $info_tintd_detail[0]['u_contactEmail']; ?></td>
                        </tr>

                        <tr>
                            <th>Địa chỉ</th>
                            <td><?php echo $info_tintd_detail[0]['u_contactAdress']; ?></td>
                        </tr>

                        <tr>
                            <th>Điện thoại</th>
                            <td><?php echo $info_tintd_detail[0]['u_contactPhone']; ?></td>
                        </tr>

                        <tr>
                            <th>Di động</th>
                            <td><?php echo $info_tintd_detail[0]['u_contactMobi']; ?></td>
                        </tr>

                        <tr>
                            <th>Hình thức liên hệ</th>
                            <td><?php echo $info_tintd_detail[0]['u_now']; ?></td>
                        </tr>
                    </tbody>
                </table>

                <h2><u>Lưu ý</u>: Yêu cầu Ghi rõ bìa hồ sơ và trong hồ sơ gửi đến Nhà tuyển dụng</h2>

                Nguồn thông tin tại nhucauvieclam.net vị trí: <a href="#" class="Readmore"><?php echo $info_tintd_detail[0]['e_title']; ?> - <?php echo $info_tintd_detail[0]['u_companyName']; ?></a>

                <div class="Blank"></div>
                Hạn nộp hồ sơ: <span class="JobName"><?php echo date('d/m/Y', $info_tintd_detail[0]['e_lastDate']); ?></span> theo nhucauvieclam.net

            </div>
        </div>

        <div class="Blank"></div>
        <div class="Clear"></div>
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
                        <li>
                            <a href="#s-login" title="Nộp hồ sơ" rel="popup" class="cboxElement">Nộp hồ sơ</a>
                        </li>
                        <li>
                            <a href="#s-login" title="Lưu công việc" rel="popup" class="cboxElement">Lưu công việc</a>
                        </li>
                        <li>
                            <a href="/vieclam/incongviec/2811197" target="_blank">In công việc</a>
                        </li>
                        <li>
                            <a href="/vieclam/thongbaotindang/2811197">Thông báo tin đăng sai sự thật</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight"></div>
            </div>

            <div style="display: none;">
                <div id="s-login">
                    <div class="CboxContent">
                        Bạn chưa đăng nhập tài khoản Người tìm việc
                    </div>
                    <div class="CboxButton">
                        <button type="button" id="s-seeker-login">
                            <span>Đăng nhập Người tìm việc</span>
                        </button>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#s-seeker-login').click(function() {
                        window.location.href = '/thanhvien/nguoitimviec_dangnhap?return_url=http%3A%2F%2Fwww.timviecnhanh.com%2Fvieclam%2Fcongviec%2F2811197%2Fvie-c-la-m-them-cho-sinh-vien.html';
                    });
                });
            </script>
        </div>

        <div class="Blank"></div>

        <div class="Grid">
            <div class="TopLeft">
                <div class="TopRight">
                    <h2 class="Headline">Việc làm đã xem</h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">

                    <ul class="ToolHistory">

                        <li>
                            <a href="/vieclam/congviec/2790664/nhan-vien-truyen-thong.html" title="Nhân Viên Truyền Thông">Nhân Viên Truyền Thông</a>
                        </li>

                        <li>
                            <a href="/vieclam/congviec/2811197/vie-c-la-m-them-cho-sinh-vien.html" title="Việc Làm Thêm Cho Sinh Viên">Việc Làm Thêm Cho Sinh Viên</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="BottomLeft">
                <div class="BottomRight"></div>
            </div>
        </div>

        <div class="Blank"></div>
        <div class="GridInfo">
            <div class="Content">
                <div class="Blank"></div>
                <a href="/vieclam/tags/vie-c-la-m" target="_blank" class="Tags">Việc Làm</a>
                <a href="/vieclam/tags/them-cho" target="_blank" class="Tags">Thêm Cho</a>
                <a href="/vieclam/tags/sinh-vien" target="_blank" class="Tags">Sinh Viên</a>
                <br>

                <a href="/vieclam/tags/ban-hang" target="_blank" class="Tags">Bán hàng</a>
                <a href="/vieclam/tags/lao-dong-pho-thong" target="_blank" class="Tags">Lao động phổ thông</a>
                <a href="/vieclam/tags/quang-cao" target="_blank" class="Tags">Quảng cáo</a>
                <a href="/vieclam/tags/marketing" target="_blank" class="Tags">Marketing</a>
                <a href="/vieclam/tags/pr" target="_blank" class="Tags">PR</a>

                <a href="/vieclam/tags/viec-lam-them" target="_blank" class="Tags">Việc làm thêm</a>
                <a href="/vieclam/tags/lam-viec-ngoai-gio" target="_blank" class="Tags">Làm việc ngoài giờ</a>

                <a href="/vieclam/tags/tp-ho-chi-minh" target="_blank" class="Tags">TP.Hồ Chí Minh</a>
                <a href="/vieclam/tags/binh-duong" target="_blank" class="Tags">Bình Dương</a>
                <a href="/vieclam/tags/dong-nai" target="_blank" class="Tags">Đồng Nai</a>

                <a href="/vieclam/tags/lao-dong-pho-thong" target="_blank" class="Tags">Lao động phổ thông</a>

                <a href="/vieclam/tags/chua-co-kinh-nghiem" target="_blank" class="Tags">Chưa có kinh nghiệm</a>

                <a href="/vieclam/tags/3-4-trieu" target="_blank" class="Tags">3-4 triệu</a>

                <a href="/vieclam/tags/lam-them-ngoai-gio" target="_blank" class="Tags">Làm thêm ngoài giờ</a>

                <a href="/vieclam/timkiem/nganhnghe:ban-hang/tinhthanhpho:tp-ho-chi-minh/trinhdo:lao-dong-pho-thong/hinhthuclamviec:lam-them-ngoai-gio/mucluong:3-4-trieu" target="_blank" class="Tags">Bán hàng, TP.Hồ Chí Minh, Lao động phổ thông, Làm thêm ngoài giờ, 3-4 triệu</a>
            </div>
        </div>
    </div>
    <div class="Blank"></div>

</div>