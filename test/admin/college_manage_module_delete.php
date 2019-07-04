<?php
//校园管理权限撤除的父板块，相应会显示剥夺权利的界面

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
$template['title']='院系管理员权限剥夺版块';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<?php include 'inc/fengye_header.php'
//分页?>
<div id="main" style = "margin-left:250px">
	<div class="title">院系管理员权限剥夺</div>
	<form method="post">
	<table id="blocks" class="list" style="margin-top:25px;width:500px;table-layout:fixed">
		<tr>
			<th>序号</th>	 	 	
			<th>用户名</th>
			<th>权限</th>
			<?php if($_COOKIE['cookie']['name'] == '123123') echo'<th>操作</th>'
			?>
		</tr>
		<?php 
		$query="select * from CM_register where register_work='院系管理员'";
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
		
				<td><a href="$college_manage_delete_url">[撤除院系管理员权限]</a></td>
			
A;
				 if($_COOKIE['cookie']['name'] == '123123')echo $html;
				 
		
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
