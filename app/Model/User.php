<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/3/15 AD
 * Time: 12:42 AM
 */
// app/Model/Users.php

class User extends AppModel
{
    public $validate = array(
        'id' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true; }

}