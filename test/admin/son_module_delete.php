<?php 
//老师信息删除
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('son_module.php','error','id参数错误！');
}
$link=connect();

$query="delete from CM_teacher where tID={$_GET['id']}";
execute($link,$query);
if(mysqli_affected_rows($link)==1){
	skip('son_module.php','ok','恭喜你删除成功！');
}else{
	skip('son_module.php','error','对不起删除失败，请重试！');
}
?>