$("input[id='getcode']").click(btnCheck);
 
     /**
      * [btnCheck 按钮倒计时常用于获取手机短信验证码]
      */
     function btnCheck() {
		
		 var mail = $("input[id = 'member_mail']").val();
		  function vertiCodeSend(){
			  var data;
      $.ajax({
		  async:false,
      url:"sentcode.php",  //发送验证码的php页面
      data:{"member_mail":mail},//传入后台
      type:"POST",//类型
	  dataType:"json",
	  success:function(result){
		  data = result.a;
	  }
      });
	  console.log(data);
	  return data;
    }
		if(mail ==''){
			mizhu.alert('提示信息','输入邮箱');
			return;
		}else{
			$("input[id='confirm_code']").val(vertiCodeSend());
			 $(this).addClass("on");
 
         var time = 60;
		 
         $(this).attr("disabled", true);
		
        
		
		
		
		 var timer = setInterval(function() {
             if (time == 0) {
 
                 clearInterval(timer);
 
                 $("input[id='getcode']").attr("disabled", false);
 
                 $("input[id='getcode']").val("获取验证码");
				 $("input[id='confirm_code']").val('');
 
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