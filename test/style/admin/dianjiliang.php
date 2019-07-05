<?php 
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
			<th>报名人数</th>
			<th></th>
		</tr>
		<?php 
		if($_COOKIE['cookie']['member_id']=='院系管理员'){
		    $query="select register_work_yuanxi from CM_register where register_name='{$_COOKIE['cookie']['name']}'";
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);

		    $query="select * from CM_course where course_college='{$M['register_work_yuanxi']}'";
		    $result=execute($link,$query);
		    while ($data=mysqli_fetch_assoc($result)){
		        
		        $url=urlencode("father_module_delete.php?id={$data['cID']}");
		        $return_url=urlencode($_SERVER['REQUEST_URI']);
		        $message="你真的要删除这门课 {$data['course_name']} 吗？";
		        $delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
		        $html=<<<A
			<tr>
				<td>{$data['cID']}</td>
				<td>{$data['course_name']}</td>
				<td>{$data['course_student_count']}</td>
				<td><a href="#?id={$data['cID']}">[详细信息]</a></td>
			</tr>
A;
		
		        echo $html;}
		}
		?>
	</table>
	
	</form>
</div>
