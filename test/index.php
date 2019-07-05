
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
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
    
   <style>
	*{margin:0;padding:0;list-style:none;}
	html,body{height:100%;}
	
	/* 以下是CSS3样式，适合高版本浏览器 */
	.Snowflake{animation:linear spin infinite 20s;-webkit-animation:linear spin infinite 20s;-moz-animation:linear spin infinite 20s;pointer-events:none;}
	@keyframes spin{
		0% {transform:rotate(0deg);}
		100% {transform:rotate(359deg);}
	}
	@-webkit-keyframes spin{
		0% {-webkit-transform:rotate(0deg);}
		100% {-webkit-transform:rotate(359deg);}
	}
	@-moz-keyframes spin{
		0% {-moz-transform:rotate(0deg);}
		100% {-moz-transform:rotate(359deg);}
	}
	</style>
    
</head>
<body> 
<script src="js/snowflake.js"></script>
	<script>
		createSnow('', 200);
	</script>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- header area start here -->
<header>
	<div class="header_top_area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="contact_wrapper_top">
						<ul class="header_top_contact">
							<li><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>123456789@qq.com</li>
						</ul>
						<div class="book-btn">
							<a href="xueji.php">学籍绑定</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- header top end -->

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
									<li><a href="package-version-one.html">计算机类</a></li>
									<li><a href="package-version-two.html">文学类 </a></li>
									<li><a href="single-package.html">通识类</a></li>
								</ul>
							</li>
							<li><a href="viedo.php">课程评论</a>
								<ul class="dropdown">
									<li><a href="hotel-version-one.html">计算机类</a></li>
									<li><a href="hotel-version-two.html">文学类</a></li>
									<li><a href="hotel-details.html">通识类</a></li>
								</ul>
							</li>
							<li><a href="person.php">个人信息</a></li>
							<li><a href="ourteam.php">关于我们</a></li>
						</ul>
					</nav>
				</div> <!-- main menu end here -->
			</div>
		</div>
	</div> <!-- header-bottom area end here -->
</header> <!-- header area end here -->

<!-- slider area start here -->
<section class="slider-area" id="slider_area_1">
	<div class="rev_slider_wrapper">
		<div id="rev_slider_1" class="rev_slider" style="display:none">
			<ul>

				<li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/slider_1_1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Love it?" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="http://pcs4.clubstatic.lenovo.com.cn/data/attachment/forum/201612/16/091850f3j76a6t7y36at88.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-1" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-120','-128','-250','-158']" 
						data-fontsize="['30','30','25','30']"
						data-lineheight="['30','30','30','30']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:500;">Welcome TO
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" 
					 	data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-150','-100']" 
						data-fontsize="['90','80','60','50']"
						data-lineheight="['90','80','60','50']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 6; font-weight: 600; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap;">大学生公共资源共享平台
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p1"
						id="slide-3015-layer-5"  
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['80','80','0','0']" 
						data-fontsize="['18','18','180','180']"
						data-lineheight="['28','28','30','30']"
						data-width="['none','none','480','360']"
						data-height="none"
						data-whitespace="['nowrap','nowrap','normal','normal']"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"

						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 7; color:#fff; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
						代码全写队 <br> 产品经理：彭英杰 项目经理：张雷 技术经理：马赞 成员：汪志豪 余冠达
					</div>

				</li>
				<!-- first slider end -->

				<li data-index="rs-3007" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/slider_1_2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Iceberg" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="http://attach.bbs.miui.com/forum/201311/17/125654en6sw0w30vfnd7f0.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-1" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-120','-128','-250','-158']" 
						data-fontsize="['30','30','25','30']"
						data-lineheight="['30','30','30','30']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:500;">Welcome To
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" 
					 	data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-150','-100']" 
						data-fontsize="['90','80','60','50']"
						data-lineheight="['90','80','60','50']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 6; font-weight: 600; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap;">大学生公共资源共享平台
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p1"
						id="slide-3015-layer-5"  
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['80','80','0','0']" 
						data-fontsize="['18','18','180','180']"
						data-lineheight="['28','28','30','30']"
						data-width="['none','none','480','360']"
						data-height="none"
						data-whitespace="['nowrap','nowrap','normal','normal']"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"

						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 7; color:#fff; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
						代码全写队 <br> 产品经理：彭英杰 项目经理：张雷 技术经理：马赞 成员：汪志豪 余冠达
					</div>
				</li>
				<!-- second slider end -->
				<li data-index="rs-3027" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/slider_1_2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Iceberg" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="http://img3.a0bi.com/upload/ttq/20140927/1411797423325.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-1" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-120','-128','-250','-158']" 
						data-fontsize="['30','30','25','30']"
						data-lineheight="['30','30','30','30']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:500;">Welcome To
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" 
					 	data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-150','-100']" 
						data-fontsize="['90','80','60','50']"
						data-lineheight="['90','80','60','50']"
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 6; font-weight: 600; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap;">大学生公共资源共享平台
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5  header-p1"
						id="slide-3015-layer-5"  
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['80','80','0','0']" 
						data-fontsize="['18','18','180','180']"
						data-lineheight="['28','28','30','30']"
						data-width="['none','none','480','360']"
						data-height="none"
						data-whitespace="['nowrap','nowrap','normal','normal']"

						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"

						data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' 
						style="z-index: 7; color:#fff; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
						代码全写队 <br> 产品经理：彭英杰 项目经理：张雷 技术经理：马赞 成员：汪志豪 余冠达
					</div>
				</li>
				<!-- third slider end -->
			</ul>
		</div> <!-- end slider container -->
	</div> <!-- END end slider container wrapper -->
