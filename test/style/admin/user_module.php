<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='父版块列表页';
$template['css']=array('style/public.css');
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title">学生版块列表</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>序号</th>	 	 	
			<th>学生名字</th>
			<th>操作</th>
		</tr>
		<?php 
		$query="select * from CM_student";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("user_module_delete.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这位学生 {$data['student_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td>{$data['rID']}</td>
				<td>{$data['student_name']}</td>
				<td><a href="user_module_update.php?id={$data['rID']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
	</table>
	
	</form>
</div>
