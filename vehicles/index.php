<?php
// Vehicles controller

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the accounts model
require_once '../model/vehicles-model.php';

// Get the array of classifications
$classifications = getClassifications();

// var_dump($classifications);
// 	exit;

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';


//Build a dropdown menu
$dropdown = '<select>';
foreach ($classifications as $classification) {
$dropdown .= "<option value='".urlencode($classification['classificationId'])."'>$classification[classificationName]</option>";
}
$dropdown .= '</select>';

// echo $navList;
// exit;

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
}

// Switch case to control vehicle management
switch ($action){
  case 'addVehicle':
    include '../view/add-vehicle.php';
  break;

  case 'addClassification':
    include '../view/add-classification.php';
  break;

  default:
    include '../view/vehicle-management.php';
  break;
 }
?>