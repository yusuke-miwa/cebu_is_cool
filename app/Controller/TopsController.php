<?php
class TopsController extends AppController {
  public $uses = array('Post', 'Favorite');

   public function index () {
	$this->set('posts',$this->Post->find('all'));
	$this->set('favorites', $this->Favorite->find('all'));
	$foods = $this->Favorite->find('all', array('conditions' => array('category_id' => 1)));
	$this->set('foods', $foods);
        $this->set('spots', $this->Favorite->find('all', array('conditions' => array('category_id' => 2))));
	$this->set('activities', $this->Favorite->find('all', array('conditions' => array('category_id' => 3))));
   }
}

?>
