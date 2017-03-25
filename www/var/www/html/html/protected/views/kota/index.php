<?php
/* @var $this KotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kotas',
);

$this->menu=array(
	array('label'=>'Create Kota', 'url'=>array('create')),
	array('label'=>'Manage Kota', 'url'=>array('admin')),
);
?>

<h1>Kotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
