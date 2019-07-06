<?php

include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
$link=connect();
$member_id=is_login($link);
$php='xinxi';


    include_once 'inc/head.inc.php';
    
    ?>
    

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!DOCTYPE html>
<html>


<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>


<body class="bg-white" data-bg-color="bg-white">
    <div class="king-page-box">
        <div class="king-container clearfix">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-thumbnail " src="https://magicbox.bk.tencent.com/static_api/v3/components/image1/images/1.jpg"style="width:400px;height:240px;marign-top:30px">
                        <div class="form-group clearfix ">
                            <label class="control-label col-sm-3 pt0 bk-h30 bk-lh30">上传文件：</label>
                            <div class="col-sm-9"style="padding-left: 200px">
                                <button class="king-btn king-default king-file-btn king-btn-small bk-mt3 bk-block"> 选择文件
                                    <input type="file"> </button>
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
                                            <label class="col-sm-3 control-label bk-lh30 pt0">姓名：  </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">学号：  </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">性别：  </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">学校：  </label></div>
                                             <div class="form-group clearfix " >
                                            <label class="col-sm-3 control-label bk-lh30 pt0">学籍：  </label></div>
                                            
                                            
                                            </div>
                                            <div class="tab-pane fade in" id="demo2" style="">
                                            <label> </label><h5><label>xxxxx</label></h5>
                                            
                                             </div>
                                        </div>
                                </div>
                                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>