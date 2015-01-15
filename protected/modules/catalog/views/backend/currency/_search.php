<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cursetorub'); ?>
		<?php echo $form->textField($model,'cursetorub'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prefix'); ?>
		<?php echo $form->textField($model,'prefix',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beforeprefix'); ?>
		<?php echo $form->textField($model,'beforeprefix'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curseauto'); ?>
		<?php echo $form->textField($model,'curseauto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->