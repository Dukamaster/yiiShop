<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="<?php echo $this->getData()->facebook; ?>"><img width="60" height="60" src="<?php echo Yii::app()->request->baseUrl; ?>/public/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="<?php echo $this->getData()->twitter; ?>"><img width="60" height="60" src="<?php echo Yii::app()->request->baseUrl; ?>/public/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="<?php echo $this->getData()->youtube; ?>"><img width="60" height="60" src="<?php echo Yii::app()->request->baseUrl; ?>/public/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; <?php echo $this->getData()->footer; ?></p>
	</div><!-- Container End -->
</div>