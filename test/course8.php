<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
include_once 'inc/page.inc2.php';

$link=connect();
$member_id=is_login($link);
$template['css']=array('style/public.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$course_id='20182021299 ';
$query="select * from CM_course where course_id='{$course_id}'";
    $result=execute($link,$query);
    $course=mysqli_fetch_array($result);
    $query="select * from CM_teacher where tID='{$course['tID']}'";
    $result=execute($link,$query);
    $teacher=mysqli_fetch_array($result);
    
   $adress='course8.php';

   include_once 'index.inc/index1.inc.php';
   
?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<?php include_once 'index.inc/index4.inc.php';?>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<body onload = "timer()">
<!-- header area start here -->
<header>
    <div class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 tap-v-responsive">
                    <div class="logo-area">
                        <a href="index.html"><img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav>
                        <ul class="main-menu text-right">
                            <li class="active"><a href="index.php">首页</a>
                            </li>
                            <li><a href="course.php">课程资源</a>
                                
                            </li>
                           <li><a href="kecheng.php">课程分类</a>
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
            </div>
        </div>
    </section><!-- blog breadcrumb version one end here -->
<section id="blog" class="section-paddings single section page blog_wrapper">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-12 col-xs-12">
<!-- Single blog -->
<div class="single-blog">

<div class="video">
	<div class="container" >
		<div class="videolist" vpath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.png" ipath="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.mp4">
			
			<img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.png" width="540px" height="300px" />
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
                            <div class="blog-content">
                             <?php include_once 'index.inc/index2.inc.php';?>
                              
                                <p>本课程是“计算机科学导论”国家级精品课程的MOOC版本，本课程将课程的结构建立在计算学科认知模型的基础上，并以计算机科学的内容为背景，借助大量案例，在学科思想与方法层面，对学生认知计算学科进行导引，着力提高学生在复杂问题求解，系统设计，以及人类行为理解方面的计算思维能力。</p>
                                <p><strong>课程概论</strong>
                                </p>
                                <p>本课程要求学生了解计算学科的认知模型；学科的基本问题；学科抽象、理论和设计三个形态；学科中的核心概念、数学方法、系统科学方法，以及社会和职业问题等内容。“复杂”这个词贯穿本课程的始终，要求学生通过大量案例的训练，初步掌握运用计算机科学的基础概念控制和降低复杂工程问题的思想与方法。
</p>
                               <p><strong>课程大纲</strong>
                               </p>
                                               <br><label>第一章 绪论</label>
                                              <br><label>第二章 计算学科的基本问题</label>
                                               <br><label>第三章 计算学科的3个学科形态</label>
                                                <br><label>第四章  计算学科的核心概念</label>
                                              <br><label>第五章 计算学科中的数学方法</label>
                                               <br><label>第六章 计算学科中的系统科学方法</label>
                                               <br><label>第七章 社会与职业问题</label>
                                               <br><label>第八章 探讨与展望</label>
                                               
                            </div>
                        </div><!--/ End Single blog -->

                       <!-- Blog Comment Wrappper-->
                        <?php include_once 'index.inc/index3.inc.php';?>
							
                            <!--  Leave Commnent Wrapper -->
                   </div>
                  </div>
                  
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                      <div class="blog-right-items">
                  
                          <div class="search_blog widget_single">
                              <div class="form-full-box">
                                  <form>
                                      <div class="form-group">
                                          <input class="form-control" name="name" placeholder="课程名称"  type="text">
                                          <button class="register-btn" type="submit"><i class="fa fa-search"></i></button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                  
                  
                       <div class="recent_post_wrapper widget_single">
					<div style="width:350px;height:450px;background:white;position:relative;left:0px;top:10px;border-radius:10px">
						<div class="items-title" style ="margin-left:20px">
							<h3 class="title">相关课程</h3>
							<hr>
						</div>
					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						   <a href="course8.php" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course8.png" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course8.php" title="">自然计算方法导论</a>
							<div class="post-date">
							   <span>May 29, 2019</span>
							</div>
						</div>
					</div>

					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						  <a href="course3.php" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course3.jpg" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course3.php" title="">信息安全概论</a>
							<div class="post-date">
							  <span>25 August, 2019</span>
							</div>
						</div>
					</div>


					<div class="single-post" style ="margin-left:20px">
						<div class="recent_img">
						   <a href="course2.php" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/course2.jpg" alt="" class="img-fluid"></a>
						</div>
						<div class="post_title">
							<a href="course2.php" title="">物联网应用及安全</a>
							<div class="post-date">
							   <span>25 August, 2019</span>
							</div>
						</div>
						</div>
					</div>
				</div>

				<div class="recent_post_wrapper widget_single">
					<div style="width:350px;height:500px;background:white;position:relative;left:0px;top:10px;border-radius:10px">
						<div class="items-title" style ="margin-left:20px">
						  <h3 class="title">课程老师</h3>
						</div>
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/%E5%A4%B4%E5%83%8F2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">刘华骏</a>
							 
							</div>
						</div>
									
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/%E5%A4%B4%E5%83%8F4.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">徐晓辉</a>
							  
							</div>
						</div>
									
						<div class="single-post" style ="margin-left:20px">
							<div class="recent_img">
								<a href="" title=""><img src="https://mazan-1259499226.cos.ap-shanghai.myqcloud.com/%E5%A4%B4%E5%83%8F6.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="post_title">
								<a href="" title="">黄爽</a>
							 
							</div>
						</div>
					</div>
				</div>
						  
						   
                  
                          <div class="popular_tags widget_single">
                              <div class="items-title">
                                  <h3 class="title">课程类型</h3>
                              </div>
                              <div class="tags-items">
                                  <ul class="list-unstyled">
                                      <li><a href="" title="">计算机类</a></li>
                                      <li><a href="" title="">文学类</a></li>
                                      <li><a href="" title="">通识类</a></li>
                                      <li><a href="" title="">。。。</a></li>
                                  </ul>
                              </div>
                          </div>  
                      </div>
                  </div><!-- ./ End  Blog Right Wrapper--><!-- ./ End  Blog Right Wrapper-->
           
        </div>
    </section>


<footer class="footer-area">
	<div class="container">
		<div class="row">
			<!-- footer left -->
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="single-footer">
					<div class="footer-title">
						<h3><a href=""><img src="images/logo.png" alt=""></a></h3>
					</div>
					<div class="footer-left">
						<div class="footer-logo">
							<p>代码全写队 <br> 产品经理： 项目经理： 技术经理： 成员：</p>
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
						<li><a href="kecheng.php" title="">课程分类</a></li>
						
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
							<li class="facebook"><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
							<li class="linkedin"><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
							<li class="gplus"><a href="https://www.cnbeta.com"><i class="fa fa-google-plus"></i></a></li>
							<li class="youtube"><a href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
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
<div class="suspension">
	<div class="suspension-box">
	<a href="javascript:share.weibo();" class="nav"><img src="images/weibo.jpg" width="44px" height="44px"></a>
<a href="javascript:share.qzone();" class="nav"><img src="images/qzone.jpg" width="44px" height="44px"></a>
<a  href="javascript:share.qq();" class="nav"><img src="images/qq.jpg" width="44px" height="44px" ></a>
<a href="javascript:share.weixin();" class="nav"><img src="images/weixin.jpg"width="44px" height="44px" ></a>

	</div>
</div>
<script src="js/share.js"></script>
<script>	
var share = new SimpleShare({
url: window.location.href,
title: '公共课程',
content: '这门课真的不错',
pics: ''
});

</script><!-- fenxiang end -->
<div class="to-top pos-rtive">
    <a href="#"><i class = "fa fa-angle-up"></i></a>
</div><!-- Scroll to top-->

<?php include_once 'index.inc/index5.inc.php';?>
   
</body>
</html>