<?php
$view = new stdClass();
$view->pageTitle = 'DVD';

require_once('Views/selectedDvd.phtml');

$title = $_GET['title'];
$cost = $_GET['cost'];

$view->item = $title . $cost;

require_once('Views/selectedDvd.phtml');