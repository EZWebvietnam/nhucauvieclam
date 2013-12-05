<div id="content-detail">
    <div class="GridSub">
        <div class="TopLeft">
            <div class="TopRight">
                <h2 class="Headline"><a href="/vieclam/tintuyendungnhanh" target="_blank">Tin tuyển dụng nhanh</a></h2>
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">
                <table class="TableTdnVip">
                    <tbody>

                        <?php
                        $i = 1;

                        foreach ($tuyendungnhanh_detail as $tin_tuyen_dung) {
                            ?>
                            <?php
                            if ($i % 3 == 1) {
                                ?>
                                <tr>
                            <?php } ?>
                                <td width="25%">
                                    <table class="TableTdn">
                                        <tbody>
                                            <tr>
                                                <td class="W50"><img src="<?php echo base_url(); ?>template/home/img/hr_asiafoods_vn.jpg" width="50" alt="CÔNG TY CỔ PHẦN THỰC PHẨM Á CHÂU"></td>
                                                <td style="padding-left: 3px;"><a href="<?php echo base_url(); ?>Infotintd/Infotintd/view_job_post/<?php echo $tin_tuyen_dung['e_id']; ?>" target="_blank"><?php echo $tin_tuyen_dung['e_title']; ?></a><div class="TinyBlank"></div><span class="Number">CÔNG TY CỔ PHẦN THỰC...</span></td>
                                            </tr>
                                        </tbody>
                                    </table></td>
    <?php
    if ($i % 3 == 0) {
        ?>
                                    <td width="25%"></td>
                                </tr>
                                <?php } ?>
    <?php $i++;
} ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
    <div class="Blank"></div>
    <div class="GridVip">
        <div class="TopLeft">
            <div class="TopRight">
                <h2 class="Headline"><a href="/tintieudiem" target="_blank">Tin tiêu điểm tuyển dụng nhân sự</a> Bán hàng </h2>
            </div>
        </div>
        <div class="BodyLeft">
            <div class="BodyRight">

                <table class="TableVip">
                    <tbody>

                        <tr>
                            <td width="33%">
                                <ul>
                                    <li>
                                        <a href="/vieclam/congviec/2800257/eden-spa-tuyen-ky-thuat-vien-spa.html" title="Eden Spa Tuyển Kỹ Thuật Viên Spa - SAIGON EDEN SPA" target="_blank"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a>
                                        <div class="TinyBlank"></div>
                                        <span class="Number">SAIGON EDEN SPA</span>
                                    </li>
                                </ul></td>
                            <td width="33%">
                                <ul>
                                    <li>
                                        <a href="/vieclam/congviec/2798857/nhan-vien-kinh-doanh-ma-t-ha-ng-ho-a-cha-t-the-p-va-va-t-tu-ha-ng-ha-i.html" title="Nhân Viên Kinh Doanh Mặt Hàng Hóa Chất, Thép Và Vật Tư Hàng Hải - CÔNG TY CP ĐẦU TƯ VÀ THƯƠNG MẠI DOANH NHÂN" target="_blank"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a>
                                        <div class="TinyBlank"></div>
                                        <span class="Number">CÔNG TY CP ĐẦU TƯ VÀ THƯƠNG MẠI DOANH...</span>
                                    </li>
                                </ul></td>
                            <td width="33%">
                                <ul>
                                    <li>
                                        <a href="/vieclam/congviec/2798495/tuyen-gap-50-nhan-vien-ban-hang-tai-trung-tam-thuong-mai-aeon-celadon.html" title="Tuyển Gấp 50 Nhân Viên Bán Hàng Tại Trung Tâm Thương Mại Aeon Celadon - CN CÔNG TY TNHH THƯƠNG MẠI LK" target="_blank"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a>
                                        <div class="TinyBlank"></div>
                                        <span class="Number">CN CÔNG TY TNHH THƯƠNG MẠI LK</span>
                                    </li>
                                </ul></td>
                        </tr>

                    <td width="33%">
                        <ul>
                            <li>
                                <a href="/vieclam/congviec/2739083/nhan-vien-ban-hang-tai-sieu-thi.html" title="Nhân Viên Bán Hàng Tại Siêu Thị - CÔNG TY TNHH SUPOR VIỆT NAM" target="_blank">Nhân Viên Bán Hàng Tại Siêu Thị</a>
                                <div class="TinyBlank"></div>
                                <span class="Number">CÔNG TY TNHH SUPOR VIỆT NAM</span>
                            </li>
                        </ul></td>
                    <td width="33%"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="BottomLeft">
            <div class="BottomRight"></div>
        </div>
    </div>
    <div class="Blank"></div>

    <div class="GridInfo">
        <div class="Content">
            <div class="AlignRight">

                <form action="/vieclam/tuyendung/10/ban-hang.html" method="GET" id="form-filter">
                    <select id="filter-province" name="f">
                        <option value="" selected="selected">--- Tỉnh/Thành Phố ---</option>
                        <option value="1">TP.Hồ Chí Minh</option>
                        <option value="2">Hà Nội</option>
                        <option value="3">An Giang</option>
                        <option value="4">Bạc Liêu</option>
                        <option value="5">Bà Rịa-Vũng Tàu</option>
                        <option value="6">Bắc Cạn</option>
                        <option value="7">Bắc Giang</option>
                        <option value="8">Bắc Ninh</option>
                        <option value="9">Bến Tre</option>
                        <option value="10">Bình Dương</option>
                        <option value="11">Bình Định</option>
                        <option value="12">Bình Phước</option>
                        <option value="13">Bình Thuận</option>
                        <option value="14">Cao Bằng</option>
                        <option value="15">Cà Mau</option>
                        <option value="16">Cần Thơ</option>
                        <option value="17">Đà Nẵng</option>
                        <option value="18">Đắk Lắk</option>
                        <option value="19">Đắk Nông</option>
                        <option value="20">Điện Biên</option>
                        <option value="21">Đồng Nai</option>
                        <option value="22">Đồng Tháp</option>
                        <option value="23">Gia Lai</option>
                        <option value="24">Hà Giang</option>
                        <option value="25">Hà Nam</option>
                        <option value="26">Hà Tây</option>
                        <option value="27">Hà Tĩnh</option>
                        <option value="28">Hải Dương</option>
                        <option value="29">Hải Phòng</option>
                        <option value="30">Hậu Giang</option>
                        <option value="31">Hòa Bình</option>
                        <option value="32">Hưng Yên</option>
                        <option value="33">Khánh Hòa</option>
                        <option value="34">Kiên Giang</option>
                        <option value="35">Kon Tum</option>
                        <option value="36">Lai Châu</option>
                        <option value="37">Lạng Sơn</option>
                        <option value="38">Lào Cai</option>
                        <option value="39">Lâm Đồng</option>
                        <option value="40">Long An</option>
                        <option value="41">Nam Định</option>
                        <option value="42">Nghệ An</option>
                        <option value="43">Ninh Bình</option>
                        <option value="44">Ninh Thuận</option>
                        <option value="45">Phú Thọ</option>
                        <option value="46">Phú Yên</option>
                        <option value="47">Quảng Bình</option>
                        <option value="48">Quảng Nam</option>
                        <option value="49">Quảng Ngãi</option>
                        <option value="50">Quảng Ninh</option>
                        <option value="51">Quảng Trị</option>
                        <option value="52">Sóc Trăng</option>
                        <option value="53">Sơn La</option>
                        <option value="54">Tây Ninh</option>
                        <option value="55">Thái Bình</option>
                        <option value="56">Thái Nguyên</option>
                        <option value="57">Thanh Hóa</option>
                        <option value="58">Thừa Thiên-Huế</option>
                        <option value="59">Tiền Giang</option>
                        <option value="60">Trà Vinh</option>
                        <option value="61">Tuyên Quang</option>
                        <option value="62">Vĩnh Long</option>
                        <option value="63">Vĩnh Phúc</option>
                        <option value="64">Yên Bái</option>
                        <option value="65">Toàn quốc</option>
                        <option value="66">Nước ngoài</option>
                    </select>
                </form>
                <script>
                    $(document).ready(function() {
                        $('#filter-province').change(function() {
                            $('#form-filter').submit();
                        });
                    });
                </script>
            </div>
            <div class="HighBlank"></div>

            <table class="TableGrid">
                <tbody>
                    <tr>
                        <th>Vị trí</th>
                        <th> Trình độ
                            <br>
                            Kinh nghiệm </th>
                        <th>Mức lương</th>
                        <th>Tỉnh/Thành phố</th>
                        <th> Ngày cập nhật
                            <br>
                            Ngày hết hạn </th>
                    </tr>

                    <tr class="Even">
                        <td><a href="/vieclam/congviec/2671624/nhan-vien-kinh-doanh.html" class="NormalJob"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a><div class="Blank"></div><a href="/vieclam/congty/2552602/cong-ty-tnhh-tm-dv-xd-hiep-phat.html" class="VipEmployer">Công ty TNHH TM DV XD Hiệp Phát</a></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_trinhdo']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_kinhnghiem']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_luong']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
                        </td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_dateActive']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_lastDate']; ?></td>
                    </tr>

                    <tr class="Odd">
                        <td><a href="/vieclam/congviec/2785960/nhan-vien-ban-hang-gas-khu-vuc-binh-duong.html" class="NormalJob"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a><div class="Blank"></div><a href="/vieclam/congty/2590666/cong-ty-tnhh-tm-dau-khi-thanh-pho-ho-chi-minh.html" class="VipEmployer">CÔNG TY TNHH TM DẦU KHÍ THÀNH PHỐ HỒ CHÍ MINH</a></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_trinhdo']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_kinhnghiem']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_luonga']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
                        </td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_dateActive']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_lastDate']; ?></td>
                    </tr>

                    <tr class="Even">
                        <td><a href="/vieclam/congviec/2724607/nhan-vien-kinh-doanh-cham-soc-khach-hang.html" class="NormalJob"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a><div class="Blank"></div><a href="/vieclam/congty/2571114/cong-ty-tnhh-sx-phim-tuoi-tre-viet.html" class="VipEmployer">Công ty TNHH - SX Phim Tuổi Trẻ Việt</a></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_trinhdo']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_kinhnghiem']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_luongb']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
                        </td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_dateActive']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_lastDate']; ?></td>
                    </tr>

                    <tr class="Odd">
                        <td><a href="/vieclam/congviec/2742540/nhan-vien-kinh-doanh-ky-su-nong-nghiep.html" class="NormalJob"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a><div class="Blank"></div><a href="/vieclam/congty/2549879/cong-ty-gia-hung-ghd-group.html" class="VipEmployer">CÔNG TY GIA HƯNG - GHD GROUP</a></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_trinhdo']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_kinhnghiem']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_luong']; ?></td>
                        <td class="Nowrap">
