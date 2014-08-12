<?php

class UserController extends Controller {
	// Login function
	public function actionLogin() {
		$model=new LoginForm;
		if(isset($_POST['LoginForm'])) {
			$model->attributes=$_POST['LoginForm'];
			$errors=CActiveForm::validate($model);
			if($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->homeUrl);
			}
			else if($errors !== '[]') {
				echo 'invalid_username_password';
			}				
		}
		$this->renderPartial('login', array('model'=>$model));
	}

	// Register function
	public function actionRegister() {
		$model = new User();
		$modelDetail = new UserDetail();

		if (isset($_POST['User'], $_POST['UserDetail'])) {
			$model->attributes = $_POST['User'];
			$modelDetail->attributes = $_POST['UserDetail'];

			$model->salt = Salt::generate();
			$model->password = md5($model->password.$model->salt.$model->email);
			$model->role = 1;
			$model->status = 1;
			if($model->save())
			{
				$modelDetail->user_id = $model->user_id;
				$modelDetail->email = $model->email;
				$modelDetail->status = 1;
				$modelDetail->create_date = new CDbExpression("NOW()");
				$modelDetail->updated_date = new CDbExpression("NOW()");
				$modelDetail->save();
				die('success');
			}
		}
		$this->render('register', array('model'=>$model));
	}

	public function actionLogout() {
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}