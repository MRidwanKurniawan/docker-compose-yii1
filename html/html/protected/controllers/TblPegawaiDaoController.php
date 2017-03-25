<?php

class TblPegawaiDaoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TblPegawaiDao;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TblPegawaiDao']))
		{
			$model->attributes=$_POST['TblPegawaiDao'];
			$nip  = $_POST['TblPegawaiDao']['nip'];
			$nama = $_POST['TblPegawaiDao']['nama'];
			$alamat = $_POST['TblPegawaiDao']['alamat'];
			$tanggal_lahir = $_POST['TblPegawaiDao']['tanggal_lahir'];
			$agama = $_POST['TblPegawaiDao']['agama'];
			$sql = "Insert into tbl_pegawai  values(:nip,:nama,:alamat,:tanggal_lahir,:agama)";
			
			$cmd = Yii::app()->db->createCommand($sql);
			$cmd->bindParam(":nip", $nip, PDO::PARAM_INT);
			$cmd->bindParam(":nama", $nama, PDO::PARAM_STR);
			$cmd->bindParam(":alamat", $alamat, PDO::PARAM_STR);
			$cmd->bindParam(":tanggal_lahir", $tanggal_lahir, PDO::PARAM_STR);
			$cmd->bindParam(":agama", $agama, PDO::PARAM_STR);	
						
			try {
				$cmd->execute();
				$this->redirect(array('admin'));
				}catch(Exception $e)
				{ 
				Yii::app()->user->setFlash('ada kesalahan',"ada kesalahan : "."{$e->getMessage()}");
			}
		}

		$this->render('create',array('model'=>$model,));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TblPegawaiDao']))
		{
			$model->attributes=$_POST['TblPegawaiDao'];
			$nip  = $_POST['TblPegawaiDao']['nip'];
			$nama = $_POST['TblPegawaiDao']['nama'];
			$alamat = $_POST['TblPegawaiDao']['alamat'];
			$tanggal_lahir = $_POST['TblPegawaiDao']['tanggal_lahir'];
			$agama = $_POST['TblPegawaiDao']['agama'];
			$sql = "update tbl_pegawai set nama=:nama, alamat=:alamat, 
					tanggal_lahir=:tanggal_lahir,agama=:agama where nip=:nip";
			
			$cmd = Yii::app()->db->createCommand($sql);
			$cmd->bindParam(":nip", $nip, PDO::PARAM_INT);
			$cmd->bindParam(":nama", $nama, PDO::PARAM_STR);
			$cmd->bindParam(":alamat", $alamat, PDO::PARAM_STR);
			$cmd->bindParam(":tanggal_lahir", $tanggal_lahir, PDO::PARAM_STR);
			$cmd->bindParam(":agama", $agama, PDO::PARAM_STR);
		try {
				$cmd->execute();
				$this->redirect(array('admin'));
				}catch(Exception $e)
				{ 
				Yii::app()->user->setFlash('ada kesalahan',"ada kesalahan : "."{$e->getMessage()}");
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
		$sql = "delete from tbl_pegawai where nip=:nip";
		$cmd = Yii::app()->db->createCommand($sql);
		$cmd->bindParam(":nip", $id, PDO::PARAM_INT);
		$cmd->execute();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TblPegawaiDao');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TblPegawaiDao('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TblPegawaiDao']))
			$model->attributes=$_GET['TblPegawaiDao'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TblPegawaiDao the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TblPegawaiDao::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TblPegawaiDao $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tbl-pegawai-dao-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
