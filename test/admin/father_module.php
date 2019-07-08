<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
$template['title']='课程板块';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<?php include 'inc/fengye_header.php'?>
<div id="main" style = "margin-left:250px">

	<div class="title">课程版块列表</div>
	<form method="post">
		  <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">课程信息（名字，类型，学院）:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input  type="text" name="search"autocomplete="off" value="<?php if(!isset($_POST['submit2'])){$_POST['search']=NULL;}else{echo $_POST['search']=$_POST['search'];}?>" class="layui-input" >
                                </div>

                                <button class="layui-btn layui-btn-blue" name = "submit2">查询</button>
                                 <button class="layui-btn layui-btn-blue" name = "submit3" onclick="href='register_module.php'"> 返回</button>
                            </div>
                        </div>
    <div class="container">
	<table id="blocks" class="list" style="margin-top:25px;width:800px;table-layout:fixed">
		<tr>
			<th style="width:40px">排序</th>	 	 	
			<th>课程名字</th>
			<th>操作</th>
		</tr>
		<?php 
		if(isset($_POST['submit2'])){
		    $S=$_POST['search'];
		    $query="select * from CM_course where course_name like '%{$_POST['search']}%' or course_type like  '%{$_POST['search']}%'or course_college like  '%{$_POST['search']}%'";
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
				<td><a href="father_module_update.php?id={$data['cID']}">[编辑]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
		    
		        echo $html;
		    }
		}else{
		$query="select * from CM_course";
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
				<td><a href="father_module_update.php?id={$data['cID']}">[编辑]</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="$delete_url">[删除]</a></td>
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
	</div>
	</form>
</div>
