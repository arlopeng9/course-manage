<?php

include_once 'inc/tool.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/config.inc.php';
include_once 'inc/upload.inc.php';
$link=connect();
$member_id=is_login($link);
$php='zhanghao';


@$query="select * from CM_register where register_name='{$_COOKIE['cookie']['name']}'";
$result_memebr=execute($link, $query);
if(mysqli_num_rows($result_memebr)!=1){
    skip('index.php', 'error', '你所访问的会员不存在!');
}
$data_member=mysqli_fetch_assoc($result_memebr);

$query="select * from CM_student where register_name='{$data_member['register_name']}'";
$result=execute($link, $query);
$student=mysqli_fetch_assoc($result);
$template['title']='会员中心';
$template['css']=array('style/public.css','style/list.css','style/member.css');
if(isset($_POST['submit'])){
    $save_path='uploads'.date('/Y/m/d/');//写上服务器上文件系统的路径，而不是url地址
    $upload=upload($save_path,'8M','photo');
    if($upload['return']){
        $query="update CM_register set register_photo='{$upload['save_path']}' where register_name='{$_COOKIE['cookie']['name']}'";
        execute($link, $query);
        if(mysqli_affected_rows($link)==1){
            skip("zhanghao.php?id={$_COOKIE['cookie']['name']}",'ok','头像设置成功！');
        }else{
            skip('zhanghao.php','error','头像设置失败，请重试');
        }
    }else{
        skip('zhanghao.php', 'error',$upload['error']);
    }
}
    include_once 'inc/head.inc.php';
    
    ?>
    

<?php include_once 'inc/head.inc.php';
// var_dump($_COOKIE['cookie']);?>

<!DOCTYPE html>



<?php include_once 'inc/person_head.php';?>

<!-- content YDC begin -->

	<?php include_once 'inc/leaft_head.php'; ?>





<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all">

<link rel="stylesheet" type="text/css" href="css1//css1/ycbootstrap.css">
<link rel="stylesheet" type="text/css" href="css1/css1/reset.css">

<script src="js1/js/jquery.min.js" type="text/javascript"></script>
<script src="plugins/cover_js/iscroll-zoom.js" type="text/javascript" charset="utf-8"></script>
<script src="plugins/cover_js/hammer.js" type="text/javascript" charset="utf-8"></script>
<script src="plugins/cover_js/lrz.all.bundle.js" type="text/javascript" charset="utf-8"></script>
<script src="plugins/cover_js/jquery.photoClip.min.js" type="text/javascript" charset="utf-8"></script>



</head>

<body>
    <div class="ydc-column ydc-column-8">
					<div class="ydc-release-content">
						<div class="ydc-tabPanel ydc-tabPanel-release">                                                                                                                                                                   
                                                     <div class="ydc-panes">
								<div class="ydc-pane" style="display:block;">
									
									<div class="ydc-group-table">
									<br><br>
									<div id="main" style = "margin-left:0px;font-size:15px">
								<script src="/demos/googlegg.js"></script>
<div class="yc-upload-wrap">
	<div class="yc-upload-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0;">
					
					<div class="ycupload-mainbox">
						<div class="ycupload-main1" style="overflow:hidden;padding-left:25px;">
							<span style="float:left;color:#ff5a5a;font-size:14px;line-height:60px;font-weight:900;margin-right:7px;">
								&middot;
							</span>
							<span style="float:left;color:#333;font-size:16px;line-height:60px;margin-right:28px;">
								头像
							</span>
						</div>
						<div class="ycupload-line"></div>
						<div style="height:30px;"></div>
						<div  style="min-height:1px;">
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-right:0;padding-left:36px;">
										<!--<a href="javascript:void(0);" class="cover-uploadBtn">
											<img src="img/yc_uploadimg_06.png">
											<div id="clipArea"></div>
											<input type="file" id="file">
											<button id="clipBtn">截取</button>
										</a>
										<div id="view"></div>-->
										<div style="min-height:1px;line-height:160px;text-align:center;position:relative;" ontouchstart="">
											<div class="cover-wrap" style="display:none;position:fixed;left:0;top:0;width:100%;height:100%;background: rgba(0, 0, 0, 0.4);z-index: 10000000;text-align:center;">	
												<div class="" style="width:900px;height:600px;margin:100px auto;background-color:#FFFFFF;overflow: hidden;border-radius:4px;">
													<div id="clipArea" style="margin:10px;height: 520px;"></div>
													<div class="" style="height:56px;line-height:36px;text-align: center;padding-top:0px;">
														<button id="clipBtn" style="width:120px;height: 36px;border-radius: 4px;background-color:#ff8a00;color: #FFFFFF;font-size: 14px;text-align: center;line-height: 36px;outline: none;"class="submit" type="submit" name="submit" value="保存">保存</button>
													</div>
												</div>
											</div>
											<div id="view" style="width:214px;height:160.5px;" title="请上传 428*321 的封面图片">
											 <img src="<?php if($data_member['register_photo']!=''){echo SUB_URL.$data_member['register_photo'];}else{echo 'style/photo.jpg';}?>">
											</div>
											<div style="height:10px;"></div>
											<div  style="width:140px;height:32px;border-radius: 4px;background-color:#ff8a00;color: #FFFFFF;font-size: 14px;text-align:center;line-height:32px;outline:none;margin-left:37px;position:relative;">
												上传头像
												<input type="file" id="file" style="cursor:pointer;opacity:0;filter:alpha(opacity=0);width:100%;height:100%;position:absolute;top:0;left:0;">
											</div>
										</div>
										
										
									</div>
								</div>
							</div>
							
						</div>
						<div style="height:25px;"></div>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">

