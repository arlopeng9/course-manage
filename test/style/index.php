
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<HTML>
<HEAD>
    <META CHARSET="UTF-8">

</HEAD>

<body class="bg-white" data-bg-color="bg-white">
<div id="Layer1" style="position: absolute; width:100%; height:100%; z-index:-1">    
<img src="http://old.bz55.com/uploads/allimg/160105/139-160105154505.jpg" height="100%" width="100%"/>    
</div>
    <div class="king-page-box"style="position: absolute; width:100%; height:90%;">
        <div class="king-layout1-header"></div>
        <div class="king-layout2-main mt15"  style = "width :1960px">
            <form class="form-horizontal">
                <div class="container-fluid mb0 ">
                    <div class="row">
                       <?php include_once 'inc/header.php';?>
                        <div class="col-md-8">
                            <div class="king-panel8 m15">
                                <div class="king-panel8-header">
                                    <h3 class="king-panel8-title king-info">最近课程</h3>
                                </div>
                                <div class="king-panel8-content pt25">
                                    <div class="container-fluid mb0 ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive " src="https://magicbox.bk.tencent.com/static_api/v3/components/image1/images/1.jpg"> </div>
                                            <div class="col-md-4">
                                                <img class="img-responsive " src="https://magicbox.bk.tencent.com/static_api/v3/components/image1/images/1.jpg"> </div>
                                            <div class="col-md-4">
                                                <img class="img-responsive " src="https://magicbox.bk.tencent.com/static_api/v3/components/image1/images/1.jpg"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
</div>
</div>
</body>
</HTML>


