<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 11:14 PM
 */

class NewsController extends AppController{

    var $name = "News";

    function index(){
        App::uses("Xml",'Utility');
        try{
            $this->rss_item = Xml::toArray(Xml::build('http://news.google.com/news?pz=1&ned=us&hl=en&output=rss'));
            $this->set('data',$this->rss_item['rss']['channel']['item']);

        }catch (XmlException $e){
            throw new InternalErrorException();
        }
    }
}