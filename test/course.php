
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


</head>

<body>
     <label></label>
     <br><label></label>
     
	<div id="video" style="width:1000px;height:600px;margin:10px auto;">
		<video src="js1/video.mp4"></video>
	</div>
	
</body>
</html>
