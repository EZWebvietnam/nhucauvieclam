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
                <div class="navBarLeft"><h2><span class="navBarTxt24-1">THÔNG BÁO TIN TUYỂN DỤNG KHÔNG ĐÚNG</span></h2></div>
                <div class="clear"></div>
            </div>  
            <div class="lineHeight10"><i><u style="color:red;font-weight:bold;">*** Chú ý:</u></i> Bạn vui lòng kiểm tra lại thông tin trước khi gửi</b></div>

            <div class="tbInfo-header mar-T-B-10"></div>	
            <form name="frm_nop_ho_so_truc_tuyen" method="post" action="" enctype="multipart/form-data">		
                <iframe name="fr_submit" id="fr_submit" width="00" height="00" style="visibility:hidden"></iframe>	
                
                <div class="thuTuGioiThieu">
                    
                    <div class="mar-T-20">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">                    	
                            <tbody><tr>
                                    <td valign="top" class="tbUser-row" align="right" width="150"><b>Họ tên người gửi:</b></td>
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
                                    <td class="tbUser-row"><textarea id="txta_noi_dung" name="txta_noi_dung" cols="80" rows="5" class="textArea" style="width:490px;height:300px">Thông báo tin tuyển dụng không đúng:<?php echo base_url();?>tin-tuyen-dung/<?php echo $tintd_detail[0]['e_id']?>-<?php echo mb_strtolower(url_title(removesign($tintd_detail[0]['e_title']))); ?>                                    
                                    </textarea><br><i class="text11 textRed">(tối đa 2000 ký tự)</i></td>                            	                    	
                                </tr> 
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right" style="height:0px;padding: 0 0 0 0;"><b></b></td>
                                    <td class="tbUser-row" id="td_thong_bao_noi_dung" style="height:0px;padding: 0 0 0 0;"></td>                            	                    	
                                </tr>
                                				
                                <tr>
                                    <td valign="top" class="tbUser-row" align="right"></td>
                                    <td class="tbUser-row"><i style="color:#888888;">(Nếu CV của bạn đang duyệt sẽ không được hiển thị cho bạn chọn, bạn phải chờ đến khi CV của bạn được duyệt)</i></td>                            	                    	
                                </tr>

                            </tbody></table>
                    </div>
                </div>
            </form>
            <div class="mar-T-B-10" align="center"><input onclick="submit_();" type="button" class="button"  value="Gửi">&nbsp;&nbsp;<input type="button" class="button" onclick="javascript: window.location = document.referrer;" value="Quay lại"></div>
        </div>
        
        <div class="clear"></div> 
    </div>
    </form>
</div>
<script>
function submit_()
{
   
                document.nopdon.submit();   
            
}
</script>