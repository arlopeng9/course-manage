<?php   
//判断操作人员是否有权限进行对应操作
include_once '../inc/config.inc.php';
include_once '../inc/tool.inc.php';
if(!isset($_GET['message']) || !isset($_GET['url']) || !isset($_GET['return_url'])){
	exit();
}
$template['title']='确认';
$template['css']=array('style/public.css');

?>
<?php include 'inc/header.inc.php'?>
<div id="main" style = "margin-left:250px">
	<div class="title">确认</div>
	<form method="post">
 <?php echo $_GET['message']?> 
 <a style="color:red;" href="<?php echo $_GET['url']?>">确定</a> | <a style="color:#666;" href="<?php echo $_GET['return_url']?>">取消</a>
 </form>
 </div>