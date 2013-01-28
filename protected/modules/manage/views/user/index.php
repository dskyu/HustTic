<?php
$this->pageTitle=Yii::app()->name . ' - 个人信息';
$this->breadcrumbs=array(
	'Users',
);


?>

<?php if(Yii::app()->user->hasFlash('index')): 
 $message = Yii::app()->user->getFlash('index'); ?>
	<?php if ($message=='registersuccess'){   ?>
	     <h1>注册成功</h1>
	<?php }	else if($message=='registerlogin'){ ?>
		  <h1>登录再注册</h1>
	<?php } ?>
	
<div class="flash-success">
	<?php if ($message=='registersuccess'){
		  	 echo '恭喜您，成为了HustTic的一名会员，让我们快乐地去享受我们的大学时间吧~';
		  }	else if($message=='registerlogin'){
		  	 echo '请先退出登录再注册';
		  }
	?>
</div>

<?php else: ?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array(
		'class'=>'CLinkPager',
		'header'=>'',
		'prevPageLabel'=>'上一页',
        'nextPageLabel'=>'下一页',
	),
)); ?>


<?php endif; ?>