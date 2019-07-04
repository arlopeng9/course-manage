
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';

$link=connect();
$member_id=is_login($link);

$template['css']=array('style/xuanze.css');
foreach ($template['css'] as $val){
    echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
$php='xuanze';
?>




<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../assets/css/layui.css">
    <link rel="stylesheet" href="../assets/css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <title>管理后台</title>
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
            pageCount = 5;
            pageNum = parseInt(numCount/pageCount);
            if(0 != numCount%pageCount){
                pageNum += 1;
            }

            firstPage();
        };
    </script>
</head>

<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>
				<!-- right begin -->
				<div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">
							<div class="ydc-release-tab-head">
								<ul>
									<li class="hit">选择课程</li>
								</ul>
								<div class="ydc-release-amount">
                                        <span>
                                            今日已选课程数量：<em>0</em>
                                            /6 <a href="standard.html" target="_blank">选课规则</a>
                                        </span>
								</div>
							</div>
							<div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
									<div class="clearfix">
										<form method="post">
										<div class="fl ydc-group-input">
										
										    <input type="text" name="search" placeholder="请输入关键词进行课程查询搜索">											
											 
											<button name="submit" type="submit" class="ydc-group-button">搜 索</button>
										</div>
										</form>
									</div>
									<div class="ydc-group-altogether">共<span>1</span>门课程</div>
									<div class="ydc-group-table">
									
									<div id="main" style = "margin-left:0px;font-size:15px">
									<div class="title" style = "font-size:20px">课程</div>
									<form method="post">
									<div class="container">
									<table  id="blocks" class="list" style="margin-top:25px;width:950px;table-layout:fixed">
										<tr>
											<th style = "width:100px"><h4>课程序号</h4></th>	 	 	
											<th style = "width:400px"><h4>名字</h4></th>
											<th><h4>任课老师</h4></th>
											<th><h4>院系</h4></th>
											<th><h4>操作</h4></th>
										</tr>
<?php if(isset($_POST['submit'])){
		$query="select * from CM_course where course_name like '%{$_POST['search']}%'";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
		    $query="select * from CM_course where cID='{$data['cID']}'";
		    
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);
		    $query="select * from CM_teacher where tID='{$M['tID']}'";
		    
		    $result3=execute($link,$query);
		    $T=mysqli_fetch_array($result3);		    
			$url=urlencode("xuanze_add.php?id={$data['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$data['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		
			
$html=<<<A
			<tr>
				<td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				<td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				                            <td></br><h5>{$T['teacher_name']}</h5></td>
				                            <td></br><h5>{$M['course_college']}</h5></td>
				<td></br><a href="javascript:course();"><h5>[查看详细]</h5></a><a href="$add_url"><h5>[选课]</h5></a></td>
			</tr>
				
A;
			echo $html;
		}}else{
		$query="select * from CM_course";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
		    $query="select * from CM_course where cID='{$data['cID']}'";
		    
		    $result2=execute($link,$query);
		    $M=mysqli_fetch_array($result2);
		    $query="select * from CM_teacher where tID='{$M['tID']}'";
		    
		    $result3=execute($link,$query);
		    $T=mysqli_fetch_array($result3);
			$url=urlencode("xuanze_add.php?id={$data['cID']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要选择这门课嘛 {$data['course_name']} 吗？";
			$add_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
			
		
			
$html=<<<A
			<tr>
				<td></br><input class="sort" type="button" name="sort[{$data['cID']}]" value="{$data['cID']}"  style = "margin-left:12px;font-size:10px"/></td>
				<td></br><h5>{$M['course_name']}[cID:{$M['cID']}]</h5></td>
				                            <td></br><h5>{$T['teacher_name']}</h5></td>
				                            <td></br><h5>{$M['course_college']}</h5></td>
				<td></br><a href="javascript:course();"><h5>[查看详细]</h5></a><a href="$add_url"><h5>[选课]</h5></a></td>
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
								</div>
								<!--  该部分为好看的分页样式，功能未实现，保留以后实现
								<div class="ydc-pagination">
									<ol>
										<li class="ydc-previous-item">
											<button class="ydc-previous-item-btn-medium ydc-disabled">
												<span>上一页</span>
											</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium cur">1</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium">2</button>
										</li>
										<li>
											<button class="ydc-previous-item-btn-medium">3</button>
										</li>
										<li class="ydc-previous-item">
											<button class="ydc-previous-item-btn-medium">
												<span>下一页</span>
											</button>
										</li>
										<li class="ydc-item-quick">
											第<div class="ydc-item-quick-kun"><input type="number" aria-invalid="false" class=""></div>页
											<button style="margin-left:5px;" class="ydc-previous-item-btn-medium">
												<span>跳转</span>
											</button>
										</li>
									</ol>
								</div>
								-->
								<div class="ydc-right-banner">
									<div class="slideshow-container">
										<a href="https://baidu.com/" target="_blank" class="mySlides fade">
											<img src="person/images/ad/ad1.jpg" style="width:100%">
										</a>
										<a href="https://baidu.com" target="_blank" class="mySlides fade">
											<img src="person/images/ad/ad2.jpg" style="width:100%">
										</a>
										<a href="http://www.baidu.com/" target="_blank" class="mySlides fade">
											<img src="person/images/ad/ad3.jpg" style="width:100%">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php include_once 'inc/leaft_head_end.php';?>
<!-- content YDC end -->

	<script type="text/javascript" src="person/js/jquery.min.js"></script>
	<script type="text/javascript">
	    var slideIndex = 0;
	    showSlides();

	    function showSlides() {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        for (i = 0; i < slides.length; i++) {
	            slides[i].style.display = "none";
	        }
	        slideIndex++;
	        if (slideIndex> slides.length) {slideIndex = 1}
	        slides[slideIndex-1].style.display = "block";
	        setTimeout(showSlides, 3000); // 滚动时间
	    }
	</script>

	<script type="text/javascript">
	    $(function(){
	        $('.ydc-tabPanel ul li').click(function(){
	            $(this).addClass('hit').siblings().removeClass('hit');
	            $('.ydc-panes>div:eq('+$(this).index()+')').show().siblings().hide();
	        })
	    })
	</script>

</body>
</html>




