<?php
// if (!(session_status() == PHP_SESSION_ACTIVE)) {
//   header("location: index.php"); // Redirect to homepage
// }
require('includes/databaseconnect.php');
require('includes/user.php');

if($_SESSION['id'] == ''){
    header("location:index.php");
}

// Set dynamic page title
$title = 'Grades';

$formError = '';
$formSuccess = '';
$userID = $user['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && $_POST['submit'] == 'addStudent'){
  if ($_POST['email'] == ''){
    $formError = "Please enter a student's e-mail address.";
  }
  else {
    $studentEmail_cleaned = trim(strtolower($_POST['email']));
    $studentQuery = mysqli_query($db, "SELECT *
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
        mysqli_query($db, "UPDATE `users`
                              SET `tf`='$userID'
                            WHERE `email`='$studentEmail_cleaned'");
        $formError = '';
        $formSuccess = "Student was successfully added.";
      }
    }
  }
}

// Render templates
require('templates/head.php');
require('templates/navbar.php');
require('templates/grades-page.php'); // Content container template
require('templates/navigation.php');
require('templates/footer.php');
?>
