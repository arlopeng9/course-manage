<?php

include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
include_once 'inc/upload.inc.php';
$link=connect();
$member_id=is_login($link);
$php='zhanghao';


@$query="select * from CM_register where register_name='{$_COOKIE['cookie']['name']}'";
$result_memebr=execute($link, $query);
if(mysqli_num_rows($result_memebr)!=1){
    skip('index.php', 'error', '你所访问的会员不存在!');
}
$data_member=mysqli_fetch_assoc($result_memebr);

$query="select * from CM_student where register_name='{$data_member['register_name']}'";
$result=execute($link, $query);
$student=mysqli_fetch_assoc($result);
$template['title']='会员中心';
$template['css']=array('style/public.css','style/list.css','style/member.css');
if(isset($_POST['submit'])){
    $save_path='uploads'.date('/Y/m/d/');//写上服务器上文件系统的路径，而不是url地址
    $upload=upload($save_path,'8M','photo');
    if($upload['return']){
        $query="update CM_register set register_photo='{$upload['save_path']}' where register_name='{$_COOKIE['cookie']['name']}'";
        execute($link, $query);
        if(mysqli_affected_rows($link)==1){
            skip("zhanghao.php?id={$_COOKIE['cookie']['name']}",'ok','头像设置成功！');
        }else{
            skip('zhanghao.php','error','头像设置失败，请重试');
        }
    }else{
        skip('zhanghao.php', 'error',$upload['error']);
    }
}
    include_once 'inc/head.inc.php';
    
    ?>
    

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!DOCTYPE html>
<html>


<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>





<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- 若您需要使用Kendo UI Professional，请联系版权人获得合法的授权或许可。 -->
    <!-- Bootstrap css -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- kendo ui css -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/styles/kendo.common.min.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/styles/kendo.default.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/fontawesome/css/font-awesome.css" rel="stylesheet">
    <!--蓝鲸提供的公用样式库 -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk_pack.css" rel="stylesheet">
    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/echarts-2.0/echarts-all.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <!-- 包括所有kendoui的js插件或者可以根据需要使用的js插件调用　-->
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/kendoui-2015.2.624/js/kendo.all.min.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/echarts-2.0/echarts-all.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/bk/js/bk.js"></script>
    <!-- 数据埋点统计 -->
    <script src="http://magicbox.bk.tencent.com/static_api/analysis.js"></script>
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
    <!--[if lt IE 9]><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/html5shiv.min.js"></script><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/respond.min.js"></script><![endif]-->
</head>

<body class="bg-white" data-bg-color="bg-white">
    <div class="king-page-box">
        <div class="king-container clearfix">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-thumbnail "src="<?php if($data_member['register_photo']!=''){echo SUB_URL.$data_member['register_photo'];}else{echo 'style/photo.jpg';}?>"style="width:240px;height:350px;marign-top:30px">
                        <div class="form-group clearfix ">
                            
                            <div class="col-sm-9"style="padding-left: 200px">
                                <form method="post" enctype="multipart/form-data">
				<input style="cursor:pointer;" width="100" type="file" name="photo" /><br /><br />
				<input class="submit" type="submit" name="submit" value="保存" />
			</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="king-tab tab-box ">
                                        <ul id="myTab2" class="nav nav-tabs king-nav-tabs1 king-tab-info">
                                            <li class="active"> <a data-toggle="tab" href="#demo1">个人简介</a> </li>
                                            <li> <a data-toggle="tab" href="#demo2">个人介绍</a> </li>
                                        </ul>
                                        <div class="tab-content ">
                                            <div class="tab-pane fade in active" id="demo1"> 
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">账号：<?php echo $data_member ['register_name']?> </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">学号：<?php echo $student ['student_number']?>  </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">性别：<?php echo $student ['student_sex']?>   </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">院系：<?php echo $student ['student_school']?>   </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">大学：<?php echo $student ['student_college']?>  </label></div>
                                            
                                            
                                            </div>
                                            <div class="tab-pane fade in" id="demo2" style="">
                                            <label> </label><h5><label>这就是自我介绍-></label></h5>
                                            
                                             </div>
                                        </div>
                                </div>
                                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once 'inc/leaft_head_end.php'; ?>
</html>