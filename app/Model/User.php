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
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'sha1'
                )
            )
        )
    );

}