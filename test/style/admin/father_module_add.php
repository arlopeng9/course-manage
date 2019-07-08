<?php 
//校园课程增添代码：课程录入
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
if(empty($_COOKIE['cookie']['name'])){
    skip('../login.php', 'error', '给我去登陆');
}

if(isset($_POST['submit'])){
	$link=connect();
	//验证用户填写的信息
	//校园课程有关
	$check_flag='add';
	if(empty($_POST['teacher_name'])||empty($_POST['course_id'])||empty($_POST['course_name'])){
		skip('father_module_add.php','error','请输入必填信息！');
	}
	$query ="select * from CM_course where course_id = '{$_POST['course_id']}'";
	$result= execute($link,$query);
	if(mysqli_num_rows($result)==0){
	$query="select * from CM_teacher where teacher_name ='{$_POST['teacher_name']}'";
	$result=execute($link,$query);
	
	if(mysqli_num_rows($result)==0){
	$query="insert into CM_teacher(teacher_name) values('{$_POST['teacher_name']}')";
	$result=execute($link,$query);
	}
	$query="select * from CM_teacher where teacher_name='{$_POST['teacher_name']}'";
	$result=execute($link,$query);
	if(mysqli_num_rows($result)==1){
	  
	    $S=mysqli_fetch_array($result);
	    
	    $query="insert into CM_course(course_id,course_name,course_type,course_school,course_college,tID) values('{$_POST['course_id']}','{$_POST['course_name']}','{$_POST['course_type']}','{$_POST['course_school']}','{$_POST['course_college']}','{$S['tID']}')";
    execute($link, $query);
	    
	}else{
		skip('father_module_add.php','error','对不起，添加失败，请重试！');
	}
}else{
	skip('father_module_add.php','error','课程号重复，请重新输入！');
}
}

$template['title']='父版块添加页';
$template['css']=array('style/public.css','style/father_module_add.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">添加课程版块</div>
	<form method="post">
		<table class="au">
			<tr>
				<td>
					课程号
				</td>
				<td><input name="course_id" type="text" /></td>
				<td>必填且不可重复</td>
			</tr>
			<tr>
				<td>
					课程名字
				</td>
				<td><input name="course_name"  type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>
					课程类型
				</td>
				<td><input name="course_type"  type="text" /></td>
				<td>
					可空
				</td>
			</tr>
			<tr>
				<td>
					老师名字
				</td>
				<td><input name="teacher_name"  type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>
					课程所属学校
				</td>
				<td><input name="course_school"  type="text" /></td>
				<td>
					可空
				</td>
			</tr>
			<tr>
				<td>课程所属学院</td>
				<td><input name="course_college"  type="text" /></td>
				<td>
					可空
				</td>
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
