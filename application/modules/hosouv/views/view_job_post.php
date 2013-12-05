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
                    <tr>
                    <?php
                        foreach ($job_post_list as $job) {
                            ?>
                        <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/aosomihanquoc99_gmail_com.jpg" width="50" alt="CỬA HÀNG THỜI TRANG THÁI - SHOP"></td>
                        <td style="padding-left: 3px;"><a href="<?php echo base_url(); ?>home/home/view_job_post/<?php echo $job['e_id'] ?>" target="_blank" ><?php echo $job['e_title'] ?></a>
                            <div class="TinyBlank"></div>
                            <span class="Number">CỬA HÀNG THỜI TRANG THÁI...</span></td>
                    <?php } ?>
                    </tr>
                    <tr>
                        <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/hr_asiafoods_vn.jpg" width="50" alt="CÔNG TY CỔ PHẦN THỰC PHẨM Á CHÂU"></td>
                        <td style="padding-left: 3px;"><a href="/vieclam/congviec/2802192/sales-supervisor.html" title="Sales Supervisor - CÔNG TY CỔ PHẦN THỰC PHẨM Á CHÂU" target="_blank"> Sales Supervisor </a><div class="TinyBlank"></div><span class="Number">CÔNG TY CỔ PHẦN THỰC...</span></td>
                    </tr>
                    <tr>
                        <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/dvketoantt_gmail_com.jpg" width="50" alt="Cty Kế Toán Kiểm Toán Thanh Trí"></td>
                        <td style="padding-left: 3px;"><a href="/vieclam/congviec/2736626/tuyen-thuc-tap-ke-toan.html" title="Tuyển Thực Tập Kế Toán - Cty Kế Toán Kiểm Toán Thanh Trí" target="_blank"> Tuyển Thực Tập Kế Toán </a><div class="TinyBlank"></div><span class="Number">Cty Kế Toán Kiểm Toán...</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="BottomLeft">
        <div class="BottomRight"></div>
    </div>
</div>