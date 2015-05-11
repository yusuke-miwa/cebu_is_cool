<?php
class TopsController extends AppController {
  public $uses = array('Post', 'Favorite');

   public function index () {
	$this->set('posts',$this->Post->find('all'));
	$this->set('favorites', $this->Favorite->find('all'));
   }
}
?>
