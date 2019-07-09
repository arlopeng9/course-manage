<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../	css/lq-score.css">
<link href="../css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/demo.css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/lq-score.min.js"></script>
<script src="../js/ui.js"></script>
<style>
	.submit {
		-webkit-border-radius: 14;
		-moz-border-radius: 14;
		border-radius: 14px;
		font-family: Arial;
		color: #ffffff;
		font-size: 17px;
		background: #3498db;
		padding: 12px 30px 12px 30px;
		text-decoration: none;
	}

	.submit:hover {
		background: #2980b9;
		background-image: -webkit-linear-gradient(top, #2980b9, #3498db);
		background-image: -moz-linear-gradient(top, #2980b9, #3498db);
		background-image: -ms-linear-gradient(top, #2980b9, #3498db);
		background-image: -o-linear-gradient(top, #2980b9, #3498db);
		background-image: linear-gradient(to bottom, #2980b9, #3498db);
		color: #ffffff;
		text-decoration: none;
	}
</style>		
<script>
	/*
	属性参数介绍：
		$tipEle--------提示元素，请传入jquery对象
		fontSize-------大小，字符串类型
		isReScore------是否允许重新评分
		tips-----------提示，可以是default默认消息，可以传模板字符串，也可以传长度为5的数组
		zeroTip--------无分数提示，字符串类型
		score----------分数，小数、整数都可以
		callBack-------评分回调，会返回分数和插件元素李，例：function(score,ele){}
		content--------内容
		defultColor----默认颜色(未选中的颜色)
		selectColor----选中后的颜色，可以传单个字符串，也可以传长度为5的数组
	*/
	$(function () {
		//demo4
		$("#course_grade").lqScore({
			$tipEle: $("#course"),
			tips: "default",
			fontSize: "35px",
			isReScore: true,//允许重新评分
			callBack: function (score, ele) {
				var cscore = document.getElementById('cscore');
				cscore.value = score;
			}
			//如果需要设置后还能评分，请添加[isReScore:true]属性
		});

		//demo6
		$("#teacher_grade").lqScore({
			$tipEle: $("#teacher"),
			tips: "default",
			fontSize: "35px",
			isReScore: true,//允许重新评分
			callBack: function (score, ele) {
			var tscore = document.getElementById('tscore');
			tscore.value = score;
		}
		});


	});
	

</script>


</head>
<body>

<div style="width:150px;">
	<form method = "post">
	<div style="width:200px;margin-left:200px">
			<p><b>课程分数：</b></p>
			<div class="#">
				<div id="course_grade"></div>
				<div class="myapp-tip">
					<span id="course" class="lq-score-tip"></span>
					<input  name = "cscore"  id = "cscore" type = "hidden">
				</div>
			</div>
			
	<br>
	
	<br>
	</div>	
	<hr width=565 style = "margin-left:-100">

	<!------------------------------------------------------->

	<!------------------------demo2-------------------------->

	<div style="width:200px;margin-left:200px">
		<p><b>老师分数：</b></p>
			<div class="#">
				<div id="teacher_grade"></div>
				<div class="myapp-tip">
					<span id="teacher" class="lq-score-tip"></span>
					<input name = "tscore" id = "tscore" type = "hidden">
				</div>
			</div>
		
	</div>
	</div>
	<br>
	<br>
	<hr width=565 style = "margin-left:-100">
	<input type="submit" class = "submit" value="提交分数"  name="submit" style = "margin-left:200px">
	<?php
	include_once '../inc/config.inc.php';
	include_once '../inc/mysql.inc.php';
	include_once '../inc/tool.inc.php';
	include_once '../inc/page.inc.php';
	$link=connect();
		if(isset($_POST['submit'])){
		$query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
		$result=execute($link,$query);
		$student_course=mysqli_fetch_array($result);
		if(empty($_POST['cscore']) && empty($_POST['tscore'])){
			echo "<script type=text/javascript>mizhu.toast('评分为空');</script>";
		}else{
		if(!empty($_POST['cscore'])){
		$query1="update CM_student_course set sc_course_score = {$_POST['cscore']} where student_number='{$student_course['student_number']}' and cID='{$_GET['course_id']}' ";
		$result1 = execute($link,$query1);
		if(!$result1){
			echo "<script type=text/javascript>mizhu.toast('打分失败！');</script>";
		}else{
			echo "<script type=text/javascript>mizhu.toast('打分成功！');setTimeout(function(){window.parent.mizhu.close();},2000)</script>";
		}
		}
		if(!empty($_POST['tscore'])){
		$query2="update CM_student_course set sc_teacher_score = {$_POST['tscore']} where student_number='{$student_course['student_number']}' and cID='{$_GET['course_id']}' ";
		$result2 = execute($link,$query2);
		
		if(!$result2){
			echo "<script type=text/javascript>mizhu.toast('打分失败！');</script>";
		}else{
			echo "<script type=text/javascript>mizhu.toast('打分成功！');setTimeout(function(){window.parent.mizhu.close();},2000)</script>";
		}
		}
		
		}
		}
	?>
	<!------------------------------------------------------->

	<!------------------------demo6-------------------------->
	</form>
</div>

</body>
	
</html>