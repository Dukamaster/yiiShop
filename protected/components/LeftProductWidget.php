<?php 

class LeftProductWidget extends CWidget {
	public $products;
  public function init(){
  	$this->products = Product::model()->published()->recently()->findAll();
    parent::init();
  }
  public function getData(){
    return $this->products;
  }
  public function run(){
    $this->render('leftproductWidget');
  }
}

?>