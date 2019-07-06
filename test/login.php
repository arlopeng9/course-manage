<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

include_once "inc/headstyle.inc.php";
$link=connect();

$member_id=is_login($link);
if($member_id){
    skip('index.php','error','你已经登录，请不要重复登录！');
}

    if(isset($_POST['submit'])){

        escape($link,$_POST);
        $query="select * from CM_register where register_name='{$_POST['name']}' and register_password=md5('{$_POST['pw']}')";
        $result=execute($link, $query);
        include 'inc/check_login.inc.php';
       
}

?>
<?php 
include_once 'inc/head.inc.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>denglujiemian</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
		<link rel="stylesheet" href="css\reset.css" />
		<link rel="stylesheet" href="css\common.css" />
		<link rel="stylesheet" href="css\font-awesome.min.css" />
</head>



	<!--  <div style="margin-top:55px;"></div>
	<div id="register" class="auto">
		<h2>欢迎用户登录</h2>

	</div>-->
<body>
		<div class="wrap login_wrap">
			<div class="content">
				<div class="logo"></div>
				<div class="login_box">	
				<div style="width: 360px;height:450px;border: 10px solid #9ed">	
					<div class="login_form">
						<div class="login_title">
							登录
						</div>
						
						<form action="#" method="post">
							
							<div class="form_text_ipt">
								<input name="name" type="text" placeholder="用户名">
							</div>
							<div class="ececk_warning"><span>用户名不能为空</span></div>
							<div class="form_text_ipt">
								<input name="pw" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<select name="member_id" class="col-sm-9 col-sm-offset-3" style = "padding: 6px 0;margin: 5px;font-size: 15px;color:#666;height: 35;width:300 ;margin-left: 20px;margin-top: 20px">
									<option>学生</option>
									<option>管理员</option>
									<option>院系管理员</option>
				
							</select>
							<div class="form_check_ipt">
								<div class="left check_left">
									<label><input name="" type="checkbox"> 下次自动登录</label>
								</div>
								<div class="right check_right">
									<a href="reset.html">忘记密码</a>
								</div>
							</div>
							<div class="form_btn">
								 <input class="btn" name="submit" type="submit" value="登陆"style = "background: #FF7F50;color:black;height: 35;width:300 ;margin-left: 0px;margin-top: 0px" />
							</div>
							<div class="form_reg_btn">
								<span>还没有帐号？</span><a href="register.php">马上注册</a>
							</div>
						</form>
						
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a href="#"><i class="fa fa-qq fa-2x"></i></a>
								<a href="#"><i class="fa fa-weixin fa-2x"></i></a>
								<a href="#"><i class="fa fa-weibo fa-2x"></i></a>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>

	</body>
<!--  
<body class="bg-bright1" data-bg-color="bg-bright1">
<div class="king-page-box">

    <div class="king-layout2-main mt15" style="width:960px;">

        <form class="form-horizontal" method="post">
            <div class="form-group clearfix ">
                <label class="col-sm-3 control-label bk-lh30 pt0">账号：</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control bk-valign-top"name="name"> </div>
            </div>
            <div class="form-group clearfix ">
                <label class="col-sm-3 control-label bk-lh30 pt0">密码：</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control bk-valign-top"  name="pw">
                    <p class="help-block">6位以上，仅可由数字、字母、下划线组成</p>
                </div>
            </div>
            
            <select name="member_id" class="col-sm-9 col-sm-offset-3" >
				<option>学生</option>
				<option>管理员</option>
				<option>院系管理员</option>
				
			</select>
	
            <div class="form-group clearfix">
                <div class="col-sm-9 col-sm-offset-3">
                    <input class="btn" name="submit" type="submit" value="登陆" />
                    <input class="btn" name="submit" type="submit1" value="密码找回" />
                    
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('.carousel').carousel()
</script>
</body>
-->

</html>
