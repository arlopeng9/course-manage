<?php 

if(empty($_COOKIE['cookie']['name'])){
    skip('../login.php', 'error', '给我去登陆');
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title><?php echo $template['title'] ?></title>
<meta name="keywords" content="后台界面" />
<meta name="description" content="后台界面" />

<!-- 我的 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="assets/css/layui.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="icon" href="/favicon.ico">
    <title>管理后台</title>
    
<?php 
foreach ($template['css'] as $val){
	echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
?>
<?php if($_COOKIE['cookie']['member_id']=='管理员'){?>
</head>
<!--  注释掉的上层
<body>
<div id="top">
	<div class="logo">
		管理中心
		
	</div>
	<a href="/test/logout.php">注销</a>	
</div>
-->

<!-- 添加的上层 -->

<body class="layui-layout-body">
    <!--  <div class="layui-layout layui-layout-admin">-->
        
            <!--  
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item slide-sidebar" lay-unselect>
                    <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">123123</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">帮助中心</a></dd>
                        <dd><a href="login.html">注销</a></dd>
                    </dl>
                </li>
            </ul>
            -->
        
   <!--  </div>-->
    <div class="layui-side custom-admin">
            <div class="layui-side-scroll">

                <div class="custom-logo">
                    <img src="assets/images/logo.png" alt=""/>
                    <h1>管理中心 Pro</h1>
                    
                </div>
                
                <ul id="Nav" class="layui-nav layui-nav-tree">
                    <li class="layui-nav-item">
                    <a href="/test/logout.php">注销</a>
                      
                            <i class="layui-icon">&#xe609;</i>
                            <em style = "font-size: 20px">安全信息管理</em>
                       
                        <ul class="child">
							<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='register_module.php'){echo 'class="current"';}?> href="register_module.php">用户管理</a></li>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='register_module_update.php'){
		          			echo '<li><a class="current">编辑用户信息</a></li>';
				            }
			               	?>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='manage_module_add.php'){
				            	echo '<li><a class="current">管理权限赋予</a></li>';
				            }
				            ?>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='college_module_add.php'){
				            	echo '<li><a class="current">院系管理员权限赋予</a></li>';
				            }
				            ?>
							<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='manage_module_delete.php'){echo 'class="current"';}?> href="manage_module_delete.php">管理员权限剥夺</a></li>
				
							<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='college_manage_module_delete.php'){echo 'class="current"';}?> href="college_manage_module_delete.php">院系管理员权限剥夺</a></li>
						</ul>
                            <i class="layui-icon">&#xe857;</i>
                            <em style = "font-size: 20px">信息内容管理</em>
                       
                        <dl class="child">
                            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='father_module.php'){echo 'class="current"';}?> href="father_module.php">课程操作</a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='father_module_add.php'){echo 'class="current"';}?> href="father_module_add.php">校园课程录入</a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='son_module.php'){echo 'class="current"';}?> href="son_module.php">老师信息修改</a></dd>
							<?php 
				                if(basename($_SERVER['SCRIPT_NAME'])=='son_module_update.php'){
					            echo '<li><a class="current">编辑老师信息</a></li>';
				                }
				            ?>
				            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='son_module_add.php'){echo 'class="current"';}?> href="son_module_add.php">老师信息录入 </a></dd>

                        </dl>
                            <i class="layui-icon">&#xe612;</i>
                            <em style = "font-size: 20px">学生信息管理</em>
                     
                        <dl class="child">
                            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='user_module_add.php'){echo 'class="current"';}?> href="user_module_add.php">学生信息管理 </a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='user_module.php'){echo 'class="current"';}?> href="user_module.php">学生信息修改</a></dd>
							<?php 
				                if(basename($_SERVER['SCRIPT_NAME'])=='user_module_update.php'){
					            echo '<li><a class="current">编辑学生信息</a></li>';
				            }
				            ?>
                        </dl>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>

                        	
					</li>
 				</ul>
 			</div>
 		</div>
 </body>
 </html>
 							
	<?php }
	if($_COOKIE['cookie']['member_id']=='院系管理员'){?>					
       				
       </head>
<!--  注释掉的上层
<body>
<div id="top">
	<div class="logo">
		管理中心
		
	</div>
	<a href="/test/logout.php">注销</a>	
</div>
-->

<!-- 添加的上层 -->

<body class="layui-layout-body">
    <!--  <div class="layui-layout layui-layout-admin">-->
        
            <!--  
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item slide-sidebar" lay-unselect>
                    <a href="javascript:;" class="icon-font"><i class="ai ai-menufold"></i></a>
                </li>
            </ul>

            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">123123</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">帮助中心</a></dd>
                        <dd><a href="login.html">注销</a></dd>
                    </dl>
                </li>
            </ul>
            -->
        
   <!--  </div>-->
    <div class="layui-side custom-admin">
            <div class="layui-side-scroll">

                <div class="custom-logo">
                    <img src="assets/images/logo.png" alt=""/>
                    <h1>院系管理中心 </h1>
                    
                </div>
                
                <ul id="Nav" class="layui-nav layui-nav-tree">
                    <li class="layui-nav-item">
                    <a href="/test/logout.php">注销</a>
                            <i class="layui-icon">&#xe609;</i>
                            <em style = "font-size: 20px">推送信息管理</em>
                        <ul class="child">
							<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='dianjiliang.php.php'){echo 'class="current"';}?> href="dianjiliang.php">点击量查询</a></li>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='register_module_update.php'){
		          			echo '<li><a class="current">院系课程导入</a></li>';
				            }
			               	?>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='manage_module_add.php'){
				            	echo '<li><a class="current">管理权限赋予</a></li>';
				            }
				            ?>
							<?php 
				            if(basename($_SERVER['SCRIPT_NAME'])=='college_module_add.php'){
				            	echo '<li><a class="current">院系管理员权限赋予</a></li>';
				            }
				            ?>
							<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='tuisong.php'){echo 'class="current"';}?> href="tuisong.php">首页推送操作</a></li>
				
							
						</ul>
                            <i class="layui-icon">&#xe857;</i>
                            <em style = "font-size: 20px">信息内容管理</em>
                        <dl class="child">
                            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='father_module.php'){echo 'class="current"';}?> href="father_module.php">院系课程操作</a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='father_module_add.php'){echo 'class="current"';}?> href="father_module_add.php">院系课程录入</a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='son_module.php'){echo 'class="current"';}?> href="son_module.php">老师信息修改</a></dd>
							<?php 
				                if(basename($_SERVER['SCRIPT_NAME'])=='son_module_update.php'){
					            echo '<li><a class="current">编辑老师信息</a></li>';
				                }
				            ?>
				            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='son_module_add.php'){echo 'class="current"';}?> href="son_module_add.php">老师信息录入 </a></dd>

                        </dl>
                            <i class="layui-icon">&#xe612;</i>
                            <em style = "font-size: 20px">学生信息管理</em>
                        <dl class="child">
                            <dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='user_module_add.php'){echo 'class="current"';}?> href="user_module_add.php">学生信息管理 </a></dd>
							<dd><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='user_module.php'){echo 'class="current"';}?> href="user_module.php">学生信息修改</a></dd>
							<?php 
				                if(basename($_SERVER['SCRIPT_NAME'])=='user_module_update.php'){
					            echo '<li><a class="current">编辑学生信息</a></li>';
				            }
				            ?>
                        </dl>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>

                        	
					</li>
 				</ul>
 			</div>
 		</div>
 </body>
 </html>
 					
                        


<?php }?>