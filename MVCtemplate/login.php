<?php

$view = new stdClass();
$view->pageTitle = 'Login';
require_once('Views/login.phtml');

if(isset($_POST['submit'])) {

    $login = new Login;
    $validator = $login>checkCredentials($_POST);

    if ($validator !== true) {
        $view->error = $validator;
    }
    }

require_once('Views/login.phtml');
