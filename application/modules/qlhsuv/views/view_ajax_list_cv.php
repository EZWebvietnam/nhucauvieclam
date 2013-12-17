                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td colspan="2" style="padding:10px;"> Thống kê: Danh sách hiện có <span style="color:red;font-size:14px;font-weight:bold"><?php echo count($detail)?> </span> Hồ sơ ứng viên </td>
                                </tr>
                                <tr>
                                    <td class="tb-row-G"><span class="text12">Tìm kiếm hồ sơ ứng viên
                                            trong danh sách ứng viên đã nộp hồ sơ theo tiêu chí:</span></td>
                                    <td class="tb-row-G" width="100">
                                        <input src="<?php echo base_url(); ?>template/home/img/btnHuyTimkiem.gif" type="image" onclick="ntd_quan_tri_huy_tim_kiem_ho_so_ung_vien()">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="box-DK-search-header" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom:0px;">
                            <tbody>
                                <tr>
                                    <td height="20" valign="top" width="280">
                                        <div class="borderBot">
                                            <b>Trạng thái hồ sơ:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Mức lương mong muốn:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Trình độ học vấn:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="180">
                                        <div class="borderBot">
                                            <b>Giới tính:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="200">
                                        <div class="borderBot">
                                            <b>Tên hồ sơ:</b>
                                        </div></td>
                                    <td height="20" valign="top" width="280">
                                        <div class="borderBot">
                                            <b>Số năm kinh nghiệm:</b>
                                        </div></td>
                                    <td style="width:15px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="list_cv" style="height: 90px; overflow-x: hidden; overflow-y: scroll;border:#c6dbe0 solid 1px;border-top:0px;">
                            <table class="box-DK-search-noborder" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                <?php 
                                    $status = array('0'=>'Chưa duyệt','1'=>'Đã duyệt');
                                    //print_r($detail);exit;
                                    foreach($detail as $detail_hs)
                                    {
                                    ?>
                                    <tr>
                                        <td height="30" valign="top" width="280"><div class="lineHeight25"></div><?php echo $status[$detail_hs['j_status']]?></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div><?php echo $list_luong[$detail_hs['j_luongmm']]?></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div><?php echo $list_bangcap[$detail_hs['j_trinhdo']]?></td>
                                        <td height="30" valign="top" width="180"><div class=" lineHeight25"></div><?php echo $list_sex[$detail_hs['u_sex']]?></td>
                                        <td height="30" valign="top" width="200"><div class=" lineHeight25"></div><a href="<?php echo base_url();?>hoso-ungvien/<?php echo $detail_hs['j_id'] ?>-<?php echo mb_strtolower(url_title(removesign($detail_hs['j_title']))) ?>"><?php echo $detail_hs['j_title']?></a></td>
                                        <td height="30" valign="top" width="280"><div class=" lineHeight25"></div><?php echo $list_exp[$detail_hs['j_kinhnghiem']]?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>