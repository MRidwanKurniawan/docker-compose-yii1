<?php
/* @var $this PropinsiController */
/* @var $data Propinsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propinsi')); ?>:</b>
	<?php echo CHtml::encode($data->propinsi); ?>
	<br />


</div>