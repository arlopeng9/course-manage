
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);



?>

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="js1/jsmodern.min.css">
<script src="js1/jquery.min.js"></script>
<script src="js1/jsmodern.min.js"></script>
<script>
	$(function () {
		jsModern.video("#video");
	})
</script>







<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--可无视-->
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css">

<!--布局样式，意义不大-->
<link rel="stylesheet" href="css/demo.css">

<!--核心样式-->
<link rel="stylesheet" href="dist/css/ckin.css">

</head>
<body>

<section class="demo-section demo-section--light" id="demo">
	<div class="container">
		<h2 class="title heading">Welcome</h2>
		
		
		<video poster="ckin.jpg" src="ckin.mp4" data-ckin="default" data-overlay="1" data-title="The curious case of Chameleon..."></video>
		
		
		
		
	</div>
</section>



<script src="dist/js/ckin.js"></script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">

</div>
</body>
</html>