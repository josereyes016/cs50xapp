<?php

require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Settings';

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/settings-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');

?>
