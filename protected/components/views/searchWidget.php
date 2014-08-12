<!-- <form class="form-inline navbar-search" method="post" action="products.html" >
	<input id="srchFld" class="srchTxt" type="text" />
  <select class="srchTxt">
		<option>All</option>
		<option>CLOTHES </option>
		<option>FOOD AND BEVERAGES </option>
		<option>HEALTH & BEAUTY </option>
		<option>SPORTS & LEISURE </option>
		<option>BOOKS & ENTERTAINMENTS </option>
	</select> 
  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
</form>
 -->
<?php $form = $this->beginWidget('CActiveForm', array(
	 	'id'=>'SearchForm',
	 	'action' => Yii::app()->createAbsoluteUrl('product/search'),
	 	'enableClientValidation'=>true,
	 	'clientOptions'=>array(
	 		'validateOnSubmit'=>true,
	 		'validateOnType'=>false
	  	),
	 	'htmlOptions'=>array(
	 		'class'=>'form-inline navbar-search',
	 	)
 	));
 	echo $form->textField(Product::model(),'product_name',array('placeholder'=>'Product name',
		'class'=>'srchTxt'));
	// echo CHtml::dropDownList('category', '', $categories, array('class'=>'srchTxt'));
	echo $form->dropDownList(Product::model(),'category_id',
			CHtml::listData($categories, 'category_id', 'name'), array('class'=>'srchTxt'));

	echo CHtml::submitButton('Go', array('class'=>'btn btn-primary', 'id'=>'submitButton'));

$this->endWidget();?>