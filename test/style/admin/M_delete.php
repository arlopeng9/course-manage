<?php //管理员权限删除
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('register_module.php','error','id参数错误！');
}
$link=connect();



if(1){
    $query="select * from CM_register where rID={$_GET['id']}";
    $result=execute($link,$query);
    $S=mysqli_fetch_array($result);
  
   
    if(1){$query="update CM_register set register_work ='学生' where rID={$_GET['id']}";
    execute($link,$query);}
	skip('college_manage_module_delete.php','ok','授权成功！');
}else{
	skip('register_module.php','error','授权失败，请重试！');
}
?>