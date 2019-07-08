<?php
include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
$link=connect();
$member_id=is_login($link);

if(isset($_POST['submit'])){
    
    $link=connect();
    INCLUDE 'inc/check_register.inc.php';
    $_POST=escape($link,$_POST);
    $query="insert into CM_register(register_name,register_password,register_mail,register_work) values('{$_POST['name']}',md5('{$_POST['pw']}'),'{$_POST['member_mail']}','学生')";
    execute($link, $query);
    if(mysqli_affected_rows($link)==1){
        setcookie('cookie[name]',$_POST['name'],time()+3600);
      
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]','学生' ,time()+3600);
		
        skip('index.php','ok','注册成功！');
    }else{
        skip('register.php','eror','注册失败,请重试！');
    }
   
    
}
?>
<?php 
include_once 'inc/head.inc.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>注册</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />

<!-- <link rel="stylesheet" type="text/css" href="style/register.css" /> -->
</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					<div style="width: 360px;height:450px;border: 10px solid #9ed">	
					<div class="login_form">
						<div class="login_title">
							注册账号
						</div>
						<form action="#" method="post">
							
							<div class="form_text_ipt">
								<input name="name" type="text" placeholder="账号">
							</div>
							<div class="ececk_warning"><span>账号不能为空</span></div>
							<div class="form_text_ipt">
								<input name="pw" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input name="confirm_pw" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>密码不一致</span></div>
							<div class="form_text_ipt">
								<input name="member_mail" type="text" placeholder="电子邮箱/用于验证">
							</div>
							<div class="ececk_warning"><span>电子邮箱无效！</span></div>
							
							<div class="form_btn">
								<input class="btn" name="submit" type="submit" value="确定注册" style = "background: #FF7F50;color:black;height: 35;width:300 ;margin-left: 0px;margin-top: 0px"  />
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="login.php">马上登录</a>
							</div>
							
						</form>
		
					</div>
				</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>

	</body>
 <!--  <body>
	
	
	
		<h2>课程管理系统</h2>
		<form method= "post">
			<label>账号：<input type="text" name="name" /></label>
			<label>密码：<input type="password" name="pw" /></label>
			<label>确认密码：<input type="password" name="confirm_pw" /></label>
            <label>用户名字：<input type="text" name="member_id" /></label>
			<label>电子邮箱：<input type="text" name="member_mail" /></label>

			
			
			<input class="btn" name="submit" type="submit" value="确定注册" />
		</form>

</body>
-->

</html>
