<?php
header('content-type: application/json');
include_once 'config.inc.php';
include_once 'mysql.inc.php';
include_once 'tool.inc.php';
$link=connect();
$member_id=is_login($link);
if($member_id){
   echo json_encode(array('ok'=>false, 'msg'=>'你已经登录，请不要重复登录！'),JSON_UNESCAPED_UNICODE);
}

if($_POST['member_id']=='管理员' or $_POST['member_id']=='院系管理员' ){	
	escape($link,$_POST);
	$query="select * from CM_register where register_name='{$_POST['name']}' and register_password=md5('{$_POST['pw']}') and register_work='{$_POST['member_id']}'";
	$result=execute($link, $query);
	if(mysqli_num_rows($result)==1){
	    $S=mysqli_fetch_array($result);
		setcookie('cookie[name]',$_POST['name'],time()+3600);
	
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]',$_POST['member_id'] ,time()+3600);
		
		
		 echo json_encode(array('ok'=>true, 'msg'=>'登陆成功！'),JSON_UNESCAPED_UNICODE);
	}else{
			echo json_encode(array('ok'=>false, 'msg'=>'信息填写错误！'),JSON_UNESCAPED_UNICODE);
	}
    
    }else {
	escape($link,$_POST);
	$query="select * from CM_register where register_name='{$_POST['name']}' and register_password =md5('{$_POST['pw']}') and register_work='{$_POST['member_id']}' ";
	$result=execute($link, $query);
	if(mysqli_num_rows($result)==1){
	    $S=mysqli_fetch_array($result);
		setcookie('cookie[name]',$_POST['name'],time()+3600);
		
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]',$_POST['member_id'] ,time()+3600);
		
		 echo json_encode(array('ok'=>true, 'msg'=>'登陆成功！'),JSON_UNESCAPED_UNICODE);
	}else{
		echo json_encode(array('ok'=>false, 'msg'=>'信息填写错误！'),JSON_UNESCAPED_UNICODE);
	}
    }

?>