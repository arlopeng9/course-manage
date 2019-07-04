<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';

if(isset($_POST['submit'])){
	$link=connect();
	//验证用户填写的信息
	//校园课程有关
	$check_flag='add';
	if(empty($_POST['teacher_name'])){
		skip('son_module_add.php','error','请输入必填信息！');
	}
	if(1){
	$query="select * from CM_teacher where teacher_name='{$_POST['teacher_name']}'";
	$result=execute($link,$query);
	var_dump(mysqli_num_rows($result));
	if(mysqli_num_rows($result)==0){
	    $S=mysqli_fetch_array($result);
	    $query="insert into CM_teacher(teacher_name,teacher_introduce,teacher_totalScore) values('{$_POST['teacher_name']}','{$_POST['teacher_introduce']}','{$_POST['teacher_totalScore']}')";
		execute($link, $query);
		skip('son_module_add.php','ok','添加成功');
	}else{
		skip('son_module_add.php','error','老师已录入，无法重新添加！');
	}
}
}

$template['title']='父版块添加页';
$template['css']=array('style/public.css','style/father_module_add.css');
?>
<?php include 'inc/header.inc.php'
//老师信息录入?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">添加老师</div>
	<form method="post">
		<table class="au">
			
			
			<tr>
				<td>老师名字</td>
				<td><input name="teacher_name"  type="text" /></td>
				<td>必填</td>
			</tr>
			<tr>
				<td>简介</td>
				<td><input name="teacher_introduce" value="" type="text" /></td>
				
			</tr>
			<tr>
				<td>老师评分</td>
				<td><input name="teacher_totalScore" value="" type="text" /></td>
				
			</tr>
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
