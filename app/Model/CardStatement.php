<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 5:16 PM
 */
class CardStatement extends AppModel
{
    public $validate = array(
        'date' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false
            )
        ),
        'sellerno' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false
            )
        ),
        'product' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false
            )
        ),
        'price' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'allowEmpty' => false
            )
        ),
        'number' => array(
            'required' => array(
                'rule' => "notEmpty",
                'allowEmpty' => false
            )
        ),
        'uid' => array(
            'required' => array(
                'rule' => "notEmpty",
                'allowEmpty' => false
            )
        ),
        'id' => array(
            'required' => array(
                'rule' => "notEmpty",
                'allowEmpty' => false
            )
        )
    );

}
