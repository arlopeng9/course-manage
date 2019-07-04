<?php //课程操作界面：课程操作
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='父版块列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title">父版块列表</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>排序</th>	 	 	
			<th>课程名字</th>
			<th>操作</th>
		</tr>
		<?php 
		$query="select * from CM_course";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("father_module_delete.php?id={$data['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这门课 {$data['course_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td><input class="sort" type="text" name="sort[{$data['cID']}]" value="{$data['cID']}" /></td>
				<td>{$data['course_name']}[id:{$data['cID']}]</td>
				<td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="father_module_update.php?id={$data['cID']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
	</table>
	
	</form>
</div>
