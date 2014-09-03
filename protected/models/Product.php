<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $product_id
 * @property string $product_name
 * @property string $short_parameters
 * @property double $price
 * @property integer $stock_amount
 * @property string $color
 * @property string $short_description
 * @property string $description
 * @property integer $category_id
 * @property double $discount
 * @property string $product_image
 * @property string $created_date
 * @property string $updated_date
 * @property integer $product_state
 * @property integer $like
 * @property integer $dislike
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock_amount, category_id, product_state, like, dislike', 'numerical', 'integerOnly'=>true),
			array('price, discount', 'numerical'),
			array('product_name, short_parameters, color, short_description, product_image', 'length', 'max'=>255),
			array('description, created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, product_name, short_parameters, price, stock_amount, color, short_description, description, category_id, discount, product_image, created_date, updated_date, product_state, like, dislike', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'product_name' => 'Product Name',
			'short_parameters' => 'Short Parameters',
			'price' => 'Price',
			'stock_amount' => 'Stock Amount',
			'color' => 'Color',
			'short_description' => 'Short Description',
			'description' => 'Description',
			'category_id' => 'Category',
			'discount' => 'Discount',
			'product_image' => 'Product Image',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
			'product_state' => 'Product State',
			'like' => 'Like',
			'dislike' => 'Dislike',
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

		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('short_parameters',$this->short_parameters,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('stock_amount',$this->stock_amount);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('product_image',$this->product_image,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('product_state',$this->product_state);
		$criteria->compare('like',$this->like);
		$criteria->compare('dislike',$this->dislike);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function scopes()
  {
    return array(
      'published'=>array(
      	'condition'=>'stock_amount > 1',
      	'condition'=>'product_state = 1',
    ),
    'recently'=>array(
        'limit'=>3,
      ),
    );
  }
}
