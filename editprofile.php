<?php

require('includes/databaseconnect.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Profile Edit';

// Render templates
require('templates/head.php');
require('templates/navbar.php');
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  // Query profile table for user info
  

  // Render form with default values from db
  require('templates/editprofile-form.php'); // Content container template
}
elseif ($_SERVER["REQUEST_METHOD" == "POST"]) {
  // Check for changes
  // Update database
  // Redirect to Profile.php
}
require('templates/navigation.php');
require('templates/footer.php');

?>
