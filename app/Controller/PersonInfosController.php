<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 9:05 PM
 */

class PersonInfosController extends AppController
{
//    public $name = "PersonInfo";


    public function isAuthorized($user) {
        // All registered users can add posts
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $user_id = $this->Auth->user('id');

        if($this->Auth->isAuthorized()){
            $this->set('personinfos', $this->PersonInfo->find('all'));
            $this->set('numberpersons', count($this->PersonInfo->find('all')));
        }else{
//            debug($this->PersonInfo->find('all',array(
//                'conditions' => array('PersonInfo.id' => $user_id)
//            )));
            $this->set('personinfos', $this->PersonInfo->find('all',array(
                'conditions' => array('PersonInfo.id' => $user_id)
            )));
            $this->set('numberpersons', count($this->PersonInfo->findById($user_id)));
        }

    }

}