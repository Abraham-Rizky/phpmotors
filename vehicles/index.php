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
$dropdown = '<select name="classificationId" id="classificationId">';
$dropdown .= "<option value='' disabled hidden selected>Choose Car Classification</option>";
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
  case 'addclassification':
    include '../view/add-classification.php';
  break;

  case 'addvehicle':
    include '../view/add-vehicle.php';
  break;

  case 'addClassification':
    // Filter and store the data
    $classificationName = filter_input(INPUT_POST, 'classificationName');

    
    // Check for missing data
    if(empty($classificationName)){
      $message = '<p id="warning">Please enter a classification name.</p>';
      include '../view/add-classification.php';
      exit; 
    }
    // Send the data to the model
    $checkClass = checkClassification($classificationName);

    // Check and report the result
    if($checkClass == 1){
      $message = "<p id=\"warning\">Sorry! '$classificationName' classification already exists. Please enter another classification name.</p>";
      include '../view/add-classification.php';
      exit;
    }else{
      $addClass = addClassification($classificationName);
      $checkClass = 0;
      if($addClass == 1){
        header ('Location: /phpmotors/vehicles/');
        exit;
      }else{
        $message = "<p id=\"warning\">Sorry the registration failed. Please try again.</p>";
        include '../view/add-classification.php';
        exit;
      }

    }
  break;

  case 'addVehicle':

      // Filter and store the data
      // $classificationId = 3;
      $invMake = filter_input(INPUT_POST, 'invMake');
      $invModel = filter_input(INPUT_POST, 'invModel');
      $invDescription = filter_input(INPUT_POST, 'invDescription');
      $invImage = filter_input(INPUT_POST, 'invImage');
      $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
      $invPrice = filter_input(INPUT_POST, 'invPrice');
      $invStock = filter_input(INPUT_POST, 'invStock');
      $invColor = filter_input(INPUT_POST, 'invColor');
      $classificationId = filter_input(INPUT_POST, 'classificationId');

      // Check for missing data
      if(empty($invMake) || empty($invModel) || empty($invDescription)  || empty($invImage) || empty($invThumbnail) || empty($invStock) || empty($invPrice) || empty($invColor)){
        $message = '<p id="warning">Please provide information for all empty form fields.</p>';
        include '../view/add-vehicle.php';
        exit; 
      }
      // Send the data to the model
      $addCar = addCar($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

      // Check and report the result
      if($addCar === 1){
        $message = "<p>The $invMake $invModel was added successfully!</p>";
        // header ('Location: /phpmotors/vehicles/?action=addvehicle');
        include '../view/add-vehicle.php';
        exit;
      } else {
        $message = '<p id="warning">Sorry the insertion is failed. Please try again.</p>';
        include '../view/add-vehicle.php';
        exit;
      }  
  break;

  default:
    include '../view/vehicle-management.php';
  break;
 }
?>