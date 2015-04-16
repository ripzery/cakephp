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
//            debug($this->request->data);
            if ($this->Auth->login($this->request->data)) {
                return $this->redirect($this->Auth->redirectUrl());
            }else
                $this->Session->setFlash(__('Invalid username or password, try again'),
                    'default',
                    array(),
                    'auth');
        }
    }



    public function logout()
    {
//        $this->render();
        return $this->redirect($this->Auth->logout());
    }
}