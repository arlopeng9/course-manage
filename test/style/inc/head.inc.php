
<?php
include_once 'headstyle.inc.php';
$member_id=is_login($link);
//  var_dump(isset($member_id));
//  var_dump($member_id);
if(isset($member_id) && $member_id){
   
   
    if($_COOKIE['cookie']['member_id']=='管理员' or $_COOKIE['cookie']['member_id']=='院系管理员'
        ){
        
    
$str=<<<A
						<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                            <a href="javascript:;">
                                <img src="https://magicbox.bk.tencent.com/static_api/v3/components/horizontal_nav8/images/logo.png" height="30">
                            </a>
                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="../test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a class="f14">
                                        <span>您好！{$_COOKIE['cookie']['name']}{$_COOKIE['cookie']['member_id']}</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="/test/logout.php" class="f14">
                                        <span>注销</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
</body>

</html>
A;
					echo $str;		
				}else
                {
               
    
$str=<<<A
					<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                            <a href="javascript:;">
                                <img src="https://magicbox.bk.tencent.com/static_api/v3/components/horizontal_nav8/images/logo.png" height="30">
                            </a>
                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="../test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                
                                
                                <li>
                                    <a class="f14">
                                        <span>您好！{$_COOKIE['cookie']['name']}</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="../test/logout.php" class="f14">
                                        <span>注销</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
</body>

</html>
A;
					echo $str;		
                }}else{
$str=<<<A
<html>



<body class="bg-bright3" data-bg-color="bg-bright3">
    <div class="king-page-box">
        <div class="king-layout1-header">
            <nav>
                <div style="width:100%;height:50px;" class="king-header king-header4 ">
                    <div class="king-header-inner">
                        <div class="king-header-brand">
                            <a href="javascript:;">
                                <img src="https://magicbox.bk.tencent.com/static_api/v3/components/horizontal_nav8/images/logo.png" height="30">
                            </a>
                        </div>
                        
                        <div class="king-header-list list1">
                            <ul>
                                <li class="active">
                                    <a href="../test/index.php" class="f14">
                                        <span>首页</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="../test/login.php" class="f14">
                                        <span>登录</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                                <li>
                                    <a href="../test/register.php" class="f14">
                                        <span>注册</span>
                                    </a>
                                    <ul class="king-submenu"> </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
</body>

</html>
A;
					echo $str;}
?>