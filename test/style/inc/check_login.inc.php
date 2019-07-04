<?php
include_once 'tool.inc.php';
if(empty($_POST['name'])){
	skip('login.php', 'error', '用户名不得为空！');
}

if(empty($_POST['pw'])){
	skip('login.php', 'error', '密码不得为空！');
}


if(isset($_POST['submit'])){
    if($_POST['member_id']=='管理员' or $_POST['member_id']=='院系管理员' ){	escape($link,$_POST);
	$query="select * from CM_register where register_name='{$_POST['name']}' and register_password=md5('{$_POST['pw']}') and register_work='{$_POST['member_id']}'";
	$result=execute($link, $query);
	if(mysqli_num_rows($result)==1){
	    $S=mysqli_fetch_array($result);
		setcookie('cookie[name]',$_POST['name'],time()+3600);
	
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]',$_POST['member_id'] ,time()+3600);
		
		
		skip('/test/admin/father_module.php','ok','登录成功！');
        
    }
    }else{
	escape($link,$_POST);
	$query="select * from CM_register where register_name='{$_POST['name']}' and register_password =md5('{$_POST['pw']}') and register_work='{$_POST['member_id']}' ";
	$result=execute($link, $query);
	if(mysqli_num_rows($result)==1){
	    $S=mysqli_fetch_array($result);
		setcookie('cookie[name]',$_POST['name'],time()+3600);
		
		setcookie('cookie[pw]',sha1(md5($_POST['pw'])) ,time()+3600);
		setcookie('cookie[member_id]',$_POST['member_id'] ,time()+3600);
		
		skip('index.php','ok','登录成功！');
	}else{
		skip('login.php', 'error', '用户名或密码填写错误！');
	}
    }
}
?>