//上传封面
//document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
var clipArea = new bjj.PhotoClip("#clipArea", {
	size: [428, 321],// 截取框的宽和高组成的数组。默认值为[260,260]
	outputSize: [428, 321], // 输出图像的宽和高组成的数组。默认值为[0,0]，表示输出图像原始大小
	//outputType: "jpg", // 指定输出图片的类型，可选 "jpg" 和 "png" 两种种类型，默认为 "jpg"
	file: "#file", // 上传图片的<input type="file">控件的选择器或者DOM对象
	view: "#view", // 显示截取后图像的容器的选择器或者DOM对象
	ok: "#clipBtn", // 确认截图按钮的选择器或者DOM对象
	loadStart: function() {
		// 开始加载的回调函数。this指向 fileReader 对象，并将正在加载的 file 对象作为参数传入
		$('.cover-wrap').fadeIn();
		console.log("照片读取中");
	},
	loadComplete: function() {
		 // 加载完成的回调函数。this指向图片对象，并将图片地址作为参数传入
		console.log("照片读取完成");
	},
	//loadError: function(event) {}, // 加载失败的回调函数。this指向 fileReader 对象，并将错误事件的 event 对象作为参数传入
	clipFinish: function(dataURL) {
		 // 裁剪完成的回调函数。this指向图片对象，会将裁剪出的图像数据DataURL作为参数传入
		$('.cover-wrap').fadeOut();
		$('#view').css('background-size','100% 100%');
		console.log(dataURL);
	}
});
//clipArea.destroy();
</script>
                       <div class="king-container clearfix">
            <div class="container-fluid mb0 ">
                <div class="row">
                    <div class="col-md-4">
						<form class="form-horizontal"method= "post" style="margin-left: 50px;padding-top:30px">
               					   
                                  <div class="form-group clearfix ">
                   				   <label style="color:#333;font-size:16px;">账号：<?php echo $data_member ['register_name']?> </label>
                    			  </div>
              					  <div class="form-group clearfix ">
                  					  <label style="color:#333;font-size:16px;">学号：<?php echo $student ['student_number']?></label>
                    			 
              					  </div>
                
                				<div class="form-group clearfix ">
                    			<label style="color:#333;font-size:16px;">性别：<?php echo $student ['student_sex']?> </label>
                    			
               				    </div>
              				    <div class="form-group clearfix ">
                   			   <label style="color:#333;font-size:16px;">院系：<?php echo $student ['student_school']?> </label>
                    		   
                            </div>
               						 <div class="form-group clearfix ">
                           <label style="color:#333;font-size:16px;"> 大学：<?php echo $student ['student_college']?></label>
                         
                        </div>
                         
                    </form></div>
                    <div class="col-md-8"><label> </label><label style="color:#333;font-size:22px;">个人介绍:</label>
                    <div > <br><label>123</label></div>
                    </div>
                   
                    
                           </div>
    	 </div>
            </div>
        </div>
									
	
	
									</div>
									</div>
								</div>   
                                                         
									
											
                     </div>
						</div>
					</div>
				<?php include_once 'inc/leaft_head_end.php';?>          
               
        
</body>




</html>