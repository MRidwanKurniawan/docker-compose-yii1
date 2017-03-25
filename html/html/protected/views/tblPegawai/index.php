<?php
/* @var $this TblPegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Pegawais',
);

$this->menu=array(
	array('label'=>'Create TblPegawai', 'url'=>array('create')),
	array('label'=>'Manage TblPegawai', 'url'=>array('admin')),
);
?>

<h1>Tbl Pegawais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
