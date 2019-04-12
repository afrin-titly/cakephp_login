<?php

class LoginController extends AppController{
  public function index(){

  }

  public function checkLogin(){
    if($this->request->data){
      $storecode = $this->request->data("storecode");
      $password = $this->request->data("password");

    }
  }

  public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('logout');
}


  public function login(){
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }
}
