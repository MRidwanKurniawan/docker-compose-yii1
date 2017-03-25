<?php
/* @var $this TblPegawaiDaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Pegawai Daos',
);

$this->menu=array(
	array('label'=>'Create TblPegawaiDao', 'url'=>array('create')),
	array('label'=>'Manage TblPegawaiDao', 'url'=>array('admin')),
);
?>

<h1>Tbl Pegawai Daos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
