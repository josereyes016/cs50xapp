<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Attendance';

// Render templates
require ("includes/databaseconnect.php");
require('templates/head.php');
require('templates/navbar.php');
require('templates/attendance-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
