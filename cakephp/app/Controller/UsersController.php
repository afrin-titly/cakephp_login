<?php
class UsersController extends AppController{
  public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('logout');
}


  public function login(){
    if ($this->request->is('user')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  public function index() {
        $this->set('users', $this->User->find('all'));
    }
}
