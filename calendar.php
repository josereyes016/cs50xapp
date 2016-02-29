<?php
if (session_status() == PHP_SESSION_NONE) {
  header("location: index.php"); // Redirect to homepage
}

// Set dynamic page title
$title = 'Dashboard';

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/calendar-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
