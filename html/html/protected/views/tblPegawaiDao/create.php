<?php
/* @var $this TblPegawaiDaoController */
/* @var $model TblPegawaiDao */

$this->breadcrumbs=array(
	'Tbl Pegawai Daos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPegawaiDao', 'url'=>array('index')),
	array('label'=>'Manage TblPegawaiDao', 'url'=>array('admin')),
);
?>

<h1>Create TblPegawaiDao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>