</section> <!-- slider area end here -->

<section class="search_area">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="search_form">
					<form action="#" method="post">
						<div class="form-group keywork_type">
							<label><i class="fa fa-map-marker"></i></label>
							<input type="search" name="s" id="keyword2" class="hotel-input-first" placeholder="课程名称">
						</div>
						
						<div class="form-group keywork_type">
							<label><i class="fa fa-map-marker"></i></label>
							<input type="search" name="s" id="keyword2" class="hotel-input-first" placeholder="老师名称">
						</div>
						<div class="form-group searc-btn-7">
							<button type="submit">搜索</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section> <!-- header tab based search area end-->



<section class="popular-packages">

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<h2>推荐课程</h2>
					<p>共同学习 共同成长 优质精品学习资源  </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course1.php"><img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course1.php" title="">C语言程序设计</a></h3>
						<p>上传时间：07 02 课程ID：20182047086
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course1.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- single package end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course2.php"><img src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course2.php" title="">物联网应用及安全</a></h3>
						<p>上传时间：07 02 课程ID：20182021300
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course2.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- second package end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course3.php"><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course3.php" title="">信息安全概论</a></h3>
						<p>上传时间：07 02 课程ID：20182047080
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course3.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!--third package end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course4.php"><img src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course4.php" title="">计算机思维导论</a></h3>
						<p>上传时间：07 02 课程ID：20182021301
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course4.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- fourth package end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course5.php"><img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course5.php" title="">身边的材料学</a></h3>
						<p>上传时间：07 02 课程ID：20182018155
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course5.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- fifth package end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-package">
					<div class="package-image">
						<a href="course6.php"><img src="https://edu-image.nosdn.127.net/C2E910CE23079A4D477A111FF2980735.png?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
					</div>
					<div class="package-content">
						<h3><a href="course6.php" title="">遥感技术应用及发展</a></h3>
						<p>上传时间：07 02 课程ID：20182023104
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="course6.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
							<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- sixth package end -->
		</div>
	</div>
</section> <!--end  popular packajge -->

