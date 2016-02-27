<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Team50";

  // Create connection
  $db = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Storing Session
  session_start();
?>
