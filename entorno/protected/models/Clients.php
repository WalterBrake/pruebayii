<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $idclients
 * @property string $paternal_surname
 * @property string $maternal_surname
 * @property integer $sex
 * @property string $rfc
 * @property string $address
 */
class Clients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paternal_surname, maternal_surname, sex, rfc', 'required'),
			array('sex', 'numerical', 'integerOnly'=>true),
			array('paternal_surname, maternal_surname', 'length', 'max'=>50),
			array('rfc', 'length', 'max'=>45),
			array('address', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idclients, paternal_surname, maternal_surname, sex, rfc, address', 'safe', 'on'=>'search'),
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
			'idclients' => 'Idclients',
			'paternal_surname' => 'Paternal Surname',
			'maternal_surname' => 'Maternal Surname',
			'sex' => 'Sex',
			'rfc' => 'Rfc',
			'address' => 'Address',
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

		$criteria->compare('idclients',$this->idclients);
		$criteria->compare('paternal_surname',$this->paternal_surname,true);
		$criteria->compare('maternal_surname',$this->maternal_surname,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
