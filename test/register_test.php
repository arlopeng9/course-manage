<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once 'PHPMailer-master/src/PHPMailer.php';
include_once 'PHPMailer-master/src/Exception.php';
include_once 'PHPMailer-master/src/SMTP.php';
 function email(){
        $email='2483751174@qq.com';//获取收件人邮箱
        //return $email;
        $sendmail = '1787760808@qq.com'; //发件人邮箱
        $sendmailpswd = "oyunvscsddxjfabd"; //客户端授权密码,而不是邮箱的登录密码，就是手机发送短信之后弹出来的一长串的密码
        $send_name = 'lh';// 设置发件人信息，如邮件格式说明中的发件人，
        $toemail = $email;//定义收件人的邮箱
        $to_name = 'hl';//设置收件人信息，如邮件格式说明中的收件人
        $mail = new PHPMailer();
        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = "smtp.qq.com";// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = $sendmail;//// 发送方的
        $mail->Password = $sendmailpswd;//客户端授权密码,而不是邮箱的登录密码！
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式
        $mail->Port = 465;//  qq端口465或587）
        $mail->setFrom($sendmail, $send_name);// 设置发件人信息，如邮件格式说明中的发件人，
        $mail->addAddress($toemail, $to_name);// 设置收件人信息，如邮件格式说明中的收件人，
        $mail->addReplyTo($sendmail, $send_name);// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
        $mail->Subject = "这里是邮件标题";// 邮件标题

        $code=rand(100000,999999);
        //return $code."----".session("code");
        $mail->Body = "邮件内容是 <b>您的验证码是：$code</b>，如果非本人操作无需理会！";// 邮件正文
        //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
        if (!$mail->send()) { // 发送邮件
            echo "Message could not be sent.";
            echo "Mailer Error: " . $mail->ErrorInfo;// 输出错误信息
        } else {
            return “发送成功”;
        }
    }
if(!isset($_POST['submit'])){
	$a = email();
	
}

?>
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