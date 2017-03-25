<?php
/* @var $this KotaController */
/* @var $model Kota */

$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kota', 'url'=>array('index')),
	array('label'=>'Create Kota', 'url'=>array('create')),
	array('label'=>'View Kota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kota', 'url'=>array('admin')),
);
?>

<h1>Update Kota <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>