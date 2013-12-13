<?php
if ($is_login == 1) {
    ?>
    <div id="user-menu">

        <div class="GridInfo">
            <div class="Content">

                <ul class="UserMenu">
                    <li>
                        <a href="<?php echo base_url(); ?>quanly-timviec/<?php echo $this->session->userdata['u_id']; ?>">Quản lý tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>hsda-dang/<?php echo $this->session->userdata['u_id']; ?>">Hồ Sơ đã đăng</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>tao-hsungvien/<?php echo $this->session->userdata['u_id']; ?>">Tạo HS tìm việc</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>daluu/<?php echo $this->session->userdata['u_id']; ?>">Việc làm đã Lưu</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>da-ung-tuyen/<?php echo $this->session->userdata['u_id']; ?>">Việc làm đã ứng tuyển</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>cv/<?php echo $this->session->userdata['u_id']; ?>">Hồ sơ cá nhân(CV)</a>
                    </li>

                    <li class="Separator">
                        |
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>thongtin-canhan/<?php echo $this->session->userdata['u_id']; ?>">Thông tin cá nhân</a>
                    </li>

                </ul>
                <div class="Clear"></div>
            </div>
        </div>
    </div>
<?php } ?>
<div id="content-detail">

    <div class="content-qlhs">
        <input type="hidden" name="dang_xu_ly" id="dang_xu_ly" value="0">
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
                                    <input type="checkbox" name="checkbox_ut[]" id="checkbox_ut[0]" checked="" value="1402232">
                                </td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['e_title']; ?></td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['u_companyName']; ?></td>
                                <td valign="top" class="tbUser-row"><?php echo $tintd_detail[0]['u_contactName']; ?></td>
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
            <div class="mar-T-B-10" align="center"><input type="button" class="button" onclick="javascript: if (dat_trang_thai_dang_xu_ly()) {
                cap_nhat_nop_don_truc_tuyen();
            }" value="Nộp đơn">&nbsp;&nbsp;<input type="button" class="button" onclick="javascript: window.location = document.referrer;" value="Quay lại"></div>
        </div>
        <div class="colRight-QT2">
            <div><b class="text15">Hướng dẫn nộp trực tuyến</b></div>
            <div class="borderBot"></div>
            <div class="HSMauItem text12 lineHeight10"> 
                1.	Đây là chức năng giúp bạn ứng tuyển nhanh nhất vào vị trí mong muốn<br><br>
                2.	Để sử dụng chức năng này bạn cần tạo Hồ sơ cá nhân (CV) cho riêng mình<br><br>
                3.	Chức năng này giúp các NTD biết đến bạn nhanh hơn<br><br>
                <b style="color:red;">**	Chú ý</b>: Bạn có thể sử dụng thư để giới thiệu vắn tắt thông tin cho NTD biết hoặc gây ấn tượng tốt với NTD

            </div>            
            <div class="tbInfo-header mar-T-B-10">THƯ GIỚI THIỆU MẪU</div>
            <div>	
                <input type="hidden" id="thu_mau_tieu_de_0" value="[Việc làm 24h] Thư Ứng tuyển có kinh nghiệm">
                <input type="hidden" id="thu_mau_noi_dung_0" value="Lê Hoàng Minh Anh
                       185 Giảng Võ,
                       Thành phố Hà Nội

                       Hà Nội, ngày...... tháng.......năm.........

                       Kính gửi: Ông/bà (Họ và tên người liên hệ)
                       Chức vụ: (Chức vụ của người liên hệ)
                       Công ty: (Tên công ty liên hệ)

                       Tôi rất mong được hợp tác làm việc cùng quý công ty, tôi đánh giá rất cao những giá trị mà công ty đã mang lại cho khách hàng của mình và trên hết là công ty đang tạo điều kiện cho những ai đang muốn tìm kiếm một cơ hội nghề nghiệp hấp dẫn hơn, thử thách hơn và thú vị hơn. Tôi viết thư này gửi đến quý công ty nhằm đề cử cho chính mình vào chức vụ Trưởng bộ phận phục vụ khách hàng mà công ty đang cần tuyển. 

                       Tôi cũng đã gửi kèm theo thư này một bản lý lịch (CV) miêu tả mọi thông tin cá nhân của tôi và những kinh nghiệm mà tôi từng trải và những gì mà tôi đã được học. Tôi có 10 năm kinh nghiệm trong lĩnh vực quan hệ khách hàng và nắm rất rõ mọi thông tin cần thiết trong lĩnh vực này. Vị trí hiện tại của tôi đã cung cấp cho tôi 2 năm kinh nghiệm về việc lãnh đạo nhóm gồm 20 thành viên. 

                       Tôi mong muốn có cơ hội phát triển nhiều hơn nữa trong lĩnh vực này. Để có thể hỗ trợ cho chính mình trong lĩnh vực nghề nghiệp mà tôi đã chọn, tôi đã tham gia học một khóa đào tạo 6 tháng về Quản trị bộ phận phục vụ khách hàng. Kết quả của khóa học vừa qua là tôi đã nâng cao kinh nghiệm và chuyên môn của mình trong lĩnh vực này với những lý thuyết mới nhất về Quản trị Nhân sự.

                       Vui lòng liên hệ với tôi ngay khi ông/bà cảm thấy thuận tiện nhất, và nếu có bất kì yêu cầu nào về thông tin xin hãy cho tôi biết ngay để tôi có thể cung cấp kịp thời cho quý công ty. Tôi xin được phép gọi lại cho quý công ty vào tuần sau để hỏi về một số thông tin trong những vị trí mà tôi đang quan tâm. 

                       Kính thư

                       Ghi đầy đủ họ tên
                       (Xin vui lòng tham khảo hồ sơ xin việc đính kèm)
                       ">
                <a href="javascript: get_thu_mau(0)" title="" class="dangHoSo">[Việc làm 24h] Thư Ứng tuyển có kinh nghiệm</a><br>

                <input type="hidden" id="thu_mau_tieu_de_1" value="[Việc làm 24h] Thư ứng tuyển chưa có kinh nghiệm">
                <input type="hidden" id="thu_mau_noi_dung_1" value="Đỗ Hoàng Bảo Anh
                       15A Lê Thánh Tôn,
                       Thành phố Hồ Chí Minh

                       Ngày 20 tháng 12 năm 2012

                       Kính gửi: Ông/Bà (Họ và tên người liên hệ)
                       Chức vụ của người liên hệ 
                       Tên công ty

                       Thưa ông/bà,

                       Thông qua Website Việc làm 24h, tôi được biết Quý Công ty đang cần tuyển (Tên vị trí ứng tuyển). Tôi mong muốn được thử sức mình trong môi trường làm việc hết sức năng động của Quý Công ty. Tôi vừa mới ra trường chưa có kinh nghiệm, nhưng tôi là một trong mười sinh viên tốt nghiệp hàng đầu của trường ĐH (Tên trường bạn đã học) và tôi hoàn toàn tự tin với vốn kiến thức về lĩnh vực thương mại của mình. 

                       Tôi rất mong ông/bà có thể sắp xếp một cuộc phỏng vấn trực tiếp gần đây nhất để tôi có thể trình bày rõ hơn về bản thân cũng như tìm hiểu thêm các yêu cầu chi tiết cho vị trí (tên vị trí ứng tuyển).  

                       Cám ơn ông/bà đã dành thời gian quý báu để xem xét thư xin việc này. 

                       Xin cám ơn!

                       Trân trọng

                       Đỗ Hoàng Bảo Anh
                       (Xin vui lòng tham khảo hồ sơ xin việc đính kèm)">
                <a href="javascript: get_thu_mau(1)" title="" class="dangHoSo">[Việc làm 24h] Thư ứng tuyển chưa có kinh nghiệm</a><br>

            </div>
        </div>
        <div class="clear"></div> 
    </div>
</div>