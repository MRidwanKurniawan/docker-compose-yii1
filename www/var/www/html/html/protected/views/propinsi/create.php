<?php
/* @var $this PropinsiController */
/* @var $model Propinsi */

$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propinsi', 'url'=>array('index')),
	array('label'=>'Manage Propinsi', 'url'=>array('admin')),
);
?>

<h1>Create Propinsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>