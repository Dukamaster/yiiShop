<?php

/**
 * This is the model class for table "user_detail".
 *
 * The followings are the available columns in table 'user_detail':
 * @property string $user_detail_id
 * @property string $user_id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $dob
 * @property string $company
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $country
 * @property string $additional_information
 * @property integer $home_phone
 * @property integer $mobile_phone
 * @property string $create_date
 * @property string $updated_date
 * @property integer $status
 */
class UserDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('home_phone, mobile_phone, status', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>10),
			array('title, first_name, last_name, email, company, address, address2, city, state, postal_code, country', 'length', 'max'=>255),
			array('dob, additional_information, create_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_detail_id, user_id, title, first_name, last_name, email, dob, company, address, address2, city, state, postal_code, country, additional_information, home_phone, mobile_phone, create_date, updated_date, status', 'safe', 'on'=>'search'),
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
			'user_detail_id' => 'User Detail',
			'user_id' => 'User',
			'title' => 'Title',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'dob' => 'Dob',
			'company' => 'Company',
			'address' => 'Address',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'postal_code' => 'Postal Code',
			'country' => 'Country',
			'additional_information' => 'Additional Information',
			'home_phone' => 'Home Phone',
			'mobile_phone' => 'Mobile Phone',
			'create_date' => 'Create Date',
			'updated_date' => 'Updated Date',
			'status' => 'Status',
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

		$criteria->compare('user_detail_id',$this->user_detail_id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('additional_information',$this->additional_information,true);
		$criteria->compare('home_phone',$this->home_phone);
		$criteria->compare('mobile_phone',$this->mobile_phone);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
