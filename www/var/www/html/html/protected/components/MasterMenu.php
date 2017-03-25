<?php
Yii::import('zii.widgets.CPortlet');

class MasterMenu extends CPortlet{

	public $title = 'Master Data';

	protected function renderContent(){
		$this->render('masterMenu');
		}
	}

?>