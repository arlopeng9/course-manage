<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('register_module.php','error','id参数错误！');
}
$link=connect();

if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}

if(1){
    $query="select * from CM_register where rID={$_GET['id']}";
    $result=execute($link,$query);
    $S=mysqli_fetch_array($result);
  
    if($S['register_work']=='管理员' or $S['register_work']=='院系管理员'){
        skip('register_module.php','error','权限不足');
        
    }
    if(1){$query="delete from CM_register where rID={$_GET['id']}";
    execute($link,$query);}
	skip('register_module.php','ok','恭喜你删除成功！');
}else{
	skip('register_module.php','error','对不起删除失败，请重试！');
}
?>