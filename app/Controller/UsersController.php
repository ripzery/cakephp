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

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('logout');
    }

    public function login() {
        $this->layout = 'login';

        if($this->Auth->user('id') != null){
            $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }else
                $this->Session->setFlash(__('Invalid username or password, try again'),
                    'default',
                    array(),
                    'auth');
        }

    }

    public function register()
    {
        $this->layout = 'login';
//        debug($this->data);
        if (!empty($this->data))
        {
            debug($this->data['User']['password']);
            if ($this->Auth->password($this->data['User']['password']) == $this->Auth->password($this->data['User']['password_confirm']))
            {
                $this->User->create();
                if($this->User->save($this->data))
                {
                    $this->Auth->login($this->data);
                    $this->redirect(array('homes' => 'index'));
                }
            }
        }
    }

    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

    public function logout()
    {
        debug($this->redirect($this->Auth->logout()));
        return $this->redirect($this->Auth->logout());
    }
}