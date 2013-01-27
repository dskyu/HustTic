<?php
$this->pageTitle=Yii::app()->name . ' - 错误';
$this->breadcrumbs=array(
	'错误',
);
?>

<b>Error <?php echo $code; ?></b>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>