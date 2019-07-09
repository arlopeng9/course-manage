
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);
if(!isset($_COOKIE['cookie']['name'])){
    skip('login.php', 'error', '给我去登陆');
}
$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$php='lishi';
?>




<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>


<!DOCTYPE html>
<html>


<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../assets/css/layui.css">
    <link rel="stylesheet" href="../assets/css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <link href="css/style.css" rel="stylesheet" />
    <title>管理后台</title>
    <script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/ui.js"></script>
    <script type="text/javascript" src="admin/pagination.js"></script>
    <script type="text/javascript">
        //全局变量
        var numCount;       //数据总数量
        var columnsCounts;  //数据列数量
        var pageCount;      //每页显示的数量
        var pageNum;        //总页数
        var currPageNum ;   //当前页数

        //页面标签变量
        var blockTable;
        var preSpan;
        var firstSpan;
        var nextSpan;
        var lastSpan;
        var pageNumSpan;
        var currPageSpan;



        window.onload=function(){
            //页面标签变量
            blockTable = document.getElementById("blocks");
            preSpan = document.getElementById("spanPre");
            firstSpan = document.getElementById("spanFirst");
            nextSpan = document.getElementById("spanNext");
            lastSpan = document.getElementById("spanLast");
            pageNumSpan = document.getElementById("spanTotalPage");
            currPageSpan = document.getElementById("spanPageNum");

            numCount = document.getElementById("blocks").rows.length - 1;       //取table的行数作为数据总数量（减去标题行1）
            //alert(numCount);可以弹出窗口说明总数
            columnsCounts = blockTable.rows[0].cells.length;
            pageCount = 4;
            pageNum = parseInt(numCount/pageCount);
            if(0 != numCount%pageCount){
                pageNum += 1;
            }

            firstPage();
        };
    </script>
</head>
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">
							<div class="ydc-release-tab-head">
								<ul>
									<li class="hit">已选课程查看</li>
								</ul>
								<div class="ydc-release-amount">
                                        <span>
                                            今日已选课程数量：<em>#</em>
                                            /# <a href="standard.html" target="_blank">选课规则</a>
                                        </span>
								</div>
							</div>
							<div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
									<div class="clearfix">
									<form method="post">
										<div class="fl ydc-group-input">
											<input type="text"name="search"  placeholder="请输入关键词进行搜索">
											<button type="submit" name="submit" class="ydc-group-button">搜 索</button>
											
										</div>
										<button type="submit" class="ydc-group-button"onclick="href='class1.php'">返回</button>
										</form>
									</div>
									<div class="ydc-group-altogether">共<span>#</span>门课程</div>
									<div class="ydc-group-table">
									
									<div id="main" style = "margin-left:0px;font-size:15px">
									<div class="title" style = "font-size:20px">课程</div>
									<form method="post">
									<div class="container">
									<table  id="blocks" class="list" style="margin-top:25px;width:800px;table-layout:fixed">
										<tr>
											<th style = "width:100px"><h4>课程序号</h4></th>	 	 	
											<th style = "width:300px"><h4>名字</h4></th>
											<th><h4>任课老师</h4></th>
											<th><h4>课程ID</h4></th>
											<th><h4>学习时间</h4></th>
											
										</tr>
									<?php 
									
									if(isset($_POST['submit'])){
									    $query="select student_number from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
									    $result=execute($link,$query);
									    $S=mysqli_fetch_array($result);//学生号码
									    $query="select * from CM_student_course where student_number='{$S['student_number']}'";
									    
									    $result=execute($link,$query);
									    while($data=mysqli_fetch_assoc($result)){
									    
									        $query="select * from CM_course where cID='{$data['cID']}' and course_name like '%{$_POST['search']}%'";
									    
									        $result2=execute($link,$query);
									        $M=mysqli_fetch_array($result2);
									        if($M['course_name']==NULL){continue;}
									        $query="select * from CM_teacher where tID='{$M['tID']}'";
									    
									        $result3=execute($link,$query);
									        $T=mysqli_fetch_array($result3);
									        $url=urlencode("xuanze_delete.php?id={$M['cID']}");
									        $return_url=urlencode($_SERVER['REQUEST_URI']);
									        $message="你真的要撤掉这门课嘛 {$M['course_name']} 吗？";
									        $add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
									        
									        $info_url="courseinfo.php?cID={$data['cID']}";
									    
									        	
									        $html=<<<A
                   
			                             <tr>
				                            <td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				                            <td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				                            <td></br><h5>{$T['teacher_name']}</h5></td>
				                            <td></br><h5>{$M['course_college']}</h5></td>
									    
				                            <td></br><div class="alert open" style="color:#00F" onclick="mizhu.open(200, 450, '</br>课程详情', '$info_url' );"><h5>[查看详细]</h5></div><a href="$add_url"><h5>[撤课]</h5></a></td>
									    
			                            </tr>
									    
A;
									        echo $html;
									    }
									}else{ $query="select student_number from CM_student where register_name='{$_COOKIE['cookie']['name']}'";
	                                $result=execute($link,$query);
		                            $S=mysqli_fetch_array($result);//学生号码
		                            $query="select * from CM_student_course where student_number='{$S['student_number']}'";
	
		                              $result=execute($link,$query);
		                          while($data=mysqli_fetch_assoc($result)){
		
		                               $query="select * from CM_course where cID='{$data['cID']}'";
		    
		                                $result2=execute($link,$query);
		                                $M=mysqli_fetch_array($result2);
		                                $query="select * from CM_teacher where tID='{$M['tID']}'";
		    
		                                $result3=execute($link,$query);
		                               $T=mysqli_fetch_array($result3);
		                              $url=urlencode("xuanze_delete.php?id={$M['cID']}");
			                          $return_url=urlencode($_SERVER['REQUEST_URI']);
			                          $message="你真的要撤掉这门课嘛 {$M['course_name']} 吗？";
			                          $add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		                              $info_url="courseinfo.php?cID={$data['cID']}";      
			
                                      $html=<<<A
                                     
			                             <tr>
				                            <td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				                            <td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				                            <td></br><h5>{$T['teacher_name']}</h5></td>
				                            <td></br><h5>{$M['course_college']}</h5></td>
				
				                            <td></br><div class="alert open" style="color:#00F" onclick="mizhu.open(200, 450, '</br>课程详情', '$info_url');"><h5>[查看详细]</h5></div><a href="$add_url"><h5>[撤课]</h5></a></td>
		                                    
			                            </tr>
				
A;
			                        echo $html;
		                            }}
		                           
		                          ?>
	                        </table>
	        <div id="pagiDiv" align="left" style="width:1200px">
        <span id="spanFirst">First</span>  
        <span id="spanPre">Pre</span>  
        <span id="spanNext">Next</span>  
        <span id="spanLast">Last</span>  
        The <span id="spanPageNum"></span> Page/Total <span id="spanTotalPage"></span> Page
        </div>
        </div>
	                       </form>
                           </div>
                        
    	
									
	
	
						</div>
									</div>
								</div