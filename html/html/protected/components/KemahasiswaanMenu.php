<?php
Yii::import('zii.widgets.CPortlet');

class KemahasiswaanMenu extends CPortlet{

	public $title = 'Kemahasiswaan';

	protected function renderContent(){
		$this->render('kemahasiswaanMenu');
		}
	}

?>