<!DOCTYPE >
<html>
    <head>
        <link href="img/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/home/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/home/css/cache_blue_sky_default.css">
        <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.1BWypNDZPPU.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AItRSTPXGZZksx7J8grxmtD0URB6MtpB7w/cb=gapi.loaded_1" async=""></script>
        <script type="text/javascript" async="" src="<?php echo base_url(); ?>template/home/js/ga.js"></script>
        <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.vi.1BWypNDZPPU.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AItRSTPXGZZksx7J8grxmtD0URB6MtpB7w/cb=gapi.loaded_0" async=""></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/home/js/cache_blue_sky_default.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/home/js/demo.js"></script>
        <title>Nhu cầu việc làm</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="header-inner">
                    <div id="header-logo">
                        <a href="/" title="nhu cau viec lam" rel="home" id="logo"> <img src="<?php echo base_url(); ?>template/home/img/logo.png" alt="Tìm việc làm hàng đầu - Itworks" height="125" width="430"> </a>
                    </div>
                    <div id="bg_slider">
                        <div class="hbs">
                            <div class="slider1">
                                <div class="s-wrap">
                                    <div class="trans t-left"></div>
                                    <div class="trans t-right"></div>
                                    <div class=" jcarousel-skin-tango">
                                        <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                                            <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                                                <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -4255.900143703704px; width: 9190px;">
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees1.jpg" alt="" title="test"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees2.jpg" alt="" title="Quang cao"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees3.jpg" alt="" title="Noi that"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees4.jpg" alt="" title="et"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-622 jcarousel-item-622-horizontal" jcarouselindex="622" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees5.jpg" alt="" title="Quang cao"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-623 jcarousel-item-623-horizontal" jcarouselindex="623" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees6.jpg" alt="" title="Noi that"></a>
                                                    </li>
                                                    <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-624 jcarousel-item-624-horizontal" jcarouselindex="624" style="float: left; list-style: none;">
                                                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>template/home/img/imployees7.jpg" alt="" title="et"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>
                                            <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearer"></div>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/home/css/slider.css">
                        <script type="text/javascript" src="<?php echo base_url(); ?>template/home/js/jquery.js"></script>
                        <script type="text/javascript" src="<?php echo base_url(); ?>template/home/js/slider.js"></script>
                        <script type="text/javascript">
                            function mycarousel_initCallback(e) {
                                e.buttonNext.bind("click", function() {
                                    e.startAuto(1)
                                });
                                e.buttonPrev.bind("click", function() {
                                    e.startAuto(1)
                                });
                                e.clip.hover(function() {
                                    e.stopAuto()
                                }, function() {
                                    e.startAuto()
                                })
                            }
                            ;

                            jQuery(document).ready(function() {
                                var e = jQuery("#slider");
                                var t = jQuery(".hbs").offset();
                                e.css({
                                    position: "absolute",
                                    top: "142px",
                                    left: "0"
                                });
                                jQuery("#mycarousel").show().jcarousel({
                                    auto: 3,
                                    scroll: 1,
                                    animation: 1500,
                                    wrap: "circular",
                                    easing: "easeInOutCubic",
                                    initCallback: mycarousel_initCallback
                                })
                            });
                        </script>
                    </div>
                    <div class="clear"></div>
                    <?php if ($is_login == 0) { ?>
                    <div id="header-user-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>dangky" ga_click="_gaq.push(['_trackEvent', 'Header', 'Click', 'Đăng ký']);" title="Đăng ký"> Đăng ký </a>
                            </li>
                            <li class="Separator">
                                |
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>dangnhap/index" ga_click="_gaq.push(['_trackEvent', 'Header', 'Click', 'Đăng nhập']);" title="Đăng nhập"> Đăng nhập </a>
                            </li>
                        </ul>

                    </div>
                    <?php } else { ?> 
                    <div id="header-user-menu">
                        <?php echo $this->session->userdata['u_username']; ?> | <a href="<?php echo
    base_url(); ?>dangnhap/logout">Đăng xuất</a>

                    </div>
                    <?php } ?>
                </div>
                <div class="HighBlank"></div>
                <div class="Clear"></div>
                <div class="header-search">
                    <div class="TopLeft">
                        <div class="TopRight">
                            <h2 class="Headline">Tìm việc làm</h2>
                        </div>
                    </div>
                    <div class="BodyLeft">
                        <div class="BodyRight">
                            <form action="<?php echo base_url();?>tim-kiem" enctype="multipart/form-data" id="JobSearchJobFormForm" method="get" accept-charset="utf-8">
                                <div class="TableSearchForm1">
                                    <select name="jobfeild" class="select-choose" id="JobJobfield">
                                        <option value="">Chọn ngành nghề</option>
                                        <option value="10">Bán hàng</option>
                                        <option value="11">Tư vấn bảo hiểm</option>
                                        <option value="12">Báo chí/Biên tập viên</option>
                                        <option value="13">Bất động sản</option>
                                        <option value="14">Biên dịch/Phiên dịch</option>
                                        <option value="15">Bưu chính viễn thông</option>
                                        <option value="16">Cơ khí/Kĩ thuật ứng dụng</option>
                                        <option value="17">Công nghệ thông tin</option>
                                        <option value="18">Dầu khí/Địa chất</option>
                                        <option value="19">Dệt may</option>
                                        <option value="20">Bảo vệ/Vệ sĩ/An ninh</option>
                                        <option value="21">Chăm sóc khách hàng</option>
                                        <option value="22">Điện/Điện tử/Điện lạnh</option>
                                        <option value="23">Du lịch/Nhà hàng/Khách sạn</option>
                                        <option value="24">Dược/Hóa chất/Sinh hóa</option>
                                        <option value="25">Giải trí/Vui chơi</option>
                                        <option value="26">Giáo dục/Đào tạo/Thư viện</option>
                                        <option value="27">Giao thông/Vận tải/Thủy lợi/Cầu đường</option>
                                        <option value="28">Giày da/Thuộc da</option>
                                        <option value="29">Hành chính/Thư ký</option>
                                        <option value="30">Kho vận/Vật tư</option>
                                        <option value="31">Kiến trúc/Nội thất</option>
                                        <option value="32">Kinh doanh</option>
                                        <option value="33">Lao động phổ thông</option>
                                        <option value="34">Luật/Pháp lý</option>
                                        <option value="35">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                                        <option value="36">Môi trường/Xử lý chất thải</option>
                                        <option value="37">Mỹ phẩm</option>
                                        <option value="38">Ngân hàng/Chứng khoán/Đầu tư</option>
                                        <option value="39">Nghệ thuật/Điện ảnh</option>
                                        <option value="40">Nhân sự</option>
                                        <option value="41">Nông/Lâm/Ngư nghiệp</option>
                                        <option value="42">Quan hệ đối ngoại</option>
                                        <option value="43">Thẩm định/Giám định/Quản lý chất lượng</option>
                                        <option value="44">Quản lý điều hành</option>
                                        <option value="45">Quảng cáo/Marketing/PR</option>
                                        <option value="46">Sản xuất/Vận hành sản xuất</option>
                                        <option value="47">Tài chính/Kế toán/Kiểm toán</option>
                                        <option value="48">Thể dục/Thể thao</option>
                                        <option value="49">Thiết kế/Mỹ thuật</option>
                                        <option value="50">Thời vụ/Bán thời gian</option>
                                        <option value="51">Thực phẩm/DV ăn uống</option>
                                        <option value="52">Xây dựng</option>
                                        <option value="53">Xuất-Nhập khẩu/Ngoại thương</option>
                                        <option value="54">Y tế</option>
                                        <option value="55">Khác</option>
                                        <option value="56">Ngoại ngữ</option>
                                        <option value="58">Khu chế xuất/Khu công nghiệp</option>
                                        <option value="59">Làm đẹp/Thể lực/Spa</option>
                                        <option value="60">Tài xế/Lái xe/Giao nhận</option>
                                        <option value="61">Trang thiết bị công nghiệp</option>
                                        <option value="62">Trang thiết bị gia dụng</option>
                                        <option value="63">Trang thiết bị văn phòng</option>
                                        <option value="64">PG/PB/Lễ tân</option>
                                        <option value="65">Bán hàng/Kinh doanh mạng lưới</option>
                                        <option value="66">Phục vụ/Tạp vụ/Giúp việc</option>
                                    </select>

                                    <select name="jobplace" class="select-choose2" id="JobJobplace">
                                        <option value="">Chọn địa điểm</option>
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
                                    <button class="search-header" type="submit" onclick="javascript:return submitSearch();" >
                                        <span class="submit">Tìm kiếm</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="BottomLeft">
                        <div class="BottomRight"></div>
                    </div>
                </div>

                <script type="text/javascript">
                    var fields = new Array();
                    var provinces = new Array();
                    var levels = new Array();
                    var experiences = new Array();
                    var time = new Array();
                    var salary_vnd = new Array();
                    var salary_usd = new Array();

                    fields[10] = 'ban-hang';
                    fields[11] = 'tu-van-bao-hiem';
                    fields[12] = 'bao-chi-bien-tap-vien';
                    fields[13] = 'bat-dong-san';
                    fields[14] = 'bien-dich-phien-dich';
                    fields[15] = 'buu-chinh-vien-thong';
                    fields[16] = 'co-khi-ky-thuat-ung-dung';
                    fields[17] = 'cong-nghe-thong-tin';
                    fields[18] = 'dau-khi-dia-chat';
                    fields[19] = 'det-may';
                    fields[20] = 'bao-ve-ve-si-an-ninh';
                    fields[21] = 'cham-soc-khach-hang';
                    fields[22] = 'dien-dien-tu-dien-lanh';
                    fields[23] = 'du-lich-nha-hang-khach-san';
                    fields[24] = 'duoc-hoa-chat-sinh-hoa';
                    fields[25] = 'giai-tri-vui-choi';
                    fields[26] = 'giao-duc-dao-tao-thu-vien';
                    fields[27] = 'giao-thong-van-tai-thuy-loi-cau-duong';
                    fields[28] = 'giay-da-thuoc-da';
                    fields[29] = 'hanh-chinh-thu-ky';
                    fields[30] = 'kho-van-vat-tu';
                    fields[31] = 'kien-truc-noi-that';
                    fields[32] = 'kinh-doanh';
                    fields[33] = 'lao-dong-pho-thong';
                    fields[34] = 'luat-phap-ly';
                    fields[35] = 'sinh-vien-moi-tot-nghiep-thuc-tap';
                    fields[36] = 'moi-truong-xu-ly-chat-thai';
                    fields[37] = 'my-pham';
                    fields[38] = 'ngan-hang-chung-khoan-dau-tu';
                    fields[39] = 'nghe-thuat-dien-anh';
                    fields[40] = 'nhan-su';
                    fields[41] = 'nong-lam-ngu-nghiep';
                    fields[42] = 'quan-he-doi-ngoai';
                    fields[43] = 'tham-dinh-giam-dinh-quan-ly-chat-luong';
                    fields[44] = 'quan-ly-dieu-hanh';
                    fields[45] = 'quang-cao-marketing-pr';
                    fields[46] = 'san-xuat-van-hanh-san-xuat';
                    fields[47] = 'tai-chinh-ke-toan-kiem-toan';
                    fields[48] = 'the-duc-the-thao';
                    fields[49] = 'thiet-ke-my-thuat';
                    fields[50] = 'thoi-vu-ban-thoi-gian';
                    fields[51] = 'thuc-pham-dv-an-uong';
                    fields[52] = 'xay-dung';
                    fields[53] = 'xuat-nhap-khau-ngoai-thuong';
                    fields[54] = 'y-te';
                    fields[55] = 'khac';
                    fields[56] = 'ngoai-ngu';
                    fields[58] = 'khu-che-xuat-khu-cong-nghiep';
                    fields[59] = 'lam-dep-the-luc-spa';
                    fields[60] = 'tai-xe-lai-xe-giao-nhan';
                    fields[61] = 'trang-thiet-bi-cong-nghiep';
                    fields[62] = 'trang-thiet-bi-gia-dung';
                    fields[63] = 'trang-thiet-bi-van-phong';
                    fields[64] = 'pg-pb-le-tan';
                    fields[65] = 'ban-hang-kinh-doanh-mang-luoi';
                    fields[66] = 'phuc-vu-tap-vu-giup-viec';

                    provinces[1] = 'tp-ho-chi-minh';
                    provinces[2] = 'ha-noi';
                    provinces[3] = 'an-giang';
                    provinces[4] = 'bac-lieu';
                    provinces[5] = 'ba-ria-vung-tau';
                    provinces[6] = 'bac-can';
                    provinces[7] = 'bac-giang';
                    provinces[8] = 'bac-ninh';
                    provinces[9] = 'ben-tre';
                    provinces[10] = 'binh-duong';
                    provinces[11] = 'binh-dinh';
                    provinces[12] = 'binh-phuoc';
                    provinces[13] = 'binh-thuan';
                    provinces[14] = 'cao-bang';
                    provinces[15] = 'ca-mau';
                    provinces[16] = 'can-tho';
                    provinces[17] = 'da-nang';
                    provinces[18] = 'dak-lak';
                    provinces[19] = 'dak-nong';
                    provinces[20] = 'dien-bien';
                    provinces[21] = 'dong-nai';
                    provinces[22] = 'dong-thap';
                    provinces[23] = 'gia-lai';
                    provinces[24] = 'ha-giang';
                    provinces[25] = 'ha-nam';
                    provinces[26] = 'ha-tay';
                    provinces[27] = 'ha-tinh';
                    provinces[28] = 'hai-duong';
                    provinces[29] = 'hai-phong';
                    provinces[30] = 'hau-giang';
                    provinces[31] = 'hoa-binh';
                    provinces[32] = 'hung-yen';
                    provinces[33] = 'khanh-hoa';
                    provinces[34] = 'kien-giang';
                    provinces[35] = 'kon-tum';
                    provinces[36] = 'lai-chau';
                    provinces[37] = 'lang-son';
                    provinces[38] = 'lao-cai';
                    provinces[39] = 'lam-dong';
                    provinces[40] = 'long-an';
                    provinces[41] = 'nam-dinh';
                    provinces[42] = 'nghe-an';
                    provinces[43] = 'ninh-binh';
                    provinces[44] = 'ninh-thuan';
                    provinces[45] = 'phu-tho';
                    provinces[46] = 'phu-yen';
                    provinces[47] = 'quang-binh';
                    provinces[48] = 'quang-nam';
                    provinces[49] = 'quang-ngai';
                    provinces[50] = 'quang-ninh';
                    provinces[51] = 'quang-tri';
                    provinces[52] = 'soc-trang';
                    provinces[53] = 'son-la';
                    provinces[54] = 'tay-ninh';
                    provinces[55] = 'thai-binh';
                    provinces[56] = 'thai-nguyen';
                    provinces[57] = 'thanh-hoa';
                    provinces[58] = 'thua-thien-hue';
                    provinces[59] = 'tien-giang';
                    provinces[60] = 'tra-vinh';
                    provinces[61] = 'tuyen-quang';
                    provinces[62] = 'vinh-long';
                    provinces[63] = 'vinh-phuc';
                    provinces[64] = 'yen-bai';
                    provinces[65] = 'toan-quoc';
                    provinces[66] = 'nuoc-ngoai';

                    levels[1] = 'lao-dong-pho-thong';
                    levels[2] = 'chung-chi';
                    levels[3] = 'trung-hoc';
                    levels[4] = 'trung-cap';
                    levels[5] = 'cao-dang';
                    levels[6] = 'dai-hoc';
                    levels[7] = 'cao-hoc';
                    levels[8] = 'khong-khai-bao';

                    experiences[0] = 'chua-co-kinh-nghiem';
                    experiences[1] = '1-nam';
                    experiences[2] = '2-nam';
                    experiences[3] = '3-nam';
                    experiences[4] = '4-nam';
                    experiences[5] = '5-nam';
                    experiences[6] = 'tren-5-nam';

                    time[1] = 'nhan-vien-chinh-thuc';
                    time[2] = 'nhan-vien-thoi-vu';
                    time[3] = 'ban-thoi-gian';
                    time[4] = 'lam-them-ngoai-gio';
                    time[5] = 'thuc-tap-va-du-an';

                    salary_vnd[1] = '1-2-trieu';
                    salary_vnd[2] = '2-3-trieu';
                    salary_vnd[3] = '3-4-trieu';
                    salary_vnd[4] = '4-5-trieu';
                    salary_vnd[5] = '5-8-trieu';
                    salary_vnd[6] = '8-15-trieu';
                    salary_vnd[8] = '15-30-trieu';
                    salary_vnd[9] = 'tren-30-trieu';
                    salary_vnd[7] = 'thoa-thuan-vnd';

                    salary_usd[1] = '100-150-usd';
                    salary_usd[2] = '150-200-usd';
                    salary_usd[3] = '200-250-usd';
                    salary_usd[4] = '250-300-usd';
                    salary_usd[5] = '300-400-usd';
                    salary_usd[6] = '400-750-usd';
                    salary_usd[8] = '750-1500-usd';
                    salary_usd[9] = 'tren-1500-usd';
                    salary_usd[7] = 'thoa-thuan-usd';

                    function submitSearch() {
                        var url_root = '/vieclam/timkiem';
                        var url = '';

                        if ($('#JobJobfield').val() != '') {
                            url += '/nganhnghe:' + fields[$('#JobJobfield').val()];
                        }

                        if ($('#JobJobplace').val() != '') {
                            url += '/tinhthanhpho:' + provinces[$('#JobJobplace').val()];
                        }

                        if ($('#JobJoblevel').val() != '') {
                            url += '/trinhdo:' + levels[$('#JobJoblevel').val()];
                        }

                        if ($('#JobJobexperience').val() != '') {
                            url += '/kinhnghiem:' + experiences[$('#JobJobexperience').val()];
                        }

                        if ($('#JobJobtimework').val() != '') {
                            url += '/hinhthuclamviec:' + time[$('#JobJobtimework').val()];
                        }

                        if ($('#JobVND').val() != '') {
                            if ($('#JobVND').val() == 'Y') {
                                if ($('#job-salary-vnd').val() != '') {
                                    url += '/mucluong:' + salary_vnd[$('#job-salary-vnd').val()];
                                }
                            } else {
                                if ($('#job-salary-usd').val() != '') {
                                    url += '/mucluong:' + salary_usd[$('#job-salary-usd').val()];
                                }
                            }
                        }

                        if (url != '') {
                            url = url_root + url;
                            window.location.href = url;
                        }

                        return false;
                    }


                    $(document).ready(function() {
                        $('#JobVND').change(function() {
                            if ($(this).val() == 'Y') {
                                $('#job-salary-vnd').show();
                                $('#job-salary-usd').hide();
                                $('#job-salary-vnd').val('');
                                $('#job-salary-usd').val('');
                                $('#job-salary-vnd').removeAttr('disabled');
                                $('#job-salary-usd').removeAttr('disabled');
                            }

                            if ($(this).val() == 'N') {
                                $('#job-salary-vnd').hide();
                                $('#job-salary-usd').show();
                                $('#job-salary-vnd').val('');
                                $('#job-salary-usd').val('');
                                $('#job-salary-vnd').removeAttr('disabled');
                                $('#job-salary-usd').removeAttr('disabled');
                            }

                            if ($(this).val() == '') {
                                $('#job-salary-vnd').show();
                                $('#job-salary-usd').hide();
                                $('#job-salary-vnd').val('');
                                $('#job-salary-usd').val('');
                                $('#job-salary-vnd').attr('disabled', 'disabled');
                                $('#job-salary-usd').attr('disabled', 'disabled');
                            }
                        });
                    });
                </script>
                <div class="Blank"></div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#banner-marquee-items li:gt(0)').hide();
                        setInterval(function() {
                            $('#banner-marquee-items li:first').fadeOut().next().fadeIn().end().appendTo('#banner-marquee-items');
                        }, 5000);
                    });
                </script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#seeker-login').click(function() {
                            window.location.href = '/thanhvien/nguoitimviec_dangnhap';
                        });

                        $('#employer-login').click(function() {
                            window.location.href = '/thanhvien/nhatuyendung_dangnhap';
                        });

                        $('#seeker-register').click(function() {
                            window.location.href = '/thanhvien/nguoitimviec_dangky';
                        });

                        $('#employer-register').click(function() {
                            window.location.href = '/thanhvien/nhatuyendung_dangky';
                        });
                    });
                </script>
            </div>
            <div id="top">
                <div id="top-menubar">
                    <div id="top-menubar-left">
                        <div id="top-menubar-right">
                            <ul>
                                <li>
                                    <a class="trangchu" href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Trang chủ']);" target="" rel=""> Trang chủ </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>timvieclam"> Tìm việc làm </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>tuyendungnhanh" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Tìm hồ sơ Người tìm việc']);" target="" rel=""> Tìm hồ sơ Người tìm việc </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Việc làm 24h']);" target="_blank" rel="">nhucauvieclam</a>
                                </li>

                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Cẩm nang tuyển dụng']);" target="_blank" rel="nofollow"> Cẩm nang tuyển dụng </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Cẩm nang việc làm']);" target="_blank" rel="nofollow"> Cẩm nang việc làm </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Nghề nghiệp']);" target="_blank" rel=""> Nghề nghiệp </a>
                                </li>

                            </ul>
                            <div class="Clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div id="content-top">
                    <div id="content-wrapper">
                    <?php 
                    if($is_login == 1)
                    {
                    ?>
                        <div id="user-menu">

                            <div class="GridInfo">
                                <div class="Content">

                                    <ul class="UserMenu">
                                        <li>
                                            <a href="/nguoitimviec">Quản lý tìm việc</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/taikhoan">Hồ Sơ đã đăng</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/vieclamdaluu">Tạo HS tìm việc</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/vieclamungtuyen">Việc làm đã Lưu</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/nhatuyendungxemhoso">Việc làm đã ứng tuyển</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/nhatuyendungxemhoso">Hồ sơ cá nhân(CV)</a>
                                        </li>

                                        <li class="Separator">
                                            |
                                        </li>

                                        <li>
                                            <a href="/nguoitimviec/nhatuyendungxemhoso">Thông tin cá nhân</a>
                                        </li>

                                    </ul>
                                    <div class="Clear"></div>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php echo $this->load->view($main_content); ?>

                        <div id="footer">

                            <div id="footer-menubar">
                                <div id="footer-menubar-left">
                                    <div id="footer-menubar-right">
                                        <ul>
                                <li>
                                    <a class="trangchu" href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Trang chủ']);" target="" rel=""> Trang chủ </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>timvieclam"> Tìm việc làm </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>tuyendungnhanh" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Tìm hồ sơ Người tìm việc']);" target="" rel=""> Tìm hồ sơ Người tìm việc </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Việc làm 24h']);" target="_blank" rel="">nhucauvieclam</a>
                                </li>

                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Cẩm nang tuyển dụng']);" target="_blank" rel="nofollow"> Cẩm nang tuyển dụng </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Cẩm nang việc làm']);" target="_blank" rel="nofollow"> Cẩm nang việc làm </a>
                                </li>
                                <li class="Separator">
                                    |
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>" ga_click="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Nghề nghiệp']);" target="_blank" rel=""> Nghề nghiệp </a>
                                </li>

                            </ul>
                            <div class="Clear"></div>
                                    </div>
                                </div>
                            </div>

                            <div id="web-company-info">
                                <h2 style="font-size: 15px;">Công ty TNHH Phát Triển Nguồn Nhân Lực Nhu Cầu Việc Làm Đất Phương Nam</h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="33%"><span class="AlertTextSmall" style="font-size: 14px">nhucauvieclam.net</span><p></p>
                                                <table class="TableFooterInfo">
                                                   
                                                        <tr>
                                                            <td>Địa chỉ: Tầng 3, Số 7, Đường Số 49, P.Hiệp Bình Chánh, Q.Thủ Đức, Tp.HCM</td>
                                                        </tr>
                                                        <tr>                                                            
                                                            <td>Email: hcm@nhucauvieclam.net</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fax: 37273665</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="Blank"></div>
                            <div id="web-company-partner">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="33%" class="pl15">
                                                <ul>
                                                    <li>
                                                        Giấy chứng nhận đăng ký kinh doanh số: 0303452460 do Sở kế hoạch đầu tư Thành phố Hồ Chí Minh cấp ngày 16 tháng 08 năm 2004
                                                    </li>
                                                    <li>
                                                        <a href="http://www.onboom.com" target="_blank" rel="nofollow">Quảng bá web</a> bởi OnBoom Group
                                                    </li>
                                                    <li>
                                                        Designed by Cong ty <a href="http://vinadesign.vn" target="_blank" rel="nofollow">Thiet Ke Web</a> VINA Design
                                                    </li>
                                                </ul></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="Clear"></div>

                            <div class="Blank"></div>
                            <strong>Tìm Việc Nhanh thương hiệu nổi tiếng: Tuyển dụng, tìm việc làm, việc làm, tìm kiếm việc làm nhanh, tuyển dụng nhân sự nhanh chóng</strong>

                            <div class="HighBlank"></div>
                            <div id="bottom-hotline">
                                <div id="bottom-hotline-inner" style="text-align: center">
                                    <h2 class="float-left">Hotline 24/7</h2>                                    
                                    <ul>
                                        <li>
                                            <table class="table-hotline">
                                                <tbody width="100%">
                                                    <tr>
                                                        <td><span class="Mobile">01676.534.751 </span><span class="Name">Ms.Yến</span></td>

                                                        <td><span class="Mobile">01685.455.381 </span><span class="Name">Ms.Tình</span></td>
                                                        <td><span class="Mobile">0979.368.313 </span><span class="Name">Ms.Khoa</span></td>
                                                        <td><span class="Mobile">01656.134.306 </span><span class="Name">Ms.Thoa</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="Mobile">01656.244.327 </span><span class="Name">Ms.Tâm</span></td>
                                                        
                                                        <td><span class="Mobile">01642.446.754 </span><span class="Name">Ms.Yên</span></td>

                                                        <td><span class="Mobile">01278.789.987 </span><span class="Name">Ms.Khuê</span></td>
                                                        <td><span class="Mobile">0962925599 </span><span class="Name">Mr.Thắng</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="Mobile">01689.952.759 </span><span class="Name">Ms.Khuê</span></td>
                                                        
                                                        <td><span class="Mobile">0935.916.420 </span><span class="Name">Mr.Trung</span></td>

                                                        <td><span class="Mobile">0169.533.2638 </span><span class="Name">Ms.Thanh</span></td>
                                                        <td><span class="Mobile">0932.597.000 </span><span class="Name">Ms.Hiếu</span></td>
                                                    </tr>
                                                                                             
                                            </table>
                                        </li>
                                    </ul>
                                    <div class="Clear"></div>
                                </div>
                            </div>

                            <div class="Blank"></div>
                            <div id="fb-container">
                                <div id="fb-like-content">
                                    <div class="fb-like-box fb_iframe_widget" data-href="http://www.facebook.com/timviecnhanh" data-width="982" data-height="238" data-show-faces="true" data-stream="false" data-header="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=357584370994953&amp;header=false&amp;height=238&amp;href=http%3A%2F%2Fwww.facebook.com%2Ftimviecnhanh&amp;locale=vi_VN&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=982">
                                        <span style="vertical-align: bottom; width: 982px; height: 238px;"><iframe name="feb366e44" width="982px" height="238px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/plugins/like_box.php?app_id=357584370994953&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df29bc18ee4%26domain%3Dwww.timviecnhanh.com%26origin%3Dhttp%253A%252F%252Fwww.timviecnhanh.com%252Ff1e1babe2c%26relation%3Dparent.parent&amp;header=false&amp;height=238&amp;href=http%3A%2F%2Fwww.facebook.com%2Ftimviecnhanh&amp;locale=vi_VN&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=982" style="border: none; visibility: visible; width: 982px; height: 238px;" class=""></iframe></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="barhotline">
            <table class="table-barhotline">
                <tr>
                    <td><img src="<?php echo base_url(); ?>template/home/img/hotline.png" style="width: 25px;height: 25px;">Ms.Tình</td>                    
                </tr>
                <tr>
                    <td class="line-hotline">01685.455.381</td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url(); ?>template/home/img/hotline.png" style="width: 25px;height: 25px;">Ms.Yến</td>                    
                </tr>
                <tr>
                    <td class="line-hotline">01676.534.751</td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url(); ?>template/home/img/hotline.png" style="width: 25px;height: 25px;">Ms.Tâm</td>                    
                </tr>
                <tr>
                    <td class="line-hotline">01656.244.327</td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url(); ?>template/home/img/hotline.png" style="width: 25px;height: 25px;">Ms.Thoa</td>                    
                </tr>
                <tr>
                    <td class="line-hotline">01656.134.306</td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url(); ?>template/home/img/hotline.png" style="width: 25px;height: 25px;">Ms.Yên</td>                    
                </tr>
                <tr>
                    <td class="line-hotline">01642.446.754</td>
                </tr>
            </table>            
        </div>
    </body>
</html>