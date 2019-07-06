<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);

$query="select count(*) from CM_recommend";
$result=execute($link,$query);
$count_recommend=mysqli_fetch_array($result);

$query="select * from CM_recommend";

$result=execute($link,$query);
$Array_all=array();
$t=1;
while($recomend=mysqli_fetch_array($result)){
    $Array_all[$t]=$recomend[0];
    $t=$t+1;
}

$numbers = range (1,$count_recommend[0]);

//shuffle 将数组顺序随即打乱
shuffle ($numbers);

//array_slice 取该数组中的某一段
$array = array_slice($numbers,0,6);


$X=0;
while( $X<6 and $temp=$array[$X]  ){
   $temp=$Array_all[$temp];
$html1=<<<A
      
   
     <div class="col-12 col-sm-6 col-md-6 col-lg-4">
     <div class="single-package">
    <div class="package-image">
    <a href="course1.php"><img src="https://edu-image.nosdn.127.net/4A5DADAAACFEEFE79DFF9C19E626C659.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course1.php" title="">C语言程序设计</a></h3>
    <p>上传时间：07 02 课程ID：20182047086
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course1.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> 
    
A;
if($temp==44){
echo $html1;}
$html2=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course2.php"><img src="https://edu-image.nosdn.127.net/76F0C19078017F0FA44FFBA7A6B83E9B.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course2.php" title="">物联网应用及安全</a></h3>
    <p>上传时间：07 02 课程ID：20182021300
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course2.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==4){
echo $html2;} 
 $html3=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course3.php"><img src="https://edu-image.nosdn.127.net/821FF02EBD63421A183F6F4A41AAEEA0.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course3.php" title="">信息安全概论</a></h3>
    <p>上传时间：07 02 课程ID：20182047080
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course3.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!--third package end -->
A;
if($temp==53){
echo $html3;} 
 
 $html4=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course4.php"><img src="https://img-ph-mirror.nosdn.127.net/Pi-k3AX09Y8XVBePjsJJEQ==/6597828429681640478.jpg?imageView&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course4.php" title="">计算思维导论</a></h3>
    <p>上传时间：07 02 课程ID：20182021301
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course4.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- fourth package end -->
    
A;
if($temp==14){
echo $html4;}  
 $html5=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course5.php"><img src="https://edu-image.nosdn.127.net/8282FBC079673EA3A28339617E2F69E5.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course5.php" title="">身边的材料学</a></h3>
    <p>上传时间：07 02 课程ID：20182018155
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course5.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- fifth package end -->
A;
if($temp==48){
echo $html5;} 
$html6=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course6.php"><img src="https://edu-image.nosdn.127.net/C2E910CE23079A4D477A111FF2980735.png?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course6.php" title="">遥感技术应用及发展</a></h3>
    <p>上传时间：07 02 课程ID：20182023104  
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course6.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- sixth package end -->
  
A;
if($temp==63){
echo $html6;} 
$html7=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course7.php"><img src="https://edu-image.nosdn.127.net/6CE1F9C631F5BA4EF0FADE575E526585.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course7.php" title="">航空航天概论</a></h3>
    <p>上传时间：07 02 课程ID：20182022193
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course7.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==3){
echo $html7;} 
$html8=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course8.php"><img src="https://edu-image.nosdn.127.net/E8448DD7703A745D89CB7FCC48AE6E9B.png?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course8.php" title="">自然计算方法导论</a></h3>
    <p>上传时间：07 02 课程ID：20182021299
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course8.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==15){
echo $html8;} 
$html9=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course9.php"><img src="https://edu-image.nosdn.127.net/288647B04DED46F53F2154ABF422099B.jpg?imageView&thumbnail=426y240&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course9.php" title="">宇宙新概念</a></h3>
    <p>上传时间：07 02 课程ID：20182022190
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course9.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==13){
echo $html9;} 
$html10=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course10.php"><img src="https://edu-image.nosdn.127.net/948C32728D21739C45D0BD2A7A218893.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course10.php" title="">信息素养与实践</a></h3>
    <p>上传时间：07 02 课程ID：20182053005
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course10.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==24){
echo $html10;} 
$html11=<<<A
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
    <div class="single-package">
    <div class="package-image">
    <a href="course11.php"><img src="https://edu-image.nosdn.127.net/045818517FBF0D5F6C2B3696FD36A114.jpg?imageView&thumbnail=510y288&quality=100&thumbnail=223x125&quality=100" alt=""></a>
    </div>
    <div class="package-content">
    <h3><a href="course11.php" title="">哲学导论</a></h3>
    <p>上传时间：07 02 课程ID：20182033001
    </p>
    </div>
    <div class="package-calto-action">
    <ul class="ct-action">
    <li><a href="course11.php" class="travel-booking-btn hvr-shutter-out-horizontal">进入课程</a></li>
    <li>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </li>
    </ul>
    </div>
    </div>
    </div> <!-- second package end -->
A;
if($temp==40){
            echo $html11;} 


        
    $X=$X+1;
    
}
?>
