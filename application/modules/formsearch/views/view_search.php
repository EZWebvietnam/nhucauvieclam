<div id="content-detail">
    <div class="GridInfo">
        <div class="Content">


            <table class="TableGrid">
                <tbody><tr>
                        <th>Vị trí</th>
                        <th>
                            Trình độ			<br>
                            Kinh nghiệm		</th>
                        <th>Mức lương</th>
                        <th>Tỉnh/Thành phố</th>
                        <th>
                            Ngày cập nhật			<br>
                            Ngày hết hạn		</th>
                    </tr>
                    <?php
                            foreach ($job_list as $job)
                            {
                        ?>
                    <tr class="Odd">                        
                        <td>
                            <a href="<?php echo base_url(); ?>tin-tuyen-dung/<?php echo $job['e_id']; ?>-<?php echo mb_strtolower(url_title(removesign($job['e_title']))) ?>" target="_blank" class="NormalJob">
                                <?php echo $job['e_title']; ?>
                            </a>
                            <div class="Blank"></div>


                            <a href="#" class="VipEmployer"><?php echo $job['u_companyName']; ?></a>
                        </td>
                        <td class="Nowrap">
                            <?php echo $job['e_trinhdo']; ?><br>
                            <?php echo $job['e_kinhnghiem']; ?>
                            </td>
                        <td class="Nowrap">
                            <?php echo $job['e_luong']; ?> <?php echo $job['e_luonga']; ?> <?php echo $job['e_luongb']; ?></td>
                        <td class="Nowrap">
                            <?php echo $job['e_cityID']; ?> <?php echo $job['e_cityID1']; ?><br>
                        </td>
                        <td class="Nowrap">
                            <?php echo $job['e_dateActive']; ?><br>
                            <?php echo $job['e_lastDate']; ?></td>                    
                    </tr>
                    <?php } ?>
                    
                </tbody></table>

            <div class="Paginator">
                <span class="prev">Trước</span>		<span class="current"><a href="/vieclam/timkiem/nganhnghe:tu-van-bao-hiem/tinhthanhpho:tp-ho-chi-minh/page:1">1</a></span> | <span><a href="/vieclam/timkiem/nganhnghe:tu-van-bao-hiem/tinhthanhpho:tp-ho-chi-minh/page:2">2</a></span> | <span><a href="/vieclam/timkiem/nganhnghe:tu-van-bao-hiem/tinhthanhpho:tp-ho-chi-minh/page:3">3</a></span>		<span class="next"><a href="/vieclam/timkiem/nganhnghe:tu-van-bao-hiem/tinhthanhpho:tp-ho-chi-minh/page:2" rel="next">Sau</a></span>	</div>
        </div>
    </div>                        </div>