<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
	/*
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Manage Data',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		*/
		
		//$level = User::model()->findByPk(Yii::app()->user->id)->level;
	if (Yii::app()->user->name=='Admin'){
		$this->widget('AdminMenu');
	}
	else if(Yii::app()->user->name=='five'){
	$this->widget('MasterMenu');
	$this->widget('KemahasiswaanMenu');
	}
	
?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>