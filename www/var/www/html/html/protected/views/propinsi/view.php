<?php
/* @var $this PropinsiController */
/* @var $model Propinsi */

$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Propinsi', 'url'=>array('index')),
	array('label'=>'Create Propinsi', 'url'=>array('create')),
	array('label'=>'Update Propinsi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Propinsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propinsi', 'url'=>array('admin')),
);
?>

<h1>View Propinsi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'propinsi',
	),
)); ?>
