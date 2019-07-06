$("input[id='getcode']").click(btnCheck);
 
     /**
      * [btnCheck 按钮倒计时常用于获取手机短信验证码]
      */
     function btnCheck() {
		 var mail = $("input[id = 'member_mail']").val();
		if(mail ==''){
			alert('输入邮箱');
			return;
		}else{
			         $(this).addClass("on");
 
         var time = 60;
		 
         $(this).attr("disabled", true);
         var timer = setInterval(function() {
		
		
             if (time == 0) {
 
                 clearInterval(timer);
 
                 $("input[id='getcode']").attr("disabled", false);
 
                 $("input[id='getcode']").val("获取验证码");
 
                 $("input[id='getcode']").removeClass("on");
             } else {
                 
                 $("input[id='getcode']").val(time + "秒");
                 
                 time--;
 
             }
 
         }, 1000);
		// var a = document.getElementById("isclick");
		//a.val("已被点击")  ;
		}
 

 
     }








 




