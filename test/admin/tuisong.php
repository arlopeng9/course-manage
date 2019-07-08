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
			<th>推送状态</th>
			<th>操作</th>
		</tr>
		<?php if($_COOKIE['cookie']['member_id']=='管理员'){
// 		$query="select * from CM_course";
// 		$result=execute($link,$query);
// 		while ($data=mysqli_fetch_assoc($result)){
// 			$url=urlencode("tuisong_delete.php?id={$data['cID']}");
// 			$return_url=urlencode($_SERVER['REQUEST_URI']);
// 			$message="你真的要删除这门课 {$data['course_name']} 吗？";
// 			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
// $html=<<<A
// 			<tr>
// 				<td>{$data['cID']}</td>
// 				<td>{$data['course_name']}</td>
// 				<td></td>
// 				<td><a href="father_module_update.php?id={$data['cID']}">[编辑]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
// 			</tr>
// A;

// 			echo $html;}
// 		}
		}
		if($_COOKIE['cookie']['member_id']=='院系管理员'){
		    $query="select register_work_yuanxi from CM_register where register_name='{$_COOKIE['cookie']['name']}'";
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);

		    $query="select * from CM_course where course_college='{$M['register_work_yuanxi']}'";
		    $result=execute($link,$query);
		    while ($data=mysqli_fetch_assoc($result)){
		        $query="select * from CM_recommend where cID='{$data['cID']}'";
		        $result3=execute($link,$query);
		        $M=mysqli_fetch_array($result3);
		        if($M['cID']){
		            $S='是';
		        }else{$S='否';}
		        
		        $url=urlencode("tuisong_delete.php?id={$data['cID']}");
		        $return_url=urlencode($_SERVER['REQUEST_URI']);
		        $message="你真的要删除这门课 {$data['course_name']} 吗？";
		        $delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
		        $url=urlencode("tuisong_add.php?id={$data['cID']}");
		        $return_url=urlencode($_SERVER['REQUEST_URI']);
		        $message="你真的要推送这门课 {$data['course_name']} 吗？";
		        $add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
		        $html=<<<A
			<tr>
				<td>{$data['cID']}</td>
				<td>{$data['course_name']}</td>
				<td>{$S}</td>
				<td><a href="$add_url">[优先推送]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="$delete_url">[撤除优先推送]</a></td>
			</tr>
A;
		
		        echo $html;}
		}
		?>
	</table>
	
	</form>
</div>
