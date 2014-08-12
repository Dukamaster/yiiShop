	<div class="span9">
		<?php
			/* @var $this UserController */

			$this->breadcrumbs=array(
				'User'=>array('/user'),
				'Register',
			);
		?>
    <ul class="breadcrumb">
		<li><a href="index.html"><?php echo $this->id ?></a> <span class="divider">/</span></li>
		<li class="active"><?php echo $this->action->id ?></li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	
	<!-- <div class="alert alert-info fade in"> -->
		<!-- <button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>  -->
	<!-- <form class="form-horizontal" > -->
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'regisForm',
		'enableAjaxValidation'=>false,
		'htmlOptions' => array(
			'class' => 'form-horizontal'
		),
	)); ?>
		<h4>Your Account information</h4>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="text" id="input_email" placeholder="Email"> -->
		  <?php echo $form->emailField($model,'email',array('placeholder'=>'Email', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="password" id="inputPassword1" placeholder="Password"> -->
		  <?php echo $form->passwordField($model,'password',array('placeholder'=>'Password', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <?php echo $form->textField(UserDetail::model(),'dob',array('placeholder'=>'Date of birth', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
		</div>
	  </div>

	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>	

		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label">Title <sup>*</sup></label>
			<div class="controls">
			<select class="span1" name="days">
				<option value="">-</option>
				<option value="1">Mr.</option>
				<option value="2">Mrs</option>
				<option value="3">Miss</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			   <?php echo $form->textField(UserDetail::model(),'first_name',array('placeholder'=>'First Name', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <?php echo $form->textField(UserDetail::model(),'last_name',array('placeholder'=>'Last Name', 
			    			'autofocus'=>'autofocus','required'=>'required'));?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="company">Company</label>
			<div class="controls">
			   <?php echo $form->textField(UserDetail::model(),'company',array('placeholder'=>'Company', 
			    			'autofocus'=>'autofocus'));?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <?php echo $form->textField(UserDetail::model(),'address',array('placeholder'=>'Address', 
	    			'autofocus'=>'autofocus','required'=>'required'));?>
	    			<span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="address2">Address (Line 2)<sup>*</sup></label>
			<div class="controls">
			  <?php echo $form->textField(UserDetail::model(),'address2',array('placeholder'=>'Address Line 2', 
	    			'autofocus'=>'autofocus','required'=>'required'));?>
			  <span>Apartment, suite, unit, building, floor, etc.</span>
			</div>
		</div>
		<!-- <div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" placeholder="city"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state">State<sup>*</sup></label>
			<div class="controls">
			  <select id="state" >
				<option value="">-</option>
				<option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">District of Columbia</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Hawaii</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">North Carolina</option><option value="34">North Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Puerto Rico</option><option value="39">Rhode Island</option><option value="40">South Carolina</option><option value="41">South Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">US Virgin Islands</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="postcode" placeholder="Zip / Postal Code"/> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<select id="country" >
				<option value="">-</option>
				<option value="1">Country</option>
			</select>
			</div>
		</div> -->	
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Additional information</label>
			<div class="controls">
			  <!-- <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Additional information</textarea> -->
			  <?php echo $form->textArea(UserDetail::model(),'additional_information',array('placeholder'=>'Additional information', 
	    			'autofocus'=>'autofocus'));?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="phone">Home phone <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text"  name="phone" id="phone" placeholder="phone"/>  -->
			  <?php echo $form->textField(UserDetail::model(),'home_phone',array('placeholder'=>'Home phone', 
	    			'autofocus'=>'autofocus','required'=>'required'));?>
	    	<span>You must register at least one phone number</span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <!-- <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/>  -->
		   <?php echo $form->textField(UserDetail::model(),'home_phone',array('placeholder'=>'Mobile phone', 
    			'autofocus'=>'autofocus'));?>
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<!-- <input type="hidden" name="email_create" value="1"> -->
				<!-- <input type="hidden" name="is_new_customer" value="1"> -->
				<!-- <input class="btn btn-large btn-success" type="submit" value="Register" /> -->
				<?php echo CHtml::submitButton('Register', array('class' => 'btn btn-large btn-success')); ?>
			</div>
		</div>		
	<?php $this->endWidget();?>
</div>
