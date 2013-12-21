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
            <span style="font-size:14px; color:red; font-family: Verdana, Tahoma, Helvetica, Arial;"> Từ 25/10 NTV chỉ được đăng tối đa 10 hồ sơ tìm việc </span>
        </marquee>
    </div>
    <div name="div_tim_kiem_ttv" id="div_tim_kiem_ttv">
        <div class="navBar">
            <div class="navBarLeft">
                <h2><span class="navBarTxt24-1">Các hồ sơ tìm việc</span><span style="color:red;">(Bạn được phép tạo tối đa 10 hồ sơ tìm việc)</span></h2>
            </div>
            <div class="navBarRight">
                <a href="/dang-ho-so-tinh-phi.html" title="Click để tới trang đăng hồ sơ tìm việc hot" class="dangTinVip">Tìm việc hiệu quả</a>
            </div>
            <div class="clear"></div>
        </div>
        <div name="div_ntv_quan_tri_tin_tim_viec" id="div_ntv_quan_tri_tin_tim_viec">
            <form name="form_ds_ttv" id="form_ds_ttv" action="" method="post" onsubmit="" enctype="multipart/form-data">
                <iframe name="fr_submit_ds_ttv" width="0" height="0" style="visibility:hidden"></iframe>
                <div class="marBot7">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="tb-header" width="5">
                                    <input type="checkbox" id="checkbox_ttv_all" title="Chọn/Bỏ chọn tất cả" onclick="select_or_unselect_group_checkbox('checkbox_ttv[', ']', 1, document.getElementById('checkbox_ttv_all').checked)">
                                </td>
                                <td class="tb-header" width="65">Mã hồ sơ</td>
                                <td class="tb-header">Tên việc làm</td>
                                <td class="tb-header" width="85">Ngày làm mới</td>
                                <td class="tb-header" width="85">Ngày đăng</td>
                                <td class="tb-header" width="85">Ngày cập nhật</td>
                                <td class="tb-header" width="85">Ngày hết hạn</td>
                                <td class="tb-header" width="100">Tình trạng hồ sơ</td>
                                <td class="tb-header" width="130">Thao tác</td>
                            </tr>
                        <input type="hidden" name="tong_so_ttv" id="tong_so_ttv" value="1">
                        <input type="hidden" name="page" id="page" value="1">
                        <input type="hidden" name="number_items" id="number_items" value="15">

                        <input type="hidden" name="gia_han_2444325" id="gia_han_2444325" value="3">
                        <input type="hidden" name="lam_moi_2444325" id="lam_moi_2444325" value="1000">
                        <?php
                        foreach ($hsdangdang_detail as $detail_hs) {
                            ?>
                            <tr style="">
                                <td class="tb-row-W" align="center">
                                    <input type="checkbox" name="checkbox_ttv[]" id="checkbox_ttv[0]" value="2444325">
                                </td>
                                <td class="tb-row-W" align="center"><?php echo $detail_hs['j_id']; ?></td>
                                <td class="tb-row-W">
                                    <div class="cumTT-tieude">
                                        <b class="textRed11"> <?php if($detail_hs['j_status']==1)
                                        {?> 
                                        <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="<?php echo $detail_hs['j_title']?>" class="textRed11"><?php echo $hsdangdang_detail[0]['j_title']; ?></a>
                                        <?php } else {?>
                                        <a href="<?php echo base_url(); ?>hoso-ungvien-cho-duyet/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="<?php echo $detail_hs['j_title']?>" class="textRed11"><?php echo $hsdangdang_detail[0]['j_title']; ?></a>
                                        <?php }?>
                                        </b>
                                        <br>
                                        <span style="font-size: 11px;"><?php echo $list_cate_job[$detail_hs['m_id']]; ?></span>
                                        <br>                             
                                    </div></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_update']); ?>
                                    <br>
                                    (Số lần làm mới còn lại: <span class="textRed11">1000</span>) </td>
                                <td class="tb-row-W" align="center"> <?php echo date('d/m/Y', $detail_hs['j_date']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_update']); ?></td>
                                <td class="tb-row-W" align="center"><?php echo date('d/m/Y', $detail_hs['j_lastdate']); ?>
                                </td>
                                <td class="tb-row-W"><span class="textRed11">
                                <?php 
                                $array = array('1'=>'Đã duyệt','0'=>'Chưa duyệt');
                                echo $array[$detail_hs['j_status']];
                                ?>
                                </span></td>
                                <td class="tb-row-W">
                                    <div class="borderBot padTop5">
    <?php
    if ($detail_hs['j_status'] == 1) {
        ?>
                                            <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> |
                                        <?php } else { ?>
                                            <a href="<?php echo base_url(); ?>hoso-ungvien-cho-duyet/<?php echo $detail_hs['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>" target="_blank" title="Xem thông tin chi tiết tin tìm việc">Xem</a> |
                                        <?php } ?>
                                        <a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $detail_hs['j_id']; ?>" title="">Sửa</a> | <a onclick="return confirm('Bạn có chắc muốn xóa hồ sơ không ?')" href='<?php echo base_url(); ?>xoa-ho-so/<?php echo $detail_hs['j_id']; ?>/<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>' title="Xoá tạm hồ sơ">Xóa</a>
                                    </div>
                                </td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                    <table width="100%" class="padTop10">
                        <tbody>
                            <tr>
                                <td height="30" class="borderBot" width="400"><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttv[',']',1,true)" title="Chọn tất cả các hồ sơ trong trang" class="checkAll">Chọn tất cả</a><a href="javascript:select_or_unselect_group_checkbox('checkbox_ttv[',']',1,false)" title="Bỏ chọn tất cả các hồ sơ trong trang" class="unCheck">Bỏ chọn tất cả</a></td>
                                <td class="borderBot"><div class="pageList"></div></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </form>
            <!--</div> -->
            <script language="javascript" type="text/javascript"></script>
        </div>
        <script type="text/javascript">
            if (document.getElementById("a_menu_lv2_69") != null) {
                document.getElementById("a_menu_lv2_69").style.color = "#518c04";
            }
        </script>
    </div>
</div>