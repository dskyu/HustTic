function changeImg()
{
	$("#identify_code").attr("src",webRoot+"/user/imgcode");
}

function db_onblur_check(key,name)
{
	var value = $("#"+key).attr("value");
	if(value == "" || value == null)
	{
		$("#"+key+"_info").html("<p class='warning'>"+name+"不能为空！</p>");
		return;
	}
	$.ajax({
		type:"get",
		url:webRoot+"/user/check?key="+key+"&value="+value,
		success:function(data)
		{
			if("success" == data)
			{
				$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
			}else{
				$("#"+key+"_info").html("<p class='warning'>"+name+"不可用！</p>");
			}
		},
		error:function(data){
		}	
	});
}

function db_onblur_checkEmail(key,name)
{
	var pattern = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/; 
	var value = $("#"+key).attr("value");
	if(value == "" || value == null)
	{
		$("#"+key+"_info").html("<p class='warning'>"+name+"不能为空！</p>");
		return;
	}else if(!pattern.test(value)){
		$("#"+key+"_info").html("<p class='warning'>"+name+"不可用！</p>");
		return;
	}
	$.ajax({
		type:"get",
		url:webRoot+"/user/check?key="+key+"&value="+value,
		success:function(data)
		{
			if("success" == data)
			{
				$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
			}else{
				$("#"+key+"_info").html("<p class='warning'>"+name+"不可用！</p>");
			}
		},
		error:function(data){
		}	
	});
}

function page_onblur_check(key,name)
{
	value = $("#"+key).attr("value");
	if(value == null || value == "")
	{
		if(key == "");
		$("#"+key+"_info").html("<p class='warning'>"+name+"不能为空！</p>");
	}
}

function page_onpress_checkNumber(e) 
{ 
     var k = window.event ? e.keyCode:e.which; 
     if (((k >= 48) && (k <= 57)) || k==8 || k==0) 
     { 
     }else { 
         if(window.event) 
         { 
               window.event.returnValue = false; 
         }else 
         { 
               e.preventDefault();
         } 
     } 
} 

function checkPWD(key, value)
{
	if(value == null || value == "")
	{
		$("#"+key+"_info").html("<p class='warning'>密码不能为空！</p>");
	}else if(value.length < 3){
		$("#"+key+"_info").html("<p class='warning'>密码长度不能小于3！</p>");
	}else if(value.length > 16){
		$("#"+key+"_info").html("<p class='warning'>密码长度不能大于16！</p>");
	}else{
		$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
	}
}

function confirmPWD(key, value)
{
	if(value == null || value == "")
	{
		$("#"+key+"_info").html("<p class='warning'>密码不能为空！</p>");
	}else if(value.length < 3){
		$("#"+key+"_info").html("<p class='warning'>密码长度不能小于3！</p>");
	}else if(value.length > 16){
		$("#"+key+"_info").html("<p class='warning'>密码长度不能大于16！</p>");
	}else{
		$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
	}
	var password = document.getElementById('password').value;
	if(value !== password){
		$("#"+key+"_info").html("<p class='warning'>两次密码不一致！</p>");
	}
}

function checkIdentify(key,name)
{
	value = $("#"+key).attr("value");
	if (value == "" || value == null)
	{
		$("#identify_info").html("<p class='warning'>"+name+"不能为空！</p>");
	}else{
		$("#identify_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
	}
}
