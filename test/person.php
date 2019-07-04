<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);

$php='person';

?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name='TTUNION_verify' content='b846c3c2b85efabc496d2a2b8399cd62'>
	<meta name="sogou_site_verification" content="gI1bINaJcL"/>
	<meta name="360-site-verification" content="37ae9186443cc6e270d8a52943cd3c5a"/>
	<meta name="baidu_union_verify" content="99203948fbfbb64534dbe0f030cbe817">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE;chrome=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="AUI, a-ui.com">
	<meta name="baidu-site-verification" content="ZVPGgtpUfW"/>
	<title>个人中心</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<link type="text/css" rel="stylesheet" href="person/css/core.css">
	<link type="text/css" rel="stylesheet" href="person/css/icon.css">
	<link type="text/css" rel="stylesheet" href="person/css/home.css">


</head>
<body>

<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->
	<?php include_once 'inc/leaft_head.php';?>
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-entered-box">
						<div class="ydc-content-right">
							<div class="ydc-right-head">
								<div class="ydc-right-head-info">
									<dl>
										<a href="#">
											<dt>课程数</dt>
											<dd>#</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>学习时间</dt>
											<dd>#</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>昨日学习时间</dt>
											<dd>#</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>总课程学习数据指数</dt>
											<dd>#</dd>
										</a>
									</dl>
								</div>
								<button class="btn ydc-ne-carousel" onclick="javascript:window.location.href='release.html';">
									<i class="ydc-icon-shu"></i>
									<span>学习心得</span>
								</button>
							</div>
							<div class="ydc-right-banner">
								<div class="slideshow-container">
									<a href="https://baidu.com/" target="_blank" class="mySlides fade">
										<img src="person/images/ad/ad1.jpg" style="width:100%">
									</a>
									<a href="https://baidu.com" target="_blank" class="mySlides fade">
										<img src="person/images/ad/ad2.jpg" style="width:100%">
									</a>
									<a href="http://www.baidu.com/" target="_blank" class="mySlides fade">
										<img src="person/images/ad/ad3.jpg" style="width:100%">
									</a>
								</div>
							</div>
							<!-- gongGao begin -->
							<div class="ydc-loading-box">
								<div class="ydc-tabPanel">
									<div>
										<ul>
											<li class="hit">公告栏</li>
										</ul>

									</div>
									<div class="ydc-panes">
										<div class="ydc-pane" style="display:block;">
											<ol class="ydc-pane-list">
												<li>
													<a href="page.html" target="_blank">大学生选课平台终于上线啦！<i>new</i></a>
													<span>2019-04-17 10:00:00</span>
												</li>
												<li>
													<a href="page.html" target="_blank">5个技巧教你玩转大学生选课管理平台<i>new</i></a>
													<span>2019-04-17 10:00:00</span>
												</li>
												<li>
													<a href="page.html" target="_blank">大学生选课管理平台重磅推出学习课程努力榜，丰厚现金奖励助力课程学习！</a>
													<span>2019-04-17 10:00:00</span>
												</li>
											</ol>
											
										</div>
									</div>
								</div>
							</div>
							<!-- gongGao End -->
						</div>
					</div>
				</div>
				
<!-- content YDC end -->

	<script type="text/javascript" src="person/js/jquery.min.js"></script>
	<script type="text/javascript">
	    var slideIndex = 0;
	    showSlides();

	    function showSlides() {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        for (i = 0; i < slides.length; i++) {
	            slides[i].style.display = "none";
	        }
	        slideIndex++;
	        if (slideIndex> slides.length) {slideIndex = 1}
	        slides[slideIndex-1].style.display = "block";
	        setTimeout(showSlides, 3000); // 滚动时间
	    }
	</script>

	<script type="text/javascript">
	    $(function(){
	        $('.ydc-tabPanel ul li').click(function(){
	            $(this).addClass('hit').siblings().removeClass('hit');
	            $('.ydc-panes>div:eq('+$(this).index()+')').show().siblings().hide();
	        })
	    })
	</script>

</body>
</html>