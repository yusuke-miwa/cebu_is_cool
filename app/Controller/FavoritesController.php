<?php

class FavoritesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
	$foods = $this->Favorite->find('all', array('conditions' => array('category_id' => 1)));
	$this->set('foods', $foods);
        $this->set('spots', $this->Favorite->find('all', array('conditions' => array('category_id' => 2))));
	$this->set('activities', $this->Favorite->find('all', array('conditions' => array('category_id' => 3))));
    	debug($foods);
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $favorite = $this->Favorite->findById($id);
        if (!$favorite) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('favorite', $favorite);
    }

   public function add() {
        if ($this->request->is('post')) {
            $this->Favorite->create();
            if ($this->Favorite->save($this->request->data)) {
                $this->Session->setFlash(__('Your favorite has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
        $categories = $this->Favorite->Category->find('list');
	$this->set(compact('categories'));
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $favorite = $this->Favorite->findById($id);
    if (!$favorite) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Favorite->id = $id;
        if ($this->Favorite->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $favorite;
    }
}

    public function category_show($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid category'));
        }

        $category_show = $this->Favorite->find('all', array('conditions' => array('category_id' => $id)));
        if (!$category_show) {
            throw new NotFoundException(__('Invalid category'));
        }
        $this->set('category_shows', $category_show);
	debug($category_show);
    }


} 
