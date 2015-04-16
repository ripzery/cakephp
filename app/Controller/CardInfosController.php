<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 5:47 PM
 */

class CardInfosController extends AppController{

    public function isAuthorized($user) {
        // All registered users can add posts
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $this->set('cardinfos', $this->CardInfo->find('all'));
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $cardinfo = $this->CardInfo->findById($id);
        if (!$cardinfo) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('cardinfo', $cardinfo);
    }

}