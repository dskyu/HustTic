function db_onblur_checkName(key,name)
{
	var value = $("#"+key).attr("value");
	if(value == "" || value == null)
	{
		$("#"+key+"_info").html(name+"不能为空！");
		return;
	}
	$.ajax({
		type:"get",
		url:webRoot+"/administrator/group/check?key="+key+"&value="+value,
		success:function(data)
		{
			if("success" == data)
			{
				$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
			}else{
				$("#"+key+"_info").html(name+"不可用！");
			}
		},
		error:function(data){
			alert("服务器出错！");
		}	
	});
}


function db_onblur_checkMaster(key,name)
{
	var value = $("#"+key).attr("value");
	if(value == "" || value == null)
	{
		$("#"+key+"_info").html(name+"不能为空！");
		return;
	}
	$.ajax({
		type:"get",
		url:webRoot+"/user/check?key="+key+"&value="+value,
		success:function(data)
		{
			if("fail" == data)
			{
				$("#"+key+"_info").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
			}else{
				$("#"+key+"_info").html(name+"不可用！");
			}
		},
		error:function(data){
			alert("服务器出错！");
		}	
	});
}