<?php

class Post extends AppModel
{

    public $validate = array(

        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

    public function index()
    {
        $this->set('posts', $this->Post->fint('all'));
    }

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
    }
}
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 11:44 PM
 */