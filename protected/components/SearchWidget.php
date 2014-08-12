<?php 

class SearchWidget extends CWidget {
		public $categories;
    public function init(){
    	$this->categories = Category::model()->findAll(array('order' => 'category_id'));       
      parent::init();
    }
    public function getData(){
        
    }
    public function run(){
      $this->render('searchWidget', array('categories' => $this->categories));
    }
}

?>