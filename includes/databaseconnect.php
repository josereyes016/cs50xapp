<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cs50xapp";

  include("lib/password.php");

  // Create connection
  $db = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // // Storing Session
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
