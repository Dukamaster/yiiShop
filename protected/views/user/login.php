 <?php $form=$this->beginWidget('CActiveForm', array(
 	'id'=>'LoginForm',
 	// 'action' => Yii::app()->request->baseUrl.'/ủ/login',
 	'enableClientValidation'=>true,
 	'clientOptions'=>array(
 		'validateOnSubmit'=>true,
 		'validateOnType'=>false
  	),
 	'htmlOptions'=>array(
 		'class'=>'form-horizontal loginFrm',
 	)
 )); ?>
  <div class="control-group">								
		<?php echo $form->emailField($model,'email',array('placeholder'=>'Email', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
  </div>
  <div class="control-group">
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
  </div>
  <div class="control-group">
		<label class="checkbox">
			<input type="checkbox"> Remember me
		</label>
  </div>
<!-- <button type="submit" class="btn btn-success">Sign in</button> -->
<?php echo CHtml::submitButton('Sign in', array('class'=>'btn btn-success')); ?>
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<?php $this->endWidget();?>