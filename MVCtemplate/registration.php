<?php

$view = new stdClass();
$view->pageTitle = 'Registration';
require_once('Models/Registration.php');


if(isset($_POST['email'])){

    $registration = new Registration;
    $validator = $registration->validate($_POST);

    if ($validator !== true) {
        $view->error = $validator;
    }

}


require_once('Views/registration.phtml');