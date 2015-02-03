<?php

/**
 * This is the model class for table "tb_users".
 *
 * The followings are the available columns in table 'tb_users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $level
 */
class TbUsers extends CActiveRecord
{
	//digunakan untuk memproses data setelah di validasi
	protected function afterValidate() {
	     parent::afterValidate();
	            
	     //melakukan enkripsi pada passwod yang di input
	     $this->password = $this->encrypt($this->password);
	}
	        
	//membuat sebuah fungsi untuk mengenkripsi data
	public function encrypt($value){
	     return md5($value);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, first_name, last_name, password, level', 'required'),
			array('level', 'numerical', 'integerOnly'=>true),
			array('username, first_name, last_name, password', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, level', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'level' => 'Level',
			'first_name' => 'First Name',
			'last_name' => 'Last Name'
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('first_name',$this->first_name);
		$criteria->compare('last_name',$this->last_name);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
