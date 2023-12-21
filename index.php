<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('main_page', 'DefaultController');
Routing::get('all_tasks', 'DefaultController');
Routing::run($path);