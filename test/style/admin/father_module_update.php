<?php //课程更新
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='父版块-修改';
$template['css']=array('style/public.css');
$link=connect();
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}

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
	$query="update CM_course set course_name='{$_POST['course_name']}',course_id={$_POST['course_id']},course_type={$_POST['course_type']} where cID={$_GET['id']}";
	execute($link,$query);
	var_dump(mysqli_affected_rows($link));
	if(mysqli_affected_rows($link)==1){
		skip('father_module.php','ok','修改成功！');
	}else{
		skip('father_module.php','error','修改失败,请重试！');
	}
}
$data=mysqli_fetch_assoc($result);
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title" style="margin-bottom:20px;">修改课程信息 - <?php echo $data['course_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>名字</td>
				<td><input name="course_name" value="<?php echo $data['course_name']?>" type="text" /></td>
				<td>
					名字
				</td>
			</tr><tr>
				<td>课程号码</td>
				<td><input name="course_id" value="<?php echo $data['course_id']?>" type="text" /></td>
				<td>
					课程号码
				</td>
			</tr><tr>
				<td>课程类型</td>
				<td><input name="course_type" value="<?php echo $data['course_type']?>" type="text" /></td>
				<td>
					类型
				</td>
			</tr><tr>
				<td>课程所在学院</td>
				<td><input name="course_school" value="<?php echo $data['course_school']?>" type="text" /></td>
				<td>
					学院名字
				</td>
			</tr>
			<tr>
				<td>老师编号</td>
				<td><input name="tID" value="<?php echo $data['tID']?>" type="text" /></td>
				<td>
					<?php 
				    $query="select * from CM_teacher where tID={$data['tID']}";
				    $result=execute($link,$query);
				    $T=mysqli_fetch_array($result);
				    echo  '老师名字:',$T['teacher_name'];
					?>
					
				</td>
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
	</form>
</div>
