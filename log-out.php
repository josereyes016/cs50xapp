<?php
  require ("includes/databaseconnect.php");
  if(session_destroy()) // Destroying All Sessions
  {
    $_SESSION['id'] = '';
    header("location: index.php"); // Redirect to homepage
  }
?>
