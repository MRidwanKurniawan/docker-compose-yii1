<?php
/* @var $this KotaController */
/* @var $data Kota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propinsi_id')); ?>:</b>
	<?php echo CHtml::encode($data->propinsi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kota')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kota); ?>
	<br />


</div>