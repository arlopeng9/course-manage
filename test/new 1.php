<?php
?>
<html>
<body>
<form  method="post" onsubmit="return check()">
							
							
								<input id ="name"name="name" type="text" placeholder="账号" value="">
								<input id= "pw" name="pw" type="password" placeholder="密码"value="">
								<input id = "confirm_pw"name="confirm_pw" type="password" placeholder="重复密码"value="">
								<input id = "member_mail"name="member_mail" id ="member_mail" type="text" placeholder="电子邮箱/用于验证" value="">
							<input id = "code"name= "code" type="text" placeholder="验证码" style = "padding: 6px;margin: 5px;font-size: 15px;color:#666;height: 35;width:134 ;margin-left: 20px;margin-top: 20px"value="">
							<input id = "getcode"  class="form_button_ipt" type="button" name="button"  value="获取验证码" > 
							
				<div class="form_btn">
								<input class="btn" name="submit" type="submit" value="确定注册"  style = "background: #FF7F50;color:black;height: 35;width:300 ;margin-left: 0px;margin-top: 0px"  />
							</div>
						</form>	
							</body>
							<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"> </script>
							<script type = "text/javascript" >
							function check(){
								var pass;
								var name = document.getElementById("name").value;
								var pw = document.getElementById("pw").value;
								var confirm_pw = document.getElementById("confirm_pw").value;
								var member_mail= document.getElementById("member_mail").value;
								var code = document.getElementById("code").value;
								$.ajax({
								url:"inc/check_register.inc.php",  //验证表单的页面
								data:{"name":name,"pw":pw,"confirm_pw":confirm_pw,"member_mail":member_mail,"code":code},//传入后台
								type:"POST",//类型
								success:function(data){
									pass = data.pass;
									console.log(data);
				
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
							