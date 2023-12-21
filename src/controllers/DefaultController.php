<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    public function login() {
        $this->render('login');
    }

    public function main_page() {
        $this->render('main_page');
    }

    public function all_tasks() {
        $this->render('all_tasks');
    }

    public function register() {
        $this->render('register');
    }
}