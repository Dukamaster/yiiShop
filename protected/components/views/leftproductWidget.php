<?php foreach ($this->getData() as $product):?>
<div class="thumbnail">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/storage/product_images/<?php echo $product->product_image ?>"
	 title="Bootshop New Kindel" alt="Bootshop Kindel">
	<div class="caption">
	  <h5><?php echo CHtml::encode($product->product_name); ?></h5>
	    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
	</div>
</div><br/>
<?php endforeach; ?>