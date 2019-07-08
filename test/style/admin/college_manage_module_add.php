<?php //校园管理权限添加
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';

$template['title']='授予院系管理员员权限';
$template['css']=array('style/public.css');
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('register_module.php','error','id参数错误！');
}
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
$link=connect();


if(1){
    $query="select * from CM_register where rID={$_GET['id']}";
    $result=execute($link,$query);
    $S=mysqli_fetch_array($result);
  if($_COOKIE['cookie']['name']!='123123'){
    if($S['register_work']=='管理员'){
        
        skip('register_module.php','error','权限不足');
        
    }}
    if(1){$query="update CM_register set register_work ='院系管理员' where rID={$_GET['id']}";
    execute($link,$query);}
	skip('register_module.php','ok','授权成功！');
}else{
	skip('register_module.php','error','授权失败，请重试！');
}
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title" style="margin-bottom:20px;">授予院系管理员权限 - <?php echo $S['register_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>管理学院</td>
				<td><select name="college_manage_type">
				<option>计算机学院</option>
				<option>网络安全学院</option>
				</select>
				
			</tr>
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="授予" />
	</form>
</div>
