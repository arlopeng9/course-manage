<?php include_once '../test/inc/check_hit.php';?>
<section class="destinations_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
					<h2>热门课程</h2>
					<p>课程资源实时更新，速率快，高效性</p>
				</div>
			</div>
		</div>
		<div class="destination-slider-active owl-carousel">
		<?php 
			$course='20182047086';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course1.php"><img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course1.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course1.php"><i class="fa fa-map-marker"></i>
					C语言程序设计</a>
					<h4>课程ID：20182047086 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182047086'or$B[1]=='20182047086'or$C[1]=='20182047086'or$D[1]=='20182047086'or$E[1]=='20182047086'){		echo $html;}
?>
			<?php 
			$course='20182021300';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course2.php"><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course2.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course2.php"><i class="fa fa-map-marker"></i>物联网应用及安全</a>
					<h4>课程ID：20182021300 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182021300'or$B[1]=='20182021300'or$C[1]=='20182021300'or$D[1]=='20182021300'or$E[1]=='20182021300'){		echo $html;}
?>
			<?php 
			$course='20182047080';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course3.php"><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course3.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course3.php"><i class="fa fa-map-marker"></i>信息安全概论</a>
					<h4>课程ID：20182047080 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182047080'or$B[1]=='20182047080'or$C[1]=='20182047080'or$D[1]=='20182047080'or$E[1]=='20182047080'){		echo $html;}
?>
			<?php 
			$course='20182021301';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course4.php"><img src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course4.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course4.php"><i class="fa fa-map-marker"></i>计算机思维导论</a>
					<h4>课程ID：20182021301 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182021301'or$B[1]=='20182021301'or$C[1]=='20182021301'or$D[1]=='20182021301'or$E[1]=='20182021301'){		echo $html;}
?>
			<?php 
			$course='20182018155';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course5.php"><img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course5.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course5.php"><i class="fa fa-map-marker"></i>身边的材料学</a>
					<h4>课程ID：20182018155 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182018155'or$B[1]=='20182018155'or$C[1]=='20182018155'or$D[1]=='20182018155'or$E[1]=='20182018155'){		echo $html;}
?>
			
		<?php 
			$course='20182023104';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course6.php"><img src="https://edu-image.nosdn.127.net/C2E910CE23079A4D477A111FF2980735.png?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course6.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course6.php"><i class="fa fa-map-marker"></i>遥感技术应用及发展</a>
					<h4>课程ID：20182023104 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182023104'or$B[1]=='20182023104'or$C[1]=='20182023104'or$D[1]=='20182023104'or$E[1]=='20182023104'){		echo $html;}
?>
			
			<?php 
			$course='20182022193';
			$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
            $result=execute($link,$query);
            $S=mysqli_fetch_assoc($result);
			$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course7.php"><img src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course7.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course7.php"><i class="fa fa-map-marker"></i>航空航天概论</a>
					<h4>课程ID：20182022193 <span>{$S['course_student_count']}</span></h4>
				</div> 
</div> <!-- single popular destination  end-->
A;
		IF($A[1]=='20182022193'or$B[1]=='20182022193'or$C[1]=='20182022193'or$D[1]=='20182022193'or$E[1]=='20182022193'){		echo $html;}
?>
			
<?php
$course='20182021299';
$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
$result=execute($link,$query);
$S=mysqli_fetch_assoc($result);
$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course8.php"><img src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course8.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course8.php"><i class="fa fa-map-marker"></i>自然计算方法导论</a>
					<h4>课程ID：20182021299 <span>323 人</span></h4>
				</div>
</div> <!-- single popular destination  end-->
A;
IF($A[1]=='20182021299'or$B[1]=='20182021299'or$C[1]=='20182021299'or$D[1]=='20182021299'or$E[1]=='20182021299'){		echo $html;}
?>		
<?php
$course='20182023104';
$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
$result=execute($link,$query);
$S=mysqli_fetch_assoc($result);
$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course9.php"><img src="https://edu-image.nosdn.127.net/288647B04DED46F53F2154ABF422099B.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course9.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course9.php"><i class="fa fa-map-marker"></i>宇宙新概念</a>
					<h4>课程ID：20182023104 <span>{$S['course_student_count']}</span></h4>
				</div>
			</div> <!-- single popular destination  end-->
A;
if($A[1]=='20182022190'or$B[1]=='20182022190'or$C[1]=='20182022190'or$D[1]=='20182022190'or$E[1]=='20182022190'){echo $html;}
?>
						    
						    
<?php
$course='20182053005';
$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
$result=execute($link,$query);
$S=mysqli_fetch_assoc($result);
$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course10.php"><img src="https://edu-image.nosdn.127.net/948C32728D21739C45D0BD2A7A218893.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course10.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course10.php"><i class="fa fa-map-marker"></i>信息素养与实践</a>
					<h4>课程ID：20182053005 <span>{$S['course_student_count']}</span></h4>
				</div>
				</div>

A;
if($A[1]=='20182053005'or$B[1]=='20182053005'or$C[1]=='20182053005'or$D[1]=='20182053005'or$E[1]=='20182053005'){echo $html;}
?>		
<?php 
$course='20182033001';
$query="select course_id,course_student_count,course_score from CM_course where course_id='{$course}'";
$result=execute($link,$query);
$S=mysqli_fetch_assoc($result);
$html=<<<A
			<div class="single-destination"style="width: 230px;height:400px">
				<figure>
					<a href="course11.php"><img src="https://edu-image.nosdn.127.net/045818517FBF0D5F6C2B3696FD36A114.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt="">
					</a>
					<figcaption>
						<a href="course11.php" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
					</figcaption>
				</figure>
				<div class="des-city">
					<a href="course11.php"><i class="fa fa-map-marker"></i>哲学导论</a>
					<h4>课程ID：20182033001 <span>{$S['course_student_count']}</span></h4>
				</div>
			</div>
A;
if($A[1]=='20182033001'or$B[1]=='20182033001'or$C[1]=='20182033001'or$D[1]=='20182033001'or$E[1]=='20182033001'){echo $html;}
?>			
		</div>
	</div>
</section>