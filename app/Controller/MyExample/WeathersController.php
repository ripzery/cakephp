<?php

/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 11:37 PM
 */
class WeathersController extends AppController
{
    var $name = "Weathers";

    function index(){
        $jsonUrl = "http://query.yahooapis.com/v1/public/yql?q=select%20item%20from%20weather.forecast%20where%20woeid%3D2502265&format=json";
        $json = file_get_contents($jsonUrl,0,null,null);
        $this->json_item = json_decode($json);
        $this->set('jdata',$this->json_item);
    }
}