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

    public function isAuthorized($user)
    {
        // All registered users can add posts
        return parent::isAuthorized($user);
    }


    public function index()
    {
        $this->set('personinfos', $this->PersonInfo->find('all'));
        $this->set('numberpersons', count($this->PersonInfo->find('all')));
    }

    public function view($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid personinfo'));
        }
        $personinfo = $this->PersonInfo->findById($id);
        if (!$personinfo) {
            throw new NotFoundException(__('Invalid personinfo'));
        }
        $this->set('personinfo', $personinfo);
    }
}