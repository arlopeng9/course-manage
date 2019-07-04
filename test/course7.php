<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);
$template['css']=array('style/public.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$course_id='20182022193';
$query="select * from CM_course where course_id='{$course_id}'";
    $result=execute($link,$query);
    $course=mysqli_fetch_array($result);
    $query="select * from CM_teacher where tID='{$course['tID']}'";
    $result=execute($link,$query);
    $teacher=mysqli_fetch_array($result);
    
   $adress='course7.php';
   if(isset($_POST['submit'])){
       if($_POST['content']==NULL){
           skip($adress,'error','评论不能为空');}
           
   
   }

   if(@$_COOKIE['cookie']['name']!=NULL){
   $query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
   $result=execute($link,$query);
   $student_course=mysqli_fetch_array($result);}
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
    <title></title>
    <!-- Google Fonts Includes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Favi icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- bootstrap v3.3.6 css -->
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
</head>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<body>
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
        <div class="single-bredcurms" style="background-image:url('images/bercums/Blogs-Version-01.jpg');">
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

    <!-- Start blog -->
    <section id="blog" class="section-paddings single section page blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                        <!-- Single blog -->
                        <div class="single-blog">
                            <img src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" style="width: 550px;height:350px">
                            <div class="blog-content">
                               <h1><label><?php echo $course['course_name'] ?></label><label style="margin-left: 300px" ><?php  echo $course['course_score'];?></label> </h1>
                                <h4>
                           <label>学类： <?php echo $course['course_type'] ?></label>
                            <label>老师：<?php echo $teacher['teacher_name']?></label>
                           <label>课程ID：<?php echo $course['course_id'] ?></label></h4>
                                <div class="meta">
                                   
                                    <span><i class="fa fa-calender"></i>June 19</span>
                                    <span><i class="fa fa-comments"></i>65 Comments</span>
									<button  class="travel-booking-btn hvr-shutter-out-horizontal" type="submit" name="xuanke" style="margin-left: 300px;"><?php 
                                    if(@$_COOKIE['cookie']['name']==NULL){echo '选择课程';}else{$query="select*from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}'";
   $result_name=execute($link,$query); if(mysqli_fetch_assoc($result_name)){echo '已选';}else{echo '选择课程';}}?></button>
                                </div>
                                <p>航空航天是二十世纪以来发展最为迅速、应用最为广泛、对人类社会生活影响最大的科技领域之一。 航空航天概论将为大家展示航空航天发展的壮丽史诗和人类探索太空的艰辛历程，通过航空航天基本知识和飞行器科学与技术的学习，领略航空航天的魅力，体会人类不断探索的奋斗精神，畅想太空的奥秘和未来。</p>
                                <p><strong>课程概论</strong>
                                </p>
                                <p>   航空航天是人类拓展和探索大气层及宇宙空间的产物，代表着最先进的科学技术领域。航空航天概论主要讲述了航空航天基本概念、航空航天发展概况、飞行器的飞行原理、动力系统、构造及其机载设备等方面的基本知识、基本原理和常用技术。通过课程的学习，可以使学生对航空航天的基本知识和基本技术有一个比较全面的了解，同时也可以掌握航空航天技术的最新发展动态和发展趋势，是学生了解航空航天知识的重要窗口，也是培养学生对航空航天兴趣和爱好，激发学生热爱航空、献身航空的有效途径。
</p>
                               <p><strong>课程大纲</strong>
                               </p>
                               <br><label>第一章 航空航天发展概况</label>
                                              <br><label>第二章 升力与阻力的产生</label>
                                               <br><label>第三章 飞机气动布局及飞行性能</label>
                                                <br><label>第四章  直升机飞行原理与航天器飞行原理</label>
                                              <br><label>第五章 航空器动力装置</label>
                                               <br><label>第六章 航天器动力装置</label>
                                               <br><label>第七章 飞行器导航与制导</label>
                                               <br><label>第八章 飞行器构造</label>
                                               
                            </div>
                        </div><!--/ End Single blog -->

                       <!-- Blog Comment Wrappper-->
                        <div class="commnet-wrapper">
                            <div class="items_title">
                                <h3 class="title">课程评论</h3>
                            </div>
                             <div class="comment-list-items">
                                <div class="comment-list-wrapper">
                                       <label style="margin-left: 30px;"><h1>分数：<?php echo $course['course_score']?></h1></label>
                              <?php if(@$_COOKIE['cookie']['name']!=NULL){
                                 $query="select * from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}' ";
                                   $result=execute($link,$query);
                                   
                                    if($data=mysqli_fetch_assoc($result)){
                                ?>
                                <Form method="post">
                             <span>  <br><input type="text" name="content"></span>
                                  
                                <br><input type="submit" value="提交评论"name="submit">
                                    <input type="button" value="课程打分" name="submit2"><br>
                                   </Form> 
                                   <?php }}else {?>
                                    <button  class="king-btn-demo king-btn king-success"  name="submit3" style="margin-left: 450px;">评论</button>
                                  <?php }?>
                                  <?php 
                                  if(isset($_POST['submit'])){
                                      
                                          $time=date('20y年m月d日', time());
                                          echo $time;
                                          @$query="insert into CM_comment (course_id,student_name,comment_time,comment_quality,comment_content,comment_photo) values('{$course['course_id']}',
                                          '{$student_course['student_name']}','{$time}','','{$_POST['content']}','')";
                                          execute($link,$query);
                                          skipto($adress,'ok','登录成功！');
                                           
                                  }
                                
  ?>

                   
                                </div>
                                <div class="comment-list-wrapper">
                                   
                                        
                                <?php  $query="select 
