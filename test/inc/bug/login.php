<?php
header("Content-Type: text/html; charset=utf-8");
include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
$link=connect();
$member_id=is_login($link);
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
		<link rel="stylesheet" href="css/style.css" />
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
						
						<form  method="post" onsubmit = "return check()">
							
							<div class="form_text_ipt">
								<input id ="name" name="name" type="text" placeholder="用户名">
							</div>
							<div class="ececk_warning"><span>用户名不能为空</span></div>
							<div class="form_text_ipt">
								<input id="pw" name="pw" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<select id = "member_id" name="member_id" class="col-sm-9 col-sm-offset-3" style = "padding: 6px 0;margin: 5px;font-size: 15px;color:#666;height: 35;width:300 ;margin-left: 20px;margin-top: 20px">
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
		<script type="text/javascript" src ="js/ui.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	</body>
			<script type = "text/javascript" >
							function check(){
								var pass;
								var name = document.getElementById("name").value;
								var pw = document.getElementById("pw").value;
								var member_id = document.getElementById("member_id").value;
								if(name == '')
								{
									mizhu.alert('提示信息','用户名不得为空！','alert_green');
									return false;
								}
								if(pw == '')
								{
									mizhu.alert('提示信息','密码不能为空！','alert_green');
									return false;
								}
								$.ajax({
								url:"inc/check_login.inc.php",  //验证表单的页面
								data:{"name":name,"pw":pw,"member_id":member_id},//传入后台
								type:"POST",//类型
								dataType:"json",
								success:function(data){
									pass = data.ok;
									if(!data.ok){
										mizhu.alert('提示信息',data.msg,'alert_green');
									}else{
										mizhu.alert('提示信息',data.msg,'alert_green');
										window.location.href="index.php";
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
