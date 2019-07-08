function timer(){
window.setInterval(function () {
	var time_code = 1;
	console.log("开始计时");
    $.ajax({
		url:location.href,
		data:{"time_code":time_code},
		type:"POST",
	  success:function(data){
		  console.log("传值成功");
	  },
	   error:function(){
		  console.log("传值失败");
	  }
      });
}, 5000);
}