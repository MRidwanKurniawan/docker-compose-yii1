<?php
/* @var $this TblPegawaiDaoController */
/* @var $model TblPegawaiDao */

$this->breadcrumbs=array(
	'Tbl Pegawai Daos'=>array('index'),
	$model->nip,
);

$this->menu=array(
	array('label'=>'List TblPegawaiDao', 'url'=>array('index')),
	array('label'=>'Create TblPegawaiDao', 'url'=>array('create')),
	array('label'=>'Update TblPegawaiDao', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Delete TblPegawaiDao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPegawaiDao', 'url'=>array('admin')),
);
?>

<h1>View TblPegawaiDao #<?php echo $model->nip; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip',
		'nama',
		'alamat',
		'tanggal_lahir',
		'agama',
	),
)); ?>
