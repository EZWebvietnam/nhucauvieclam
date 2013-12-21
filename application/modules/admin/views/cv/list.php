<a class="btn btn-primary" href="<?php echo base_url();?>admin/user/add">
    <i  class="icon icon-color icon-plus"></i> 
                                Thêm User
                            </a>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Members</h2>
            <div class="box-icon">

                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Tên hồ sơ</th>
                        <th>Ngày tạo</th>
                        <th>Người tạo</th>
                        <th>Ngành nghề</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($data as $cv)
                    {
                    ?>
                    <tr>
                            <?php 
                            if($cv['j_status']==1)
                            {
                            ?>
                        <td><a href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $cv['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($cv['j_title']))) ?>" target="_blank" title="<?php echo $cv['j_title']?>"><?php echo $cv['j_title']?></a></td>
                        <?php } else {?> 
                        <td><a href="<?php echo base_url(); ?>hoso-ungvien-cho-duyet/<?php echo $cv['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($cv['j_title']))) ?>" target="_blank" title="<?php echo $cv['j_title']?>" ><?php echo $cv['j_title']?></a></td>
                        <?php } ?>
                        <td class="center"><?php echo date('d/m/Y',$cv['j_date']);?></td>
                        <td class="center"><?php echo $cv['u_fullname']?></td>
                        <td class="center">
                            <?php 
                            echo $list_cate_job[$cv['m_id']];
                            ?>
                        </td>
                        <td class="center">
                            <?php 
                            if($cv['j_status']==1)
                            {
                            ?>
                            <span class="label label-success">Đã duyệt</span>
                            <?php } else {?> 
                                <span class="label label-important">Chưa duyệt</span>
                                <?php } ?>
                        </td>
                        <td class="center">
                        <?php 
                            if($cv['j_status']==1)
                            {
                            ?>
                            <a class="btn btn-success" href="<?php echo base_url(); ?>hoso-ungvien/<?php echo $cv['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($cv['j_title']))) ?>">
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <?php } else {?>
                            <a class="btn btn-success" href="<?php echo base_url(); ?>hoso-ungvien-cho-duyet/<?php echo $cv['j_id']; ?>-<?php echo mb_strtolower(url_title(removesign($cv['j_title']))) ?>">
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <?php } ?>
                            <a class="btn btn-info" href="#">
                                <i class="icon-edit icon-white"></i>  
                               Sửa                                        
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa ?');" href="<?php echo base_url();?>admin/admincv/delete/<?php echo $cv['j_id']?>">
                                <i class="icon-trash icon-white"></i> 
                                Xóa
                            </a>
                            <?php 
                            if($cv['j_status']==0)
                             {?> <a class="btn btn-primary" href="<?php echo base_url();?>admin/admincv/ban/<?php echo $cv['j_id']?>">
                                <i class="icon icon-color icon-check"></i> 
                                Mở Khóa
                            </a><?php }?>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->