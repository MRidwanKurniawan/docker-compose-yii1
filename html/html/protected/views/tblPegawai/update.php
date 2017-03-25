<?php
/* @var $this TblPegawaiController */
/* @var $model TblPegawai */

$this->breadcrumbs=array(
	'Tbl Pegawais'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPegawai', 'url'=>array('index')),
	array('label'=>'Create TblPegawai', 'url'=>array('create')),
	array('label'=>'View TblPegawai', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Manage TblPegawai', 'url'=>array('admin')),
);
?>

<h1>Update TblPegawai <?php echo $model->nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>