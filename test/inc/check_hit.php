<?php
$query="select course_id,course_student_count,course_score from CM_course";
$result=execute($link,$query);
$A=array();
$A[0]=0;
$A[1]=0;
$C=$B=$A;
while($value=mysqli_fetch_array($result)){
    $temp1=$value['course_score']+0.1*$value['course_student_count'];
<<<<<<< HEAD
    if($temp1>$A[0]){$E=$D;$D=$C;$C=$B;$B=$A;$A[0]=$temp1;$A[1]=$value['course_id'];}
    else{if($temp1>$B[0]){$E=$D;$D=$C;$C=$B;$B[0]=$temp1;$B[1]=$value['course_id'];}
    else{if($temp1>$C[0]){$E=$D;$D=$C;$C[0]=$temp1;$C[1]=$value['course_id'];}
    else{if($temp1>$D[0]){$E=$D;$D[0]=$temp1;$D[1]=$value['course_id'];}
    else{if($temp1>$E[0]){$E[0]=$temp1;$E[1]=$value['course_id'];}}}}}
=======
    if($temp1>$A[0]){$C=$B;$B=$A;$A[0]=$temp1;$A[1]=$value['course_id'];}else{if($temp1>$B){$C=$B;$B[0]=$temp1;$B[1]=$value['course_id'];}
    else{if($temp1>$C[0]){$C[0]=$temp1;$C[1]=$value['course_id'];}}}
>>>>>>> b10250c3062c64d4d1977281bd56ed4ca1b348ce
    
}

