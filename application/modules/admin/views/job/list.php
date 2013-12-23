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
                        <th>Tên</th>
                        <th>Ngày hết hạn</th>
                        <th>Email</th>
                        <th>Công ty</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php 
                    foreach($data as $cv)
                    {
                    ?>
                    <tr>
                        <td><a href="<?php echo base_url();?>tin-tuyen-dung/<?php echo $cv['e_id']?>-<?php echo mb_strtolower(url_title(removesign($cv['e_title']))) ?>"><?php echo $cv['e_title']?></a></td>
                        <td class="center"><?php echo date('d/m/Y',$cv['e_lastDate']);?></td>
                        <td class="center"><?php echo $cv['u_email']?></td>
                        <td class="center">
                            <?php echo $cv['u_companyName']?>
                        </td>
                        <td class="center">
                            <a class="btn btn-success" href="<?php echo base_url();?>tin-tuyen-dung/<?php echo $cv['e_id']?>-<?php echo mb_strtolower(url_title(removesign($cv['e_title']))) ?>">
                                <i class="icon-zoom-in icon-white"></i>  
                                Xem chi tiết                                            
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="icon-edit icon-white"></i>  
                               Duyệt tin
                            </a>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa ?');" href="<?php echo base_url();?>admin/adminjob/delete/<?php echo $cv['e_id']?>">
                                <i class="icon-trash icon-white"></i> 
                                Xóa
                            </a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->