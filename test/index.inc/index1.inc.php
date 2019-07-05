<?php
$query="select * from CM_course where course_id='{$course_id}'";
$result=execute($link,$query);
$course=mysqli_fetch_array($result);
$query="select * from CM_teacher where tID='{$course['tID']}'";
$result=execute($link,$query);
$teacher=mysqli_fetch_array($result);


if(isset($_POST['submit'])){
    if($_POST['content']==NULL){
        skip($adress,'error','评论不能为空');}
         
         
}
$query="select count(*) from CM_comment where course_id='{$course_id}'";
$count_all=num($link,$query);

$query="select count(*) from CM_student_course where sc_course_score !='NULL' and cID='{$course['cID']}'";
$count_personnum=num($link,$query);
if($count_personnum==0){$count_personnum=1;}
$query="select sum(sc_course_score) as total from CM_student_course where cID='{$course['cID']}'";
$result=execute($link,$query);
$count_score=mysqli_fetch_array($result);

$score=$count_score['total']/$count_personnum;
$query="update CM_course set course_score='{$score}' where cID='{$course['cID']}'";
execute($link,$query);
if(@$_COOKIE['cookie']['name']!=NULL){
    $query="select * from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
    $result=execute($link,$query);
    $student_course=mysqli_fetch_array($result);}
    if(isset($_POST['xuanke'])){
        if(@$_COOKIE['cookie']['name']==NULL){skip($adress,'error','请登陆后再选课');
        }
        $query="select * from CM_student_course where student_number='{$student_course['student_number']}' and cID='{$course['cID']}'";
        $result=execute($link,$query);
        if(mysqli_fetch_assoc($result)){
            $query="delete from CM_student_course where student_number='{$student_course['student_number']}'and cID='{$course['cID']}'";
            execute($link,$query);}else{
            $query="insert into CM_student_course (student_number,cID) values('{$student_course['student_number']}','{$course['cID']}')";
            execute($link,$query);
        }
         
    }?>
   