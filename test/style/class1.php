
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);
if(!isset($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
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
	<meta name="description" content="。">
	<meta name="author" content="AUI, a-ui.com">
	<meta name="baidu-site-verification" content="ZVPGgtpUfW"/>
	<title>已选课程查看</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<link type="text/css" rel="stylesheet" href="person/css/core.css">
	<link type="text/css" rel="stylesheet" href="person/css/icon.css">
	<link type="text/css" rel="stylesheet" href="person/css/home.css">


</head>
<body bgcolor = "#eeeeee">

<!-- head YDC begin -->
	<header class="ydc-header">
		<div class="ydc-entered">
			<div class="ydc-header-content ydc-flex">
				<div class="ydc-column">
					<a href="index.html" class="ydc-column-ydc-logo">
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
								<a href="javascript:;">个人中心</a>
							</div>
							<div class="ydc-user-info-func ydc-flex">
								<span class="ydc-tag">新手期</span>
								<span class="ydc-mal"><i class="ydc-icon ydc-icon-mail fl"></i><em>12</em></span>
								<a href="javascript:;">退出</a>
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
								<a href="index.php" class="">
									<i class="ydc-icon ydc-icon-home fl"></i>
									首页
								</a>
							</li>
							<li class="ydc-menu-item">
								<a href="release.html" class="">
									<i class="ydc-icon ydc-icon-find fl"></i>
									学习心得
								</a>
							</li>
							<li class="ydc-menu-item">
                                    <span class="ydc-menu-sub-title">
                                        <i class="ydc-icon ydc-icon-file fl"></i>
                                        课程管理
                                    </span>
								<ul>
									<li>
										<a href="content.html" class="active">已选课程查看</a>
									</li>
									<li>
										<a href="related.html">选择课程</a>
									</li>
									<li>
										<a href="asset.html">素材中心</a>
									</li>
								</ul>
							</li>
							<li class="ydc-menu-item">
                                    <span class="ydc-menu-sub-title">
                                        <i class="ydc-icon ydc-icon-record fl"></i>
                                        课程学习数据

                                    </span>
								<ul>
									<li>
										<a href="subscribe.html">学习时间统计</a>
									</li>
									<li>
										<a href="content-data.html">内容课程学习数据</a>
									</li>
									<li>
										<a href="index-starLevel.html">指数星级</a>
									</li>
								</ul>
							</li>
							<li class="ydc-menu-item">
                                    <span class="ydc-menu-sub-title">
                                        <i class="ydc-icon ydc-icon-set fl"></i>
                                        设置

                                    </span>
								<ul>
									<li>
										<a href="info.html">账号信息</a>
									</li>
									<li>
										<a href="account.html">学籍绑定</a>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
				<!-- left end -->
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">
							<div class="ydc-release-tab-head">
								<ul>
									<li class="hit">已选课程查看</li>
								</ul>
								<div class="ydc-release-amount">
                                        <span>
                                            今日已选课程数量：<em>0</em>
                                            /6 <a href="standard.html" target="_blank">选课规则</a>
                                        </span>
								</div>
							</div>
							<div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
									<div class="clearfix">
										<div class="fl ydc-group-sel">
											<select>
											
												<option>课程类型</option>
												<option>社会类</option>
												<option>人文类</option>
												<option>理工类</option>
												<option>计算类</option>
											</select>
										</div>
										<div class="fl ydc-group-sel">
											<select>
												<option>课程状态</option>
												<option>未通过</option>
												<option>已通过</option>
											</select>
										</div>
										<div class="fl ydc-group-input">
											<input type="text" placeholder="请输入关键词进行搜索">
											<button class="ydc-group-button">搜 索</button>
										</div>
									</div>
									<div class="ydc-group-altogether">共<span>1</span>门课程</div>
									<div class="ydc-group-table">
									
									<div id="main" style = "margin-left:0px;font-size:15px">
									<div class="title" style = "font-size:20px">课程</div>
									<form method="post">
									<table class="list">
										<tr>
											<th><h4>课程序号</h4></th>	 	 	
											<th><h4>名字</h4></th>
											<th><h4>任课老师</h4></th>
											<th><h4>院系</h4></th>
											<th><h4>操作</h4></th>
										</tr>
									<?php 
		                            $query="select student_number from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
	                                $result=execute($link,$query);
		                            $S=mysqli_fetch_array($result);//学生号码
		                            $query="select * from CM_student_course where student_number='{$S['student_number']}'";
	
		                              $result=execute($link,$query);
		                          while($data=mysqli_fetch_assoc($result)){
		
		                               $query="select * from CM_course where cID='{$data['cID']}'";
		    
		                                $result2=execute($link,$query);
		                                $M=mysqli_fetch_array($result2);
		                                $query="select * from CM_teacher where tID='{$M['tID']}'";
		    
		                                $result3=execute($link,$query);
		                               $T=mysqli_fetch_array($result3);
		                              $url=urlencode("xuanze_delete.php?id={$M['cID']}");
			                          $return_url=urlencode($_SERVER['REQUEST_URI']);
			                          $message="你真的要撤掉这门课嘛 {$M['course_name']} 吗？";
			                          $add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		
			
                                      $html=<<<A
                                     
			                             <tr>
				                            <td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				                            <td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				                            <td></br>{$T['teacher_name']}</td>
				                            <td></br><h5>{$M['course_college']}</h5></td>
				
				                            <td></br><a href="javascript:course();"><h5>[查看详细]</h5></a><a href="$add_url"><h5>[撤课]</h5></a></td>
		                                    
			                            </tr>
				
A;
			                        echo $html;
		                            }
		                          ?>
	                        </table>
	
	                       </form>
                           </div>
    	
									
									
										<!--  <div class="ydc-group-table-item">
											<div class="ydc-group-table-item-img">
												<img src="person/images/ad/img-ad1.jpg" alt="">
											</div>
											<div class="ydc-actions">
												<div>
													<button class="ydc-actions-trigger"></button>
												</div>
											</div>


										</div>-->
	
	
									</div>
									</div>
								</div>
								<div class="ydc-pagination">
									<ol>
										<li class="ydc-previous-item">
											<button class="ydc-previous-item-btn-medium ydc-disabled">
												<span>上一页</span>
											</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium cur">1</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium">2</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium">3</button>
										</li>
										<li class="ydc-previous-item">
											<button class="ydc-previous-item-btn-medium">
												<span>下一页</span>
											</button>
										</li>
										<li class="ydc-item-quick">
											第<div class="ydc-item-quick-kun"><input type="number" aria-invalid="false" class=""></div>页
											<button style="margin-left:5px;" class="ydc-previous-item-btn-medium">
												<span>跳转</span>
											</button>
										</li>
									</ol>
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
							</div>
						</div>
					</div>
				</div>
				<!-- right end -->
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
<!--  
<HTML>
<HEAD>
    <META CHARSET="UTF-8">

</HEAD>

<body class="bg-white" data-bg-color="bg-white">

<div id="main">
	<div class="title">选课</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>课程序号</th>	 	 	
			<th>名字</th>
			<th>任课老师</th>
			<th>院系</th>
			<th>操作</th>
		</tr>
		<?/*php 
		$query="select student_number from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
		$result=execute($link,$query);
		$S=mysqli_fetch_array($result);//学生号码
		$query="select * from CM_student_course where student_number='{$S['student_number']}'";
	
		$result=execute($link,$query);
		while($data=mysqli_fetch_assoc($result)){
		
		    $query="select * from CM_course where cID='{$data['cID']}'";
		    
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);
		    $query="select * from CM_teacher where tID='{$M['tID']}'";
		    
		    $result3=execute($link,$query);
		    $T=mysqli_fetch_array($result3);
		    $url=urlencode("xuanze_delete.php?id={$M['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$M['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		
			
$html=<<<A
			<tr>
				<td><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}" /></td>
				<td>{$M['course_name']}[cID:{$M['cID']}]</td>
				<td>{$T['teacher_name']}</td>
				<td>{$M['course_college']}</td>
				
				<td><a href="javascript:course();">[查看详细]</a>&nbsp;&nbsp;<a href="$add_url">[撤课]</a></td>
			</tr>
				
A;
			echo $html;
		}
		?>
	</table>
	
	</form>
</div>
    	



</body>
</HTML>
-->

