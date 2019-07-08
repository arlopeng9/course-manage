
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!doctype html>
<html>

<body>
     

	


<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大学生公共课程资源共享平台</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css2/assets/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css2/assets/animate.css">
    <!-- Button Hover animate css -->
    <link rel="stylesheet" href="css2/assets/hover-min.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css2/assets/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css2/assets/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css2/assets/owl.carousel.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="css2/assets/slick.css">
    <!-- chosen.min-->
    <link rel="stylesheet" href="css2/assets/jquery-customselect.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css2/assets/font-awesome.min.css">
    <!-- magnific Css -->
    <link rel="stylesheet" href="css2/assets/magnific-popup.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css2/assets/revolution/layers.css">
    <link rel="stylesheet" href="css2/assets/revolution/navigation.css">
    <link rel="stylesheet" href="css2/assets/revolution/settings.css">
    <!-- Preloader css -->
    <link rel="stylesheet" href="css2/assets/preloader.css">
    <!-- custome css -->
    <link rel="stylesheet" href="css2/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css2/responsive.css">
    <link rel="stylesheet" href="css2/master.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style type="text/css">
body{background-color: #222}
.videolist { position:relative; float:right; width:225px; height:170px; margin-right:50px; margin-bottom:30px; }
.videolist:hover{ cursor: pointer; }
.videoed { display:none; width:50px; height:50px; position: absolute; left:40%; top:15%; z-index:99; border-radius:100%; }
.videos{ display:none; border: 1px solid #080808; position:fixed; left:50%; top:50%; margin-left:-320px; margin-top:-210px; z-index:100; width:640px; height:360px; }
.vclose { position:absolute;right:1%; top:1%; border-radius:100%; cursor: pointer; }
</style>
    </head><body>

   <header>
    <div class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 tap-v-responsive">
                    <div class="logo-area">
                        <a href="index.php"><img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav>
                        <ul class="main-menu text-right">
                            <li class="active"><a href="index.php">首页</a>
                            </li>
                            <li><a href="course.php">课程资源</a>
                                <ul class="dropdown">
                                    <li><a href="">计算机类</a></li>
                                    <li><a href="">文学类</a></li>
                                    <li><a href="">通识类</a></li>
                                </ul>
                            </li>
                            <li><a href="pinglun.php">课程评论</a>
                                <ul class="dropdown">
                                    <li><a href="">计算机类</a></li>
                                    <li><a href="">文学类</a></li>
                                    <li><a href="">通识类</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="person.php">个人信息</a>
                               
                            </li>
                            <li><a href="ourteam.php">关于我们</a>
                            </li>                           
                        </ul>
                    </nav>
                </div> <!-- main menu end here -->
            </div>
        </div>
    </div> <!-- header-bottom area end here -->
</header> <!-- header area end here -->

    <!-- blog breadcrumb version one strat here -->
    <section class="breadcrumb-blog-version-one">
        <div class="single-bredcurms">
         <div id="Layer1" style="position: absolute ; left:0px; top:0px;width:100%; height:130%; z-index:-1">    
			  <img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/bg_4.jpg"  style=" width:100%;height:480px;">  
			 </div>
           <div class="container">
               <div class="row">
                    <div class="col-sm-12">
                        <div class="bredcrums-content">
                            <h2>代码全写队</h2>
                            
                        </div>
                    </div>
                </div>
            </div >
        </div>
    </section><!-- blog breadcrumb version one end here -->
    <div class="row"style="margin-top: 20px;">
			<div class="col-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<h2>课程资源</h2>
					<p>共同学习 共同成长 优质精品学习资源  </p>
				</div>
			</div>
		</div>
<div class="video">
	<div class="container" style="margin-top: 10px;">
		<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course2.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course2.mp4">

			<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course2.jpg" width="220px" height="210px" />
			<div class="vtime">2018-06-22</div>
			<img src="img/play.png" class="videoed">
		</div>
		<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course7.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course7.mp4">

			<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course7.jpg" width="220px" height="210px" />
			<div class="vtime">2018-06-22</div>
			<img src="img/play.png" class="videoed">
		</div>
		<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.png" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.mp4">

			<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.png" width="220px" height="200px" />
			<div class="vtime">2018-06-22</div>
			<img src="img/play.png" class="videoed">
		</div>
		<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course11.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course11.mp4">

			<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course11.jpg" width="220px" height="200px" />
			<div class="vtime">2018-06-22</div>
			<img src="img/play.png" class="videoed">
		</div>
		<div class="videos"></div>
		</div>
		<div class="container" style="margin-top: 30px">
			<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course6.png" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course6.mp4">

				<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course6.png" width="220px" height="200px" />
				<div class="vtime">2018-06-22</div>
				<img src="img/play.png" class="videoed">
			</div>
			<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course10.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course10.mp4">

				<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course10.jpg" width="220px" height="200px" />
				<div class="vtime">2018-06-22</div>
				<img src="img/play.png" class="videoed">
			</div>
			<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course3.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course3.mp4">

				<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course3.jpg" width="220px" height="200px" />
				<div class="vtime">2018-06-22</div>
				<img src="img/play.png" class="videoed">
			</div>
			<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course4.jpg" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course4.mp4">

				<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course4.jpg" width="220px" height="200px" />
				<div class="vtime">2018-06-22</div>
				<img src="img/play.png" class="videoed">
			</div>
			<div class="videos"></div>
			</div>

</div>









<script type="text/javascript" src="js2/jquery.min.js"></script>
<script type="text/javascript">
$('.videolist').each(function(){ //遍历视频列表
	$(this).hover(function(){ //鼠标移上来后显示播放按钮
		$(this).find('.videoed').show();
	},function(){
		$(this).find('.videoed').hide();
	});
	$(this).click(function(){ //这个视频被点击后执行
		var img = $(this).attr('vpath');//获取视频预览图
		var video = $(this).attr('ipath');//获取视频路径
		$('.videos').html("<video id=\"video\" poster='"+img+"' style='width: 640px' src='"+video+"' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"img/gb.png\" width=\"25\" height=\"25\">");
		$('.videos').show();
	});
});

function close1(){
	var v = document.getElementById('video');//获取视频节点
	$('.videos').hide();//点击关闭按钮关闭暂停视频
	v.pause();
	$('.videos').html();
}
</script>

<section class="our_partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
					<h2>合作平台</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<!-- partners images -->
			<div class="partner-slider-active owl-carousel">
				<div class="single-pertner">
					<div class="partner-image">
						<a href="#"><img src="images/partner/1.png" alt="">
						</a>
					</div>
				</div>
				<div class="single-pertner">
					<div class="partner-image">
						<a href="#"><img src="images/partner/2.png" alt="">
						</a>
					</div>
				</div>
				<div class="single-pertner">
					<div class="partner-image">
						<a href="#"><img src="images/partner/3.png" alt="">
						</a>
					</div>
				</div>
				<div class="single-pertner">
					<div class="partner-image">
						<a href="#"><img src="images/partner/4.png" alt="">
						</a>
					</div>
				</div>
				<div class="single-pertner">
					<div class="partner-image">
						<a href="#"><img src="images/partner/5.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- partners images -->


	</div>
</section> <!--end partner section -->

<footer class="footer-area">
	<div class="container">
		<div class="row">
			<!-- footer left -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="single-footer">
					<div class="footer-title">
						<h3><a href="#"><img src="images/logo.png" alt=""></a></h3>
					</div>
					<div class="footer-left">
						<div class="footer-logo">
							<p>代码全写队 </p> <p>产品经理：彭英杰 项目经理：张雷 </p><p>技术经理：马赞 </p><p>成员：汪志豪   余冠达</p>
						</div>
						<ul class="footer-contact">
							<li><img class="map" src="images/icon/map.png" alt="">武汉大学</li>
							<li><img class="map" src="images/icon/phone.png" alt="">+123-456-7890</li>
							<li><img class="map" src="images/icon/gmail.png" alt="">123456789@qq.com</li>
						</ul>
					</div>
				</div>
			</div> <!-- footer left -->

			<!-- footer destination -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-2">
				<div class="single-footer">
					<div class="footer-title">
						<h3>Quick Link</h3>
					</div>
					<ul class="list-unstyled">
						<li><a href="index.php" title="">首页</a></li>
						<li><a href="course.php" title="">课程资源</a></li>
						<li><a href="" title="">课程评论</a></li>
						<li><a href="" title="">课程评分</a></li>
						<li><a href="person.php" title="">个人信息</a></li>
						<li><a href="ourteam.php" title="">关于我们</a></li>

					</ul>
				</div>
			</div>	<!-- footer destination -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-footer">
					<div class="single-recent-post">
						<div class="footer-title">
							<h3>Recent News</h3>
						</div>
						<ul class="recent-post">
							<li>
								<a href="course5.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>身边的材料学 </label>
                                       <br><label>课程ID：20182018155</label>


									</span>
								</a>
							</li>
							<li>
								<a href="course3.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>信息安全概论 </label>
                                        <br><label>课程ID：20182047080</label>

									</span>
								</a>
							</li>
							<li>
								<a href="course1.php">
									<span class="post-thum">
										<img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</span>
									<span class="post-content">
										<label>课程名 :</label><br><label>C语言程序设计 </label>
                                        <br><label>课程ID：20182047086</label>

									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>	<!-- footer latest news -->

			<!-- footer contact -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-3 f-phone-responsive">
				<div class="single-footer">
					<div class="footer-title">
						<h3>联系我们</h3>
					</div>
					<div class="footer-contact-form">
						<form action="#">
							<ul class="footer-form-element">
								<li>
									<input type="text" name="email" id="email" placeholder="" value="Email Address" onblur="if(this.value==''){this.value='Email Address'}" onfocus="if(this.value=='Email Address'){this.value=''}">
								</li>
								<li class="text_area">
									<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
									<button type="submit">Send</button>
								</li>
								<li>

								</li>
							</ul>
						</form>
					</div>
					<div class="footer-social-media">
						<div class="social-footer-title">
							<h3>Follow Us</h3>
						</div>
						<ul class="footer-social-link">
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>	<!-- footer contact -->
		</div>
	</div>
	<div class="footer_bottom_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="copy_right_wrapper">
						<div><p>©2019 代码全写队</p></div>
						<ul class="payicon pull-right">
							<li>We Accept : </li>
							<li><a href="" title=""><img src="images/payicon01.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon02.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon03.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon04.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon05.png" alt=""></a></li>
							<li><a href="" title=""><img src="images/payicon06.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer> <!-- end footer -->

<div class="to-top pos-rtive">
	<a href="#"><i class = "fa fa-angle-up"></i></a>
</div><!-- Scroll to top-->

    <!-- ============================
    		JavaScript Files
    ============================= -->
    <!-- jquery -->
    <script src="js/vendor/jquery-3.2.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- Revolution JS -->
    <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/assets/revolution/revolution.js"></script>
    <!-- plugin js -->
    <script src="js/plugins.js"></script>
    <!-- select2 js -->
    <script src="js/select2.min.js"></script>
    <script src="js/colors.js"></script>
    <!-- customSelect Js -->
    <script src="js/jquery-customselect.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
</html>
