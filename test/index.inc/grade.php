<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../	css/lq-score.css">
<link rel="stylesheet" href="../css/demo.css">
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/lq-score.min.js"></script>

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
			isReScore: true//允许重新评分
			//如果需要设置后还能评分，请添加[isReScore:true]属性
		});

		//demo6
		$("#teacher_grade").lqScore({
			$tipEle: $("#teacher"),
			tips: "default",
			fontSize: "35px",
			isReScore: true//允许重新评分
		});

	});
</script>

</head>
<body>

<div style="width:150px;">

	<div style="width:200px;margin-left:200px">
			<p><b>课程分数：</b></p>
			<div class="#">
				<div id="course_grade"></div>
				<div class="myapp-tip">
					<span id="course" class="lq-score-tip"></span>
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
				</div>
			</div>
		
	</div>
	</div>
	<br>
	<br>
	<hr width=565 style = "margin-left:-100">
	<input type="button" value="提交分数" onclick="mizhu.open(100, 400, '<br>打分', 'course9.php');" name="submit" style = "border:0;font-size:30px;width:200;color:black;margin-left:230px;margin-top:20px;background: #37ca21;border-radius:5px">
	<!------------------------------------------------------->

	<!------------------------demo6-------------------------->

</div>

</body>
</html>