<?php 

class LeftmenuWidget extends CWidget {
	public $categories;
	// public $categories2;
  public function init(){
  	$this->categories = Category::model()->parent()->findAll();
  	// $this->categories2 = Category::model()->child(1)->findAll();
  	// var_dump($this->categories2);
    parent::init();
  }
  public function getData(){
    return $this->categories;
  }
  public function run(){
    $this->render('leftmenuWidget');
  }
}

?>