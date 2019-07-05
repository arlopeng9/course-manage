<?php
$query="select course_id,course_student_count,course_score from CM_course";
$result=execute($link,$query);
$A=array();
$A[0]=0;
$A[1]=0;
$E=$D=$C=$B=$A;
while($value=mysqli_fetch_array($result)){
    $temp1=$value['course_score']+0.1*$value['course_student_count'];
    if($temp1>$A[0]){$E=$D;$D=$C;$C=$B;$B=$A;$A[0]=$temp1;$A[1]=$value['course_id'];}else{if($temp1>$B){$E=$D;$D=$C;$C=$B;$B[0]=$temp1;$B[1]=$value['course_id'];}
    else{if($temp1>$C[0]){$E=$D;$D=$C;$C[0]=$temp1;$C[1]=$value['course_id'];}else{if($temp1>$D[0]){$E=$D;$D[0]=$temp1;$D[1]=$value['course_id'];}else{if($temp1>$E[0]){$E[0]=$temp1;$E[1]=$value['course_id'];}}}}}
    
}