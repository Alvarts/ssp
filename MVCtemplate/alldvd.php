<?php

require_once 'Models/Dvd.php';
$dvd = new Dvd;

$view = new stdClass();
$view->pageTitle = 'DVDs';

$view->dvds = $dvd->fetchAll();

require_once('Views/alldvd.phtml');