<section class="countdown count-down-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12-col-xs-12">
				<div class="count-down-titile">
					<h2> 课程门类<span class="color-one">多样课程选择</span> For Free <br> 课程资源 <span class="color-two">详细信息预览</span> </h2>
				</div>
				<div class="count-timer text-center">
					<div class="time-wrapper">
						<p>Welcome to select page！</p>
					</div>
				</div>
				<div class="buy-now text-center">
					<a href="class1.php" class="travel-primary-btn hvr-fade">课程资源</a>
				</div>
			</div>
		</div>
	</div>
</section>  <!--end  countdown -->
<?php include_once 'index.inc/index_popular.php';?>
 <!-- end popular destination-->

<section class="travelsers-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title-white text-center">
					<h2>Why Choose Us</h2>
					<p>没有什么迷惑是看一门课解不开的，如果不行那就再学一门课。</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single travel start -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>Flexible Course</h4>
							<p>课程资源多样展示，万千选择应有尽有</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>Service Completely Free</h4>
							<p>课程资源在线共享，全程费用，登录即用</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>Fast Update Rate</h4>
							<p>课程资源实时更新，速率快，高效性</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>Perfecting Information</h4>
							<p>课程详细信息预览，省时省力，准确选课</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>User Interaction</h4>
							<p>课程评论，评分，建立用户学习交流平台</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-travel">
					<div class="media">
						<div class="media-body travel-content">
							<h4>Diversified Users</h4>
							<p>各类用户提供不同权限，服务于学习交流</p>
						</div>
					</div>
				</div>
			</div> <!-- single travel end -->
		</div>
	</div>
</section> <!-- choose travelsers end here -->

<!-- guide and Expert Advice strat -->
<section class="blog_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
					<h2>学习交流</h2>
					<p>各个用户交流评价，更轻松的选择，更准确的选课 </p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single travel blog-->
			<div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s"style="width:220px;height:270px">
				<div class="single-travel-blog">
					<div class="blog-image">
						<a href=""><img src="http://img.duoziwang.com/uploads/1512/1-1512261605250-L.jpg" alt=""style="width: 100%;height:300px">
						</a>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<div class="post-date">
								<span>12 July, 2019</span>
							</div>
							<ul class="post-social">
								<li><a href=""><i class="fa fa-comments"></i>3</a>
								</li>
								<li><a href=""><i class="fa fa-heart-o"></i>43</a>
								</li>
							</ul>
						</div>
						<div class="blog-post-content">
							<h4><a href="" title="">邹心愿</a></h4>
							<p> 讲的还是挺实用的，能学到很多东西，最后是论文方式，还要提交一份作品</p>
							
						</div>
					</div>
				</div>
			</div> <!--end single travel guide & security-->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s">
				<div class="single-travel-blog">
					<div class="blog-image">
						<a href=""><img src="http://img.xinxic.com/img/152468016aea8295.jpg" alt=""style="width: 100%;height:300px">
						</a>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<div class="post-date">
								<span>12 July, 2019</span>
							</div>
							<ul class="post-social">
								<li><a href=""><i class="fa fa-comments"></i>3</a>
								</li>
								<li><a href=""><i class="fa fa-heart-o "></i>43</a>
								</li>
							</ul>
						</div>
						<div class="blog-post-content">
							<h4><a href="" title="">周鑫洋</a></h4>
							<p> 教的东西都是关于多媒体的，很实用，不点名，交作业和论文，给分很好</p>
							
						</div>
					</div>
				</div>
			</div> <!--end single travel guide & security-->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s">
				<div class="single-travel-blog">
					<div class="blog-image">
						<a href=""><img src="http://img.mp.itc.cn/upload/20161124/36eb1c2512b947a7ad6ee3a87c3fbee4_th.jpeg" alt="" style="width: 100%;height:300px">
						</a>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<div class="post-date">
								<span>12 July, 2019</span>
							</div>
							<ul class="post-social">
								<li><a href=""><i class="fa fa-comments"></i>3</a>
								</li>
								<li><a href=""><i class="fa fa-heart-o"></i>43</a>
								</li>
							</ul>
						</div>
						<div class="blog-post-content">
							<h4><a href="" title="">刘小菁</a></h4>
							<p> 不点名每节课都有作业不过是最后一起交的那种</p>
							
						</div>
					</div>
				</div>
			</div> <!-- single travel guide & security end-->
		</div>
	</div>
