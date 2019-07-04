<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='用户版块-修改';
$template['css']=array('style/public.css');
$link=connect();
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('register_module.php','error','id参数错误！');
}
$query="select * from CM_register where rID={$_GET['id']}";
$result=execute($link,$query);
if(!mysqli_num_rows($result)){
	skip('register_module.php','error','这条版块信息不存在！');
}
if(isset($_POST['submit'])){
	//验证
	$check_flag='update';
	
	$query="update CM_register set register_phone_number='{$_POST['register_phone_number']}',register_mail='{$_POST['register_mail']}' where rID='{$_GET['id']}'";
	execute($link,$query);
	if(mysqli_affected_rows($link)==1){
		skip('register_module.php','ok','修改成功！');
	}else{
		skip('register_module.php','error','修改失败,请重试！');
	}
}
if(isset($_POST['reset'])){
	//验证
	if($_GET['id']!='1'){
	$check_flag='update';
	$query="update CM_register set register_password = md5('123456') where rID='{$_GET['id']}'";
	execute($link,$query);
	if(mysqli_affected_rows($link)>=0){
		skip('register_module.php','ok','重置成功123456！');
	}else{
		skip('register_module.php','error','重置失败,！');
	}
	}else{
		skip('register_module.php','error','不可重置主管理员密码！');
	}
}
$data=mysqli_fetch_assoc($result);
?>
<?php include 'inc/header.inc.php'
//用户管理更新界面，为用户管理子界面?>

<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">编辑用户信息 - <?php echo $data['register_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>名字</td>
				<td><input name="register_name" value="<?php echo $data['register_name']?>" type="text"readonly /></td>
				<td>readonly</td>
			</tr>				
			<tr>
				<td>电话号码</td>
				<td><input name="register_phone_number" value="<?php echo $data['register_phone_number']?>" type="text" /></td>
				
			</tr><tr>
				<td>邮箱</td>
				<td><input name="register_mail" value="<?php echo $data['register_mail']?>" type="text" /></td>
				</tr>
			<tr>
				<td>用户权限</td>
				<td><input name="register_work" value="<?php echo $data['register_work']?>" type="text"  readonly></td>
				<td>
					readonly
				</td>
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="reset" value="重置密码" />
	</form>
</div>
