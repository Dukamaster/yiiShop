<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Forget password?</li>
    </ul>
	<h3> FORGET YOUR PASSWORD?</h3>	
	<hr class="soft"/>
	<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="alert alert-info fade in">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php echo Yii::app()->user->getFlash('success'); ?>
		</div>
	<?php elseif(Yii::app()->user->hasFlash('error')): ?>
		<div class="alert alert-block alert-error fade in">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<?php echo Yii::app()->user->getFlash('error'); ?>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="span9" style="min-height:900px">
			<div class="well">
			<h5>Reset your password</h5><br/>
			Please enter the email address for your account. A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.<br/><br/><br/>
			 <?php $form=$this->beginWidget('CActiveForm', array(
				 	'id'=>'ForgetPassForm',
				 )); ?>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">E-mail address</label>
				<div class="controls">
				  <?php echo CHtml::EmailField('inputEmail', '',
						array('id'=>'inputEmail', 'class'=>'span3', 'placeholder'=>'Email','required'=>'required')); ?>
				</div>
			  </div>
			  <div class="controls">
			  <?php echo CHtml::submitButton('Submit', array('class'=>'btn block')); ?>
			  </div>
			<?php $this->endWidget();?>
		</div>
		</div>
	</div>	
	
</div>