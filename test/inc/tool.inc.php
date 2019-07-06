<?php 
function skip($url,$pic,$message){
$html=<<<A
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="3;URL={$url}" />
<title>正在跳转中</title>
<link rel="stylesheet" type="text/css" href="style/remind.css" />
</head>
<body>
<div class="notice"><span class="pic {$pic}"></span> {$message} <a href="{$url}">3秒后自动跳转中!</a></div>
</body>
</html>
A;
echo $html;
exit();
}
function skipto($url,$pic,$message){
    $html=<<<A
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="0;URL={$url}" />
<title>正在跳转中</title>
<link rel="stylesheet" type="text/css" href="style/remind.css" />
</head>
<body>
<div class="notice"><span class="pic {$pic}"></span> {$message} <a href="{$url}">0秒后自动跳转中!</a></div>
</body>
</html>
A;
    echo $html;
    exit();
}
function is_login($link){
	if(isset($_COOKIE['cookie']['name']) && isset($_COOKIE['cookie']['pw'])){
		$query="select * from CM_register where register_name='{$_COOKIE['cookie']['name']}' and sha1(register_password)='{$_COOKIE['cookie']['pw']}' and register_work='{$_COOKIE['cookie']['member_id']}'";
		$result=execute($link,$query);
		
		if(mysqli_num_rows($result)==1){
			$data=mysqli_fetch_assoc($result);
			return $data['rID'];
		}else{
			return false;
		}
	}else{
		return false;
	}
}
?>