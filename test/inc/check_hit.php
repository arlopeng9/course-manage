<?php
$query="select course_id,course_student_count,course_score from CM_course";
$result=execute($link,$query);
$A=array();
$A[0]=0;
$A[1]=0;
$C=$B=$A;
while($value=mysqli_fetch_array($result)){
    $temp1=$value['course_score']+0.1*$value['course_student_count'];
    if($temp1>$A[0]){$C=$B;$B=$A;$A[0]=$temp1;$A[1]=$value['course_id'];}else{if($temp1>$B){$C=$B;$B[0]=$temp1;$B[1]=$value['course_id'];}
    else{if($temp1>$C[0]){$C[0]=$temp1;$C[1]=$value['course_id'];}}}
    
}