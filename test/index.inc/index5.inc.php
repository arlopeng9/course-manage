
<!-- Scroll to top-->

    <!-- ============================
            JavaScript Files
    ============================= -->

    <!-- jquery latest version -->
    <!-- <script src="js/vendor/jquery-3.2.0.min.js"></script>-->
	<!--<script src="js/jquery-1.7.1.min.js"></script>-->
	<script src="js/ui.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/lq-score.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>  
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- counter js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- Jquery plugin -->
    <script src="js/plugins.js"></script>
    <!-- select2 js plugin -->
    <script src="js/select2.min.js"></script>    
    <script src="js/colors.js"></script>
    <!-- Jquery plugin -->
    <script src="js/jquery-customselect.js"></script>
    <!-- main js -->
    <script src="js/custom.js"></script>
	
	<script>
		/*
		属性参数介绍：
			$tipEle--------提示元素，请传入jquery对象
			fontSize-------大小，字符串类型
			isReScore------是否允许重新评分
			tips-----------提示，可以是default默认消息，可以传模板字符串，也可以传长度为5的数组
			zeroTip--------无分数提示，字符串类型
			score----------分数，小数、整数都可以
			callBack-------评分回调，会返回分数和插件元素李，例：function(score,ele){}
			content--------内容
			defultColor----默认颜色(未选中的颜色)
			selectColor----选中后的颜色，可以传单个字符串，也可以传长度为5的数组
		*/
		$(function () {
			//demo1
			$("#demo1").lqScore();
			//demo2
			$("#demo2").lqScore({
				callBack: function (score, ele) {
					alert(score);
				}
			});
			//demo3
			$("#demo3").lqScore({
				$tipEle: $("#tip3"), //提示必须要指定显示的元素，显示样式由你自己定义，如果你不擅长css，可以使用demo中的样式
				tips: ["不推荐", "一般", "不错", "很棒", "极力推荐！"],
				zeroTip: "未评分"
			});
			//demo4
			$("#comment").lqScore({
				$tipEle: $("#score"),
				score: <?php echo $course['course_score']?>,
				fontSize:"35px"
				//如果需要设置后还能评分，请添加[isReScore:true]属性
			});
			//demo5
			$("#demo5").lqScore({
				content: "♀" //可以传图标
			});
			//demo6
			$("#demo6").lqScore({
				fontSize: "35px"
			});
			//demo7
			$("#demo7").lqScore({
				//此处修改为单颜色，若需要修改为多颜色，请传入长度为5的数组
				selectColor: "#8eb9f5",
			});
			//demo8
			$("#demo8").lqScore({
				isReScore: true//允许重新评分
			});
			//demo9
			$("#demo9").lqScore({
				$tipEle: $("#tip9"),
				tips: "default" //默认提示
			});
			//demo10
			$("#demo10").lqScore({
				$tipEle: $("#tip10"),
				tips: "我是{{lq-score}}" //  {{lq-score}}这是一个模板，分数值会将其替换
			});
		});
	</script>