<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('user_module.php','error','id参数错误！');
}
$link=connect();

$query="delete from CM_student where rID={$_GET['id']}";
execute($link,$query);
if(mysqli_affected_rows($link)==1){
	skip('user_module.php','ok','恭喜你删除成功！');
}else{
	skip('user_module.php','error','对不起删除失败，请重试！');
}
?>