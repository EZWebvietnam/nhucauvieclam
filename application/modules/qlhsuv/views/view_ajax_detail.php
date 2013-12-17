<b>Vị trí tuyển dụng: <?php echo $list_capbac[$detail[0]['e_capbacID']];?></b>
                                        <br>
                                        <b>Hạn nộp hồ sơ: <?php echo date('d/m/Y',$detail[0]['e_lastDate']);?></b>
                                        <br>
                                        <b>Yêu cầu: <?php echo $detail[0]['e_request']?></b> ...
                                        <br>
                                        <b>Số lượng tuyển: <?php echo $detail[0]['e_mem']?></b>
                                        <br>
                                        <b>Địa điểm làm việc:<?php echo $list_city[$detail[0]['e_cityID']]?></b>