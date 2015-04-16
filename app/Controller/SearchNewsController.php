<?php

/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 11:47 PM
 */
class SearchNewsController extends AppController
{
    var $uses = false;

    public function index()
    {
        App::uses("Xml",'Utility');
        try{
            $this->rss_item = Xml::toArray(Xml::build('http://news.google.com/news?pz=1&ned=us&hl=en&output=rss'));
            $this->set('data',$this->rss_item['rss']['channel']['item']);

        }catch (XmlException $e){
            throw new InternalErrorException();
        }
//        echo $this->request
//        App:uses("Xml","Utility");

    }

}