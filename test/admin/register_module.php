<?php
//用户信息

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();

$template['title']='用户版块列表';
$template['css']=array('style/public.css');
if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
?>
<?php include 'inc/header.inc.php'
//用户管理界面?>
<?php include 'inc/fengye_header.php'
//带有分页功能的头部?>
<body class="layui-view-body">
	    <div class="layui-content">
        <div class="layui-page-header">
           
        </div>
            </div>
    <script src="../assets/layui.all.js"></script>
    
<div id="main" style = "margin-left:250px">
	<div class="title">用户版块列表</div>
	<form method="post">
	  <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">用户名:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input  type="text" name="search"autocomplete="off" value="<?php if(!isset($_POST['submit2'])){$_POST['search']=NULL;}else{echo $_POST['search']=$_POST['search'];}?>" class="layui-input" >
                                </div>

                                <button class="layui-btn layui-btn-blue" name = "submit2">查询</button>
                                 <button class="layui-btn layui-btn-blue" name = "submit3" onclick="href='register_module.php'"> 返回</button>
                            </div>
                        </div>
    <div class="container">
	<table id="blocks" class="list" style="margin-top:25px;width:1000px;table-layout:fixed">
		<tr>
			<th>序号</th>	 	 	
			<th>用户名</th>
			<th>权限</th>
			<?php if($_COOKIE['cookie']['name'] == '123123') echo'<th>操作</th>'
			?>
		</tr>
		<?php if(isset($_POST['submit2'])){
		    $S=$_POST['search'];
		$query="select * from CM_register where register_name like '%{$_POST['search']}%'";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("register_module_delete.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这位用户 {$data['register_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
			$url=urlencode("manage_module_add.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要授予管理员权限 {$data['register_name']} 吗？";
			$manage_url="confirm.php?url={$url}&return_url={$return_url}&message={$message})";
			
			$url=urlencode("college_manage_module_add.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要授予院系管理员权限 {$data['register_name']} 吗？";
			$college_manage_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td>{$data['rID']} </td>
				<td>{$data['register_name']}</td>
				<td>{$data['register_work']}</td>
A;
			echo $html;
$html=<<<A
		
				<td>&nbsp;<a href="register_module_update.php?id={$data['rID']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a>;&nbsp;<a href="$manage_url">[授予管理员权限];&nbsp;<a href="$college_manage_url">[授予院系管理员权限]</a></td>
			
A;
				 if($_COOKIE['cookie']['name'] == '123123')echo $html;
				 
		}}else{
		$query="select * from CM_register";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("register_module_delete.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除这位用户 {$data['register_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
			$url=urlencode("manage_module_add.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要授予管理员权限 {$data['register_name']} 吗？";
			$manage_url="confirm.php?url={$url}&return_url={$return_url}&message={$message})";
			
			$url=urlencode("college_manage_module_add.php?id={$data['rID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要授予院系管理员权限 {$data['register_name']} 吗？";
			$college_manage_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td>{$data['rID']} </td>
				<td>{$data['register_name']}</td>
				<td>{$data['register_work']}</td>
A;
			echo $html;
$html=<<<A
		
				<td>&nbsp;<a href="register_module_update.php?id={$data['rID']}">[编辑]</a>&nbsp;&nbsp;<a href="$delete_url">[删除]</a>;&nbsp;<a href="$manage_url">[授予管理员权限];&nbsp;<a href="$college_manage_url">[授予院系管理员权限]</a></td>
			
A;
				 if($_COOKIE['cookie']['name'] == '123123')echo $html;
				 
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
    </body> 

