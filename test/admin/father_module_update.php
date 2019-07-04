<?php //课程更新
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='课程版块-修改';
$template['css']=array('style/public.css');
$link=connect();

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('father_module.php','error','id参数错误！');
}
$query="select * from CM_course where cID={$_GET['id']}";
$result=execute($link,$query);
if(!mysqli_num_rows($result)){
	skip('father_module.php','error','ID错误');
}
if(isset($_POST['submit'])){
	//验证
	$check_flag='update';
	include 'inc/check_father_module.inc.php';
	$query="update CM_course set course_name='{$_POST['course_name']}',course_type='{$_POST['course_type']}',course_college='{$_POST['course_college']}',course_school='{$_POST['course_school']}',course_introduce ='{$_POST['course_introduce']}',tID ='{$_POST['tID']}' where cID='{$_GET['id']}'";
	execute($link,$query);
	var_dump(mysqli_affected_rows($link));
	if(mysqli_affected_rows($link)>=0){
		skip('father_module.php','ok','修改成功！');
	}else{
		skip('father_module.php','error','修改失败！');
	}
}
$data=mysqli_fetch_assoc($result);
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">修改课程信息 - <?php echo $data['course_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>课程名</td>
				<td><input name="course_name" value="<?php echo $data['course_name']?>" type="text" /></td>
				
			</tr><tr>
				<td>课程号码</td>
				<td><input name="course_id" value="<?php echo $data['course_id']?>" type="text" readonly/></td>
				<td>readonly</td>
			</tr><tr>
				<td>课程类型</td>
				<td><input name="course_type" value="<?php echo $data['course_type']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>课程所属学院</td>
				<td><input name="course_college" value="<?php echo $data['course_college']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>课程所属学校</td>
				<td><input name="course_school" value="<?php echo $data['course_school']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>课程简介</td>
				<td><input name="course_introduce" value="<?php echo $data['course_introduce']?>" type="text" /></td>
				
			</tr>
			<tr>
				<td>老师编号</td>
				<td><input name="tID" value="<?php echo $data['tID']?>" type="text" /></td>
				</tr>
				<tr>
			<td>老师名字
				<td><input name="teacher_name" value="<?php $query="select * from CM_teacher where tID='{$data['tID']}'";
				    $result=execute($link,$query);
				    $T=mysqli_fetch_array($result);
				    echo  $T['teacher_name']; ?>" type="text" readonly/></td>
					
					
				</td>
				<td>readonly</td>
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
	</form>
</div>
