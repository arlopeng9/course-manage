
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);

$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
?>




<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<HTML>
<HEAD>
    <META CHARSET="UTF-8">

</HEAD>

<body class="bg-white" data-bg-color="bg-white">

<div id="main">
	<div class="title">选课</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>课程序号</th>	 	 	
			<th>名字</th>
			<th>任课老师</th>
			
			<th>操作</th>
		</tr>
		<?php 
		$query="select * from CM_course";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
		    
			$url=urlencode("xuanze_add.php?id={$data['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$data['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		
			
$html=<<<A
			<tr>
				<td><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}" /></td>
				<td>{$data['course_name']}[id:{$data['cID']}]</td>
				<td>{$data['tID']}[id:{$data['cID']}]</td>
				
				<td><a href="javascript:course();">[查看详细]</a>&nbsp;&nbsp;<a href="$add_url">[选课]</a></td>
			</tr>
				
A;
			echo $html;
		}
		?>
	</table>
	
	</form>
</div>
    	



</body>
</HTML>


