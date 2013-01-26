var imgw, imgh;
function preview(img, selection) {
	var scaleX = 48 / selection.width;
	var scaleY = 48 / selection.height;
	$('#preimg').css( {
		width : Math.round(scaleX * imgw) + 'px',
		height : Math.round(scaleY * imgh) + 'px',
		marginLeft : '-' + Math.round(scaleX * selection.x1) + 'px',
		marginTop : '-' + Math.round(scaleY * selection.y1) + 'px'
	});
	/*if ($('#imgpos'))
		$('#imgpos').attr(
				'value',
				selection.x1 + '_' + selection.y1 + '_'
						+ (selection.x2 - selection.x1)).attr('name', 'imgpos');*/
	document.getElementById("imgpos").value = selection.x1 + '_' + selection.y1 + '_' + (selection.x2 - selection.x1);
}
$(document).ready(function() {
	if ($('#imgpos').length) {

		imgw = $('#bigimg').width();
		imgh = $('#bigimg').height();
		var _ = $('#imgpos').attr('value').split('_');
		var pos = (_[2] != '0') ? {
			x1 : parseInt(_[0]),
			y1 : parseInt(_[1]),
			x2 : parseInt(_[0]) + parseInt(_[2]),
			y2 : parseInt(_[1]) + parseInt(_[2])
		} : {
			x1 : imgw > imgh ? (imgw - imgh) / 2 + 3 : 3,
			x2 : imgw > imgh ? (imgw + imgh) / 2 - 3 : imgw - 3,
			y1 : imgw > imgh ? 3 : (imgh - imgw) / 2 + 3,
			y2 : imgw > imgh ? imgh - 3 : (imgh + imgw) / 2 - 3
		};
		$('#bigimg').imgAreaSelect($.extend(pos, {
			aspectRatio : '1:1',
			x1:0,
			y1:0,
			x2:100,
			y2:100,
			onSelectChange : preview,
			onSelectBegin : preview,
			noNewSelect : 'true'
		}));
	}
});
