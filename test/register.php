<?php
header("Content-Type: text/html; charset=utf-8");
include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
$link=connect();
$member_id=is_login($link);
/*
if(isset($_POST['submit'])){
    $_POST=escape($link,$_POST);
	var_dump($_POST);
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
}*/
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
		<link rel="stylesheet" href="css/common3.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />

<!-- <link rel="stylesheet" type="text/css" href="style/register.css" /> -->
</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					<div style="width: 360px;height:500px;border: 10px solid #9ed">	
					<div class="login_form">
						<div class="login_title">
							注册账号
						</div>
						<form  action= "login.php" method="post" onsubmit="return check()">
							
							<div class="form_text_ipt">
								<input id ="name"name="name" type="text" placeholder="账号">
							</div>
							<div class="ececk_warning"><span>账号不能为空</span></div>
							<div class="form_text_ipt">
								<input id="pw"name="pw" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input id ="confirm_pw"name="confirm_pw" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>密码不一致</span></div>
							<div class="form_text_ipt">
								<input id ="member_mail"name="member_mail" id ="member_mail" type="text" placeholder="电子邮箱/用于验证">
							</div>
							<input id = "confirm_code" type ="hidden" >
							<div class="ececk_warning"><span>电子邮箱无效！</span></div>
							<div class="form_button_ipt">
							<input id="code"name= "code" type="text" placeholder="验证码" style = "padding: 6px;margin: 5px;font-size: 15px;color:#666;height: 35;width:134 ;margin-left: 20px;margin-top: 20px">
							<input id = "getcode"  class="form_button_ipt" type="button" name="button"  value="获取验证码" > 
							
							<!-- 更改type时在css/common3中对应form_button_ipt以及form_button_ipt.on中[type = 对应button或submit] -->
							
							
							<div class="form_btn">
								<input class="btn" name="submit" type="submit" value="确定注册"  style = "background: #FF7F50;color:black;height: 35;width:300 ;margin-left: 0px;margin-top: 0px"  />
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
		<script type="text/javascript" src ="js/ui.js"></script>
		<script type ="text/javascript" src ="js/jquery-1.7.1.min.js"></script>
		<script type = "text/javascript" src = "js/60.js"></script>
	</body>
							<script type = "text/javascript" >
							function check(){
								var confirm_code = document.getElementById("confirm_code").value;
								if(confirm_code == '' ){
									mizhu.alert('提示信息','未获取验证码或验证码已失效！','alert_green');
									return false;
								}
								var pass;
								var name = document.getElementById("name").value;
								var pw = document.getElementById("pw").value;
								var confirm_pw = document.getElementById("confirm_pw").value;
								var member_mail= document.getElementById("member_mail").value;
								var code = document.getElementById("code").value;
								if(confirm_code != code ){
									mizhu.alert('提示信息','验证码错误！','alert_green');
									return false;
								}
								$.ajax({
								url:"inc/check_register.inc.php",  //验证表单的页面
								data:{"name":name,"pw":pw,"confirm_pw":confirm_pw,"member_mail":member_mail,"code":code},//传入后台
								type:"POST",//类型
								dataType:"json",
								success:function(data){
									if(data.type == null){
										mizhu.alert('提示信息','请输入信息','alert_green');
									}else if(data.type == "用户"){
										mizhu.alert('提示信息','请输入用户名','alert_green');
									}else if(data.type == "用户长度"){
										mizhu.alert('提示信息','用户名长度不要超过32个字符','alert_green');
									}else if(data.type == "密码长度"){
										mizhu.alert('提示信息','密码不得少于6位！','alert_green');
									}else if(data.type == "重复密码"){
										mizhu.alert('提示信息','两次密码输入不一致！','alert_green');
									}else if(data.type == "邮箱"){
										mizhu.alert('提示信息','邮箱不得为空！','alert_green');
									}else if(data.type == "重复注册"){
										mizhu.alert('提示信息','这个账号已经被别人注册了！','alert_green');
									}else if(data.type == "验证码"){
										mizhu.alert('提示信息','未获取验证码！','alert_green');
									}else if(data.type == "验证码错误"){
										mizhu.alert('提示信息','验证码错误！','alert_green');
									}else if(data.type == "成功"){
										mizhu.alert('提示信息','注册成功，请去登陆！','alert_green');
										window.location.href="login.php";
									}
								},
								error:function(data){
									alert("sda");
								}
								});
								if(pass)
								{
									return true;
								}else{
									return false;
								}
							
							}
			</script>
</html>
