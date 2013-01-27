<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level'); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherskill'); ?>
		<?php echo $form->textField($model,'otherskill',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'otherskill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail_url'); ?>
		<?php echo $form->textField($model,'thumbnail_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'thumbnail_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ori_url'); ?>
		<?php echo $form->textField($model,'ori_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ori_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobby'); ?>
		<?php echo $form->textField($model,'hobby',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hobby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weibo'); ?>
		<?php echo $form->textField($model,'weibo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'weibo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renren'); ?>
		<?php echo $form->textField($model,'renren',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'renren'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->