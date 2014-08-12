<?php

class ProductController extends Controller
{
	public function actionSearch()
	{
		$model = new Product('search');
		$model->unsetAttributes(); 
		// if($_POST) {
      // $search_value = $_POST['search_value'];
      // $Criteria = new CDbCriteria(array('condition' => "product_name like '%$search_value%'"));
      // $products = Product::model()->findAll($Criteria);
      // $this->getController()->render('result',array('products'=>$products));           
		 // clear any default values
		if(isset($_POST['Product']))
		$model->attributes = $_POST['Product'];
  	// }
		$this->render('search', array('model' => $model));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}