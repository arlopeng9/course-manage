<?php

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='父版块列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<?php include 'inc/fengye_header.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title">学生版块列表</div>
	<form method="post">
	<div class="layui-inline">
                                <div class="layui-form-mid">学生姓名或学号或者账号:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input  type="text" name="search"autocomplete="off" value="<?php if(!isset($_POST['submit2'])){$_POST['search']=NULL;}else{echo $_POST['search']=$_POST['search'];}?>" class="layui-input" >
                                </div>

                                <button class="layui-btn layui-btn-blue" name = "submit2">查询</button>
                                 <button class="layui-btn layui-btn-blue" name = "submit3" onclick="href='register_module.php'"> 返回</button>
                            </div>
	<table id="blocks" class="list" style="margin-top:25px;width:500px;table-layout:fixed">
		<tr>
			<th>序号</th>	 	 	
			<th>学生名字</th>
			<th>操作</th>
		</tr>
		<?php 
		if(isset($_POST['submit2'])){
		    $query="select * from CM_student where student_name like '%{$_POST['search']}%' or student_number like  '%{$_POST['search']}%'";
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
		}}else{
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
		}}
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