<?php
/* @var $this TblPegawaiController */
/* @var $model TblPegawai */

$this->breadcrumbs=array(
	'Tbl Pegawais'=>array('index'),
	$model->nip,
);

$this->menu=array(
	array('label'=>'List TblPegawai', 'url'=>array('index')),
	array('label'=>'Create TblPegawai', 'url'=>array('create')),
	array('label'=>'Update TblPegawai', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Delete TblPegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPegawai', 'url'=>array('admin')),
);
?>

<h1>View TblPegawai #<?php echo $model->nip; ?></h1>

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
