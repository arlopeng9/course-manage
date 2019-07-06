<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='学生版块-修改';
$template['css']=array('style/public.css');
$link=connect();
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('user_module.php','error','id参数错误！');
}
$query="select * from CM_student where rID={$_GET['id']}";
$result=execute($link,$query);
if(!mysqli_num_rows($result)){
	skip('user_module.php','error','这条版块信息不存在！');
}
if(isset($_POST['submit'])){
	//验证
	$check_flag='update';
	include 'inc/check_son_module.inc.php';
	$query="select * from CM_student where register_name={$_POST['register_name']}";
	$result=execute($link,$query);
	var_dump(mysqli_num_rows($result));
	if(mysqli_num_rows($result)==0){
	$query="update CM_student set student_name='{$_POST['student_name']}',student_school='{$_POST['student_school']}',student_number='{$_POST['student_number']}',student_school='{$_POST['student_school']}',student_number='{$_POST['student_number']}',student_college='{$_POST['student_college']}',student_sex='{$_POST['student_sex']}',register_name='{$_POST['register_name']}' where rID='{$_GET['id']}'";
	execute($link,$query);
	var_dump(mysqli_affected_rows($link));
	if(mysqli_affected_rows($link)==1){
		skip('user_module.php','ok','修改成功！');
	}else{
		skip('user_module.php','error','修改失败,请重试！');
	}
	}else{
		skip('user_module.php','error','该用户已绑定其他学生！');
	}
	
}

$data=mysqli_fetch_assoc($result);
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">修改学生信息 - <?php echo $data['student_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>学生姓名</td>
				<td><input name="student_name" value="<?php echo $data['student_name']?>" type="text" /></td>
			</tr>
			<tr>
				<td>学号</td>
				<td><input name="student_number" value="<?php echo $data['student_number']?>" type="text" readonly/></td>
				<td>readonly</td>
			</tr>
			<tr>
				<td>所属学校</td>
				<td><input name="student_school" value="<?php echo $data['student_school']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>所属学院</td>
				<td><input name="student_college" value="<?php echo $data['student_college']?>" type="text" /></td>

			</tr><tr>
				<td>性别</td>
				<td><input name="student_sex" value="<?php echo $data['student_sex']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>用户名</td>
				<td><input name="register_name" value="<?php echo $data['register_name']?>" type="text" /></td>
				
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
	</form>
</div>
