<?php 

class LeftmenuWidget extends CWidget {
	public $categories;
  public function init(){
    $this->categories = Category::model()->parent()->findAll();
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