<?php
/* @var $this MahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>

<h1>Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
