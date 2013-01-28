var webRoot = "/husttic";

$(document).ready(function(){
	init_date_selector();
});

function init_date_selector(){
		if($("#date_selector").datepick !== undefined){
		$("#date_selector").datepick({
			inline: true,
			dateFormat: 'yy-mm-dd',   //日期格式，自己设置
			yearRange: '1900:2100',//年份范围
			clearText:'清除',//下面的就不用详细写注释了吧，呵呵，都是些文本设置
			closeText:'关闭',
			prevText:'前一月',
			nextText:'后一月',
			currentText:' ',
			monthNames:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
		});
	}
}