<div id="content-detail">
							<div class="GridInfo">
								<div class="Content">
									<div id="login-1">
										<h2>Ðang nh?p Ngu?i tìm vi?c</h2>
										<img src="<?php echo base_url(); ?>template/home/img/login.jpg" alt="Ðang nh?p">
										<div class="HighBlank"></div>
										<button onclick="window.location.href='<?php echo base_url();?>dangnhap/login_uv'" type="button" id="button-seeker-login">
											<span>Ðang nh?p Ngu?i tìm vi?c</span>
										</button>

										<div class="HighBlank"></div>
										<a href="/nguoitimviecthu" target="_blank" class="Readmore"><span class="AlertText">Ngu?i tìm vi?c luu ý</span></a>

										<div class="HighBlank"></div>
									</div>

									<div id="login-2">
										<h2>Ðang nh?p Nhà tuy?n d?ng</h2>
										<img src="<?php echo base_url(); ?>template/home/img/register.jpg" alt="Ðang nh?p">
										<div class="HighBlank"></div>
										<button  type="button" id="button-employer-login">
											<span>Ðang nh?p Nhà tuy?n d?ng</span>
										</button>

										<div class="HighBlank"></div>
										<a href="http://www.timviecnhanh.com/tuyendungthu" target="_blank" class="Readmore"><span class="AlertText">Xác th?c tài kho?n Nhà tuy?n d?ng</span></a>

										<div class="HighBlank"></div>
										</div>
									<div class="Clear"></div>
								</div>
							</div>

							<div class="Blank"></div>
							<a href="http://thuonghieu.timviecnhanh.com/dich-vu-tvn.html" class="ImageLink" target="_blank" rel="nofollow">
								<img src="<?php echo base_url(); ?>template/home/img/20131002_ads.png" alt="Qu?ng cáo d?ch v? TimViecNhanh"></a>

							<script type="text/javascript">
								$(document).ready(function() {
									$('#button-seeker-login').click(function() {
										var config = {
											cookie : 'seekerPopup',
											width : 600,
											height : 400,
											left : 600,
											top : 100
										};

										jsPopunder('http://webhoctienganh.com/17-tinh-huong-tieng-anh-phong-van-xin-viec-lam-710.html', config);
										window.location.href = '/thanhvien/nguoitimviec_dangnhap';
									});

									$('#button-employer-login').click(function() {
										var config = {
											cookie : 'employerPopup',
											width : 600,
											height : 400,
											left : 600,
											top : 100
										};

										jsPopunder('http://webhoctienganh.com/100-tinh-huong-giao-tiep-tieng-anh-cong-so-679.html', config);
										window.location.href = '/thanhvien/nhatuyendung_dangnhap';
									});
								});
							</script>
						</div>
