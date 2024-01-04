<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    public function all_tasks() {
        $this->render('all_tasks');
    }
}