

<div class="commnet-wrapper">
	
    <div class="items_title">
		<hr>
		<h3 class="title" style ="color:#1e2fe1;">课程评价</h3>
	</div>
	<div class="comment-list-items">
	
		<div style="width:730px;height:1050px;background:white;position:relative;left:0px;top:20px;border-radius:10px">
			<div class="comment-list-wrapper">
				
					<div><!--星-->
<<<<<<< HEAD
						<Form method="post">
						<label style="margin-left: 30px;font-size:25px;">课程分数：</label>

							<div class="myapp-score" style="margin-left: 30px;">

								<div id="comment">
								</div>
								<div class="myapp-tip">
									<span id="score" class="lq-score-tip"></span>

								<h1 style ="color:#ff8c58;font-size:45px;margin-left:15px"><?php echo $course['course_score']?>分</h1>


								</div>

							</div>
							<div><label style="margin-left: -260px;color:#ff8c58;margin-top:0px"><h3>(已有58人打分)</h3></label></div>
					</div>


						<input type="button" value="为课程和老师打分" onclick="mizhu.open(100, 400, '<br>打分', 'index.inc/grade.php');" name="submit2" style = "border:0;width:200;color:black;margin-left:500px;margin-top:-60px;background: #37ca21;border-radius:5px">
=======
					<Form method="post">
					<label style="margin-left: 30px;font-size:25px;">课程分数：</label>
						
						<div class="myapp-score" style="margin-left: 30px;">
						
							<div id="comment">
							</div>
							<div class="myapp-tip">
								<span id="score" class="lq-score-tip"></span>
							
							<h1 style ="color:#ff8c58;font-size:45px;margin-left:15px"><?php echo $course['course_score']?>分</h1>
							<input type="button" value="为课程和老师打分" onclick="mizhu.open(100, 400, '<br>打分', 'index.inc/grade.php');" name="submit2" style = "border:0;width:200;color:black;margin-left:265px;margin-top:-60px;background: #37ca21;border-radius:5px">
							<div><label style="margin-left: -200px;color:#ff8c58;margin-top:-32px"><h3>(已有58人打分)</h3></label></div>
							</div>
						</div>
					</div>
					<br><br>
										
					
					
<<<<<<< HEAD
=======
=======
                            <div class="items_title">
                                <h3 class="title">课程评论</h3>
                            </div>
                             <div class="comment-list-items">
                                <div class="comment-list-wrapper">
                                       <label style="margin-left: 30px;"><h1>分数：<?php echo $course['course_score']?></h1></label>
                              <?php if(@$_COOKIE['cookie']['name']!=NULL){
                                 $query="select * from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}' ";
                                   $result=execute($link,$query);

                                    if($data=mysqli_fetch_assoc($result)){
                                ?>
                                <Form method="post">
                             <span>  <br><input type="text" name="content"></span>

                                <br><input type="submit" value="提交评论"name="submit">
                                    <input type="button" value="课程打分" name="submit2"><br>

                                   <?php }}else {?>
                                    <button  class="king-btn-demo king-btn king-success"  name="submit3" style="margin-left: 450px;">评论</button>
                                  <?php }?>
                                  </Form>
                                  <div class="pages_wrap">

				<div class="pages">
>>>>>>> parent of 3549f2d... 123
>>>>>>> b10250c3062c64d4d1977281bd56ed4ca1b348ce
					<?php
						if(@$_COOKIE['cookie']['name']!=NULL){
							$query="select * from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}' ";
							$result=execute($link,$query);

						if($data=mysqli_fetch_assoc($result)){
					?>
						
						<label style="margin-left: 30px;font-size:25px;">发表评论：</label>	
						<br>
						<textarea name="content" style="width:670px;height:200px;margin-left:30px;border-radius:5px" placeholder="写点什么吧……"></textarea>
						<!--<span><br><input type="textera" name="content"></span>-->
						<br>
						<br>
						
						<input type="submit" value="发表评论"name="submit" style="border:0;width:200;height:30;color:black;margin-left:500px;margin-top:-60px;background:#5bc0de;border-radius:5px">
					
					  
					<?php 
						}}else {?>
						
					<?php }?>
					
					</Form> 
					<label style="margin-left: 30px;font-size:25px;">用户评论：</label>

						
						<?php 
							$page=page($count_all,3);
							
						?>
						
					
				<?php 
					if(isset($_POST['submit'])){
						date_default_timezone_set('PRC');
						$time=date('20y年m月d日  h:i:sa', time());
						echo $time;
						@$query="insert into CM_comment (course_id,student_name,comment_time,comment_quality,comment_content,comment_photo) values('{$course['course_id']}',
						'{$student_course['student_name']}','{$time}','','{$_POST['content']}','')";
						execute($link,$query);
						skipto($adress,'ok','登录成功！');
						   
					}

				?>
				
			</div>
			
			<div class="comment-list-wrapper">
																			   
			<?php  
				@$query="select 
				course_id,student_name,comment_time,comment_quality,comment_content,comment_photo from CM_comment
				where course_id ='{$course_id}' {$page['limit']}";
				$result_content=execute($link,$query);
				while($data_content=mysqli_fetch_assoc($result_content)){
			?>
									
			<div class=" " style ="margin-left:30px">
				<img src = "images/touxiang2.jpg" style ="width:60px;height:60px;border-radius:50%;margin-top:20px	">
				<div style="width:600px;height:100px;background:#eeffee;border:1;position:relative;left:80px;top:-60px;border-radius:10px">
					<label style="padding-left:10px;margin-top:0;color:#777777"><?php echo $data_content['comment_time'];?></label> 
					<label style="padding-left:10px;color:#777777">情绪：<?php echo $data_content['comment_quality'];?></label> 
					<div>
					<label style = "margin-left:20px;margin-top:0;font-size:12;font-family:Microsoft YaHei;color:#111111"><?php echo $data_content['comment_content'];?>  </label>
					</div>
				</div>
				<hr style="margin-top:-40">
				<label style="color:red;margin-left:8px;margin-top:-60px"><?php echo $data_content['student_name' ];?></label> 
				
				
			</div>
			
			<?php }?>
			
			<div class="pages_wrap">
				<div class="pages">
				<?php 
					$page=page($count_all,3);
					echo $page['html'];
				?>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
	
</div> 