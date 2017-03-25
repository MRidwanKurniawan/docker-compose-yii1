<?php
/* @var $this TblPegawaiDaoController */
/* @var $model TblPegawaiDao */

$this->breadcrumbs=array(
	'Tbl Pegawai Daos'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPegawaiDao', 'url'=>array('index')),
	array('label'=>'Create TblPegawaiDao', 'url'=>array('create')),
	array('label'=>'View TblPegawaiDao', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Manage TblPegawaiDao', 'url'=>array('admin')),
);
?>

<h1>Update TblPegawaiDao <?php echo $model->nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>