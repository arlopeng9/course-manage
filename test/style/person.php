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

<!-- head YDC begin -->
	<header class="ydc-header">
		<div class="ydc-entered">
			<div class="ydc-header-content ydc-flex">
				<div class="ydc-column">
					<a href="person.php" class="ydc-column-ydc-logo">
						<img src="person/images/icon/ydc-logo.png" title="" about="" alt="">
					</a>
				</div>
				<div class="ydc-column">
					<div class="ydc-column-user">
						<div class="ydc-user-photo">
							<a href="javascript:;">
								<img src="person/images/icon/photo.png" title="" about="" alt="">
							</a>
						</div>
						<div class="ydc-user-info">
							<div class="ydc-user-info-name">
								<a href="info.html">个人中心</a><p></p>
							</div>
							<div class="ydc-user-info-func ydc-flex">
								<span class="ydc-tag">学生</span>
								<span class="ydc-mal"><i class="ydc-icon ydc-icon-mail fl"></i><em>(消息)12</em></span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- head YDC end -->

<!-- content YDC begin -->
	<section>
		<div class="ydc-content-slide ydc-body">
			<div class="ydc-flex">
				<!-- left begin -->
				<div class="ydc-column ydc-column-2">
					<div class="ydc-menu">
						<ul>
							<li class="ydc-menu-item">
								<a href="index.php"  class="active"><i class="ydc-icon ydc-icon-home fl"></i>首页</a>
							</li>
							<li class="ydc-menu-item">
								<a href="release.html"><i class="ydc-icon ydc-icon-find fl"></i>学习心得</a>
							</li>
							<li class="ydc-menu-item">
								<span class="ydc-menu-sub-title">
									<i class="ydc-icon ydc-icon-file fl"></i>课程管理
								</span>
								<ul>
									<li>
										<a href="class1.php" title="已选课程"> <i class=" fa fa-fw fa-newspaper-o"></i>
                    					<span>已选课程查看</span>
                                        </a>
									</li>
									<li>
										<a href="xuanze.php" title="选择课程"> <i class=" fa fa-fw fa-laptop"></i>
                                            <span>选择课程</span>
                                        </a>
									</li>
								</ul>
							</li>
							<li class="ydc-menu-item">
								<span class="ydc-menu-sub-title">
									<i class="ydc-icon ydc-icon-record fl"></i>课程学习数据
								</span>
								<ul>
									<li>
										<a href="subscribe.html">学习时间统计</a>
									</li>
									<li>
										<a href="content-data.html">内容</a>
									</li>
									<li>
										<a href="index-starLevel.html">指数星级</a>
									</li>
								</ul>
							</li>
							<li class="ydc-menu-item">
								<span class="ydc-menu-sub-title">
									<i class="ydc-icon ydc-icon-set fl"></i>设置
								</span>
								<ul>
									<li>
										<a href="info.html">账号信息</a>
									</li>
									<li>
										<a href="xueji.php" title="学籍绑定"> <i class=" fa fa-fw fa-gear"></i>
                                        <span>学籍绑定</span>
                                        </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- left end -->
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-entered-box">
						<div class="ydc-content-right">
							<div class="ydc-right-head">
								<div class="ydc-right-head-info">
									<dl>
										<a href="#">
											<dt>课程数</dt>
											<dd>14</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>学习时间</dt>
											<dd>224</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>昨日学习时间</dt>
											<dd>14</dd>
										</a>
									</dl>
									<dl>
										<a href="#">
											<dt>总课程学习数据指数</dt>
											<dd>158</dd>
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
				<!-- right end -->
			</div>
		</div>

		<div class="ydc-footer">
			<div>
				<p>©2019 代码全写队</p>
			</div>
		</div>
	</section>
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