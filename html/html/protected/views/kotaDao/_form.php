<?php
/* @var $this KotaDaoController */
/* @var $model Kota */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php if (Yii::app()->user->hasFlash('ada kesalahan')):?>
	<div class="flash-error" >
	<?php echo Yii::app()->user->getFlash('ada kesalahan');?>
	</div>
	<?php endif; ?>
 
	<div class="row">
		<?php echo $form->labelEx($model,'nama_kota'); ?>
		<?php echo $form->textField($model,'nama_kota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kota'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'propinsi_id'); ?>
		<?php echo $form->dropDownList($model,'propinsi_id',CHtml::listData(Propinsi::model()->findAll(),
										'id','propinsi'),
				array('prompt'=>'=pilihan=', 'style'=>'width:200px;')); ?>

		<?php echo $form->error($model,'propinsi_id'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->