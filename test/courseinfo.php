
<head>
	<style type="text/css">
			.mytable
			{
				border:1px solid #A6C1E4; 				
				font-family: Arial;
				border-collapse: collapse;				
			}
			
			table th/*设置表头属性*/
			{
				border:1px solid black; 
				background-color: #71C1FB;
				width: 200px;
				height: 50px;
				font-size: 15px;
			}
			
			table td/*设置行属性*/ 
			{
				font-size: 15px;
				border:1px solid #A6C1E4; 
				text-align: center;
				height: 60px;
				padding-top: 5px;
			}			
		</style>
</head>


<div id="cousrse" class="white_content" style="position: absolute; top: 0%; left: 0%; width: 576px; height: 400px; background-color: white; z-index: 1002; display: block;">
	<table class="mytable" border = "1" style="width:576px">
	<tbody>
	<?php 
	include_once 'inc/config.inc.php';
	include_once 'inc/mysql.inc.php';
	include_once 'inc/tool.inc.php';
	$link=connect();
	$query="select * from CM_course where cID='{$_GET['cID']}'";
	$result=execute($link,$query);
	$C=mysqli_fetch_array($result);//课程
	
	$query2 = "select * from CM_teacher where tID='{$C['tID']}'";
	$result2 = execute($link, $query2);
	$T = mysqli_fetch_array($result2);
	$html=<<<A
          
	<tr>
		<td width="130" class="" name="lesson_lessonHead"><b>课头编号</b></td>
		<td width="176"  name="course_id">{$C['course_id']}</td>
		<td width="120" class="" name="lesson_lessonNum"><b>课程序号</b></td>
		<td width="150"  name="cID">{$C['cID']}</td>
	</tr>
							

	<tr>
		<td width="130" class="i18n" name="lesson_lessonName">课程名称</td>
		<td width="176"  name="course_name">{$C['course_name']}</td>
		<td width="120" class="i18n" name="lesson_lessonName">任课老师</td>
		<td width="150"  name="lessonName">{$T['teacher_name']}</td>
	</tr>
	<tr>
		<td width="130" class="i18n" name="lesson_lessonType">开设学校</td>
		<td width="176" colspan="1" name="plantype">{$C['course_school']}</td>
		<td width="120" class="i18n" name="lesson_commontype">开设学院</td>
		<td width="150" colspan="2" name="commontype">{$C['course_college']}</td>	
	</tr>
	<tr>
		<td width="130" class="i18n" name="lesson_lessonType">课程类型</td>
		<td width="176" colspan="1" name="plantype">公共选修</td>
		<td width="120" class="i18n" name="lesson_commontype">通识课类型</td>
		<td width="150" colspan="2" name="commontype">{$C['course_type']}</td>	
	</tr>


	<tr height = "170" style="align:left">
		<td  class="i18n"  name="lessonIntro">课程简介</td>
		<td colspan="3"  name="introduce">{$C['course_introduce']}</td>
	</tr>
A;
	echo $html;
	
	?>

	</tbody></table>
	
	
</div>