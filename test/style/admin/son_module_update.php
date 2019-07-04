<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$template['title']='老师版块-修改';
$template['css']=array('style/public.css');
$link=connect();
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('son_module.php','error','id参数错误！');
}
$query="select * from CM_teacher where tID={$_GET['id']}";
$result=execute($link,$query);
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
if(!mysqli_num_rows($result)){
	skip('son_module.php','error','这条版块信息不存在！');
}
if(isset($_POST['submit'])){
	//验证
	$check_flag='update';
	include 'inc/check_son_module.inc.php';
	$query="update CM_teacher set teacher_name='{$_POST['teacher_name']}',teacher_introduce='{$_POST['teacher_introduce']}',teacher_totalScore='{$_POST['teacher_totalScore']}' where tID='{$_GET['id']}'";
	execute($link,$query);
	var_dump(mysqli_affected_rows($link));
	if(mysqli_affected_rows($link)==1){
		skip('son_module.php','ok','修改成功！');
	}else{
		skip('son_module.php','error','修改失败,请重试！');
	}
}
$data=mysqli_fetch_assoc($result);
?>
<?php include 'inc/header.inc.php'
//老师信息更改?>
<div id="main" style = "margin-left:250px">
	<div class="title" style="margin-bottom:20px;">修改老师信息 - <?php echo $data['teacher_name']?></div>
	<form method="post">
		<table class="au">
			<tr>
				<td>名字</td>
				<td><input name="teacher_name" value="<?php echo $data['teacher_name']?>" type="text"readonly /></td>
				<td>readonly
			</tr><tr>
				<td>简介</td>
				<td><input name="teacher_introduce" value="<?php echo $data['teacher_introduce']?>" type="text" /></td>
			
			</tr><tr>
				<td>老师评分</td>
				<td><input name="teacher_totalScore" value="<?php echo $data['teacher_totalScore']?>" type="text" /></td>
				
			
			
			
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
	</form>
</div>
