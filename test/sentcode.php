<?php
	$a = $_POST['member_mail'];    //获取目标邮箱
	$c = exec("python E:/PHP/htdocs/test/python/verification_code.py {$a}",$out,$res);//调用python包
	$d = $out[0];
	echo json_encode(array("a"=>$d),JSON_UNESCAPED_UNICODE );;
?>