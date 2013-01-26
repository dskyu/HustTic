$(document).ready(function(){
	init_onblur_front_empty();
	init_onchange_front_format();
	check_onchange_db_user();
});

function init_onchange_front_format(){
	$("#email").blur(function(){
		var value = $(this).attr("value");
		if(value==null || value==""){
			$("#email_info").html("邮件不能为空");
			return;
		}
		var email = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
		if(!email.test(value)){
			$("#email_info").html("邮箱格式不对");
			return;
		}
		$("email_img").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
	});
	
	$("#phone").blur(function(){
		var value =$(this).attr("value");
		if(value==null || value=="")
		{
			$("#phone_img").html("");
			$("#phone_info").html("联系电话不能为空！");
			return;
		}
		var reg =/^((\+86)|(86))?(1)\d{10}$/;
		if(!reg.test(value))
		{
			$("#phone_info").html("电话格式不对");
			$("#phone_img").html("");
			return;
		}
		$("#phone_info").html("");
		$("#phone_img").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
	});
	
	$("#page").blur(function(){
		var value=$(this).attr("value");
		if(value!=null && value!="")
		{
			var url = "^((https|http|ftp|rtsp|mms)?://)"
				+ "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" //ftp的user@
				+ "(([0-9]{1,3}.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
				+ "|" // 允许IP和DOMAIN（域名）
				+ "([0-9a-z_!~*'()-]+.)*" // 域名- www.
				+ "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]." // 二级域名
				+ "[a-z]{2,6})" // first level domain- .com or .museum
				+ "(:[0-9]{1,4})?" // 端口- :80
				+ "((/?)|" // a slash isn't required if there is no file name
				+ "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
			var re=new RegExp(url); 
			if(!re.test(value))
			{
				$("#page_info").html("非法链接！");
				$("#page_img").html("");
				return;
			}
			$("#page_info").html("");
			$("#page_img").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
		}
		
	});
}
function init_onblur_front_empty()
{
	var inputs = $(".em").each(
			function(){
				$(this).blur(function(){
					var alt = $(this).attr("alt");
					var id = $(this).attr("id");
					var value = $(this).attr("value");
					if(value=="" || value==null)
					{
						$("#"+id+"_info").html(alt+"不能为空！");
						$("#"+id+"_img").html("");
					}else{
						$("#"+id+"_info").html("");
						$("#"+id+"_img").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
					}
				});
			}
	);
}
function check_onchange_db_user()
{
	$("#master").blur(function(){
		var value = $("#master").attr("value");
		if(value=="" ||value==null){
			$("#master_info").html("负责人不能为空！");
			return;
		}
		$.ajax({
			type:'get',
			url:webRoot+'/administrator/club/check?key=username&value='+value,
			success:function(data){
				if(data != "false"){
					$("#master").attr("value",value+"("+data+")");
					$("#master_info").html("");
					$("#master_img").html("<img src='"+webRoot+"/public/images/tickmark.png'/>");
				}else{
					$("#master_img").html("");
					$("#master_info").html("用户不存在！");
				}
			},
			error:function(){
				$("#master_img").html("");
				$("#master_info").html("用户不存在！");
			}
		});
	});
}

