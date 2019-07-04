<?php 
header('content-type: application/json');
include_once 'tool.inc.php';
include_once 'mysql.inc.php';
include_once 'config.inc.php';

$link=connect();
$member_id=is_login($link);
$a = false;
$b = null;
function check_register(&$a,&$b,&$link){
if(empty($_POST['name'])){
	$b = "用户";
	return false;
}else if(mb_strlen($_POST['name'])>32){
	$b = "用户长度";
	return false;
}
else if(mb_strlen($_POST['pw'])<6){
	$b = "密码长度";
	return false;
}
else if($_POST['pw']!=$_POST['confirm_pw']){
	$b = "重复密码";
	return false;
}
else if(empty($_POST['member_mail']))
{
	$b = "邮箱";
	return false;
}else if(empty($_POST['code']))
{
	$b = "验证码";
	return false;
}
$_POST=escape($link,$_POST);
$query="select * from CM_register where register_name='{$_POST['name']}'";
$result=execute($link, $query);
if(mysqli_num_rows($result)>=1){
	$b = "重复注册";
	return false;
}
return true;
}

if(check_register($a,$b,$link)){


    $_POST=escape($link,$_POST);
    $query="insert into CM_register(register_name,register_password,register_mail,register_work) values('{$_POST['name']}',md5('{$_POST['pw']}'),'{$_POST['member_mail']}','学生')";
    execute($link, $query);
    if(mysqli_affected_rows($link)==1){
			$a = true;
			$b = "成功";
    }
	$ret = array(
            "pass"=>$a,
			"type"=>$b
        );
	echo json_encode($ret,JSON_UNESCAPED_UNICODE);
}else{
	$ret = array(
            "pass"=>$a,
			"type"=>$b
        );
	echo json_encode($ret,JSON_UNESCAPED_UNICODE );
}

?>