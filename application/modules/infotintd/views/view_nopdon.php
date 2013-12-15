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
    <form method="post" name="nopdon">
    <div class="content-qlhs">
        
        <div class="colLeft-QT1">
            <div class="navBar">
                <div class="navBarLeft"><h2><span class="navBarTxt24-1">Nộp hồ sơ trực tuyến</span></h2></div>
                <div class="clear"></div>
            </div>  
            <div class="lineHeight10"><i><u style="color:red;font-weight:bold;">*** Chú ý:</u></i> Bạn vui lòng kiểm tra lại hồ sơ cá nhân và cập nhật thông tin mới nhất trước khi gửi hồ sơ ứng tuyển cho Nhà tuyển dụng <br>bằng cách <b><a href="/ntv-trang-quan-tri-ho-so-ca-nhan.html" title="">BẤM VÀO ĐÂY</a></b></div>

            <div class="tbInfo-header mar-T-B-10">NỘP ĐƠN TRỰC TUYẾN CHO NHÀ TUYỂN DỤNG</div>	
            <form name="frm_nop_ho_so_truc_tuyen" method="post" action="" enctype="multipart/form-data">		
                <iframe name="fr_submit" id="fr_submit" width="00" height="00" style="visibility:hidden"></iframe>	
                <input type="hidden" id="tong_so_viec" value="1">
                <div class="thuTuGioiThieu">
                    <b class="textRed text17">THƯ GIỚI THIỆU</b>                
                    <br><br><span>Để tạo ấn tượng cho nhà tuyển dụng, hãy tự giới thiệu bản thân với nhà tuyển dụng. Bạn nên sử dụng thư giới thiệu gửi kèm theo hồ sơ ứng tuyển.</span>
                    <br><br>
                    <table width="100%" cellpadding="0" cellspacing="0" border="1">
                        <tbody><tr>
                                <td class="tbInfo-header" width="60" align="center">
                                    <input type="checkbox" id="checkbox_ut_all" title="Chọn/Bỏ chọn tất cả" checked="" onclick="select_or_unselect_group_checkbox('checkbox_ut[', ']', 1, document.getElementById('checkbox_ut_all').checked)">
                                </td>
                                <td class="tbInfo-header">Vị trí tuyển dụng</td>
                                <td class="tbInfo-header">Công ty ứng tuyển</td>
                                <td class="tbInfo-header" width="120">Người liên hệ</td>
                            </tr>
                            <tr>
                                <td valign="center" style="padding: 5px 10px 5px 10px;line-height: 23px;" align="center">
                                    <input type="checkbox" name="checkbox_ut[]" id="checkbox_ut[0]" checked="" value="<?php echo $tintd_detail[0]['e_id']; ?>">
                                </td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['e_title']; ?></td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['u_companyName']; ?></td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['u_contactName']; ?></td>
                                <input type="hidden" name="email_com" value="<?php echo $tintd_detail[0]['u_username']; ?>" />
                                 <input type="hidden" name="title_job" value="<?php echo $tintd_detail[0]['e_title']; ?>" />
                            </tr>
                        </tbody></table>
                    <table>	
                        <tbody><tr>
                                <td class="tbUser-row" id="td_thong_bao_chon_tin" style="height:0px;padding: 0 0 0 0;"></td>
                            </tr>
                        </tbody></table>
                    <div class="mar-T-20">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">                    	
                            <tbody><tr>
                                    <td valign="top" class="tbUser-row" align="right" width="150"><b>Họ tên người ứng tuyển:</b></td>
                                    <td class="tbUser-row" style="font-weight:bold;"><?php echo $this->session->userdata('u_fullname'); ?></td>                            	                    	
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right"><b>Tiêu đề:</b></td>
                                    <td class="tbUser-row"><input type="text" id="txt_tieu_de" name="txt_tieu_de" class="textbox" style="width:500px"></td>                            	                    	
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right" style="height:0px;padding: 0 0 0 0;"><b></b></td>
                                    <td class="tbUser-row" id="td_thong_bao_tieu_de" style="height:0px;padding: 0 0 0 0;"></td>                            	                    	
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right"><b>Nội dung thư:</b></td>
                                    <td class="tbUser-row"><textarea id="txta_noi_dung" name="txta_noi_dung" cols="80" rows="5" class="textArea" style="width:490px;height:300px"></textarea><br><i class="text11 textRed">(tối đa 2000 ký tự)</i></td>                            	                    	
                                </tr> 
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right" style="height:0px;padding: 0 0 0 0;"><b></b></td>
                                    <td class="tbUser-row" id="td_thong_bao_noi_dung" style="height:0px;padding: 0 0 0 0;"></td>                            	                    	
                                </tr>
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right"><b>Hồ sơ cá nhân:</b></td>

                                    <td class="tbUser-row">
                                        <a name="href-c_trinh_do"></a>
                                        <select class="dropbox" name="c_cv" id="c_cv">
                                            <option value="-1">-- Chọn CV --</option>
                                            <?php
                                            foreach ($cv_detail as $cv_choose) {
                                                ?>
                                                <option value="<?php echo $cv_choose['j_id']; ?>"><?php echo $cv_choose['j_title']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div id="err_c_trinh_do" class="textRed11"></div>
                                    </td>                            	                    	
                                </tr>				
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right"></td>
                                    <td class="tbUser-row"><i style="color:#888888;">(Nếu CV của bạn đang duyệt sẽ không được hiển thị cho bạn chọn, bạn phải chờ đến khi CV của bạn được duyệt)</i></td>                            	                    	
                                </tr>

                            </tbody></table>
                    </div>
                </div>
            </form>
            <div class="mar-T-B-10" align="center"><input onclick="submit_();" type="button" class="button"  value="Nộp đơn">&nbsp;&nbsp;<input type="button" class="button" onclick="javascript: window.location = document.referrer;" value="Quay lại"></div>
        </div>
        
        <div class="clear"></div> 
    </div>
    </form>
</div>
<script>
function submit_()
{
    if(document.getElementById('c_cv').value==-1)
    {
        alert('Chưa chọn CV');
    }
    else
    {
        if(document.getElementById('txta_noi_dung').value=='')
        {
            alert('Chưa điền nội dung');
            document.getElementById('txta_noi_dung').focus();
        }
        else
        {
            if(document.getElementById('txt_tieu_de').value=='')
            {
                alert('Chưa điền tiêu đề');
                document.getElementById('txt_tieu_de').focus();
            }
            else
            {
                document.nopdon.submit();   
            }
        }
    }
}
</script>