<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('register_module.php','error','id参数错误！');
}
$link=connect();

$query="select * from CM_recommend where cID ='{$_GET['id']}'";
$result=execute($link,$query);

if(mysqli_fetch_assoc($result)!=0){
    $query="delete from CM_recommend where cID='{$_GET['id']}'";
    $result=execute($link,$query);

    skip('tuisong.php','ok','删除推送成功！');
}else{
    skip('tuisong.php','error','删除失败，请重试！');
}
?>