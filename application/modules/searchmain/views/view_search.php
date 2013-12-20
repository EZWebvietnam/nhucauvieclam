<div id="content-detail">
    <div class="GridInfo">
        <div class="Content">
            <table class="TableGrid">
                <tbody><tr>
                        <th>Vị trí</th>
                        <th>
                            Trình độ <br>
                            Kinh nghiệm</th>
                        <th>Mức lương</th>
                        <th>Tỉnh/Thành phố</th>
                        <th>
                            Ngày cập nhật<br>
                            Ngày hết hạn</th>
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
                            <?php echo $list_bangcap[$job['e_trinhdo']]; ?><br>
                            <?php echo $list_exp[$job['e_kinhnghiem']]; ?>
                            </td>
                        <td class="Nowrap">
                            <?php echo $list_luong[$job['e_luong']]; ?></td>
                        <td class="Nowrap">
                            <?php echo $list_city[$job['e_cityID']]; ?><br>
                        </td>
                        <td class="Nowrap">
                            <?php echo date('d/m/Y',$job['e_dateActive']); ?><br>
                            <?php echo date('d/m/Y',$job['e_lastDate']); ?></td>                    
                    </tr>
                    <?php } ?>
                    
                </tbody></table>

            <div class="Paginator">
                <?php echo $this->pagination->create_links();?>	</div>
        </div>
    </div>                        
</div>