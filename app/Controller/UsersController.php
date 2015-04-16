<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 11:47 PM
 */

class UsersController extends AppController{

    public function index() {

    }


    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            debug($this->Auth->isAuthorized());
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}