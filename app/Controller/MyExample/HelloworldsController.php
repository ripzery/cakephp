<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 4:47 PM
 */

class HelloworldsController extends Controller{
    var $name = 'Hellos';
    var $uses = array();

    function index(){
        $this->set('hello','Hellos World');
    }
}