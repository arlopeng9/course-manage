

<h1><label><?php echo $course['course_name'] ?></label><label style="margin-left: 300px" ><?php  echo $course['course_score'];?></label> </h1>
                                <h4>
                           <label>学类： <?php echo $course['course_type'] ?></label>
                            <label>老师：<?php echo $teacher['teacher_name']?></label>
                           <label>课程ID：<?php echo $course['course_id'] ?></label></h4>
                           <Form method="post">
                                <div class="meta">
                                   
                                    <span><i class="fa fa-calender"></i>June 19</span>
                                    <span><i class="fa fa-comments"></i>65 Comments</span>
									<button  class="travel-booking-btn hvr-shutter-out-horizontal" type="submit" name="xuanke" style="margin-left: 300px;"><?php 
                                    if(@$_COOKIE['cookie']['name']==NULL){echo '选择课程';}else{$query="select*from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}'";
   $result_name=execute($link,$query); if(mysqli_fetch_assoc($result_name)){echo '已选';}else{echo '选择课程';}}?></button>
                                </div></Form>