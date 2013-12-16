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
    Đăng bởi: <a href="/vieclam/congty/2592848/cty-tnhh-cuu-long-giang-company.html" target="_blank"><?php echo $info_tintd_detail[0]['u_companyName']; ?></a>
    <div class="HighBlank"></div>

    <div id="content-left">
        <div class="GridInfo">
            <div class="Content">
                <h2>Thông tin tuyển dụng</h2>
                <table class="TableInfo">
                    <tbody>
                        <tr>
                        <input type="hidden" class="abc" value="<?php echo $info_tintd_detail[0]['e_id']; ?>"/>
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
                            <td><?php echo $list_sex[$info_tintd_detail[0]['e_sex']]; ?></td>
                        </tr>

                        <tr>
                            <th>Ngành nghề</th>
                            <td><a href="<?php echo base_url();?>nganh-nghe/<?php echo $info_tintd_detail[0]['m_id']; ?>-<?php echo mb_strtolower(url_title(removesign($list_cate_job[$info_tintd_detail[0]['m_id']]))) ?>" target="_blank"><?php echo $list_cate_job[$info_tintd_detail[0]['m_id']]; ?></a>
                                <br>                            
                            </td>
                        </tr>
                        <tr>
                            <th>Tính chất công việc</th>
                            <td><a href="<?php echo base_url();?>search-time/<?php echo $info_tintd_detail[0]['e_timeID']; ?>-<?php echo mb_strtolower(url_title(removesign($list_time[$info_tintd_detail[0]['e_timeID']]))); ?>" target="_blank"><?php echo $list_time[$info_tintd_detail[0]['e_timeID']]; ?></a></td>
                        </tr>
                        <tr>
                            <th>Tỉnh/Thành phố</th>
                            <td><a href="<?php echo base_url();?>thanh-pho/<?php echo $info_tintd_detail[0]['e_cityID'];?>-<?php echo mb_strtolower(url_title(removesign($list_city[$info_tintd_detail[0]['e_cityID']]))) ?>" target="_blank"><?php echo $list_city[$info_tintd_detail[0]['e_cityID']]; ?></a>
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
                            <td><?php echo $list_bangcap[$info_tintd_detail[0]['e_trinhdo']]; ?></td>
                        </tr>
                        <tr>
                            <th>Kinh nghiệm</th>
                            <td><?php echo $list_exp[$info_tintd_detail[0]['e_kinhnghiem']]; ?></td>
                        </tr>
                        <tr>
                            <th>Mức lương</th>
                            <td><?php echo $list_luong[$info_tintd_detail[0]['e_luong']]; ?></td>
                        </tr>
                        <tr>
                            <th>Hình thức làm việc</th>
                            <td><?php echo $list_time[$info_tintd_detail[0]['e_timeID']]; ?></td>
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
                            <td><span class="JobName"><?php echo date('d/m/Y',$info_tintd_detail[0]['e_lastDate']); ?></span></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><a href="<?php echo base_url();?>ung-tuyen-check/<?php echo $info_tintd_detail[0]['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($info_tintd_detail[0]['e_title']))); ?>" title="Nộp hồ sơ" class="ImageLink cboxElement" rel="popup"> <img src="<?php echo base_url(); ?>template/home/img/nop_ho_so.png" alt="Nộp hồ sơ"> </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="Blank"></div>
        <div class="AlignRight">
            <span class="CustomerCare"> <?php echo date('d/m/Y',$info_tintd_detail[0]['e_dateActive']); ?>          -
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

                Nguồn thông tin tại nhucauvieclam.net vị trí: <a href="<?php echo $_SERVER['REQUEST_URI']?>" class="Readmore"><?php echo $info_tintd_detail[0]['e_title']; ?> - <?php echo $info_tintd_detail[0]['u_companyName']; ?></a>

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
                    <?php 
                    if($is_login ==1)
                    {
                    ?>
                        <li>
                            <a href="<?php echo base_url();?>ung-tuyen-check/<?php echo $info_tintd_detail[0]['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($info_tintd_detail[0]['e_title']))); ?>" title="Nộp hồ sơ" rel="popup" class="cboxElement">Nộp hồ sơ</a>
                        </li>
                        <li>
                            <a style="cursor: pointer;" onclick="save_tin();" title="Lưu công việc" rel="popup" class="cboxElement">Lưu công việc</a>
                        </li>
                    <?php } ?>
                        <li>
                            <a href="javascript:window.print()" target="_blank">In công việc</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>report-tin/<?php echo $info_tintd_detail[0]['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($info_tintd_detail[0]['e_title']))); ?>">Thông báo tin đăng sai sự thật</a>
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
            
        </div>

        <div class="Blank"></div>

    </div>
    <div class="Blank"></div>

</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    function save_tin()
    {
        var tinh_den ='';
        $('.abc').each(function(){
            
            tinh_den = $(this).val();
        })
         $.ajax({
			      url: "<?php echo base_url();?>infotintd/infotintd/ajax_autosave",
			      type: "post",
			      data: {'cv_id':tinh_den,'id_user':<?php echo $this->session->userdata('u_id');?> },
			      success: function(response){
			    	 
		              alert('Lưu thành công !');
			      },
			      error:function(){
			    	  alert('Không thể lưu !');
			      }   
			    });
    }
        
    </script>