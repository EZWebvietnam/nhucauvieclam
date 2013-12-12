
Đăng bởi: <a href="/vieclam/congty/2592848/cty-tnhh-cuu-long-giang-company.html" target="_blank"><?php
    echo $info_tintd_detail[0]['u_companyName'];
    ?></a>
- Duyệt tin: <a href="/chamsockhachhang/job/huynguyen_htkh" target="_blank">Nguyễn Thành Huy</a>
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
                        <td><a href="/vieclam/tuyendung/10/ban-hang.html" target="_blank"><?php echo $list_cate_job[$info_tintd_detail[0]['m_id']]['m_name']; ?></a>
                            <br>                            
                        </td>
                    </tr>
                    <tr>
                        <th>Tính chất công việc</th>
                        <td><a href="/vieclam/tinhchatcongviec/11/viec-lam-them-lam-viec-ngoai-gio.html" target="_blank"><?php echo $list_time[$info_tintd_detail[0]['e_timeID']]['t_name']; ?></a></td>
                    </tr>
                    <tr>
                        <th>Tỉnh/Thành phố</th>
                        <td><a href="/vieclam/tinhthanhpho/1/tp-ho-chi-minh.html" target="_blank"><?php echo $list_city[$info_tintd_detail[0]['e_cityID']]['n_name']; ?></a>
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
                <img src="<?php echo base_url(); ?>template/home/img/default.gif" alt="Cty TNHH Cửu Long Giang Company">
                <div class="Blank"></div>
                <img src="<?php echo base_url(); ?>template/home/img/choxacthuc.png" alt="Chờ xác thực">
                <div class="Blank"></div>
                <div class="AlignRight">
                    <a href="/nguoitimviecthu" target="_blank"><span class="AlertTextSmall">Người tìm việc lưu ý</span></a>
                </div>
            </div>

            <div id="job-employer-info">
                <h2><a href="/vieclam/congty/2592848/cty-tnhh-cuu-long-giang-company.html" target="_blank"><?php echo $info_tintd_detail[0]['u_companyName']; ?></a></h2>

                <table class="TableInfo">
                    <tbody>
                        <tr>
                            <th>Địa chỉ</th>
                            <td><a href="/vieclam/diadiem/2592848/403-nguyen-thai-binh-f-12-q-tan-binh.html" target="_blank"><?php echo $info_tintd_detail[0]['u_adress']; ?></a><span class="Note">← Click chọn địa chỉ để xem chi tiết bản đồ</span></td>
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

            Nguồn thông tin tại TimViecNhanh.com vị trí: <a href="/vieclam/congviec/2811197/vie-c-la-m-them-cho-sinh-vien.html" class="Readmore">Việc Làm Thêm Cho Sinh Viên - Cty TNHH Cửu Long Giang Company</a>

            <div class="Blank"></div>
            Hạn nộp hồ sơ: <span class="JobName"><?php echo $info_tintd_detail[0]['e_lastDate']; ?></span> theo TimViecNhanh.com

        </div>
    </div>

    <div class="Blank"></div>
    <a href="/vieclam/congty/2592848/cty-tnhh-cuu-long-giang-company.html" target="_blank"> <strong><span class="AlertText">Tin tuyển dụng, việc làm khác của Cty TNHH Cửu Long Giang Company</span></strong> </a>

    <div class="Blank"></div>
    <div class="GridInfo">
        <div class="Content">
            <fb:like-box href="http://www.facebook.com/timviecnhanh" width="692" show_faces="false" stream="false" header="false" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=357584370994953&amp;header=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Ftimviecnhanh&amp;locale=vi_VN&amp;sdk=joey&amp;show_faces=false&amp;stream=false&amp;width=692">
                <span style="vertical-align: bottom; width: 692px; height: 70px;"><iframe name="f2822460d" width="692px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/plugins/like_box.php?app_id=357584370994953&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df25fe1bb8c%26domain%3Dwww.timviecnhanh.com%26origin%3Dhttp%253A%252F%252Fwww.timviecnhanh.com%252Ff3987c498%26relation%3Dparent.parent&amp;header=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Ftimviecnhanh&amp;locale=vi_VN&amp;sdk=joey&amp;show_faces=false&amp;stream=false&amp;width=692" style="border: none; visibility: visible; width: 692px; height: 70px;" class=""></iframe></span>
            </fb:like-box>

            <div class="Blank"></div>
            <fb:comments href="http://www.timviecnhanh.com/vieclam/congviec/2811197/vie-c-la-m-them-cho-sinh-vien.html" num_posts="50" width="692" fb-xfbml-state="rendered" class="fb_iframe_widget">
                <span style="height: 160px; width: 692px;"><iframe id="f19ef5e75c" name="f1e583cf38" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=357584370994953&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df3cae28f9%26domain%3Dwww.timviecnhanh.com%26origin%3Dhttp%253A%252F%252Fwww.timviecnhanh.com%252Ff3987c498%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fwww.timviecnhanh.com%2Fvieclam%2Fcongviec%2F2811197%2Fvie-c-la-m-them-cho-sinh-vien.html&amp;locale=vi_VN&amp;numposts=50&amp;sdk=joey&amp;width=692" style="border: none; overflow: hidden; height: 160px; width: 692px;"></iframe></span>
            </fb:comments>
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
<div class="Clear"></div>