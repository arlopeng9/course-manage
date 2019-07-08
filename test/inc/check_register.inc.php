<?php 

if(empty($_POST['name'])){
	skip('register.php', 'error', '用户名不得为空！');
}
if(mb_strlen($_POST['name'])>32){
	skip('register.php', 'error', '用户名长度不要超过32个字符！');
}
if(mb_strlen($_POST['pw'])<6){
	skip('register.php', 'error','密码不得少于6位！');
}
if($_POST['pw']!=$_POST['confirm_pw']){
	skip('register.php', 'error','两次密码输入不一致！');
}
if(empty($_POST['member_mail']))
{
	skip('register.php', 'error', '邮箱不得为空！');
}
$_POST=escape($link,$_POST);

$query="select * from CM_register where register_name='{$_POST['name']}'";
$result=execute($link, $query);
if(mysqli_num_rows($result)){
    skip('register.php', 'error', '这个账号已经被别人注册了！');
}
/*注册条件控制部分问题部分（判断验证码正确与否）
if(!isset($_POST['button'])){
	skip('register.php', 'error', '未获取验证码！');
}else{
	if($_POST['code'] != $out){
		skip('register.php', 'error', '验证码错误！');
	}
}
*/
?>