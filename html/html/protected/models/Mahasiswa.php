<?php

/**
 * This is the model class for table "mahasiswa".
 *
 * The followings are the available columns in table 'mahasiswa':
 * @property integer $nim
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $password
 * @property string $foto
 * @property string $email
 */
class Mahasiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mahasiswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, alamat', 'required'),
			array('nama, tempat_lahir', 'length', 'max'=>40),
			array('jenis_kelamin, agama', 'length', 'max'=>1),
			array('alamat', 'length', 'max'=>50),
			array('password, email', 'length', 'max'=>35),
			array('foto', 'file','types'=>'jpg,gif,png','allowEmpty'=>'true','on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nim, nama, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, alamat, password, foto, email', 'safe', 'on'=>'search'),
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
			'nim' => 'Nim',
			'nama' => 'Nama',
			'jenis_kelamin' => 'Jenis Kelamin',
			'agama' => 'Agama',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'password' => 'Password',
			'foto' => 'Foto',
			'email' => 'Email',
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

		$criteria->compare('nim',$this->nim);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mahasiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getAgama($idAgama){
		if ($idAgama==1) return "Islam";
		else if ($idAgama==2) return "Protestan";
		else if ($idAgama==3) return "Katholik";
		else if ($idAgama==4) return "Hindu";
		else if ($idAgama==5) return "Budha";
		else return "Lainnya";
	}

}
