<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 5:12 PM
 */

class Book extends AppModel{
    var $name = 'Books';
    var $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'author' => array(
            'rule' => 'notEmpty'
        )
    );
}