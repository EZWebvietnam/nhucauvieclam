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
    <div class="Clear"></div>
    <div id="content-left1">

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
                            foreach ($list_cate_job as $k=>$job_cate) {

                                if ($i % 3 == 1) {
                                    ?>
                                    <tr>
                                    <?php } ?>
                                    <td width="33%">
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url(); ?>nganh-nghe/<?php echo $k ?>-<?php echo mb_strtolower(url_title(removesign($job_cate))) ?>"  title="<?php echo $job_cate ?>" target="_blank"> <?php echo $job_cate ?> </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <?php
                                    if ($i % 3 == 0) {
                                        ?>
                                    </tr>
                                <?php } ?>
                                <?php
                                $i++;
                            }
                            ?>
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
                            foreach ($sanggia_detail as $job) {

                                if ($i % 2 == 1) {
                                    ?>
                                    <tr>
                                <?php } ?>
                                    <td width="50%">
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title']))) ?>" title="<?php echo $job['e_title'] ?>" target="_blank"><?php echo $job['e_title'] ?></a>
                                                <div class="TinyBlank"></div>
                                                <span class="Number"><?php echo $job['u_companyName'] ?></span>
                                            </li>
                                        </ul></td>
                                    <?php
                                    if ($i % 2 == 0) {
                                        ?>
                                    </tr>
                                <?php } ?>
                                <?php
                                $i++;
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
        <a href="/tintuc/gocbaochi" target="_blank" rel="nofollow" class="ImageLink"> <img src="" > </a>
        <div class="Blank"></div>
    </div>

    <div id="content-right">
        <?php
if ($is_login == 0) {
    ?>
        <div class="pull-left">
            <a href="<?php echo base_url(); ?>dangnhap/index" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/dang_nhap.png" alt="Đăng nhập"> </a>
        </div>
        <div class="pull-right">
            <a href="<?php echo base_url(); ?>dangky" class="ImageLink"> <img src="<?php echo base_url(); ?>template/home/img/dang_ky.png" alt="Đăng ký"> </a>
        </div>
<?php } ?>
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
                            foreach ($tuyendung_detail as $job) {
                                ?>
                                <tr>
                                    <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/aosomihanquoc99_gmail_com.jpg" width="50" alt="CỬA HÀNG THỜI TRANG THÁI - SHOP"></td>
                                    <td style="padding-left: 3px;"><a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id'] ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title']))) ?>" title="<?php echo $job['e_title'] ?>" target="_blank"><?php echo $job['e_title'] ?></a>
                                        <div class="TinyBlank"></div><span class="Number"><?php echo $job['u_companyName'] ?></span></td>
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
                    <h2 class="Headline"> Tìm việc làm theo hình thức làm việc </h2>
                </div>
            </div>
            <div class="BodyLeft">
                <div class="BodyRight">

                    <table class="TableList">
                        <tbody>
                            <?php
                            foreach ($list_time as $k=>$time) {
                                ?>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url(); ?>search-time/<?php echo $k ?>-<?php echo mb_strtolower(url_title(removesign($time)))?>" ga_click="_gaq.push(['_trackEvent', 'Home', 'Click', 'Tìm việc làm - Việc làm cho trí thức lớn tuổi (trên 50 tuổi)']);" title="<?php echo $time ?>" target="_blank"><?php echo $time ?></a>

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
                           
                            foreach ($timviec_detail as $user_post) {
                                ?>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url(); ?>info-hoso-ungvien/<?php echo $user_post['j_id'] ?>-<?php echo mb_strtolower(url_title(removesign($user_post['j_title']))) ?>" title="<?php echo $user_post['j_title'] ?>" target="_blank"><?php echo $user_post['j_title'] ?></a>
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
    <div class="Clear"></div>
</div>