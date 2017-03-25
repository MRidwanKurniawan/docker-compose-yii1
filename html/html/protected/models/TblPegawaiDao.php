<?php

/**
 * This is the model class for table "tbl_pegawai".
 *
 * The followings are the available columns in table 'tbl_pegawai':
 * @property integer $nip
 * @property string $nama
 * @property string $alamat
 * @property string $tanggal_lahir
 * @property string $agama
 */
class TblPegawaiDao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nama, alamat, tanggal_lahir, agama', 'required'),
			array('nip', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			array('agama', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nip, nama, alamat, tanggal_lahir, agama', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nip' => 'Nip',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nip',$this->nip);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblPegawaiDao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
