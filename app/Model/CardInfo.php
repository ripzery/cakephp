<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 4:58 PM
 */
App::uses('AppModel', 'Model');
class CardInfo extends AppModel
{
    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required',
                'allowEmpty' => false
            )
        ),
        'number' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required',
                'allowEmpty' => false
            )
        ),
        'issuer' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A issuer is required',
                'allowEmpty' => false
            )
        ),
        'exp' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A exp is required',
                'allowEmpty' => false
            )
        ),
        'limit' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A limit is required',
                'allowEmpty' => false
            )
        ),
        'currency' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A currency is required',
                'allowEmpty' => false
            )
        ),
        'uid' => array(
            'valid' => array(
                'rule' => array('notEmpty'),
                'message' => 'A uid is required',
                'allowEmpty' => false
            )
        )
    );

}