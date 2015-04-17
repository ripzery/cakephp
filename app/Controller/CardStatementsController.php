<?php

/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 6:07 PM
 */
class CardStatementsController extends AppController
{
//
    public $components = array('Paginator', 'RequestHandler');
//
    public $paginate = array(
        'order' => array(
            'CardStatement.id' => 'asc'
        ),
        'limit' => 1

    );



    public $helpers = array('Html', 'Form', 'Js' => array("Jquery"));

//    public function isAuthorized($user) {
//        // All registered users can add posts
//        return parent::isAuthorized($user);
//    }

    public function index()
    {

        $isAdmin = $this->Auth->isAuthorized();
        if($isAdmin)
            $this->set('isadmin',1);
        else
            $this->set('isadmin',0);

//        debug($this->Auth->isAuthorized());
        if($this->Auth->isAuthorized()){
            $this->Paginator->settings = $this->paginate;
//        debug($this->paginate('CardStatement'));
            $this->set('cardstatements', $this->paginate('CardStatement'));
            $this->set('cardcounts', count($this->CardStatement->find('all')));
        }else{
            $this->paginate['conditions'] = array('CardStatement.uid' => $this->Auth->user('id'));
            $this->Paginator->settings = $this->paginate;
            $this->set('cardstatements', $this->paginate('CardStatement'));
            $this->set('cardcounts', count($this->CardStatement->find('all',array(
                'conditions' => array('CardStatement.uid' => $this->Auth->user('id'))
            ))));
        }



    }

    public function save()
    {
        $this->autoRender = false;
        $this->CardStatement->id = $this->request->data('id');
        debug($this->request->data);
        $this->CardStatement->save($this->request->data);
        echo "Record has been save successfully.";
    }

    public function isAdmin(){
        $this->autoRender = false;
        if($this->Auth->isAuthorized()){
            return true;
        }else{
            return false;
        }
    }
}