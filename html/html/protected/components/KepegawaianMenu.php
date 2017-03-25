<?php
Yii::import('zii.widgets.CPortlet');

class KepegawaianMenu extends CPortlet{

	public $title = 'Kepegawaian';

	protected function renderContent(){
		$this->render('KepegawaianMenu');
		}
	}

?>