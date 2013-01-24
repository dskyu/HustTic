<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<b>Error <?php echo $code; ?></b>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>