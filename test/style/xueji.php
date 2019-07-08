<?php

include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';


$link=connect();

$member_id=is_login($link);

include_once 'inc/head.inc.php';

  
    if(isset($_POST['submit2'])){
    if(empty($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
     
        if(empty($_POST['student_name'])){
            skip('xueji.php','error','请输入姓名');}
            if(empty($_POST['student_number'])){
                skip('xueji.php','error','请输入学号');}
                if(empty($_POST['student_sex'])){
                    skip('xueji.php','error','请输入性别');}
                $query="select register_name from  CM_student where register_name= '{$_COOKIE['cookie']['name']}'";
                 $result=execute($link, $query);
                 var_dump(mysqli_num_rows($result));
            if(mysqli_num_rows($result)<1){
                $query="select student_number from  CM_student where register_name= '{$_POST['student_number']}'";
                $result=execute($link, $query);
               
              
                if(mysqli_num_rows($result)>0){
                    skip('xueji.php','error','学号重复')   ;
                }
               if(1) {  
                    $query="insert into CM_student(student_name,student_number,student_sex,student_school,student_college,register_name) values('{$_POST['student_name']}','{$_POST['student_number']}','{$_POST['student_sex']}','{$_POST['student_school']}','{$_POST['student_college']}','{$_COOKIE['cookie']['name']}')";
                     execute($link, $query);
                     skip('xueji.php','ok','完成');
                }  else{
                    skip('xueji.php','error','内容有误')    ;
                }
            }else{
                skip('xueji.php','error','不能重复录入');
            }
             
             
    }
    if(isset($_POST['submit3'])){
        if(empty($_COOKIE['cookie']['name'])){
            skip('login.php', 'error', '给我去登陆');
        }
        $query="select register_name from  CM_student where register_name='{$_COOKIE['cookie']['name']}'  ";
    $result=execute($link, $query);
   
  
  if(mysqli_num_rows($result)>0){
      $query="delete from CM_student where register_name='{$_COOKIE['cookie']['name']}'  ";
      $result=execute($link, $query);
      skip('xueji.php', 'ok', '删除成功');
  }
    }
    
   

    include_once 'inc/head.inc.php';
    
    ?>
    
    <?php 
    $sml = "select * from sfk_bisainan where  sex = '男'";
    $result = mysqli_query($link,$sml);
    
    
    
   
  
    
    
  
        

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>denglujiemian</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

   <body class="bg-white" data-bg-color="bg-white" >
   
<div id="Layer1" style="position: absolute; width:100%; height:100%; z-index:-1">    
<img src="http://old.bz55.com/uploads/allimg/160105/139-160105154505.jpg" height="130%" width="100%"/>    
</div>
	   
        <div class="king-layout2-main mt15" style="width:960px;">
      
                                
						         </div>
    <div class="king-page-box" style="position: relative">
        <div class="king-layout1-header"></div>
       <div class="king-layout2-main mt15" style="width:960px;">
        <h2>学籍注册</h2>
            <form class="form-horizontal"method= "post"style=Padding-right:200>
                <div class="form-group clearfix "style=margin-top:200>
                
                    <label class="col-sm-3 control-label bk-lh30 pt0">姓名：</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control bk-valign-top" name="student_name"> </div>
                </div>
                <div class="form-group clearfix "style=margin-top:30>
                    <label class="col-sm-3 control-label bk-lh30 pt0">学号：</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control bk-valign-top" name="student_number">
                        <p class="help-block"></p>
                    </div>
                </div>
                
                <div class="form-group clearfix ">
                    <label class="control-label col-sm-3 bk-lh30 pt0">性别：</label>
                    <div class="col-sm-9">
                        <div class="radio pt0">
                            <label class="mr10">
                                <input type="radio" name="student_sex" class="bk-top5" value="男">
                                <span class="bk-lh30">男</span>
                            </label>
                            <label class="mr10">
                                <input type="radio" name="student_sex"  class="bk-top5" value="女">
                                <span class="bk-lh30">女</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group clearfix "style=margin-top:30>
                    <label class="col-sm-3 control-label bk-lh30 pt0">学校：</label>
                    <div class="col-sm-9">
                        <select  name="student_college"  class="form-control bk-valign-top">
                            <option value="实训886">实训886</option>
                            <option value="选择项2">选择项2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group clearfix "style=margin-top:30>
                    <label class="control-label col-sm-3 bk-lh30 pt0">学部：</label>
                    <div class="col-sm-9">
                        <div class="radio pt0">
                            <label class="mr10">
                                <input type="radio" name="student_school"  class="bk-top5" value="武汉街道口男子学部">
                                <span class="bk-lh30">武汉街道口男子学部</span>
                            </label>
                            <label class="mr10">
                                <input type="radio" name="student_school"  class="bk-top5" value="武汉大学工学部">
                                <span class="bk-lh30">武汉大学工学部</span>
                            </label>
                            <label class="mr10">
                                <input type="radio" name="student_school"  class="bk-top5" value="武汉大学妹子多学部">
                                <span class="bk-lh30">武汉大学妹子多学部</span>
                            </label>
                            <label class="mr10">
                                <input type="radio" name="student_school" class="bk-top5" value="医学部">
                                <span class="bk-lh30">医学部</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group clearfix"style=margin-top:30>
                    <div class="col-sm-9 col-sm-offset-3"style=Padding-right:70>
                        <button type="submit" name="submit2" class="king-btn mr10  king-success" value="提交">提交</button>
                        <button type="submit" name="submit3" class="king-btn mr10  king-success"value="提交数据有误,重新提交">重新提交</button>
                    </div>
                    	
                </div>
            </form>
            <div style=margin-left:200>
            <?php
		@$query="select * from  CM_student where register_name='{$_COOKIE['cookie']['name']}'  ";
		$result=execute($link, $query);
		$S=mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result)>0){
        echo "已录入,学生姓名：",$S['student_name'];
    }else{echo "未提交学籍材料";}
    ?>
    </div>
        </div>
    </div>
</body>

</head>
</html>

