<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);

$php='person';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/fontAwesome.css">
	<link rel="stylesheet" href="css/light-box.css">
	<link rel="stylesheet" href="css/templatemo-main.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<script src="js1/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<!-- person -->
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

<div class="sequence">

  <div class="seq-preloader">
	<svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
  </div>
  
</div>


	<nav>
	  <div class="logo">
		  <img src="img/logo.png" alt="">
	  </div>
	  <div class="mini-logo">
		  <img src="img/mini_logo.png" alt="">
	  </div>
	  <ul>
		<li><a href="#1"><i class="fa fa-home"></i> <em>个人信息</em></a></li>
		<li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
		<li><a href="#3"><i class="fa fa-pencil"></i> <em>Entries</em></a></li>
		<li><a href="#4"><i class="fa fa-image"></i> <em>Work</em></a></li>
		<li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
	  </ul>
	</nav>
	
	<div class="slides">
	  <div class="slide" id="1">
	  
		<div class="content first-content">
		  <div class="container-fluid">
		  
			  <div class="col-md-3">
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
								
							</div>
			  </div>
			  <div class="col-md-9">
				  <h3><font color="black"> 公告栏</font></h3>
				                                
													<h4>大学生选课平台终于上线啦！</h4>
													<span>2019-04-17 10:00:00</span>
												
												
													<h4>5个技巧教你玩转大学生选课管理平台</h4>
													<span>2019-04-17 10:00:00</span>
											
											
													<h4>大学生选课管理平台重磅推出学习课程努力榜，丰厚现金奖励助力课程学习！</h4>
													<span>2019-04-17 10:00:00</span>
												
				  
			  </div>
		  </div>
		</div>
	  </div>
	  <div class="slide" id="2">
		<div class="content second-content">
			<div class="container-fluid">
				<div class="col-md-6">
					<div class="left-content">
						<h2>About Us</h2>
						<p>Please tell your friends about templatemo website. A variety of free CSS templates are available for immediate downloads.</p> 
						<p>Phasellus vitae faucibus orci. Etiam eleifend orci sed faucibus semper. Cras varius dolor et augue fringilla, eu commodo sapien iaculis. Donec eget dictum tellus. <a href="#">Curabitur</a> a interdum diam. Nulla vestibulum porttitor porta.</p>
						<p>Nulla vitae interdum libero, vel posuere ipsum. Phasellus interdum est et dapibus tempus. Vestibulum malesuada lorem condimentum mauris ornare dapibus. Curabitur tempor ligula et <a href="#">placerat</a> molestie.</p>
						<p>Aliquam efficitur eu purus in interdum. <a href="#">Etiam tincidunt</a> magna ex, sit amet lobortis felis bibendum id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					  <div class="main-btn"><a href="#3">Read More</a></div>
				  </div>
				</div>
				<div class="col-md-6">
					<div class="right-image">
					  <img src="img/about_image.jpg" alt="">
				  </div>
				</div>
			</div>
		</div>
	  </div>
	  <div class="slide" id="3">
		<div class="content third-content">
			<div class="container-fluid">
				<div class="col-md-12">
					<div class="row">
						<div class="first-section">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6">
										<div class="left-content">
											<h2>Quisque commodo quam</h2>
											<p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum. Maecenas rhoncus nibh in mauris lobortis, a maximus diam faucibus. In et eros urna. Suspendisse potenti. Pellentesque commodo, neque nec molestie tempus, purus ante feugiat augue.</p>
											<div class="main-btn"><a href="#4">Continue Reading</a></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="right-image">
											<img src="img/first_service.jpg" alt="first service">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="second-section">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6">
										<div class="left-image">
											<img src="img/second_service.jpg" alt="second service">
										</div>
									</div>
									<div class="col-md-6">
										<div class="right-content">
											<h2>Maecenas eu purus eu sapien</h2>
											<p>Sed vitae felis in lorem mollis mollis eget in leo. Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna, sed semper ipsum enim a ipsum. Aenean in ante vel mi molestie bibendum. Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
											<div class="main-btn"><a href="#4">Continue Reading</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	  <div class="slide" id="4">
		<div class="content fourth-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number One</h2>
										<p>Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/first_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Two</h2>
										<p>Donec eget dictum tellus. Curabitur a interdum diam. Nulla vestibulum porttitor porta.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/second_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/third_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Three</h2>
										<p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/third_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/fourth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Four</h2>
										<p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/fourth_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Fifth Item</h2>
										<p>Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/fifth_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/sixth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Sixth Item</h2>
										<p>Maecenas dapibus neque sed nisl consectetur, id semper nisi egestas.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/sixth_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/seventh_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Seven</h2>
										<p>Etiam aliquet, est id varius fringilla, eros libero pellentesque lectus.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/seventh_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/eight_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Eight</h2>
										<p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/eight_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/ninth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Nine</h2>
										<p>Orci varius natoque penatibus et magnis dis parturient montes.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/ninth_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Number Ten</h2>
										<p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/fifth_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Eleventh Item</h2>
										<p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/first_item.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<div class="thumb">
								<a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
									<div class="hover-content">
										<h2>Twelvth Item</h2>
										<p>Etiam tincidunt magna ex, sit amet lobortis felis bibendum id.</p>
									</div>
								</div></a>
								<div class="image">
									<img src="img/second_item.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	  <div class="slide" id="5">
		<div class="content fifth-content">
			<div class="container-fluid">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">
							<div class="ydc-release-tab-head">
								<ul>
									<li class="hit">学籍绑定</li>
								</ul>
								<div class="ydc-release-amount">
                                        <span>
										<a href="standard.html" target="_blank">学籍绑定规则</a>
                                        </span>
								</div>
							</div>
							<div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
									<div class="ydc-group-altogether" style="font-size: 17px;margin-left:20px">            
									<?php
		                              @$query="select * from  CM_student where register_name='{$_COOKIE['cookie']['name']}'  ";
		                              $result=execute($link, $query);
	                                  $S=mysqli_fetch_array($result);
		
		                              if(mysqli_num_rows($result)>0){
                                      echo "提示：<span>您已经录入学籍信息,学生姓名：",$S['student_name'];echo "; 学生学号：",$S['student_number'];echo "</span>";
                                     }else{echo "提示：<span>未提交学籍材料</span>";}
                               ?></div>
									<div class="ydc-group-table">
									<br><br>
									<div id="main" style = "margin-left:0px;font-size:15px">
									<div class="title" style = "font-size:35px;margin-left:380">学籍注册</div>
									<form class="form-horizontal"method= "post" style="margin-left:30">
               					   <div class="form-group clearfix " style=margin-top:50>
                
                   				   <label class="col-sm-3 control-label bk-lh30 pt0">姓名：</label>
                    			  <div class="col-sm-9">
                     				   <input type="text" class="form-control bk-valign-top" name="student_name" style = "width:400"> </div>
               					   </div>
              					  <div class="form-group clearfix " >
                  					  <label class="col-sm-3 control-label bk-lh30 pt0">学号：</label>
                    			  <div class="col-sm-9">
                       				 <input type="text" class="form-control bk-valign-top" name="student_number" style="width:400">
                       				 <p class="help-block"></p>
                 				   </div>
              					  </div>
                
                				<div class="form-group clearfix ">
                    			<label class="control-label col-sm-3 bk-lh30 pt0">性别：</label>
                    			<div class="col-sm-9">
                        		<div class="radio pt0">
                            	<label class="mr10">
                                <input type="radio" name="student_sex" class="bk-top5" value="男">
                                <span class="bk-lh30">男</span>
                          	    </label>
                            	<label class="mr10">
                                <input type="radio" name="student_sex"  class="bk-top5" value="女">
                                <span class="bk-lh30">女</span>
                            	</label>
                        		</div>
                   			    </div>
               				    </div>
              				    <div class="form-group clearfix "style=margin-top:30>
                   			   <label class="col-sm-3 control-label bk-lh30 pt0">学校：</label>
                    		   <div class="col-sm-9">
                               <select  name="student_college"  class="form-control bk-valign-top" style="width:400">
                                 <option value="实训886">实训886</option>
                                 <option value="选择项2">武汉大学</option>
                               </select>
                    		  </div>
                            </div>
               						 <div class="form-group clearfix "style=margin-top:30>
                           <label class="control-label col-sm-3 bk-lh30 pt0">学部：</label>
                            <div class="col-sm-9">
                                <div class="radio pt0">
                                    <label class="mr10">
                                        <input type="radio" name="student_school"  class="bk-top5" value="武汉街道口男子学部">
                                        <span class="bk-lh30">武汉街道口男子学部</span>
                                    </label>
                                    <label class="mr10">
                                        <input type="radio" name="student_school"  class="bk-top5" value="武汉大学工学部">
                                        <span class="bk-lh30">武汉大学工学部</span>
                                    </label>
                                    <label class="mr10">
                                        <input type="radio" name="student_school"  class="bk-top5" value="武汉大学妹子多学部">
                                        <span class="bk-lh30">武汉大学妹子多学部</span>
                                    </label>
                                    <label class="mr10">
                                        <input type="radio" name="student_school" class="bk-top5" value="医学部">
                                        <span class="bk-lh30">医学部</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix"style=margin-top:30>
                            <div class="col-sm-9 col-sm-offset-3"style=Padding-right:70>
                                <button type="submit" name="submit2" class="king-btn mr10  king-success"  value="提交">提交</button>
                                <button type="submit" name="submit3" class="king-btn mr10  king-success" value="提交数据有误,重新提交">重新提交</button>
                            </div>
                            	
                        </div>
                    </form>
                           </div>
    	
									
	
	
									</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				<?php include_once 'inc/leaft_head_end.php';?>
				</div>
			</div>
		</div>
	  </div>
	</div>

	<div class="footer">
	  <div class="content">
		  <p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	  </div>
	</div>


<script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/datepicker.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	

	// navigation click actions 
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');         
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 0;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
	console = {
		log: function() { }
	};
}
</script>
<!-- person -->
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