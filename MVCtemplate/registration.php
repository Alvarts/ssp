<?php

$view = new stdClass();
$view->pageTitle = 'Registration';
require_once('Models/Registration.php');

if(isset($_POST['submit'])){
    $registration = new Registration($_POST['username'], $_POST['password'], $_POST['password2']
    ,$_POST['email'], $_POST['number']);

     $passwordError = $registration->checkPassword();
     $emailError = $registration->checkEmail();


    $view->error = $passwordError." ". $emailError;
}


require_once('Views/registration.phtml');