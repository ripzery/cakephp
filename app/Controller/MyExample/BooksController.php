<?php

/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/2/15 AD
 * Time: 5:15 PM
 */
class BooksController extends AppController
{
    var $name = 'Books';
    var $helpers = array('Html');

    function index()
    {
        $this->set('books', $this->Book->find('all'));
    }

    public function view($id = null)
    {

        if (!$id) {

            throw new NotFoundException(__('Invalid Book'));
        }

        $book = $this->Book->findById($id);

        if (!$book) {

            throw new NotFoundException(__('Invalid Book'));

        }

        $this->set('book', $book);

    }
}