<?php
/* @var $this TblPegawaiController */
/* @var $model TblPegawai */

$this->breadcrumbs=array(
	'Tbl Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPegawai', 'url'=>array('index')),
	array('label'=>'Manage TblPegawai', 'url'=>array('admin')),
);
?>

<h1>Create TblPegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>