course_id,student_name,comment_time,comment_quality,comment_content,comment_photo from CM_comment where course_id ='{$course_id}' order by commentID desc";
			$result_content=execute($link,$query);
			while($data_content=mysqli_fetch_assoc($result_content)){?>
								
							<div class="king-instruction  king-instruction-info ">
                                <br><label><h3><?php echo $data_content['student_name' ];?></h3></label> 
                                 <label style="padding-left:20px"><?php echo $data_content['comment_time'];?></label> 
                                  <label style="padding-left:20px">情绪：<?php echo $data_content['comment_quality'];?></label> 
                                 
								<br><label><?php echo $data_content['comment_content'];?>  </label>
                                    </div>
								<?php }?>                              
                                   
                                </div>
                            </div> 
							
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
                              <div class="items-title">
                                  <h3 class="title">相关课程</h3>
                              </div>
                              <div class="single-post">
                                  <div class="recent_img">
                                       <a href="course8.php" title=""><img src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="course8.php" title="">自然计算方法导论</a>
                                      <div class="post-date">
                                          <span>May 29, 2019</span>
                                      </div>
                                  </div>
                              </div>
                  
                              <div class="single-post">
                                  <div class="recent_img">
                                      <a href="course3.php" title=""><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="course3.php" title="">信息安全概论</a>
                                      <div class="post-date">
                                          <span>25 August, 2019</span>
                                      </div>
                                  </div>
                              </div>
                  
                              <div class="single-post">
                                  <div class="recent_img">
                                      <a href="course2.php" title=""><img src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="course2.php" title="">物联网应用及安全</a>
                                      <div class="post-date">
                                          <span>25 August, 2019</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  
                           <div class="recent_post_wrapper widget_single">
                              <div class="items-title">
                                  <h3 class="title">课程老师</h3>
                              </div>
                              <div class="single-post">
                                  <div class="recent_img">
                                       <a href="" title=""><img src="images/blog/f4.jpg" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="" title="">刘华骏</a>
                                     
                                  </div>
                              </div>
                                            
                              <div class="single-post">
                                  <div class="recent_img">
                                      <a href="" title=""><img src="images/blog/f5.jpg" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="" title="">徐晓辉</a>
                                      
                                  </div>
                              </div>
                                            
                              <div class="single-post">
                                  <div class="recent_img">
                                      <a href="" title=""><img src="images/blog/f6.jpg" alt="" class="img-fluid"></a>
                                  </div>
                                  <div class="post_title">
                                      <a href="" title="">黄爽</a>
                                     
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
           
        </div></div>
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
									<div class="post-thum">
										<img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</div>
									<div class="post-content">
										<p>课程名 :</p><br><p>身边的材料学 </p>
                                       <br><p>课程ID：20182018155</p>
										
										
									</div>
								</a>
							</li>
							<li>
								<a href="course3.php">
									<div class="post-thum">
										<img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</div>
									<div class="post-content">
										<p>课程名 :</p><br><p>信息安全概论 </p>
                                        <br><p>课程ID：20182047080</p>
										
									</div>
								</a>
							</li>
							<li>
								<a href="course1.php">
									<div class="post-thum">
										<img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="" class="img-rounded"style="width: 200px;height: 120px;">
									</div>
									<div class="post-content">
										<p>课程名 :</p><br><p>C语言程序设计 </p>
                                        <br><p>课程ID：20182047086</p>
										
									</div>
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

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.0.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>  
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
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
    <!-- Jquery plugin -->
    <script src="js/plugins.js"></script>
    <!-- select2 js plugin -->
    <script src="js/select2.min.js"></script>    
    <script src="js/colors.js"></script>
    <!-- Jquery plugin -->
    <script src="js/jquery-customselect.js"></script>
    <!-- main js -->
    <script src="js/custom.js"></script>
</body>
</html>