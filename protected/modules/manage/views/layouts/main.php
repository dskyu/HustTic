<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="<?php echo Yii::app()->homeUrl.'public/manage/'?>js/jquery-1.5.1.js"></script>
<link href="<?php echo Yii::app()->homeUrl.'public/manage'?>/system/css/system.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->homeUrl.'public/manage'?>/css/share.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->homeUrl.'public/manage'?>/css/jquery.datepick.css" type="text/css" rel="stylesheet" media="screen"/>
</head>
<body>
<?php echo $this->renderPartial("application.modules.manage.views.layouts.header"); ?>
<div id="body_area">
	<div class="left">
		<?php echo $this->renderPartial("application.modules.manage.views.".$this->id.".left"); ?>
	</div>
	<div class="midarea">
		<?php echo $content; ?>
	</div>
	<div class="right">
		<?php echo $this->renderPartial("application.modules.manage.views.layouts.right"); ?>
	</div>
</div>
<div id="fotter">
	<?php echo $this->renderPartial("application.modules.manage.views.layouts.footer"); ?>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->homeUrl.'public/manage/'?>js/config.js"></script>
</body>
</html>