</section> <!--End guide and Expert Advice strat -->





<!-- testimonial area start here -->
<section class="section-paddings testimonial-two" id="testimonial_one">
    <div class="testimonial-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>用户体验</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- start top media -->
                    <div class="top-testimonial-image slick-pagination">
                        <div class="carousel-images slider-nav-two">
                            <div class="images_single"><img src="http://img.mp.itc.cn/upload/20161202/e3e04c73dacd4698af01ac2aa1d3ae7f_th.png" alt="1" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="http://img1.imgtn.bdimg.com/it/u=4119762299,3413011776&fm=11&gp=0.jpg" alt="3" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="http://img3.imgtn.bdimg.com/it/u=2457169335,3956820268&fm=11&gp=0.jpg" alt="2" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="http://img1.imgtn.bdimg.com/it/u=570834769,2208332874&fm=11&gp=0.jpg" alt="3" class="img-responsive img-circle"></div>
                        </div>
                    </div><!-- end top media images -->

                    <!-- bottom testimonial message -->
                    <div class="block-text">
                        <div class="carousel-text slider-for-two">
                            <div class="single-box">
                                <p>不点名，每节课都作业不过是最后一起交的那种。最后要做一个应用，使用Matlab解决本专业的问题，这个没点本事还真搞不出来
                                </p>
                                <div class="client-bio">
                                    <h3>宋子寅</h3>
                                    <span>武汉大学</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>每节课都有小测，但是相比水课而言比较有内容，学到了很多。而且没有作业，一切问题课上解决。强烈推荐。
                                </p>
                                <div class="client-bio">
                                    <h3>许雨洁</h3>
                                    <span>武汉大学</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>期末论文和自选作业，从不点名，课上会教干货，给分非常好，强推！
                                </p>
                                <div class="client-bio">
                                    <h3>高悦</h3>
                                    <span>武汉大学</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>根本不点名！！！！老师人也很好，期末会有一个论文，如果想水完全好水  均分八十几分
                                </p>
                                <div class="client-bio">
                                    <h3>王熠</h3>
                                    <span>武汉大学</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                        </div>
                    </div><!-- bottom testimonial message -->
                </div><!-- /.block-text -->
            </div>
        </div>
    </div>
</section><!-- testimonial area end here -->







<div class="section-paddings incredible-places">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
					<h2>最新课程</h2>
					
				</div>
			</div>
		</div>
		<div class="row places_img_wrapper">
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course1.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>C语言程序设计</span></h4>
							<h3>任课老师 <span>刘一</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course3.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>信息安全概论</span></h4>
							<h3>任课老师 <span>康卓</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course7.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>航天航空概论</span></h4>
							<h3>任课老师 <span>周辉</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course5.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>身边的材料学</span></h4>
							<h3>任课老师 <span>肖文凯</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/045818517FBF0D5F6C2B3696FD36A114.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course11.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>哲学导论</span></h4>
							<h3>任课老师 <span>张云涛</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->

			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-place">
					<figure>
						<img src="https://edu-image.nosdn.127.net/288647B04DED46F53F2154ABF422099B.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" style="width: 350px;height: 230px;">
						<figcaption>
							<a href="course9.php" title=""><i class="fa fa-eye"></i></a>
							<h4>课程名<span>宇宙新概念</span></h4>
							<h3>任课老师 <span>赵江南</span></h3>
						</figcaption>
					</figure>
				</div>
			</div> <!-- end single place -->
		</div>
	</div>
</div> <!-- incredible place end here -->



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

