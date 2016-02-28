<?php
  require ("includes/databaseconnect.php");
  if(session_destroy()) // Destroying All Sessions
  {
    header("location: index.php"); // Redirect to homepage
  }
?>
