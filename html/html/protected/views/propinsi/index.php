<?php
/* @var $this PropinsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propinsis',
);

$this->menu=array(
	array('label'=>'Create Propinsi', 'url'=>array('create')),
	array('label'=>'Manage Propinsi', 'url'=>array('admin')),
);
?>

<h1>Propinsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
