<?php
Yii::import('zii.widgets.CPortlet');

class AdminMenu extends CPortlet{

	public $title = 'Admin';

	protected function renderContent(){
		$this->render('AdminMenu');
		}
	}

?>