<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 5:33 PM
 */
//App:uses('AppModel','Model');
class PersonInfo extends AppModel
{
//    public $name = "PersonInfo";
    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'An id is required',
                'allowEmpty' => false
            )
        ),
        'firstname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A firstname is required',
                'allowEmpty' => false
            )
        ),
        'lastname' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A lastname is required',
                'allowEmpty' => false
            )
        ),
        'city' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A city is required',
                'allowEmpty' => false
            )
        ),
        'country' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A country is required',
                'allowEmpty' => false
            )
        ),
        'telephone' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A telephone is required',
                'allowEmpty' => false
            )
        ),
        'email' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'An email is required',
                'allowEmpty' => false
            )
        )
    );

}