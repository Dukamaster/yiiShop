<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/base.css" rel="stylesheet" media="screen"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico/apple-touch-icon-57-precomposed.png">
	
		<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<?php if(Yii::app()->user->isGuest):?>
	  <div class="span6">Welcome!<strong> Guest</strong></div>
	<?php else: ?> 
		<div class="span6">Welcome!<strong> <?php echo Yii::app()->user->getState('name'); ?></strong></div>
	<?php endif; ?>
	
	<div class="span6">
	<div class="pull-right">
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>

<!-- narbar -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo Yii::app()->getBaseUrl(true);?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/public/images/logo.png" alt="Bootsshop"/></a>
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
    </form> -->
    <?php $this->widget('searchWidget'); ?>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	<?php if(Yii::app()->user->isGuest):?>
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<?php else: ?> 
		<a href="<?php echo Yii::app()->createAbsoluteUrl('user/logout'); ?>" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
	<?php endif; ?>
	<?php $this->widget('LoginWidget'); ?>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- end navbar -->
<div id="mainBody">
	<div class="container">
	<div class="row">
		<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/public/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
		<?php $this->widget('LeftmenuWidget'); ?>
		<br/>
		<?php $this->widget('LeftProductWidget'); ?>
	</div>
<!-- Sidebar end=============================================== -->
		<?php echo $content; ?>
	</div>
	</div>
</div>
<!-- Footer ================================================================== -->
<?php $this->widget('FooterWidget'); ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/google-code-prettify/prettify.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/bootshop.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/jquery.lightbox-0.5.js"></script>
