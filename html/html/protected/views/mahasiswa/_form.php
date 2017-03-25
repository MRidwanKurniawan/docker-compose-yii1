<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true,
						  'validateOnType'=>true,
						  'validateOnChange'=>true,),
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<div id="radioButtonList">
			<?php echo $form->radioButtonList($model,'jenis_kelamin',
						array('L'=>'Laki-laki','P'=>'Perempuan'),
						array('labelOptions'=>array('style'=>'display:inline'),
						'separator'=>'',));?>
			<?php echo $form->error($model,'jenis_kelamin'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->dropDownList($model,'agama',
				array('1'=>'Islam',
					  '2'=>'Protestan',
					  '3'=>'Katolik',
					  '4'=>'Hindu',
					  '5'=>'Budha',
					  '6'=>'Lainya'), array('empty'=>'-Pilihan-'));?>
		<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
						'model'=>$model,
						'attribute'=>'tanggal_lahir',
						'value'=>$model->tanggal_lahir,
							'options'=>array(
								'dateFormat'=>'yy-mm-dd',
								'showOn'=>'button',
								'yearRange'=>'-60',
								'changeMonth'=>'true',
								'changeYear'=>'true',
								'contrainInput'=>'false',
								'duration'=>'fast',
								'showAnim'=>'slide',
								), 'htmlOptions'=>array('size'=>20),)); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->