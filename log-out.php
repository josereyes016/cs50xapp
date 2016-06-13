<?php
  require ("includes/databaseconnect.php");
  require('includes/user.php');

  if(session_destroy()) // Destroying All Sessions
  {
    $_SESSION['id'] = '';
    // $_COOKIE['user'] = '';
    header("location: index.php"); // Redirect to homepage
  }
?>
