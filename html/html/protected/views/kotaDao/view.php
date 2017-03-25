<?php
/* @var $this KotaDaoController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kota', 'url'=>array('index')),
	array('label'=>'Create Kota', 'url'=>array('create')),
	array('label'=>'Update Kota', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kota', 'url'=>array('admin')),
);
?>

<h1>View Kota #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'propinsi_id',
		'nama_kota',
	),
)); ?>
