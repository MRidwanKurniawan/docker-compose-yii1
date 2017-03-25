<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->nim=>array('view','id'=>$model->nim),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'View Mahasiswa', 'url'=>array('view', 'id'=>$model->nim)),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update Mahasiswa <?php echo $model->nim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>