<?php

class RssController extends AppController

{
    public function index()
    {
//        $this->layout= 'home';
    }

    public function googlenews(){
        $this->layout= '';

        App::uses('Xml', 'Utility');
        try {
            $this->rss_item = Xml::toArray(Xml::build('http://news.google.com/news?pz=1&ned=us&hl=en&output=rss'));

            // Here will throw a Exception

            $this->set('data', $this->rss_item['rss']['channel']['item']);
        }

        catch(XmlException $e) {
            throw new InternalErrorException();
        }
    }

    public function sanooknews(){
        $this->layout= '';

        App::uses('Xml', 'Utility');
        try {
            $this->rss_item = Xml::toArray(Xml::build('http://rssfeeds.sanook.com/rss/feeds/sanook/hitech.computer.index.xml'));

            // Here will throw a Exception

            $this->set('data', $this->rss_item['rss']['channel']['item']);
        }

        catch(XmlException $e) {
            throw new InternalErrorException();
        }
    }

    public function blognonenews(){
        $this->layout= '';

        App::uses('Xml', 'Utility');
        try {
            $this->rss_item = Xml::toArray(Xml::build('https://www.blognone.com/atom.xml'));

            // Here will throw a Exception

            $this->set('data', $this->rss_item['rss']['channel']['item']);
        }

        catch(XmlException $e) {
            throw new InternalErrorException();
        }
    }

}

?>