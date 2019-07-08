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
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../assets/css/layui.css">
    <link rel="stylesheet" href="../assets/css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <title>管理后台</title>
</head>
<body class="layui-view-body">
	    <div class="layui-content">
        <div class="layui-page-header">
            <div class="pagewrap">
                <span class="layui-breadcrumb">
                  <a href="">首页</a>
                  <a href="">用户</a>
                  <a><cite>用户组</cite></a>
                </span>
                <h2 class="title">用户组</h2>
            </div>
        </div>
        <div class="layui-row" style = "margin-left:250px">
            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="form-box">
                        <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">用户名:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input type="text" autocomplete="off" class="layui-input" >
                                </div>

                                <button class="layui-btn layui-btn-blue" name = "submit">查询</button>
                            </div>
                        </div>
                        <button class="layui-btn layui-btn-blue"><i class="layui-icon">&#xe654;</i>新增</button>
                        <table id="demo"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/layui.all.js"></script>
    
<div id="main" style = "margin-left:250px">
	<div class="title">用户版块列表</div>
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
				 
		}
		?>

</tr>
	</table>
	
	</form>
</div>
