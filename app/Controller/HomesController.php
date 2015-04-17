<?php
/**
 * Created by PhpStorm.
 * Users: visit
 * Date: 4/10/15 AD
 * Time: 9:47 PM
 */
class HomesController extends AppController{


    public function index(){

    }

    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }
}