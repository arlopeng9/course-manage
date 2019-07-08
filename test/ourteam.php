
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>







<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>我们</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css1/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css1/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css1/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!-- //Fonts -->
    
</head>



    <body>
    
        <!-- mian-content -->
        <div class="main-banner" id="home">
    
            <!--/banner-->
            <div class="banner-info">
                <div class="w3pvt-logo text-center">
                    <h1> <a href="ourteam.php">Our Team</a></h1>
                </div>
    			
                <div class="middile-inner-con"style="margin-top: 3.125rem;">
                    <div class="tab-main mx-auto">
    
                        <input id="tab1" type="radio" name="tabs" class="w3layouts-sm" checked>
                        <label for="tab1"><span class="fa fa-home" aria-hidden="true"></span>我们</label>
    
                        <input id="tab2" type="radio" class="w3layouts-sm" name="tabs">
                        <label for="tab2"><span class="fa fa-users" aria-hidden="true"></span> 我们的团队</label>
    
                        <input id="tab3" type="radio" class="w3layouts-sm" name="tabs">
                        <label for="tab3"><span class="fa fa-files-o" aria-hidden="true"></span>我们的网站</label>
                        <input id="tab4" type="radio" class="w3layouts-sm" name="tabs">
                        <label for="tab4"><span class="fa fa-envelope" aria-hidden="true"></span> E-mail</label>
                        <section id="content1" class="inner-w3layouts-wrap">
                            <img src="images/admin.jpg" class="admin img-fluid" alt="mobile-image"style="width: 15%;height:15%">
                            <h4>代码全写队</h4>
                            <h2>Introduction</h2>
                            <p>产品经理：彭英杰 项目经理：张雷 技术经理：马赞 成员：汪志豪 余冠达</p>
    
                        </section>
                        <section id="content2" class="inner-w3layouts-wrap">
                            <h3 class="head-w3ls">我们的团队</h3>
                          <div class="contentbox">
	                             <h4>2222</h4>
                        </section>
                        <section id="content3" class="inner-w3layouts-wrap">
                            <h3 class="head-w3ls">网站预览</h3>
                            <div class="row news-grids text-center">
                                <div class="col-4 gal-img">
                                    <a href="#gal1"><img src="images/g1.jpg" alt="news image" class="img-fluid"></a>
                                    <a href="#gal2"><img src="images/g3.jpg" alt="news image" class="img-fluid"></a>
    
    
                                </div>
                                <div class="col-4 gal-img">
                                    <a href="#gal3"><img src="images/g2.jpg" alt="news image" class="img-fluid"></a>
                                    <a href="#gal4"><img src="images/g4.jpg" alt="news image" class="img-fluid"></a>
                                </div>
                                <div class="col-4 gal-img">
    
    
                                    <a href="#gal5"><img src="images/g5.jpg" alt="news image" class="img-fluid"></a>
                                    <a href="#gal6"><img src="images/g6.jpg" alt="news image" class="img-fluid"></a>
                                </div>
                                <!-- popup-->
    
                            </div>
                        </section>
                        <section id="content4" class="inner-w3layouts-wrap">
                            <h3 class="head-w3ls"> 联系我们</h3>
                            <form name="contact-form" class="contact-form" method="post" action="#">
                                <div class="row">
                                    <div class="col-6 con-gd">
                                        <div class="form-group">
                                            <p>Name *</p>
                                            <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                                        </div>
                                        <div class="form-group">
                                            <p>Email *</p>
                                            <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                                        </div>
    
                                    </div>
                                    <div class="col-6 con-gd">
                                        <div class="form-group">
                                            <p>Send a Message *</p>
                                            <textarea name="Message" placeholder="" required=""></textarea>
                                        </div>
    
                                    </div>
    
                                </div>
                                <div class="form-group">
    
                                    <button type="submit" class="btn btn-default">发送</button>
                                </div>
    
                            </form>
                            <ul class="w3pvt_social_list list-unstyled mt-4">
                                <li>
                                    <a href="#" class="w3layouts-icon">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w3layouts-icon">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w3layouts-icon">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w3layouts-icon">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </section>
    
                    </div>
                    <!--// banner-inner -->
                </div>
            </div>
            <div class="copy-w3layouts-right text-center pb-3">
                <p>©2019 代码全写队</p>
    
            </div>
        </div>
        <!--//main-content-->
    
    
    </body>
    
    </html>
    