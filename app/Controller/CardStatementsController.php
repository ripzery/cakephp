<?php

/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 6:07 PM
 */
//First Load the Utility Class
App::uses('Xml', 'Utility');

class CardStatementsController extends AppController
{
//
    public $components = array('Paginator', 'RequestHandler');
//
    public $paginate = array(
        'order' => array(
            'CardStatement.id' => 'asc'
        ),
        'limit' => 1

    );

    public $helpers = array('Html', 'Form', 'Js' => array("Jquery"));

//    public function isAuthorized($user) {
//        // All registered users can add posts
//        return parent::isAuthorized($user);
//    }

    public function index()
    {
//        debug($this->Auth->isAuthorized());
        if ($this->Auth->isAuthorized()) {
            $this->Paginator->settings = $this->paginate;
//        debug($this->paginate('CardStatement'));
            $this->set('cardstatements', $this->paginate('CardStatement'));
            $this->set('cardcounts', count($this->CardStatement->find('all')));
        } else {
            $this->paginate['conditions'] = array('CardStatement.uid' => $this->Auth->user('id'));
            $this->Paginator->settings = $this->paginate;
            $this->set('cardstatements', $this->paginate('CardStatement'));
            $this->set('cardcounts', count($this->CardStatement->find('all', array(
                'conditions' => array('CardStatement.uid' => $this->Auth->user('id'))
            ))));
        }


    }


    public function transactions()
    {

        $xmlObject = $this->genxml($this->Auth->user('id'));
        $xmlArray = Xml::toArray(Xml::build($xmlObject));
        $this->set('xmlObject', $xmlArray);
    }


    public function save()
    {
        $this->autoRender = false;
//        debug("kuy");
//        debug($this->request->data('sellerno'));
        $this->CardStatement->id = $this->request->data('id');

        $this->CardStatement->save($this->request->data);
        echo "Record has been save successfully.";
    }

    public function isAdmin()
    {
        $this->autoRender = false;
        if ($this->Auth->isAuthorized()) {
            return true;
        } else {
            return false;
        }
    }

    public function genxml($uid = null)
    {

        if ($uid == null) {
            $uid = $this->request->query['uid'];
        }

        if ($uid == 1) {
            $cards = $this->CardStatement->find('all');
        } else {
            $cards = $this->CardStatement->find('all', array(
                'conditions' => array('CardStatement.uid' => $uid)
            ));
        }


        $dom = new DOMDocument();

        $response = $dom->createElement('response');
        $dom->appendChild($response);

        $transactions = $dom->createElement('transactions');
        $response->appendChild($transactions);

//        debug($cards['0']['CardStatement']);
        foreach ($cards as $card) {

//            debug($card['CardStatement']['id']);
            $transno = $dom->createElement('transno');
            $transnoText = $dom->createTextNode($card['CardStatement']['id']);
            $transno->appendChild($transnoText);

            $uid = $dom->createElement('uid');
            $uidText = $dom->createTextNode($card['CardStatement']['uid']);
            $uid->appendChild($uidText);

            $date = $dom->createElement('date');
            $dateText = $dom->createTextNode($card['CardStatement']['date']);
            $date->appendChild($dateText);

            $sellerno = $dom->createElement('sellerno');
            $sellernoText = $dom->createTextNode($card['CardStatement']['sellerno']);
            $sellerno->appendChild($sellernoText);

            $product = $dom->createElement('product');
            $productText = $dom->createTextNode($card['CardStatement']['product']);
            $product->appendChild($productText);

            $price = $dom->createElement('price');
            $priceText = $dom->createTextNode($card['CardStatement']['price']);
            $price->appendChild($priceText);

            $number = $dom->createElement('number');
            $numberText = $dom->createTextNode($card['CardStatement']['number']);
            $number->appendChild($numberText);

            $transaction = $dom->createElement("transaction");
            $transaction->appendChild($transno);
            $transaction->appendChild($uid);
            $transaction->appendChild($date);
            $transaction->appendChild($sellerno);
            $transaction->appendChild($product);
            $transaction->appendChild($price);
            $transaction->appendChild($number);

            $transactions->appendChild($transaction);
        }

        $xmlString = $dom->saveXML();
//        $dom->save("../../xml/transactions.xml");

        $xmlString = ltrim(substr($xmlString, strpos($xmlString, '?' . '>') + 2)); // removing <?xml
        $dom->formatOutput = true;
//        echo $xmlString;
        $this->set('xmlString', $xmlString);
        return ($xmlString);
    }
}