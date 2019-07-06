<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('class1.php','error','id参数错误！');
}
$link=connect();

$member_id=is_login($link);
var_dump($_COOKIE['cookie']['name']);
if(!isset($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
$query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
$result=execute($link,$query);
$S=mysqli_fetch_array($result);
if(empty($S['student_number'])){
    skip('xueji.php', 'error', '请先注册学籍');
}
if(1){
	$query="delete from CM_student_course where cID='{$_GET['id']}' and student_number='{$S['student_number']}'";
$result=execute($link,$query);
$query="select course_student_count from CM_course where cID='{$_GET['id']}'";
$result=execute($link,$query);
$M=mysqli_fetch_array($result);
$query="update CM_course set course_student_count='{$M['course_student_count']}'-1 where cID='{$_GET['id']}' ";
$result=execute($link,$query);
skip('class1.php','ok','成功');
}
?>