<?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
                            <?php echo $tuyendungnhanh_detail[0]['e_cityID1']; ?>
                            <br>
                        </td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_dateActive']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_lastDate']; ?></td>
                    </tr>

                    <tr class="Even">
                        <td><a href="/vieclam/congviec/2662931/nhan-vien-kinh-doanh-ky-su-nong-nghiep-khu-vuc-gia-lai.html" class="NormalJob"><?php echo $tuyendungnhanh_detail[0]['e_title']; ?></a><div class="Blank"></div><a href="/vieclam/congty/2549879/cong-ty-gia-hung-ghd-group.html" class="VipEmployer">CÔNG TY GIA HƯNG - GHD GROUP</a></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_trinhdo']; ?>
                            <br>
<?php echo $tuyendungnhanh_detail[0]['e_kinhnghiem']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_luong']; ?></td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_cityID']; ?>
                            <br>
                        </td>
                        <td class="Nowrap"><?php echo $tuyendungnhanh_detail[0]['e_dateActive']; ?>
                            <br>
                            <?php echo $tuyendungnhanh_detail[0]['e_lastDate']; ?></td>
                    </tr>

                </tbody>
            </table>

            <div class="Paginator">
                <span class="prev">Trước</span><span class="current"><a href="/vieclam/tuyendung/10/ban-hang.html/page:1">1</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:2">2</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:3">3</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:4">4</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:5">5</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:6">6</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:7">7</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:8">8</a></span> | <span><a href="/vieclam/tuyendung/10/ban-hang.html/page:9">9</a></span><span class="next"><a href="/vieclam/tuyendung/10/ban-hang.html/page:2" rel="next">Sau</a></span>
            </div>
        </div>
    </div>
</div>
