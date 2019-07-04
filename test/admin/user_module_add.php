<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(isset($_POST['submit'])){
	$link=connect();
	
	$check_flag='add';
if(empty($_POST['student_name'])||empty($_POST['student_number'])||empty($_POST['student_college'])||empty($_POST['student_school'])||empty($_POST['student_sex'])||empty($_POST['register_name'])){
	skip('user_module_add.php','error','请输入必填信息');
}
	
	if(1){
	    $query="select * from CM_student where student_number='{$_POST['student_number']}' or register_name={$_POST['register_name']}";
	$result=execute($link,$query);
	if(mysqli_num_rows($result)==0){
	    $S=mysqli_fetch_array($result);
	    $query="select * from CM_register where register_name={$_POST['register_name']}";
		$result=execute($link,$query);
		if(mysqli_num_rows($result)!=0){
	    $query="insert into CM_student(student_name,student_number,student_school,student_college,student_sex,register_name) values('{$_POST['student_name']}','{$_POST['student_number']}','{$_POST['student_school']}','{$_POST['student_college']}','{$_POST['student_sex']}','{$_POST['register_name']}')";
		execute($link, $query);
		skip('user_module_add.php','ok','添加成功');
		}
		else{
		skip('user_module_add.php','error','该用户不存在，请重试！');
	}
	}else{
		skip('user_module_add.php','error','学号已存在或用户已绑定学生，请重试！');
	}
}
}

$template['title']='父版块添加页';
$template['css']=array('style/public.css','style/father_module_add.css');
?>
<?php include 'inc/header.inc.php'
//学生信息管理?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">添加学生</div>
	<form method="post">
		<table class="au">
			
			
			<tr>
				<td>学生姓名</td>
				<td><input name="student_name" value="" type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>学号</td>
				<td><input name="student_number" value="" type="text" /></td>
				<td>必填，不可重复</td>
			</tr>
			<tr>
				<td>所属学校</td>
				<td><input name="student_school" value="" type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>所属学院</td>
				<td><input name="student_college" value="" type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>性别</td>
				<td><select name="student_sex">
				<option>男</option>
				<option>女</option>
				</select>
				<td>必填</td>
			</tr>
			<tr>
				<td>用户
				<td><input name="register_name" value="" type="text" /></td>
			<td>必需为已存在用户</td>
			</tr>
			
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
