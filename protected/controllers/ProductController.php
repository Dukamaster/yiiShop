<?php

class ProductController extends Controller
{
	public function actionSearch()
	{
		$model = new Product('search');
		$model->unsetAttributes(); 
		if(isset($_POST['Product'])) {
			$model->attributes = $_POST['Product'];
			if ($model->category_id == 1) {
				unset($model->category_id);
			}
		}
		if(isset($_GET['cat'])) {
			$model->category_id = $_GET['cat'];
			if ($model->category_id == 1) {
				unset($model->category_id);
			}
		}
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