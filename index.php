<?php
  require ("includes/databaseconnect.php");

  if (!empty($_SESSION['email']) ) {
    require 'logged-in.php';
  }
?>
