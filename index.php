<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::get('main_page', 'TaskController');
Routing::get('all_tasks', 'DefaultController');
Routing::post('addTask', 'TaskController');
Routing::run($path);