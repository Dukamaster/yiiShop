<?php 

class FooterWidget extends CWidget {
	public $site;
  public function init(){
  	$this->site = Site::model()->find();
    parent::init();
  }
  public function getData(){
    return $this->site;
  }
  public function run(){
    $this->render('footerWidget');
  }
}

?>