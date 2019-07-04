<?php
//管理员权限删除

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='管理员权限剥夺版块列表';
$template['css']=array('style/public.css');
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title">管理员权限剥夺</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>序号</th>	 	 	
			<th>用户名</th>
			<th>权限</th>
			<?php if($_COOKIE['cookie']['name'] == '123123') echo'<th>操作</th>'
			?>
		</tr>
		<?php 
		$query="select * from CM_register where register_work='管理员'";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("CM_delete.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这位用户 {$data['register_name']}的权限 吗？";
			$college_manage_delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
			
$html=<<<A
			<tr>
				<td>{$data['rID']}</td>
				<td>{$data['register_name']}</td>
				<td>{$data['register_work']}</td>
			
A;
			echo $html;
			$html=<<<A
		
				<td><a href="$college_manage_delete_url">[撤除管理员权限]</a></td>
			
A;
				 if($_COOKIE['cookie']['name'] == '123123')echo $html;
				 
		}
		?>
		</tr>
	</table>
	
	</form>
</div>
