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
  
  function add_tf_to_student( $database, $email, $user)
  {
      if ($email == ''){
        $formError = "Please enter a student's e-mail address.";
      }
      else {
        $studentEmail_cleaned = trim(strtolower($email));
        $studentQuery = mysqli_query($database, "SELECT *
                                      FROM `users`
                                     WHERE `email` = '$studentEmail_cleaned'");
        $studentRows = mysqli_num_rows($studentQuery);
        if ($studentRows != 1) {
          $formError = "Invalid e-mail address.";
        } else {
          $studentInfo = mysqli_fetch_assoc($studentQuery);
          if ($studentInfo['is_admin'] == 1){
            $formError = "User is an administrator.";
          } else {
            mysqli_query($database, "UPDATE `users`
                                  SET `tf`='$user'
                                WHERE `email`='$studentEmail_cleaned'");
            $formError = '';
            $formSuccess = "Student was successfully added.";
            header("location: grades.php");
          }
        }
      }
    }
  }
?>
