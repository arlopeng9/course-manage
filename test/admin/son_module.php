<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='老师版块列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'
//老师操作：老师修改?>
<?php include 'inc/fengye_header.php'
//分页?>
<div id="main" style = "margin-left:250px">
	<div class="title">老师版块列表</div>
	<form method="post">
	<table id="blocks" class="list" style="margin-top:25px;width:1000px;table-layout:fixed">
		<tr>
			<th>序号</th>	 	 	
			<th>老师名字</th>
			<th>操作</th>
		</tr>
		<?php 
		$query="select * from CM_teacher";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("son_module_delete.php?id={$data['tID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这位老师 {$data['teacher_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td>{$data['tID']}" </td>
				<td>{$data['teacher_name']}</td>
				<td><a href="son_module_update.php?id={$data['tID']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
	</table>
		  <div id="pagiDiv" align="left" style="width:1200px">
        <span id="spanFirst">First</span>  
        <span id="spanPre">Pre</span>  
        <span id="spanNext">Next</span>  
        <span id="spanLast">Last</span>  
        The <span id="spanPageNum"></span> Page/Total <span id="spanTotalPage"></span> Page
    </div>
	
	</form>
</div>
