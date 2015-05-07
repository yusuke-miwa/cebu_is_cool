<?php
public function add() {
    if ($this->request->is('post')) {
        $this->request->data['Post']['user_id'] = $this->Auth->user('id'); //Added this line
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            $this->redirect(array('action' => 'index'));
        }
    }
}

public function isAuthorized($user) {
    // $BEPO?:Q%f!<%6!<$OEj9F$G$-$k(B
    if ($this->action === 'add') {
        return true;
    }

    // $BEj9F$N%*!<%J!<$OJT=8$d:o=|$,$G$-$k(B
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}

