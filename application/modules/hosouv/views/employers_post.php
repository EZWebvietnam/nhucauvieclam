<div class="GridSub">
    <div class="TopLeft">
        <div class="TopRight">
            <h2 class="Headline">Người tìm việc năng động</h2>
        </div>
    </div>
    <div class="BodyLeft">
        <div class="BodyRight">
            <table class="TableVip">
                <tbody>
                    <tr>
                        <?php
                        foreach ($user_post_list as $job){
                            ?>
                        <td>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>home/home/view_user_post/<?php echo $job['j_id'] ?>" target="_blank" ><?php echo $job['j_title'] ?></a>
                                    <div class="TinyBlank"></div>
                                    <span class="Number">Le Van Dung</span>
                                </li>
                            </ul></td>
                            <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="BottomLeft">
        <div class="BottomRight"></div>
    </div>
</div>