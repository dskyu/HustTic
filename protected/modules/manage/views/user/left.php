<?php if (!Yii::app()->user->isGuest){?>
<div class="left_menutop"></div>
<div class="left_menu_area">
 	<div align="right">
		<a href="#" class="left_menu">个人信息</a><br />
		<a href="<?php echo Yii::app()->homeUrl?>manage/user/create" class="left_menu">创建</a><br />
		
	</div>
</div>

<?php }?>