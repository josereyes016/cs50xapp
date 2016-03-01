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
    // else render form
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
