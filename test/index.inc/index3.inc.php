<div class="commnet-wrapper">
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
					<?php 
					$page=page($count_all,3);
					echo $page['html'];
					?>
				</div>
				<div style="clear:both;"></div>
			</div>
                                  <?php 
                                  if(isset($_POST['submit'])){
                                      
                                          $time=date('20y年m月d日', time());
                                          echo $time;
                                          @$query="insert into CM_comment (course_id,student_name,comment_time,comment_quality,comment_content,comment_photo) values('{$course['course_id']}',
                                          '{$student_course['student_name']}','{$time}','','{$_POST['content']}','')";
                                          execute($link,$query);
                                          skipto($adress,'ok','登录成功！');
                                           
                                  }
                                
  ?>

                   
                                </div>
                                <div class="comment-list-wrapper">
                                   
                                        
                                <?php  @$query="select 
course_id,student_name,comment_time,comment_quality,comment_content,comment_photo from CM_comment
  where course_id ='{$course_id}' {$page['limit']}";
  $result_content=execute($link,$query);
			while($data_content=mysqli_fetch_assoc($result_content)){?>
								
								<div class="king-instruction  king-instruction-info ">
                                <br><label><h3><?php echo $data_content['student_name' ];?></h3></label> 
                                 <label style="padding-left:20px"><?php echo $data_content['comment_time'];?></label> 
                                  <label style="padding-left:20px">情绪：<?php echo $data_content['comment_quality'];?></label> 
                                 
								<br><label><?php echo $data_content['comment_content'];?>  </label>
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