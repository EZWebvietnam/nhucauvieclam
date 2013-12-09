<div id="content-left">

    <div class="Grid">
        <div class="TopLeft">
            <div class="TopRight">
                <!--<h2 class="Headline"> 11713 việc làm mới, đang tuyển dụng                trong 278334 công việc đã đăng </h2>-->
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">

                <table class="TableList">
                    <tbody>

                        <?php
                        $i = 1;
                        foreach ($list_cate_job as $job_cate) {

                            if ($i % 3 == 1) {
                                ?>
                                <tr>
                            <?php } ?>
                                <td width="33%">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>nganh-nghe/<?php echo $job_cate['m_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job_cate['m_name'])))?>"  title="<?php echo $job_cate['m_name'] ?>" target="_blank"> <?php echo $job_cate['m_name'] ?> </a>
                                        </li>
                                    </ul>
                                </td>
    <?php
    if ($i % 3 == 0) {
        ?>
                                </tr>
                                <?php } ?>
                                <?php $i++;
                            } ?>
                    <td width="33%"></td>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
    <div class="Blank"></div>

    <div class="GridVip">
        <div class="TopLeft">
            <div class="TopRight">
                <h2 class="Headline"><a href="/tintieudiem" target="_blank"> Tin tiêu điểm tuyển dụng nhân sự </a></h2>
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">

                <table class="TableVip">                    
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($job_list as $job) {

                            if ($i % 2 == 1) {
                                ?>
                                <tr>
                            <?php } ?>
                                <td width="50%">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title'])))?>" title="<?php echo $job['e_title'] ?>" target="_blank"><?php echo $job['e_title'] ?></a>
                                            <div class="TinyBlank"></div>
                                            <span class="Number"><?php echo $job['u_companyName'] ?></span>
                                        </li>
                                    </ul></td>
                        <?php
                        if ($i % 2 == 0) {
                            ?>
                                </tr>
                                <?php } ?>
                                <?php $i++;
                            } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
    <div class="Blank"></div>
    <a href="/tintuc/gocbaochi" target="_blank" rel="nofollow" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/giai_thuong_706.jpg" alt="TimViecNhanh.com"> </a>
    <div class="Blank"></div>
    <div class="float-left">
        <a href="/thanh-toan-tim-viec-nhanh" target="_blank" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/20130907_tvn_thanhtoan.png" alt="Phương thức thanh toán mới"> </a>
    </div>
    <div class="float-left ml5">
        <a href="/sang-tao-cv" target="_blank" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/20130907_tvn_sangtaocv.png" alt="Sáng tạo CV"> </a>
    </div>
    <div class="float-right">
        <a href="/tim-viec-nhanh-cover" target="_blank" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/20130907_tvn_cover.png" alt="TimViecNhanh cover"> </a>
    </div>
    <div class="clear"></div>

    <div class="Blank"></div>

</div>

<div id="content-right">
    <div class="pull-left">
        <a href="/thanhvien/dangnhap" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/dang_nhap.png" alt="Đăng nhập"> </a>
    </div>
    <div class="pull-right">
        <a href="/thanhvien/dangky" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/dang_ky.png" alt="Đăng ký"> </a>
    </div>
    <div class="Blank"></div>

    <div class="GridSub">
        <div class="TopLeft">
            <div class="TopRight">
                <h2 class="Headline"><a href="/vieclam/tintuyendungnhanh" target="_blank">Tin tuyển dụng nhanh</a></h2>
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">
                <table class="TableTdn">
                    <tbody>
                        <?php
                        foreach ($job_list as $job) {
                            ?>
                        <tr>
                            <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/aosomihanquoc99_gmail_com.jpg" width="50" alt="CỬA HÀNG THỜI TRANG THÁI - SHOP"></td>
                            <td style="padding-left: 3px;"><a href="/vieclam/congviec/2693468/tuyen-nu-nhan-vien-ban-hang-tet-gap.html" title="Tuyển Nữ Nhân Viên Bán Hàng Tết (Gấp) - CỬA HÀNG THỜI TRANG THÁI - SHOP" target="_blank"><?php echo $job['e_title'] ?></a>
                                <div class="TinyBlank"></div><span class="Number">CỬA HÀNG THỜI TRANG THÁI...</span></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
    <div class="Blank"></div>

    <div class="Grid">
        <div class="TopLeft">
            <div class="TopRight">
                <h2 class="Headline"> Tìm việc làm theo tính chất </h2>
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">

                <table class="TableList">
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/10/viec-lam-thu-nhap-cao.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm thu nhập cao']);" title="Việc làm thu nhập cao" target="_blank"> Việc làm thu nhập cao </a>
                                        <span class="Number">(601)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/11/viec-lam-them-lam-viec-ngoai-gio.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm thêm/Làm việc ngoài giờ']);" title="Việc làm thêm/Làm việc ngoài giờ" target="_blank"> Việc làm thêm/Làm việc ngoài... </a>
                                        <span class="Number">(323)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/12/thau-du-an-freelance-viec-lam-tu-do.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Thầu dự án/Freelance/Việc làm tự do']);" title="Thầu dự án/Freelance/Việc làm tự do" target="_blank"> Thầu dự án/Freelance/Việc làm... </a>
                                        <span class="Number">(68)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/13/viec-lam-online.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm online']);" title="Việc làm online" target="_blank"> Việc làm online </a>
                                        <span class="Number">(27)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/14/kinh-doanh-mang-luoi.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Kinh doanh mạng lưới']);" title="Kinh doanh mạng lưới" target="_blank"> Kinh doanh mạng lưới </a>
                                        <span class="Number">(23)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/15/giup-viec-gia-dinh.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Giúp việc gia đình']);" title="Giúp việc gia đình" target="_blank"> Giúp việc gia đình </a>
                                        <span class="Number">(20)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/16/hop-tac-lao-dong-nuoc-ngoai.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Hợp tác lao động/Nước ngoài']);" title="Hợp tác lao động/Nước ngoài" target="_blank"> Hợp tác lao động/Nước ngoài </a>
                                        <span class="Number">(55)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/17/viec-lam-nguoi-khuyet-tat.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm người khuyết tật']);" title="Việc làm người khuyết tật" target="_blank"> Việc làm người khuyết tật </a>
                                        <span class="Number">(1)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/18/gio-hanh-chinh.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Giờ hành chính']);" title="Giờ hành chính" target="_blank"> Giờ hành chính </a>
                                        <span class="Number">(8717)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/19/viec-lam-theo-ca-doi-ca.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm theo ca/Đổi ca']);" title="Việc làm theo ca/Đổi ca" target="_blank"> Việc làm theo ca/Đổi ca </a>
                                        <span class="Number">(1856)</span>
                                    </li>
                                </ul></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <li>
                                        <a href="/vieclam/tinhchatcongviec/20/viec-lam-cho-tri-thuc-lon-tuoi-tren-50-tuoi.html" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm cho trí thức lớn tuổi (trên 50 tuổi)']);" title="Việc làm cho trí thức lớn tuổi (trên 50 tuổi)" target="_blank"> Việc làm cho trí thức lớn... </a>
                                        <span class="Number">(1)</span>
                                    </li>
                                </ul></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
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
                        foreach ($job_list as $user_post) {
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
                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
</div>