<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }

// Set dynamic page title
$title = 'Calendar';

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/calendar-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
